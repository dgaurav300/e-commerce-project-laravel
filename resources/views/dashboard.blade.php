@extends('layouts.app')

@section('content')
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
</div>
@endsection