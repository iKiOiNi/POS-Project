@extends('layout')

@section('content')
<div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h2>Slow-Moving Items Report</h2>
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
                            <input type="date" value="2024-10-02" class="form-control mb-2">
                            <select class="form-control">
                                <option>March - 2024</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <!-- Slow Moving Item Section -->
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="fw-bold"></h6>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Item Name</th>
                                                    <th>Quantity Sold</th>
                                                    <th>Quantity Planned</th>
                                                    <th>QTY on Hand </th>
                                                    <th>Average Turnover</th>
                                                    <th>Total Sales</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>White Sugar 1Kg.</td>
                                                    <td>156</td>
                                                    <td>350</td>
                                                    <td>280</td>
                                                    <td>32.25%</td>
                                                    <td>₱28,080.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Sting</td>
                                                    <td>130</td>
                                                    <td>350</td>
                                                    <td>189</td>
                                                    <td>103.44%</td>
                                                    <td>₱5,200.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <td><button class="btn btn-link" onclick="printReport()"><i class="fas fa-print"></i></button></td>
            </div>
        </div>
@stop