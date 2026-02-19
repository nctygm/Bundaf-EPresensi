import './bootstrap';
import Chart from 'chart.js/auto';

window.Chart = Chart;

// chart.js

  document.addEventListener("DOMContentLoaded", function () {
        const ctx = document.getElementById('presensiChart');

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Hadir', 'Izin', 'Alpha'],
                datasets: [{
                    data: [40, 50, 30],
                    backgroundColor: [
                        '#22c55e',
                        '#facc15',
                        '#ef4444'
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    });

  
