@extends('layout')

@section('content')
<div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h2>Inventory Report</h2>
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

                    <div class="table-responsive">
                        
                       
                        <table class="table  datanew">
                           <thead>
                              <tr>
                                 
                                 <th>Item ID</th>
                                 <th>Item Name</th>
                                 <th>Description</th>
                                 <th>Category</th>
                                 <th>QTY on hand</th>
                                 <th>Date Received</th>
                                 <th>Expiration Date</th>
                                 <th>Reorder Point</th>
                                 <th>Batch</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>001501</td>
                                 <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                    <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Nestea Apple</a>
                                 </td>
                                 <td>Iced Tea Juice</td>
                                 <td>
                                    <select class="select">
                                        <option>Category</option>
                                        <option>Grocery</option>
                                        <option>Beverages</option>
                                        <option>Canned Goods</option>
                                        <option>Snacks</option>
                                    </select>
                                 </td>
                                 <td>50</td>
                                 <td>02/08/24</td>
                                 <td>02/08/26</td>
                                 <td>
                                    <span class="badges bg-lightgreen">10</span>
                                 </td>
                                 <td>1</td>
                              </tr>
                              <tr>
                                <td>001501</td>
                                <td class="productimgname">
                                   <a href="javascript:void(0);" class="product-img">
                                   <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                   </a>
                                   <a href="javascript:void(0);">Nestea Apple</a>
                                </td>
                                <td>Iced Tea Juice</td>
                                <td>
                                   <select class="select">
                                       <option>Category</option>
                                       <option>Grocery</option>
                                       <option>Beverages</option>
                                       <option>Canned Goods</option>
                                       <option>Snacks</option>
                                   </select>
                                </td>
                                <td>50</td>
                                <td>02/08/24</td>
                                <td>02/08/26</td>
                                <td>
                                   <span class="badges bg-lightgreen">10</span>
                                </td>
                                <td>1</td>
                              </tr>
                              <tr>
                                <td>001501</td>
                                <td class="productimgname">
                                   <a href="javascript:void(0);" class="product-img">
                                   <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                   </a>
                                   <a href="javascript:void(0);">Nestea Apple</a>
                                </td>
                                <td>Iced Tea Juice</td>
                                <td>
                                   <select class="select">
                                       <option>Category</option>
                                       <option>Grocery</option>
                                       <option>Beverages</option>
                                       <option>Canned Goods</option>
                                       <option>Snacks</option>
                                   </select>
                                </td>
                                <td>50</td>
                                <td>02/08/24</td>
                                <td>02/08/26</td>
                                <td>
                                   <span class="badges bg-lightgreen">10</span>
                                </td>
                                <td>1</td>
                              </tr>
                              <tr>
                                <td>001501</td>
                                <td class="productimgname">
                                   <a href="javascript:void(0);" class="product-img">
                                   <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                   </a>
                                   <a href="javascript:void(0);">Nestea Apple</a>
                                </td>
                                <td>Iced Tea Juice</td>
                                <td>
                                   <select class="select">
                                       <option>Category</option>
                                       <option>Grocery</option>
                                       <option>Beverages</option>
                                       <option>Canned Goods</option>
                                       <option>Snacks</option>
                                   </select>
                                </td>
                                <td>50</td>
                                <td>02/08/24</td>
                                <td>02/08/26</td>
                                <td>
                                   <span class="badges bg-lightgreen">10</span>
                                </td>
                                <td>1</td>
                              </tr>
                              <tr>
                                                                  <td>001501</td>
                                 <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                    <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Nestea Apple</a>
                                 </td>
                                 <td>Iced Tea Juice</td>
                                 <td>
                                    <select class="select">
                                        <option>Category</option>
                                        <option>Grocery</option>
                                        <option>Beverages</option>
                                        <option>Canned Goods</option>
                                        <option>Snacks</option>
                                    </select>
                                 </td>
                                 <td>50</td>
                                 <td>02/08/24</td>
                                 <td>02/08/26</td>
                                 <td>
                                    <span class="badges bg-lightgreen">10</span>
                                 </td>
                                 <td>1</td>
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