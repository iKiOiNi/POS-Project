@extends('layout')

@section('content')
<div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h2>Reorder List Report</h2>
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
                                <th>Delivery No</th>
                                <th>Company Name</th>
                                <th>Contact Person</th>
                                <th>Contact NO.</th>
                                <th>Delivery Date</th>
                                <th>Address</th>
                                <th>Items</th>
                                <th>Status</th>
                                <th>Date Delivered</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>KCC Mall of Marbel</td>
                                <td>Mr. Adan</td>
                                <td>09366958521</td>
                                <td>04/05/2024</td>
                                <td>Koronadal City, South Cotabato</td>
                                <td>
                                    <select class="Items">
                                        <option>Nova</option>
                                        <option>Siga</option>
                                        <option>Popcornd</option>
                                        <option>Piatos</option>
                                    </select>
                                </td>
                                <td><select class="Status">
                                        <option>Delivered</option>
                                        <option>Pending</option>
                                    </select>
                                </td>
                                <td>10/05/2024</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>KCC Mall of Marbel</td>
                                <td>Mr. Adan</td>
                                <td>09366958521</td>
                                <td>04/05/2024</td>
                                <td>Koronadal City, South Cotabato</td>
                                <td>
                                    <select class="Items">
                                        <option>Nova</option>
                                        <option>Siga</option>
                                        <option>Popcornd</option>
                                        <option>Piatos</option>
                                    </select>
                                </td>
                                <td><select class="Status">
                                        <option>Delivered</option>
                                        <option>Pending</option>
                                    </select>
                                </td>
                                <td>10/05/2024</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>KCC Mall of Marbel</td>
                                <td>Mr. Adan</td>
                                <td>09366958521</td>
                                <td>04/05/2024</td>
                                <td>Koronadal City, South Cotabato</td>
                                <td>
                                    <select class="Items">
                                        <option>Nova</option>
                                        <option>Siga</option>
                                        <option>Popcornd</option>
                                        <option>Piatos</option>
                                    </select>
                                </td>
                                <td><select class="Status">
                                        <option>Pending</option>
                                        <option>Delivered</option>
                                    </select>
                                </td>
                                <td>#</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>KCC Mall of Marbel</td>
                                <td>Mr. Adan</td>
                                <td>09366958521</td>
                                <td>04/05/2024</td>
                                <td>Koronadal City, South Cotabato</td>
                                <td>
                                    <select class="Items">
                                        <option>Nova</option>
                                        <option>Siga</option>
                                        <option>Popcornd</option>
                                        <option>Piatos</option>
                                    </select>
                                </td>
                                <td><select class="Status">
                                        <option>Pending</option>
                                        <option>Delivered</option>
                                    </select>
                                </td>
                                <td>#</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <td><button class="btn btn-link" onclick="printReport()"><i class="fas fa-print"></i></button></td>
        </div>
@stop