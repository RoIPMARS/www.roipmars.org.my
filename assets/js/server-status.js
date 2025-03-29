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
	modalBody.innerHTML = `<object class='w-75' data='${statPage}?style=${statBadgeStyle}&label=${encodeURI('RoIPMARS Network Services')}'></object>
	<table class='table teble-bordered table-sm text-center align-middle my-3 caption-top'>
		<caption class='text-center'>
			updated at ${timeLoad.toLocaleString()}<br>status page <a href='https://uptime.roipmars.org.my' target='_blank' rel='external'>here</a> or <a href='https://stats.uptimerobot.com/sGCs3PL2ck' target='_blank' rel='external'>here</a>, developed &amp; maintained by <a href='https://github.com/hafiziruslan' target='_blank'>HafiziRuslan</a>
		</caption>
		<tbody>
			<tr>
				<th>TeamSpeak<br>&lpar;roipmars.org.my&rpar;</th>
				<td>
					<object data='https://img.shields.io/uptimerobot/status/m797274379-ad99474be781bbd643736b5b?logo=teamspeak&logoColor=%234B69B6&logoSize=auto&style=${statBadgeStyle}'></object>
					<object data='https://img.shields.io/uptimerobot/ratio/m797274379-ad99474be781bbd643736b5b?logo=teamspeak&logoColor=%234B69B6&logoSize=auto&style=${statBadgeStyle}'></object>
				</td>
			</tr>
			<tr>
				<th>EchoLink<br>&lpar;9W4GPA-R&rpar;</th>
				<td>
					<object data='${statBadge}/29/status?style=${statBadgeStyle}'></object>
					<object data='${statBadge}/29/uptime?style=${statBadgeStyle}'></object>
				</td>
			</tr>
			<tr>
				<th>HAM Stream<br>&lpar;hamlive.mhrtech.my&rpar;</th>
				<td>
					<object data='${statBadge}/28/status?style=${statBadgeStyle}'></object>
					<object data='${statBadge}/28/uptime?style=${statBadgeStyle}'></object>
				</td>
			</tr>
			<tr>
				<th>CB Stream<br>&lpar;cblive.mhrtech.my&rpar;</th>
				<td>
					<object data='${statBadge}/27/status?style=${statBadgeStyle}'></object>
					<object data='${statBadge}/27/uptime?style=${statBadgeStyle}'></object>
				</td>
			</tr>
			<tr>
				<th>API Backend</th>
				<td>
					<object data='https://img.shields.io/uptimerobot/status/m797274388-69d01ce15b251c0c9b36f44c?logo=n8n&logoColor=%23EA4B71&logoSize=auto&style=${statBadgeStyle}'></object>
					<object data='https://img.shields.io/uptimerobot/ratio/m797274388-69d01ce15b251c0c9b36f44c?logo=n8n&logoColor=%23EA4B71&logoSize=auto&style=${statBadgeStyle}'></object>
				</td>
			</tr>
			<tr>
				<th>WhatsApp API</th>
				<td>
					<object data='https://img.shields.io/uptimerobot/status/m797274399-ff16ad26a5001e020ca51c19?logo=whatsapp&logoColor=%2325D366&logoSize=auto&style=${statBadgeStyle}'></object>
					<object data='https://img.shields.io/uptimerobot/ratio/m797274399-ff16ad26a5001e020ca51c19?logo=whatsapp&logoColor=%2325D366&logoSize=auto&style=${statBadgeStyle}'></object>
				</td>
			</tr>
			<tr>
				<th>RustDesk<br><object data='https://img.shields.io/github/actions/workflow/status/roipmars/rustdesk/flutter-nightly.yml?style=flat-square&logo=githubactions&logoColor=%232088FF&logoSize=auto&label=nightly%20build&link=https%3A%2F%2Fgithub.com%2Froipmars%2Frustdesk%2Freleases%2Ftag%2Fnightly'></object></th>
				<td>
					<object data='https://img.shields.io/uptimerobot/status/m797274376-afa50e6e53e8bbb4b6d6234c?logo=rustdesk&logoColor=%23024EFF&logoSize=auto&style=${statBadgeStyle}'></object>
					<object data='https://img.shields.io/uptimerobot/ratio/m797274376-afa50e6e53e8bbb4b6d6234c?logo=rustdesk&logoColor=%23024EFF&logoSize=auto&style=${statBadgeStyle}'></object>
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
