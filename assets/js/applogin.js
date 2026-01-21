var tshamLoginButton = document.getElementById('ts3hamlogin')
tshamLoginButton.onclick = function () {
	var qrz = document.getElementById('callsign').value.toUpperCase()
	var qra = document.getElementById('name').value.toUpperCase()
	var qth = document.getElementById('location').value.toUpperCase()

	if (!qrz || !qra || !qth) {
		return new Error('Sila isi semua ruangan')
	} else {
		ts3hamlogin(qrz, qra, qth)
	}
}
/* var mumbleLoginButton = document.getElementById('mumblelogin')
mumbleLoginButton.onclick = function () {
	var qrz = document.getElementById('callsign').value.toUpperCase()
	var qra = document.getElementById('name').value.toUpperCase()
	var qth = document.getElementById('location').value.toUpperCase()

	if (!qrz || !qra || !qth) {
		return new Error('Sila isi semua ruangan')
	} else {
		mumblelogin(qrz, qra, qth)
	}
} */
/* var teamtalkLoginButton = document.getElementById('teamtalklogin')
teamtalkLoginButton.onclick = function () {
	var qrz = document.getElementById('callsign').value.toUpperCase()
	var qra = document.getElementById('name').value.toUpperCase()
	var qth = document.getElementById('location').value.toUpperCase()

	if (!qrz || !qra || !qth) {
		return new Error('Sila isi semua ruangan')
	} else {
		teamtalklogin(qrz, qra, qth)
	}
} */
var tscbLoginButton = document.getElementById('ts3cblogin')
tscbLoginButton.onclick = function () {
	var qrz = document.getElementById('callsign').value.toUpperCase()
	var qra = document.getElementById('name').value.toUpperCase()
	var qth = document.getElementById('location').value.toUpperCase()

	if (!qrz || !qra || !qth) {
		return new Error('Sila isi semua ruangan')
	} else {
		ts3cblogin(qrz, qra, qth)
	}
}
var tskopdarLoginButton = document.getElementById('ts3kopdarlogin')
tskopdarLoginButton.onclick = function () {
	var qrz = document.getElementById('callsign').value.toUpperCase()
	var qra = document.getElementById('name').value.toUpperCase()
	var qth = document.getElementById('location').value.toUpperCase()

	if (!qrz || !qra || !qth) {
		return new Error('Sila isi semua ruangan')
	} else {
		ts3kopdarlogin(qrz, qra, qth)
	}
}

function ts3hamlogin(qrz, qra, qth) {
	var nickname = qrz + ' ' + qra + ' ' + qth
	location.href = 'ts3server://roipmars.org.my?nickname=' + encodeURIComponent(nickname) + '&cid=31&addbookmark=RoIPMARS%20HAM'
}
function ts3cblogin(qrz, qra, qth) {
	var nickname = qrz + ' ' + qra + ' ' + qth
	location.href = 'ts3server://roipmars.org.my?nickname=' + encodeURIComponent(nickname) + '&cid=61&addbookmark=RoIPMARS%20CB'
}
function ts3kopdarlogin(qrz, qra, qth) {
	var nickname = qrz + ' ' + qra + ' ' + qth
	location.href = 'ts3server://kopdarmobile.id?nickname=' + encodeURIComponent(nickname) + '&cid=390&addbookmark=KOPDARMOBILE'
}
/* function mumblelogin(qrz, qra, qth) {
	var nickname = qrz + ' ' + qra + ' ' + qth
	location.href = 'mumble://' + encodeURIComponent(nickname) + '@roipmars.org.my/root?title=RoIPMARS.org.MY&url=roipmars.org.my'
} */
/* function teamtalklogin(qrz, qra, qth) {
	var nickname = qrz + ' ' + qra + ' ' + qth
	location.href = 'tt://roipmars.org.my?encrypted=0&username=guest&password=guest&channel=%2FLobby%2F&nickname=' + encodeURIComponent(nickname)
} */
