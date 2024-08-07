const tlRecordGifts = document.getElementById('tlRecordGifts')

Chart.register(ChartDataLabels)
Chart.defaults.backgroundColor = window.getComputedStyle(document.querySelector('body')).getPropertyValue('--bs-body-bg')
Chart.defaults.borderColor = window.getComputedStyle(document.querySelector('body')).getPropertyValue('--bs-border-color')
Chart.defaults.color = window.getComputedStyle(document.querySelector('body')).getPropertyValue('--bs-body-color')
Chart.defaults.font.family = window.getComputedStyle(document.querySelector('body')).getPropertyValue('--bs-body-font-monospace')
Chart.defaults.font.lineHeight = 1
Chart.defaults.font.size = 10
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
					[`${new Date().getFullYear() - 1}-01-01 00:00:00`, `${new Date().getFullYear() - 1}-12-31 23:59:59`],
					[`${new Date().getFullYear()}-01-01 10:00:00`, `${new Date().getFullYear()}-01-13 18:00:00`],
					[`${new Date().getFullYear()}-01-14 08:00:00`, `${new Date().getFullYear()}-02-07 23:59:59`],
					[`${new Date().getFullYear()}-02-08 08:00:00`, `${new Date().getFullYear()}-02-28 20:00:00`],
				],
				label: `Aktiviti ${new Date().getFullYear() - 1}`,
			},
			{
				data: [
					[`${new Date().getFullYear()}-01-01 00:00:00`, `${new Date().getFullYear()}-12-31 23:59:59`],
					[`${new Date().getFullYear() + 1}-01-01 10:00:00`, `${new Date().getFullYear() + 1}-01-13 18:00:00`],
					[`${new Date().getFullYear() + 1}-01-14 08:00:00`, `${new Date().getFullYear() + 1}-02-07 23:59:59`],
					[`${new Date().getFullYear() + 1}-02-08 08:00:00`, `${new Date().getFullYear() + 1}-02-28 20:00:00`],
				],
				label: `Aktiviti ${new Date().getFullYear()}`,
			},
			{
				data: [
					[`${new Date().getFullYear() + 1}-01-01 00:00:00`, `${new Date().getFullYear() + 1}-12-31 23:59:59`],
					[`${new Date().getFullYear() + 2}-01-01 10:00:00`, `${new Date().getFullYear() + 2}-01-13 18:00:00`],
					[`${new Date().getFullYear() + 2}-01-14 08:00:00`, `${new Date().getFullYear() + 2}-02-07 23:59:59`],
					[`${new Date().getFullYear() + 2}-02-08 08:00:00`, `${new Date().getFullYear() + 2}-02-28 20:00:00`],
				],
				label: `Aktiviti ${new Date().getFullYear() + 1}`,
			},
		],
		labels: ['Rekod Aktiviti', 'Kiraan Rekod', 'Respon Penerima', 'Penghantaran Saguhati'],
	},
	options: {
		indexAxis: 'y',
		barPercentage: 1.5,
		plugins: {
			subtitle: { text: lastMod('/assets/js/policies.js') },
			title: { text: 'Garis Masa Saguhati Tahunan' },
			tooltip: { enabled: false },
			datalabels: {
				clip: true,
				formatter: function (value, context) {
					return (
						context.chart.data.labels[context.dataIndex] +
						'\ndari ' +
						new Intl.DateTimeFormat('ms-MY', {
							formatMatcher: 'basic',
							day: 'numeric',
							month: 'short',
							year: 'numeric',
							hour: 'numeric',
							minute: '2-digit',
							timeZoneName: 'short',
							hour12: false,
						}).format(new Date(value[0])) +
						'\nhingga ' +
						new Intl.DateTimeFormat('ms-MY', {
							formatMatcher: 'basic',
							day: 'numeric',
							month: 'short',
							year: 'numeric',
							hour: 'numeric',
							minute: '2-digit',
							timeZoneName: 'short',
							hour12: false,
						}).format(new Date(value[1]))
					)
				},
				textAlign: 'center',
			},
		},
		scales: {
			x: {
				min: `${new Date(new Date().setDate(new Date().getDate() - 90)).toISOString()}`,
				max: `${new Date(new Date().setDate(new Date().getDate() + 180)).toISOString()}`,
				type: 'time',
				time: { unit: 'month' },
				grid: { display: false, drawTicks: false },
			},
			y: { display: false },
		},
		watermark: wmOptions,
	},
	type: 'bar',
})
