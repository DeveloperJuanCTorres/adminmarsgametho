(function($) {
    'use strict';
    $(function() {
        if ($("#ventas-tipo-plan").length) {
            var areaData = {
            labels: ["Suscripción", "Directo", "Libre"],
            datasets: [{
                data: [850, 450, 700],
                backgroundColor: [
                    "#4B49AC","#FFC100", "#248AFD",
                ],
                borderColor: "rgba(0,0,0,0)"
                }
            ]
            };
            var areaOptions = {
            responsive: true,
            maintainAspectRatio: true,
            segmentShowStroke: false,
            cutoutPercentage: 55,
            elements: {
                arc: {
                    borderWidth: 4
                }
            },      
            legend: {
                display: false
            },
            tooltips: {
                enabled: true
            },
            legendCallback: function(chart) { 
                var text = [];
                text.push('<div class="report-chart">');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Suscripción</p></div>');
                text.push('<p class="mb-0">S/. 850</p>');
                text.push('</div>');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Directo</p></div>');
                text.push('<p class="mb-0">S/. 450</p>');
                text.push('</div>');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Libre</p></div>');
                text.push('<p class="mb-0">S/. 700</p>');
                text.push('</div>');
                text.push('</div>');
                return text.join("");
            },
            }
            var northAmericaChartPlugins = {
            beforeDraw: function(chart) {
                var width = chart.chart.width,
                    height = chart.chart.height,
                    ctx = chart.chart.ctx;
            
                ctx.restore();
                var fontSize = 3.125;
                ctx.font = "500 " + fontSize + "em sans-serif";
                ctx.textBaseline = "middle";
                ctx.fillStyle = "#13381B";
            
                var text = "",
                    textX = Math.round((width - ctx.measureText(text).width) / 2),
                    textY = height / 2;
            
                ctx.fillText(text, textX, textY);
                ctx.save();
            }
            }
            var northAmericaChartCanvas = $("#ventas-tipo-plan").get(0).getContext("2d");
            var northAmericaChart = new Chart(northAmericaChartCanvas, {
            type: 'doughnut',
            data: areaData,
            options: areaOptions,
            plugins: northAmericaChartPlugins
            });
            document.getElementById('ventas-tipo-plan-legend').innerHTML = northAmericaChart.generateLegend();
        }
        if ($("#comision").length) {
            var areaData = {
            labels: ["Suscripción", "Directo", "Libre"],
            datasets: [{
                data: [850, 450, 700],
                backgroundColor: [
                    "#4B49AC","#FFC100", "#248AFD",
                ],
                borderColor: "rgba(0,0,0,0)"
                }
            ]
            };
            var areaOptions = {
            responsive: true,
            maintainAspectRatio: true,
            segmentShowStroke: false,
            cutoutPercentage: 55,
            elements: {
                arc: {
                    borderWidth: 4
                }
            },      
            legend: {
                display: false
            },
            tooltips: {
                enabled: true
            },
            legendCallback: function(chart) { 
                var text = [];
                text.push('<div class="report-chart">');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Suscripción</p></div>');
                text.push('<p class="mb-0">S/. 850</p>');
                text.push('</div>');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Directo</p></div>');
                text.push('<p class="mb-0">S/. 450</p>');
                text.push('</div>');
                text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Libre</p></div>');
                text.push('<p class="mb-0">S/. 700</p>');
                text.push('</div>');
                text.push('</div>');
                return text.join("");
            },
            }
            var northAmericaChartPlugins = {
            beforeDraw: function(chart) {
                var width = chart.chart.width,
                    height = chart.chart.height,
                    ctx = chart.chart.ctx;
            
                ctx.restore();
                var fontSize = 3.125;
                ctx.font = "500 " + fontSize + "em sans-serif";
                ctx.textBaseline = "middle";
                ctx.fillStyle = "#13381B";
            
                var text = "",
                    textX = Math.round((width - ctx.measureText(text).width) / 2),
                    textY = height / 2;
            
                ctx.fillText(text, textX, textY);
                ctx.save();
            }
            }
            var northAmericaChartCanvas = $("#comision").get(0).getContext("2d");
            var northAmericaChart = new Chart(northAmericaChartCanvas, {
            type: 'doughnut',
            data: areaData,
            options: areaOptions,
            plugins: northAmericaChartPlugins
            });
            document.getElementById('comision-legend').innerHTML = northAmericaChart.generateLegend();
        }
    });
})(jQuery);