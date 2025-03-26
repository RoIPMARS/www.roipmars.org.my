const apiSite = `https://api.roipmars.org.my`
// const apiSiteHealthz = `${apiSite}/healthz`
// $.getJSON(apiSiteHealthz, function (apiHealthz) {
// 	let apiHealthzRes = apiHealthz.status
let hookURL = `${apiSite}/webhook`

let dochamLive = document.getElementById('hamlive')
let dochamLiveAud = document.getElementById('hamlive-audio')
let hamLiveOwnHook = `${hookURL}/hamlive-stat`

let doccbLive = document.getElementById('cblive')
let doccbLiveAud = document.getElementById('cblive-audio')
let cbLiveOwnHook = `${hookURL}/cblive-stat`

// if (apiHealthzRes == 'ok') {
if (dochamLive || dochamLiveAud) {
	setTimeout(() => {
		$.getJSON(hamLiveOwnHook, function (data) {
			let status = data.status
			let listeners = data.listeners
			let descr = data.descr
			let meta = data.meta
			if (status) {
				var stats = `<div class='col-auto'>Status: <span class='text-success-emphasis'><i class='fa-solid fa-volume-high fa-beat-fade'></i> Sedang Beroperasi</span></div>`
			} else {
				var stats = `<div class='col-auto'>Status: <span class='text-danger-emphasis'><i class='fa-solid fa-volume-off fa-fade'></i> Luar Talian</span></div>`
			}
			if (listeners) {
				var lists = `<div class='col-auto'>Pendengar: <span class='text-success-emphasis'>${listeners}</span></div>`
			} else {
				var lists = ''
			}
			if (meta) {
				var metas = `<br><div class='col-12'>EchoLink: <span class='text-success-emphasis'>${meta}</span></div>`
			} else {
				var metas = ''
			}
			dochamLive.innerHTML = `<div class='col-12'><span>${descr}</span></div><div class='row d-flex justify-content-center'>${stats}${lists}${metas}</div>`
		})
		$.getJSON(hamLiveOwnHook, function (data) {
			let status = data.status
			if (status) {
				dochamLiveAud.innerHTML = `<div class='col-12 mt-2'><audio class='rounded-3 w-75 mx-auto' controls preload='none'><source src='https://mhrtech.my:5051/htmlaudioplayerfeed' type='audio/mp3'></source><source src='https://mhrtech.my:5051/feed.m3u' type='audio/mpeg'></source>Pelayar anda tidak menyokong tag audio.</audio></div><span>Siaran mungkin tertunda sehingga 10 minit bergantung kepada <a href='https://speed.roipmars.org.my' target='_blank'>kecekapan jaringan</a>.</span>`
			} else {
				dochamLiveAud.innerHTML = ''
			}
		})
	}, 15000)
}

if (doccbLive || doccbLiveAud) {
	setTimeout(() => {
		$.getJSON(cbLiveOwnHook, function (data) {
			let status = data.status
			let listeners = data.listeners
			let descr = data.descr
			if (status) {
				var stats = `<div class='col-auto'>Status: <span class='text-success-emphasis'><i class='fa-solid fa-volume-high fa-beat-fade'></i> Sedang Beroperasi</span></div>`
			} else {
				var stats = `<div class='col-auto'>Status: <span class='text-danger-emphasis'><i class='fa-solid fa-volume-off fa-fade'></i> Luar Talian</span></div>`
			}
			if (listeners) {
				var lists = `<div class='col-auto'>Pendengar: <span class='text-success-emphasis'>${listeners}</span></div>`
			} else {
				var lists = ''
			}
			doccbLive.innerHTML = `<div class='col-12'><span>${descr}</span></div><div class='row d-flex justify-content-center'>${stats}${lists}</div>`
		})
		$.getJSON(cbLiveOwnHook, function (data) {
			let status = data.status
			if (status) {
				doccbLiveAud.innerHTML = `<div class='col-12 mt-2'><audio class='rounded-3 w-75 mx-auto' controls preload='none'><source src='https://mhrtech.my:5052/htmlaudioplayerfeed' type='audio/mp3'></source><source src='https://mhrtech.my:5052/feed.m3u' type='audio/mpeg'></source>Pelayar anda tidak menyokong tag audio.</audio></div><span>Siaran mungkin tertunda sehingga 10 minit bergantung kepada <a href='https://speed.roipmars.org.my' target='_blank'>kecekapan jaringan</a>.</span>`
			} else {
				doccbLiveAud.innerHTML = ''
			}
		})
	}, 15000)
}
// } else {
// 	let statsOffline = `<div class='col-auto'>Status: <span class='text-danger-emphasis'><i class='fa-solid fa-volume-xmark fa-fade'></i> Tidak Beroperasi Sementara Waktu</span></div>`
// 	dochamLive.innerHTML = `<div class='col-12'><div class='row d-flex justify-content-center'>${statsOffline}}</div>`
// 	doccbLive.innerHTML = `<div class='col-12'><div class='row d-flex justify-content-center'>${statsOffline}</div>`
// }
// })
