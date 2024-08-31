@extends('layout')

@section('content')
<div class="page-wrapper">
            <div class="content">
               <div class="page-header">
                  <div class="page-title">
                     <h2>Order Supplies</h2>
                  </div>
               </div>
               
               <form>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="supplierId">Supplier ID</label>
                        <select id="supplierId" class="form-control">
                            <option selected>Choose...</option>
                            <!-- Add supplier options here -->
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="deliveryNumber">Delivery Number</label>
                        <input type="text" class="form-control" id="deliveryNumber" placeholder="Enter delivery number">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="deliveryDate">Delivery Date</label>
                        <input type="date" class="form-control" id="deliveryDate" value="2024-04-17">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="companyName">Company Name</label>
                        <input type="text" class="form-control" id="companyName" placeholder="Enter company name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="contactPerson">Contact Person</label>
                        <input type="text" class="form-control" id="contactPerson" placeholder="Enter contact person">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="contactNumber">Contact Number</label>
                        <input type="text" class="form-control" id="contactNumber" placeholder="Enter contact number">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter address">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="searchItem">Search for Item</label>
                    <input type="text" class="form-control" id="searchItem" placeholder="Enter item name or SKU">
                </div>
            </form>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Item ID</th>
                        <th scope="col">SKU</th>
                        <th scope="col">Item</th>
                        <th scope="col">QTY</th>
                        <th scope="col">Barcode</th>
                        <th scope="col">Unit Price</th>
                        <th scope="col">Selling Price</th>
                        <th scope="col">Category</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>SML-600mL</td>
                        <td>San Miguel Light</td>
                        <td>18</td>
                        <td>0123456789</td>
                        <td><span class="badges bg-lightgreen">P 95.00</span></td>
                        <td><span class="badges bg-lightyellow">P 114.00</span></td>
                        <td>                        
                            <select class="select">
                               <option>Category</option>
                               <option>Beverages</option>
                               <option>Grocery</option>
                            </select>
                        </td>
                     </tr>
                     <!-- Add rows for items here -->
                </tbody>
            </table>
                
            <div class="d-flex justify-content-end mt-3">
                <button type="button" class="btn btn-primary" style="margin-right: 10px;">Return</button>
                <button type="button" class="btn btn-success">Add Delivery</button>
            </div>
        </main>
    </div>
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">Date & Time: 04-17-2024 04:15 PM</span>
        </div>
    </footer>
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