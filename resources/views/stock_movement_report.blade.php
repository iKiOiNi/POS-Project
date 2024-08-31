@extends('layout')

@section('content')
<div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h2>Stock Movement Report</h2>
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
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label for="itemId" class="form-label">Item ID</label>
                            <input type="text" class="form-control" id="itemId" value="001502" readonly>
                        </div>
                        <div class="col-md-2">
                            <label for="sku" class="form-label">SKU</label>
                            <input type="text" class="form-control" id="sku" value="S-ED-250ml" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="itemName" class="form-label">Item Name</label>
                            <input type="text" class="form-control" id="itemName" value="Sting" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="companyName" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="companyName" value="Pepsi-Cola Products Philippines, Inc. (PCPPI)" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="barcode" class="form-label">Barcode</label>
                            <input type="text" class="form-control" id="barcode" value="025365894234" readonly>
                        </div>
                        <div class="col-md-3">
                            <label for="expirationDate" class="form-label">Expiration Date</label>
                            <input type="text" class="form-control" id="expirationDate" value="05/26/2026" readonly>
                        </div>
                        <div class="col-md-3">
                            <label for="batch" class="form-label">Batch</label>
                            <input type="text" class="form-control" id="batch" value="1" readonly>
                        </div>
                        <div class="col-md-3">
                            <label for="contactPerson" class="form-label">Contact Person</label>
                            <input type="text" class="form-control" id="contactPerson" value="Mr. Leornero Dasican" readonly>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Remarks</th>
                                    <th>Quantity-In</th>
                                    <th>Value-In</th>
                                    <th>Quantity-Out</th>
                                    <th>Value-Out</th>
                                    <th>QTY on Hand</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>04/10/2024</td>
                                    <td>Opening Balance</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>30</td>
                                    <td>₱1,260.00</td>
                                </tr>
                                <tr>
                                    <td>04/10/2024</td>
                                    <td>Sales Order</td>
                                    <td></td>
                                    <td></td>
                                    <td>5</td>
                                    <td>₱210.00</td>
                                    <td>25</td>
                                    <td>₱1,050.00</td>
                                </tr>
                                <tr>
                                    <td>04/11/2024</td>
                                    <td>Purchase Order</td>
                                    <td>25</td>
                                    <td>₱750.00</td>
                                    <td></td>
                                    <td></td>
                                    <td>50</td>
                                    <td>₱1,800.00</td>
                                </tr>
                                <tr>
                                    <td>04/15/2024</td>
                                    <td>Returned</td>
                                    <td>2</td>
                                    <td>₱84.00</td>
                                    <td></td>
                                    <td></td>
                                    <td>52</td>
                                    <td>₱1,884.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <td><button class="btn btn-link" onclick="printReport()"><i class="fas fa-print"></i></button></td>
            </div>
        </div>
@stop