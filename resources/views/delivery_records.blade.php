@extends('layout')

@section('content')
<div class="page-wrapper">
            <div class="content">
               <div class="page-header">
                  <div class="page-title">
                     <h2>Delivery Record</h2>
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
                                 
                                 <th>Delivery Number</th>
                                 <th>Company Name</th>
                                 <th>Contact Person</th>
                                 <th>Contact No.</th>
                                 <th>Delivery Date</th>
                                 <th>Address</th>
                                 <th>Items</th>
                                 <th>QTY</th>
                                 <th>Status</th>
                                 <th>Date Delivered</th>

                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>001</td>
                                 <td>KCC Mall of Marbel</td>
                                 <td>Mr. Adam</td>
                                 <td>09366958452</td>
                                 <td>15/04/24</td>
                                 <td>Koronadal City South Cotabato</td>
                                 <td>
                                    <select class="show">
                                    <option>Nestea Apple</option>
                                    <option>Kopiko Brown</option>
                                    <option>Brown Sugar</option>
                                </select>
                                 </td>
                                 <td>25</td>
                                 <td>
                                    <select class="select">
                                        <option>Pending</option>
                                        <option>Delivered</option>
                                    </select>
                                 </td>
                                 <td>#</td>
                              </tr>
                              <tr>
                                <td>001</td>
                                <td>KCC Mall of Marbel</td>
                                <td>Mr. Adam</td>
                                <td>09366958452</td>
                                <td>15/04/24</td>
                                <td>Koronadal City South Cotabato</td>
                                <td>
                                   <select class="show">
                                   <option>Nestea Apple</option>
                                   <option>Kopiko Brown</option>
                                   <option>Brown Sugar</option>
                               </select>
                                </td>
                                <td>25</td>
                                <td>
                                   <select class="select">
                                       <option>Pending</option>
                                       <option>Delivered</option>
                                   </select>
                                </td>
                                <td>#</td>
                              </tr>
                              <tr>
                                <td>001</td>
                                <td>KCC Mall of Marbel</td>
                                <td>Mr. Adam</td>
                                <td>09366958452</td>
                                <td>15/04/24</td>
                                <td>Koronadal City South Cotabato</td>
                                <td>
                                   <select class="show">
                                   <option>Nestea Apple</option>
                                   <option>Kopiko Brown</option>
                                   <option>Brown Sugar</option>
                               </select>
                                </td>
                                <td>25</td>
                                <td>
                                   <select class="select">
                                       <option>Pending</option>
                                       <option>Delivered</option>
                                   </select>
                                </td>
                                <td>#</td>
                              </tr>
                              <tr>
                                <td>001</td>
                                <td>KCC Mall of Marbel</td>
                                <td>Mr. Adam</td>
                                <td>09366958452</td>
                                <td>15/04/24</td>
                                <td>Koronadal City South Cotabato</td>
                                <td>
                                   <select class="show">
                                   <option>Nestea Apple</option>
                                   <option>Kopiko Brown</option>
                                   <option>Brown Sugar</option>
                               </select>
                                </td>
                                <td>25</td>
                                <td>
                                   <select class="select">
                                       <option>Pending</option>
                                       <option>Delivered</option>
                                   </select>
                                </td>
                                <td>#</td>
                              </tr>
                              <tr>
                                <td>001</td>
                                <td>KCC Mall of Marbel</td>
                                <td>Mr. Adam</td>
                                <td>09366958452</td>
                                <td>15/04/24</td>
                                <td>Koronadal City South Cotabato</td>
                                <td>
                                   <select class="show">
                                   <option>Nestea Apple</option>
                                   <option>Kopiko Brown</option>
                                   <option>Brown Sugar</option>
                               </select>
                                </td>
                                <td>25</td>
                                <td>
                                   <select class="select">
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
            </div>
         </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Create New Item</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="row w-100">
                     <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                           <label>MPUJ Body Number</label>
                           <input type="text" placeholder="Enter MPUJ Body Number">
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Plate Number</label>
                           <input type="text" placeholder="Enter Plate Number">
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Seat Capacity</label>
                           <input type="text" placeholder="Enter Seat Capacity">
                        </div>
                     </div>
                     <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Model</label>
                           <input type="text" placeholder="Enter Model">
                        </div>
                     </div>
                     <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Role</label>
                           <select class="select">
                              <option>Select Status</option>
                              <option>Active</option>
                           </select>
                        </div>
                     </div>
                     
                     <div class="col-lg-12">
                        <div class="form-group">
                           <label> Avatar</label>
                           <div class="image-upload">
                              <input type="file">
                              <div class="image-uploads">
                                 <img src="{{asset('img/icons/upload.svg')}}" alt="img">
                                 <h4>Drag and drop a file to upload</h4>
                              </div>
                           </div>
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