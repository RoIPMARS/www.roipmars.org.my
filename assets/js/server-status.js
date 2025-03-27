const button = document.getElementById('checkserverstatus')
const modal = document.getElementById('serverstats')
const modalTitle = document.getElementById('serverstatus')
const modalBody = modal.querySelector('.modal-body')
const statBadge = 'https://status.mhrtech.my/api/badge'
const statPage = 'https://status.mhrtech.my/api/status-page/roipmars/badge'
const statBadgeStyle = 'for-the-badge'
const timeLoad = new Date()
const now = new Intl.DateTimeFormat('en-MY', {
	formatMatcher: 'basic',
	weekday: 'long',
	day: 'numeric',
	month: 'long',
	year: 'numeric',
	hour: 'numeric',
	minute: '2-digit',
	second: '2-digit',
	fractionalSecondDigits: 3,
	timeZoneName: 'longGeneric',
	hourCycle: 'h24',
	timeZone: UserTZ,
}).format(timeLoad)

modal.addEventListener('show.bs.modal', (event) => {
	const modalShow = event.relatedTarget
	modalTitle.innerText = `RoIPMARS Network Status as of\n${now}`
	modalBody.innerHTML = `<img class='w-75' src='${statPage}?style=${statBadgeStyle}&label=${encodeURI('RoIPMARS Network Services')}' loading='lazy' alt='roipmars-server overall status'>
	<table class='table teble-bordered table-sm text-center align-middle my-3 caption-top'>
		<caption class='text-center'>
			updated at ${timeLoad.toLocaleString()}<br>status page <a href='https://uptime.roipmars.org.my' target='_blank' rel='external'>here</a> or <a href='https://stats.uptimerobot.com/sGCs3PL2ck' target='_blank' rel='external'>here</a>, developed &amp; maintained by <a href='https://github.com/hafiziruslan' target='_blank'>HafiziRuslan</a>
		</caption>
		<tbody>
			<tr>
				<th>TeamSpeak<br>&lpar;roipmars.org.my&rpar;</th>
				<td>
					<img src='${statBadge}/6/status?style=${statBadgeStyle}' class='m-1' loading='lazy' alt='roipmarsorgmy-teamspeak-server status'>
					<img src='${statBadge}/6/uptime?style=${statBadgeStyle}' class='m-1' loading='lazy' alt='roipmarsorgmy-teamspeak-server uptime'>
				</td>
			</tr>
			<tr>
				<th>EchoLink<br>&lpar;9W4GPA-R&rpar;</th>
				<td>
					<img src='${statBadge}/29/status?style=${statBadgeStyle}' class='m-1' loading='lazy' alt='echolink-9w4gpa status'>
					<img src='${statBadge}/29/uptime?style=${statBadgeStyle}' class='m-1' loading='lazy' alt='echolink-9w4gpa uptime'>
				</td>
			</tr>
			<tr>
				<th>HAM Stream<br>&lpar;hamlive.mhrtech.my&rpar;</th>
				<td>
					<img src='${statBadge}/28/status?style=${statBadgeStyle}' class='m-1' loading='lazy' alt='mhrtechmy-ham-stream status'>
					<img src='${statBadge}/28/uptime?style=${statBadgeStyle}' class='m-1' loading='lazy' alt='mhrtechmy-ham-stream uptime'>
				</td>
			</tr>
			<tr>
				<th>CB Stream<br>&lpar;cblive.mhrtech.my&rpar;</th>
				<td>
					<img src='${statBadge}/27/status?style=${statBadgeStyle}' class='m-1' loading='lazy' alt='mhrtechmy-cb-stream status'>
					<img src='${statBadge}/27/uptime?style=${statBadgeStyle}' class='m-1' loading='lazy' alt='mhrtechmy-cb-stream uptime'>
				</td>
			</tr>
			<tr>
				<th>API Backend</th>
				<td>
					<img src='${statBadge}/51/status?style=${statBadgeStyle}' class='m-1' loading='lazy' alt='roipmars-n8n status'>
					<img src='${statBadge}/51/uptime?style=${statBadgeStyle}' class='m-1' loading='lazy' alt='roipmars-n8n uptime'>
				</td>
			</tr>
			<tr>
				<th>WhatsApp API</th>
				<td>
					<img src='${statBadge}/60/status?style=${statBadgeStyle}' class='m-1' loading='lazy' alt='roipmars-wppconnect status'>
					<img src='${statBadge}/60/uptime?style=${statBadgeStyle}' class='m-1' loading='lazy' alt='roipmars-wppconnect uptime'>
				</td>
			</tr>
			<tr>
				<th>RustDesk<br><a href='https://github.com/roipmars/rustdesk/releases/tag/nightly' target='_blank'><img src='https://img.shields.io/github/actions/workflow/status/roipmars/rustdesk/flutter-nightly.yml?branch=master&style=flat-square&logo=githubactions&logoColor=%232088FF&label=nightly%20build' class='m-1' loading='lazy' alt='GitHub Actions Workflow Status'></a></th>
				<td>
					<img src='${statBadge}/7/status?style=${statBadgeStyle}' class='m-1' loading='lazy' alt='roipmars-rustdesk status'>
					<img src='${statBadge}/7/uptime?style=${statBadgeStyle}' class='m-1' loading='lazy' alt='roipmars-rustdesk uptime'>
				</td>
			</tr>
		</tbody>
	</table>`
	function imgReload() {
		let getAllImg = modal.getElementsByTagName('img')
		let tableCaption = modal.querySelector('caption')
		let rand = (Math.random() * 100000).toFixed()
		for (let i = 0; i < getAllImg.length; i++) {
			var imgsrc = getAllImg[i].src
			if (imgsrc.indexOf('&rand') >= 0) {
				var imgwithrand = imgsrc.replace(/&rand=[0-9]+/, '&rand=' + rand)
			} else {
				var imgwithrand = imgsrc + '&rand=' + rand
			}
			getAllImg[i].src = imgwithrand
		}
		tableCaption.innerHTML = `updated at ${new Date().toISOString()} ; full stats page <a href='https://uptime.roipmars.org.my' target='_blank' rel='external'>here</a> or <a href='https://stats.uptimerobot.com/sGCs3PL2ck' target='_blank' rel='external'>here</a>, developed &amp; maintained by <a href='https://github.com/hafiziruslan' target='_blank'>HafiziRuslan</a>`
	}
	setInterval(imgReload, 3 * 60 * 1000)
})

modal.addEventListener('hide.bs.modal', (event) => {
	const modalHide = event.relatedTarget
	modalTitle.textContent = ''
	modalBody.textContent = ''
})
