@extends('layout')

@section('content')
<div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h2>Sales Report &gt; Monthly</h2>
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
                    <table class="table table-bordered mt-4" id="salesTable">
                        <thead class="thead-light">
                            <tr>
                                <th>Item No</th>
                                <th>SKU</th>
                                <th>Item Name</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>QTY Sold</th>
                                <th>Total Sales Revenue</th>
                                <th>Net Profit</th>
                                <th>Profit Margin</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001502</td>
                                <td>SED-250ml</td>
                                <td>Sting</td>
                                <td>Energy Drink</td>
                                <td>
                                    <select class="select">
                                        <option>Beverages</option>
                                        <option>Snacks</option>
                                        <option>Canned Goods</option>
                                        <option>Grocery</option>
                                    </select>
                                </td>
                                <td><span class="badges bg-lightgreen">15</span></td>
                                <td>P 2,000.00</td>
                                <td>P 1,475.00</td>
                                <td>73.75%</td>
                                <td><button class="btn btn-link" onclick="printReport()"><i class="fas fa-print"></i></button></td>
                            </tr>
                            <tr>
                                <td>001504</td>
                                <td>YTS-90g-OR</td>
                                <td>Young Town Sardine</td>
                                <td>Canned Sardine</td>
                                <td>
                                    <select class="select">
                                        <option>Canned Goods</option>
                                        <option>Snacks</option>
                                        <option>Beverages</option>
                                        <option>Grocery</option>
                                    </select>
                                </td>
                                <td><span class="badges bg-lightgreen">18</span></td>
                                <td>P 450.00</td>
                                <td>P 90.00</td>
                                <td>20.00%</td>
                                <td><button class="btn btn-link" onclick="printReport()"><i class="fas fa-print"></i></button></td>
                            </tr>
                            <tr>
                                <td>001501</td>
                                <td>NA-25g</td>
                                <td>Nestea Apple</td>
                                <td>Iced Tea Juice</td>
                                <td>
                                    <select class="select">
                                        <option>Beverages</option>
                                        <option>Snacks</option>
                                        <option>Canned Goods</option>
                                        <option>Grocery</option>
                                    </select>
                                </td>
                                <td><span class="badges bg-lightgreen">13</span></td>
                                <td>P 364.00</td>
                                <td>P 39.00</td>
                                <td>10.71%</td>
                                <td><button class="btn btn-link" onclick="printReport()"><i class="fas fa-print"></i></button></td>
                            </tr>
                            <tr>
                                <td>001503</td>
                                <td>WS-1kg</td>
                                <td>White Sugar</td>
                                <td>Sweetener</td>
                                <td>
                                    <select class="select">
                                        <option>Groceries</</option>
                                        <option>Snacks</option>
                                        <option>Canned Goods</option>
                                        <option>Beverages</option>
                                    </select>
                                </td>
                                <td><span class="badges bg-lightgreen">6kg</span></td>
                                <td>P 1,110.00</td>
                                <td>P 30.00</td>
                                <td>2.70%</td>
                                <td><button class="btn btn-link" onclick="printReport()"><i class="fas fa-print"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@stop