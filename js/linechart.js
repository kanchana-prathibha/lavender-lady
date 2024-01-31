// Dummy data for demonstration
const ordersData = [
    { date: '2024-01-01', orders: 10 },
    { date: '2024-01-02', orders: 15 },
    { date: '2024-01-03', orders: 8 },
    { date: '2024-01-04', orders: 20 },
    { date: '2024-01-05', orders: 12 },
    // Add more data as needed
];

// Extract dates and orders for the chart
const dates = ordersData.map(data => data.date);
const orders = ordersData.map(data => data.orders);

// Create line chart
const ctx = document.getElementById('chartContainer').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: dates,
        datasets: [{
            label: 'Orders',
            data: orders,
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        scales: {
            xAxes: [{
                type: 'time',
                time: {
                    unit: 'day',
                    displayFormats: {
                        day: 'MMM D'
                    }
                },
                scaleLabel: {
                    display: true,
                    labelString: 'Date'
                }
            }],
            yAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'Number of Orders'
                }
            }]
        }
    }
});
