<div class="container">
    <h1 class="my-4">Dashboard</h1>

    <div class="row">
        <!-- Total Sales -->
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Total Sales</div>
                <div class="card-body">
                    <h5 class="card-title">$10,000</h5>
                    <p class="card-text">This is the total sales amount.</p>
                </div>
            </div>
        </div>

        <!-- Total Orders -->
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Total Orders</div>
                <div class="card-body">
                    <h5 class="card-title">250</h5>
                    <p class="card-text">This is the total number of orders.</p>
                </div>
            </div>
        </div>

        <!-- Total Customers -->
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Total Customers</div>
                <div class="card-body">
                    <h5 class="card-title">150</h5>
                    <p class="card-text">This is the total number of customers.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Sales Chart -->
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">Sales Chart</div>
                <div class="card-body">
                    <canvas id="salesChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Low Stock Alerts -->
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">Low Stock Alerts</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Product X
                            <span class="badge bg-danger rounded-pill">5 left</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Product Y
                            <span class="badge bg-danger rounded-pill">2 left</span>
                        </li>
                        <!-- Add more alerts as needed -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Recent Orders -->
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">Recent Orders</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Customer</th>
                                <th>Product</th>
                                <th>Amount</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>Product A</td>
                                <td>$100</td>
                                <td>2023-10-01</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane Smith</td>
                                <td>Product B</td>
                                <td>$200</td>
                                <td>2023-10-02</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Notifications -->
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">Notifications</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">New order received from John Doe.</li>
                        <li class="list-group-item">Product Z is back in stock.</li>
                        <li class="list-group-item">Monthly sales target achieved!</li>
                        <!-- Add more notifications as needed -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May'],
            datasets: [{
                label: 'Sales',
                data: [5000, 7000, 8000, 6000, 9000],
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                }
            }
        }
    });
</script>
