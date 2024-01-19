// public/js/grafico.js

// Obtener datos desde Laravel
fetch('/chartData') // Ajusta la ruta según tu configuración
    .then(response => response.json())
    .then(data => {
        // Configurar el gráfico con los datos obtenidos
        let barChart = document.getElementById('barChart').getContext('2d');
        let lineChart = document.getElementById('lineChart').getContext('2d');
        new Chart(barChart, {
            type: 'bar',
            data: {
                labels: data.map(item => item.monthName),
                datasets: [{
                    label: 'Consumo por Mes',
                    data: data.map(item => item.consume),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',  // Rojo
                        'rgba(54, 162, 235, 0.2)', // Azul
                        'rgba(255, 206, 86, 0.2)', // Amarillo
                        'rgba(75, 192, 192, 0.2)', // Verde
                        'rgba(153, 102, 255, 0.2)',// Morado
                        'rgba(255, 159, 64, 0.2)'  // Naranja
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        new Chart(lineChart, {
            type: 'line',
            data: {
                labels: data.map(item => item.monthName),
                datasets: [{
                    label: 'Consumo por Mes',
                    data: data.map(item => item.consume),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',  // Rojo
                        'rgba(54, 162, 235, 0.2)', // Azul
                        'rgba(255, 206, 86, 0.2)', // Amarillo
                        'rgba(75, 192, 192, 0.2)', // Verde
                        'rgba(153, 102, 255, 0.2)',// Morado
                        'rgba(255, 159, 64, 0.2)'  // Naranja
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });