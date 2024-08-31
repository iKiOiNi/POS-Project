@extends('layout')

@section('content')
<div class="page-wrapper">
            <div class="content">
               <div class="page-header">
                  <div class="page-title">
                     <h2>Supplier</h2>
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
                                 
                                 <th>ID No.</th>
                                 <th>Company Name</th>
                                 <th>Contact Person</th>
                                 <th>Contact No.</th>
                                 <th>Date Added</th>
                                 <th>Status</th>
                                 <th>Items</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>001</td>
                                 <td>KCC Mall of Marbel</td>
                                 <td>Mr Adan</td>
                                 <td>09365264325</td>
                                 <td>04-05-24</td>
                                 <td><span class="badges bg-lightgreen">Delivered</span></td>
                                 <td>
                                    <a class="me-3" onclick="launchModal()">
                                       <img src="{{asset('img/icons/product.svg')}}" alt="img">
                                       </a>
                                    </td>
                              </tr>
                              <tr>
                                 <td>001</td>
                                 <td>KCC Mall of Marbel</td>
                                 <td>Mr. Adan</td>
                                 <td>09365264325</td>
                                 <td>04-05-24</td>
                                 <td><span class="badges bg-lightgreen">Delivered</span></td>
                                 <td>
                                    <a class="me-3" onclick="launchModal()">
                                       <img src="{{asset('img/icons/product.svg')}}" alt="img">
                                       </a>
                                    </td>
                              </tr>
                              <tr>
                                 <td>001</td>
                                 <td>KCC Mall of Marbel</td>
                                 <td>Mr Adan</td>
                                 <td>09365264325</td>
                                 <td>04-05-24</td>
                                 <td><span class="badges bg-lightgreen">Delivered</span></td>
                                 <td>
                                    <a class="me-3" onclick="launchModal()">
                                       <img src="{{asset('img/icons/product.svg')}}" alt="img">
                                       </a>
                                    </td>
                              </tr>
                              <tr>
                                 <td>001</td>
                                 <td>KCC Mall of Marbel</td>
                                 <td>Mr Adan</td>
                                 <td>09365264325</td>
                                 <td>04-05-24</td>
                                 <td><span class="badges bg-lightgreen">Delivered</span></td>
                                 <td>
                                    <a class="me-3" onclick="launchModal()">
                                       <img src="{{asset('img/icons/product.svg')}}" alt="img">
                                       </a>
                                    </td>
                              </tr>
                              <tr>
                                 <td>001</td>
                                 <td>KCC Mall of Marbel</td>
                                 <td>Mr Adan</td>
                                 <td>09365264325</td>
                                 <td>04-05-24</td>
                                 <td><span class="badges bg-lightyellow">Pending</span></td>
                                 <td>
                                    <a class="me-3" onclick="launchModal()">
                                       <img src="{{asset('img/icons/product.svg')}}" alt="img">
                                       </a>
                                    </td>
                              </tr>
                              <tr>
                                 <td>001</td>
                                 <td>KCC Mall of Marbel</td>
                                 <td>Mr Adan</td>
                                 <td>09365264325</td>
                                 <td>04-05-24</td>
                                 <td><span class="badges bg-lightgreen">Delivered</span></td>
                                 <td>
                                    <a class="me-3" onclick="launchModal()">
                                       <img src="{{asset('img/icons/product.svg')}}" alt="img">
                                       </a>
                                    </td>
                              </tr>
                              <tr>
                                 <td>001</td>
                                 <td>KCC Mall of Marbel</td>
                                 <td>Mr Adan</td>
                                 <td>09365264325</td>
                                 <td>04-05-24</td>
                                 <td><span class="badges bg-lightyellow">Pending</span></td>
                                 <td>
                                    <a class="me-3" onclick="launchModal()">
                                       <img src="{{asset('img/icons/product.svg')}}" alt="img">
                                       </a>
                                    </td>
                              </tr>
                              
                           </tbody>
                        </table>
                     </div>
                     <!-- Add New Supplier Button -->
                     <div class="d-flex justify-content-end mt-3">
                        <button type="button" class="btn btn-primary" onclick="launchModal()">Add New Supplier</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
          <!-- Modal -->
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Create Supplier</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="row w-100">
                     <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                           <label>ID Number</label>
                           <input type="text" placeholder="Id Number">
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Date Added</label>
                           <input type="text" placeholder="Date">
                        </div>
                     </div>
                     <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Company Name</label>
                           <input type="text" placeholder="Enter Company Name">
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Contact Person</label>
                           <input type="text" placeholder="Enter Contact Person">
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Contact Number</label>
                           <input type="text" placeholder="Enter Contact Number">
                        </div>
                     </div>
                     <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Email</label>
                           <input type="text" placeholder="Enter Email">
                        </div>
                     </div>
                     <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Status</label>
                           <select class="select">
                              <option>Select Status</option>
                              <option>Active</option>
                              <option>Inactive</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Address</label>
                           <input type="text" placeholder="Enter Address">
                        </div>
                     </div>
                     <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Items</label>
                           <input type="text" placeholder="Enter Items">
                        </div>
                     </div>
                  </div>
                  
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-primary">Create</button>
               </div>
            </div>
            </div>
         </div>
@stop
