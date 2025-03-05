$(document).ready(function () {
	let tsServer = document.getElementById('collapserms3')
	tsServer.addEventListener('show.bs.collapse', (event) => {
		let target = event.target
		target.lastElementChild.lastElementChild.innerHTML = `<hr><h4 class='m-0'>Senarai pelayan TeamSpeak lain;</h4><table class='table table-sm table-striped align-middle text-nowrap caption-top' id='tsServerList'><caption></caption></table>`
		$('#tsServerList').DataTable({
			ajax: {
				url: '/assets/json/server-tracking.json',
				dataSrc: 'tsServers',
			},
			columns: [
				{ title: 'Nama', name: 'server-name', data: 'nickname' },
				{ title: 'Keserasian<br>Versi', name: 'client-version', data: 'clientVer' },
				{ title: 'Operasi', name: 'server-online', data: 'online' },
				{ title: 'Senarai<br>Hitam', name: 'server-blacklist', data: 'blacklist' },
				{ title: 'Alamat', name: 'server-address', data: 'address' },
			],
			columnDefs: [
				{ className: 'text-center align-middle', targets: '_all' },
				{ orderable: false, targets: [2, 3, 4] },
				{
					render: function (data, type, row) {
						if (data === true) {
							return `<i class='bi-check-circle-fill text-success-emphasis'></i>`
						} else {
							return `<i class='bi-x-circle-fill text-danger'></i>`
						}
					},
					targets: 2,
				},
				{
					render: function (data, type, row) {
						if (data === true) {
							return `<i class='bi-shield-fill-x text-danger'></i>`
						} else {
							return `<i class='bi-shield-fill-check text-success-emphasis'></i>`
						}
					},
					targets: 3,
				},
				{
					render: function (data, type, row) {
						return `<a class='text-reset text-decoration-none font-monospace' href='ts3server://${data}&addbookmark=${encodeURI(row.nickname)}' target='_blank' rel='noopener noreferrer'>${data}</a>`
					},
					targets: 4,
				},
			],
			caption: `Kemaskini: ${lastMod('/assets/json/ts-server-track.json')}`,
			processing: true,
			searching: false,
			info: false,
			ordering: true,
			order: [
				[1, 'asc'],
				[0, 'asc'],
			],
			paging: true,
			lengthChange: false,
			pageLength: 5,
			pagingTag: 'button',
			pagingType: 'simple',
			processing: true,
		})
	})

	tsServer.addEventListener('hide.bs.collapse', (event) => {
		let target = event.target
		target.lastElementChild.lastElementChild.textContent = ''
	})
})
