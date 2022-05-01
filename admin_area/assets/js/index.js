let liceu = parseInt(document.getElementById("studii_liceu_postl").innerText);
let master = parseInt(document.getElementById("maistri").innerText);
let superior = parseInt(document.getElementById("superioare").innerText);

let st_t = (liceu + master + superior)/100;
let special = 0;
let salariat = 0;
let part = 0;
let tempor = 0;
let contract = 0;


$(function () {
	let paza = parseInt(document.getElementById("paza").innerText);
	let muncitori = parseInt(document.getElementById("munc").innerText);
	let po = parseInt(document.getElementById("po").innerText);

	let cat_p = (paza+muncitori+po)/100;
	"use strict";
	var options = {


		series: [muncitori/cat_p, po/cat_p, paza/cat_p],
		chart: {
			height: 240,
			type: 'donut',
		},
		legend: {
			position: 'bottom',
			show: false,
		},
		plotOptions: {
			pie: {
				// customScale: 0.8,
				donut: {
					size: '80%'
				}
			}
		},
		colors: ["#f02769", "#053afb", "#ffc107",],
		dataLabels: {
			enabled: false
		},
		labels: ['Muncitori', 'Pesronal operativ', 'Paza'],
		responsive: [{
			breakpoint: 480,
			options: {
				chart: {
					height: 200
				},
				legend: {
					position: 'bottom'
				}
			}
		}]
	};
	var chart = new ApexCharts(document.querySelector("#chart5"), options);
	chart.render();
	// chart 5

	var options = {
		series: [liceu/st_t, superior/st_t, master/st_t],
		chart: {
			height: 240,
			type: 'pie',
		},

		plotOptions: {
			pie: {
				customScale: 0.9,
				donut: {
					size: '90%'
				}
			}
		},
		colors: ["#198fed", "#053afb", "#ffc107"],
		dataLabels: {
			enabled: true
		},
		labels: ['Liceu', 'Superioare', 'Maisti'],
		responsive: [{
			breakpoint: 480,
			options: {
				chart: {
					height: 360
				},
				legend: {
					position: 'bottom'
				}
			}
		}]
	};
	var chart = new ApexCharts(document.querySelector("#chart6"), options);
	chart.render();

});
