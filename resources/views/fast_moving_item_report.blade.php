@extends('layout')

@section('content')
<div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h2>Fast-Moving Items Report</h2>
                    </div>
                </div>
                <div class="main-content">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="col-lg-1 col-md-6 col-12">
                            <a>
                                <img src="{{asset('img/product/noimage.png')}}" alt="product">
                            </a>
                        </div>
                        <div class="col-log-11 col-md-6 col-12">
                            <h5>MG Mini Mart</h5>
                            <p>Brgy. Tinongcop, Tantangan, South Cot. <br>Manager: Glo-Ann Panes</p>
                        </div>
                        <div>
                            <h3>Time Period</h3>
                            <input type="date" value="2024-10-02" class="form-control mb-2">
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <!-- Fast Moving Item Section -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Item Name</th>
                                                    <th>Quantity Sold</th>
                                                    <th>Quantity Planned</th>
                                                    <td>QTY on Hand</td>
                                                    <th>Average Turnover</th>
                                                    <th>Total Sales</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Young Town Sardine</td>
                                                    <td>728</td>
                                                    <td>500</td>
                                                    <td>300</td>
                                                    <td>16.57%</td>
                                                    <td>₱14,560.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Nestea Apple</td>
                                                    <td>489</td>
                                                    <td>350</td>
                                                    <td>189</td>
                                                    <td>16.57%</td>
                                                    <td>₱12,225.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Slow Moving Item Section -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <td><button class="btn btn-link" onclick="printReport()"><i class="fas fa-print"></i></button></td>
            </div>
        </div>
@stop