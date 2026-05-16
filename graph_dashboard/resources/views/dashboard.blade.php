<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Monthly Sales Overview</h3>
                
                <div class="w-full">
                    <canvas id="salesChart" data-labels="{{ json_encode($labels) }}" data-values="{{ json_encode($data) }}"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const canvas = document.getElementById('salesChart');
            const ctx = canvas.getContext('2d');
            
            const labels = JSON.parse(canvas.getAttribute('data-labels'));
            const dataValues = JSON.parse(canvas.getAttribute('data-values'));

            const salesGradient = ctx.createLinearGradient(0, 0, 0, canvas.height || 400);
            salesGradient.addColorStop(0, 'rgba(0, 196, 204, 0.6)');
            salesGradient.addColorStop(1, 'rgba(0, 196, 204, 0.0)');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Sales Trend',
                        data: dataValues,
                        borderColor: '#00c4cc',
                        borderWidth: 3,
                        backgroundColor: salesGradient,
                        fill: true,
                        tension: 0.4,
                        pointBackgroundColor: '#ffffff',
                        pointBorderColor: '#00c4cc',
                        pointBorderWidth: 3,
                        pointRadius: 6,
                        pointHoverRadius: 8
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                usePointStyle: true,
                                pointStyle: 'line',
                                font: {
                                    family: 'sans-serif',
                                    size: 14
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(200, 200, 200, 0.2)',
                                drawBorder: false
                            },
                            ticks: {
                                color: '#9ca3af'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                color: '#9ca3af'
                            }
                        }
                    }
                }
            });
        });
    </script>
</x-app-layout>