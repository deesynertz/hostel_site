/*
 *  Document   : be_pages_dashboard.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Dashboard Page
 */

class pageDashboard {
    /*
     * Chart.js, for more examples you can check out http://www.chartjs.org/docs
     *
     */
    static initCharts() {
        // Set Global Chart.js configuration
        Chart.defaults.global.defaultFontColor              = '#495057';
        Chart.defaults.scale.gridLines.color                = 'transparent';
        Chart.defaults.scale.gridLines.zeroLineColor        = 'transparent';
        Chart.defaults.scale.ticks.beginAtZero              = true;
        Chart.defaults.global.elements.line.borderWidth     = 0;
        Chart.defaults.global.elements.point.radius         = 0;
        Chart.defaults.global.elements.point.hoverRadius    = 0;
        Chart.defaults.global.tooltips.cornerRadius         = 3;
        Chart.defaults.global.legend.labels.boxWidth        = 12;

        // Get Chart Containers
        let chartEarningsCon = jQuery('.js-chartjs-earnings');

        // Set Chart and Chart Data variables
        let chartEarnings, chartEarningsData;

        // Chart Data
        chartEarningsData = {
            labels: ['MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT', 'SUN'],
            datasets: [
                {
                    label: 'This Week',
                    fill: true,
                    backgroundColor: 'rgba(81, 121, 214, .75)',
                    borderColor: 'transparent',
                    pointBackgroundColor: 'rgba(81, 121, 214, 1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(81, 121, 214, 1)',
                    data: [716, 628, 1056, 560, 956, 890, 790]
                },
                {
                    label: 'Last Week',
                    fill: true,
                    backgroundColor: 'rgba(81, 121, 214, .25)',
                    borderColor: 'transparent',
                    pointBackgroundColor: 'rgba(81, 121, 214, 1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(81, 121, 214, 1)',
                    data: [1160, 923, 1052, 1300, 880, 926, 963]
                }
            ]
        };

        // Init Chart
        if (chartEarningsCon.length) {
            chartEarnings  = new Chart(chartEarningsCon, {
                type: 'bar',
                data: chartEarningsData,
                options: {
                    tooltips: {
                        intersect: false,
                        callbacks: {
                            label: function(tooltipItems, data) {
                                return data.datasets[tooltipItems.datasetIndex].label + ': $' + tooltipItems.yLabel;
                            }
                        }
                    }
                }
            });
        }
    }

    /*
     * Init functionality
     *
     */
    static init() {
        this.initCharts();
    }
}

// Initialize when page loads
jQuery(() => { pageDashboard.init(); });
