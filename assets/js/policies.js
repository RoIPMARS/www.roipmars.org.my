const tlRecordGifts = document.getElementById('tlRecordGifts')

Chart.register(ChartDeferred)
Chart.defaults.backgroundColor = window.getComputedStyle(document.querySelector('body')).getPropertyValue('--bs-body-bg')
Chart.defaults.borderColor = window.getComputedStyle(document.querySelector('body')).getPropertyValue('--bs-border-color')
Chart.defaults.color = window.getComputedStyle(document.querySelector('body')).getPropertyValue('--bs-body-color')
Chart.defaults.font.family = window.getComputedStyle(document.querySelector('body')).getPropertyValue('--bs-body-font-monospace')
Chart.defaults.font.lineHeight = 1
Chart.defaults.font.size = 10
Chart.defaults.plugins.deferred.delay = 1000
Chart.defaults.plugins.deferred.yOffset = '80%'
Chart.defaults.plugins.legend.position = 'top'
Chart.defaults.plugins.title.display = true
Chart.defaults.plugins.title.font.family = window.getComputedStyle(document.querySelector('body')).getPropertyValue('--bs-body-font-family')
Chart.defaults.plugins.title.font.lineHeight = 1
Chart.defaults.plugins.title.font.size = 18
Chart.defaults.plugins.title.font.weight = 'bold'
Chart.defaults.plugins.title.padding = { top: 0, bottom: 1 }
Chart.defaults.plugins.title.position = 'top'
Chart.defaults.plugins.subtitle.display = true
Chart.defaults.plugins.subtitle.align = 'end'
Chart.defaults.plugins.subtitle.padding = { top: 1, bottom: 0 }
Chart.defaults.plugins.subtitle.position = 'top'
const wmOptions = {
	image: 'https://ik.imagekit.io/mhrtech/roipmars-org-my/media/image/brands/roipmars/brand_oglow_f-50.png',
	opacity: 0.2,
	width: '85%',
	height: '32%',
	alignX: 'middle',
	alignY: 'middle',
	position: 'between',
}

new Chart(tlRecordGifts, {
	data: {
		datasets: [
			{
				data: [
					['2024-01-01 00:00:00', '2024-12-31 23:59:59'],
					['2025-01-01 10:00:00', '2025-01-14 18:00:00'],
					['2025-01-14 18:00:00', '2025-02-07 23:59:59'],
					['2025-02-08 08:00:00', '2025-03-01 00:00:00'],
				],
				label: 'Aktiviti 2024',
			},
		],
		labels: ['Rekod Aktiviti', 'Kiraan Rekod', 'Respon Penerima', 'Penghantaran Saguhati'],
	},
	options: {
		indexAxis: 'y',
		barPercentage: 1,
		plugins: {
			subtitle: { text: lastMod('/assets/js/policies.js') },
			title: { text: 'Garis Masa Saguhati Tahunan' },
		},
		scales: {
			x: {
				min: '2024-01-01 00:00:00',
				type: 'time',
				time: { unit: 'month' },
			},
			y: { grid: { display: false } },
		},
		watermark: wmOptions,
	},
	type: 'bar',
})
