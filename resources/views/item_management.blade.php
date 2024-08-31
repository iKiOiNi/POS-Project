@extends('layout')

@section('content')
<div class="page-wrapper">
            <div class="content">
               <div class="page-header">
                  <div class="page-title">
                     <h2>Item Management</h2>
                  </div>
                  <div class="d-flex justify-content-end mt-3">
                  <div class="page-btn" onclick="launchModal()">
                     <a class="btn btn-added" style="margin-right: 10px;"><img src="{{asset('img/icons/plus.svg')}}" alt="img" class="me-1" >Add Item</a>
                  </div>
                  <div class="page-btn" onclick="removeEventListener()">
                     <a class="btn btn-added"style="margin-right: 10px;"><img src="{{asset('img/icons/closes.svg')}}" alt="img" class="me-1">Delete Item</a>
                  </div>
                  <div class="page-btn" onclick="launchModal()">
                     <a class="btn btn-added"><img src="{{asset('img/icons/edit.svg')}}" alt="img" class="me-1">Edit Item</a>
                  </div>
               </div>
               </div>
               
               <div class="card">
                  <div class="card-body">
                     <div class="table-top">
                        <div class="search-set">
                           <div class="search-path">
                              <a class="btn btn-filter" id="filter_search">
                              <img src="{{asset('img/icons/search-whites.svg')}}" alt="img">
                              <span><img src="{{asset('img/icons/closes.svg')}}" alt="img"></span>
                              </a>
                           </div>
                           <div class="search-input">
                              <a class="btn btn-searchset"><img src="{{asset('img/icons/search-white.svg')}}" alt="img"></a>
                           </div>
                        </div>
                     </div>
                  
                     <div class="table-responsive">
                        
                       
                        <table class="table  datanew">
                           <thead>
                              <tr>
                                 
                                 <th>Item ID</th>
                                 <th>SKU</th>
                                 <th>Item Name</th>
                                 <th>Description</th>
                                 <th>Barcode</th>
                                 <th>Category</th>
                                 <th>Unit Price</th>
                                 <th>Selling Price</th>
                                 <th>Date Received</th>
                                 <th>Expiration Date</th>
                                 <th>Crititcal Level</th>
                                 <th>Select</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>001501</td>
                                 <td>NA-ITJ-25g</td>
                                 <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                    <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Nestea Apple</a>
                                 </td>
                                 <td>Iced Tea Juice</td>
                                 <td>12345678910</td>
                                 <td>Beverages</td>
                                 <td>P 25.00</td>
                                 <td>P 30.00</td>
                                 <td>15/04/24</td>
                                 <td>15/04/26</td>
                                 <td>10</td>
                                 <td>
                                    <a class="me-3" onclick="launchModal()" >
                                    <img src="{{asset('img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    </td>
                              </tr>
                              <tr>
                                 <td>001501</td>
                                 <td>NA-ITJ-25g</td>
                                 <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                    <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Nestea Apple</a>
                                 </td>
                                 <td>Iced Tea Juice</td>
                                 <td>12345678910</td>
                                 <td>Beverages</td>
                                 <td>P 25.00</td>
                                 <td>P 30.00</td>
                                 <td>15/04/24</td>
                                 <td>15/04/26</td>
                                 <td>10</td>
                                 <td>
                                    <a class="me-3" onclick="launchModal()" >
                                    <img src="{{asset('img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    </td>
                              </tr>
                              <tr>
                                 <td>001501</td>
                                 <td>NA-ITJ-25g</td>
                                 <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                    <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Nestea Apple</a>
                                 </td>
                                 <td>Iced Tea Juice</td>
                                 <td>12345678910</td>
                                 <td>Beverages</td>
                                 <td>P 25.00</td>
                                 <td>P 30.00</td>
                                 <td>15/04/24</td>
                                 <td>15/04/26</td>
                                 <td>10</td>
                                 <td>
                                    <a class="me-3" onclick="launchModal()" >
                                    <img src="{{asset('img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    </td>
                              </tr>
                              <tr>
                                 <td>001501</td>
                                 <td>NA-ITJ-25g</td>
                                 <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                    <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Nestea Apple</a>
                                 </td>
                                 <td>Iced Tea Juice</td>
                                 <td>12345678910</td>
                                 <td>Beverages</td>
                                 <td>P 25.00</td>
                                 <td>P 30.00</td>
                                 <td>15/04/24</td>
                                 <td>15/04/26</td>
                                 <td>10</td>
                                 <td>
                                    <a class="me-3" onclick="launchModal()" >
                                    <img src="{{asset('img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    </td>
                              </tr>
                              <tr>
                                 <td>001501</td>
                                 <td>NA-ITJ-25g</td>
                                 <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                    <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Nestea Apple</a>
                                 </td>
                                 <td>Iced Tea Juice</td>
                                 <td>12345678910</td>
                                 <td>Beverages</td>
                                 <td>P 25.00</td>
                                 <td>P 30.00</td>
                                 <td>15/04/24</td>
                                 <td>15/04/26</td>
                                 <td>10</td>
                                 <td>
                                    <a class="me-3" onclick="launchModal()" >
                                    <img src="{{asset('img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    </td>
                              </tr>
                              
                              
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">New Item</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="row w-100">
                     <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                           <label>SKU</label>
                           <input type="text" placeholder="Enter SKU">
                        </div>
                     </div>
                     <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Item Name</label>
                           <input type="text" placeholder="Enter Item Name">
                        </div>
                     </div>
                     <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Description</label>
                           <input type="text" placeholder="Enter Descriptions">
                        </div>
                     </div>
                     <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Barcode</label>
                           <input type="text" placeholder="Enter Barcode">
                        </div>
                     </div>
                     <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Category</label>
                           <select class="select">
                              <option>Select Status</option>
                              <option>Beverages</option>
                              <option>Snacks</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Unit Price</label>
                           <input type="text" placeholder="Enter Unit Price">
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Selling Price</label>
                           <input type="text" placeholder="Enter Selling Price">
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Date Received</label>
                           <input type="text" placeholder="Date Received">
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Expiration Date</label>
                           <input type="text" placeholder="Expiration Date">
                        </div>
                     </div>
                     <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Critical Level</label>
                           <input type="text" placeholder="Enter Critical Level">
                        </div>
                     </div>
                  </div>
                  
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Create</button>
               </div>
            </div>
            </div>
         </div>
@stop