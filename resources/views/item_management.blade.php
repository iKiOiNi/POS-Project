@extends('layout')

@section('content')
<div class="page-wrapper">
            <div class="content">
               <div class="page-header">
                  <div class="page-title">
                     <h2>Item Management</h2>
                  </div>
                  <div class="d-flex justify-content-end mt-3">
                  <div class="page-btn">
                        <a class="btn btn-added" style="margin-right: 10px;" data-bs-toggle="modal" data-bs-target="#addingModal">
                           <img src="{{asset('img/icons/plus.svg')}}" alt="img" class="me-1">Add Item
                        </a>
                     </div>
                     <div class="page-btn">
                        <a class="btn btn-added" style="margin-right: 10px;" data-bs-toggle="modal" data-bs-target="#deleteModal">
                           <img src="{{asset('img/icons/closes.svg')}}" alt="img" class="me-1">Delete Item
                        </a>
                     </div>
                     <div class="page-btn">
                        <a class="btn btn-added" style="margin-right: 10px;" data-bs-toggle="modal" data-bs-target="#editModal">
                           <img src="{{asset('img/icons/edit.svg')}}" alt="img" class="me-1">Edit Item
                        </a>
                     </div>
                     <div class="page-btn">
                        <a class="btn btn-added" style="margin-right: 10px;" data-bs-toggle="modal" data-bs-target="#vatModal">
                           <img src="{{asset('img/icons/Vat.png')}}" alt="img" class="me-1">Vatable Items
                        </a>
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
                                 <td>Nestea Apple</td>
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
                                 <td>Nestea Apple</td>
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
                                 <td>Nestea Apple</td>
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
                                 <td>Nestea Apple</td>
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
                                 <td>Nestea Apple</td>
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
          <!-- addingModal -->
          <div class="modal fade" id="addingModal" tabindex="-1" aria-labelledby="addingModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="addingModalLabel">New Item</h5>
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
          <!-- vatModal -->
          <div class="modal fade" id="vatModal" tabindex="-1" aria-labelledby="vatModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="vatModalLabel">Vatable Items</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="row w-100">
                  <div class="table-responsive">
                        
                       
                        <table class="table  datanew">
                           <thead>
                              <tr>
                                 
                                 <th>Item ID</th>
                                 <th>Item Name</th>
                                 <th>Description</th>
                                 <th>Category</th>
                                 <th>Unit Price</th>
                                 <th>VAT</th>
                                 <th>Selling Price</th>
                                 <th>Date Added</th>
                                 <th>Supplier</th>
                                 <th>Select</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>001501</td>
                                 <td>Nestea Apple</td>
                                 <td>Iced Tea Juice</td>
                                 <td>Beverages</td>
                                 <td>P 25.00</td>
                                 <td>P 3.00</td>
                                 <td>P 28.00</td>
                                 <td>15/04/24</td>
                                 <td>KCC Mall of Marbel</td>
                                 <td>
                                    <a class="me-3" onclick="launchModal()" >
                                    <img src="{{asset('img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    </td>
                              </tr>
                              <tr>
                                 <td>001501</td>
                                 <td>Nestea Apple</td>
                                 <td>Iced Tea Juice</td>
                                 <td>Beverages</td>
                                 <td>P 25.00</td>
                                 <td>P 3.00</td>
                                 <td>P 28.00</td>
                                 <td>15/04/24</td>
                                 <td>KCC Mall of Marbel</td>
                                 <td>
                                    <a class="me-3" onclick="launchModal()" >
                                    <img src="{{asset('img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    </td>
                              </tr>
                              <tr>
                                 <td>001501</td>
                                 <td>Nestea Apple</td>
                                 <td>Iced Tea Juice</td>
                                 <td>Beverages</td>
                                 <td>P 25.00</td>
                                 <td>P 3.00</td>
                                 <td>P 28.00</td>
                                 <td>15/04/24</td>
                                 <td>KCC Mall of Marbel</td>
                                 <td>
                                    <a class="me-3" onclick="launchModal()" >
                                    <img src="{{asset('img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    </td>
                              </tr>
                              <tr>
                                 <td>001501</td>
                                 <td>Nestea Apple</td>
                                 <td>Iced Tea Juice</td>
                                 <td>Beverages</td>
                                 <td>P 25.00</td>
                                 <td>P 3.00</td>
                                 <td>P 28.00</td>
                                 <td>15/04/24</td>
                                 <td>KCC Mall of Marbel</td>
                                 <td>
                                    <a class="me-3" onclick="launchModal()" >
                                    <img src="{{asset('img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    </td>
                              </tr>
                              <tr>
                                 <td>001501</td>
                                 <td>Nestea Apple</td>
                                 <td>Iced Tea Juice</td>
                                 <td>Beverages</td>
                                 <td>P 25.00</td>
                                 <td>P 3.00</td>
                                 <td>P 28.00</td>
                                 <td>15/04/24</td>
                                 <td>KCC Mall of Marbel</td>
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
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addVatableItemModal">Create</button>
               </div>
            </div>
         </div>
      </div>
      <!-- addVatableItemModal -->
<div class="modal fade" id="addVatableItemModal" tabindex="-1" aria-labelledby="addVatableItemModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addVatableItemModalLabel">New Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row w-100">
                    <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                            <label>SKU</label>
                            <input type="text" placeholder="Enter SKU" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Item Name</label>
                            <input type="text" placeholder="Enter Item Name" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" placeholder="Enter Description" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Category</label>
                           <select class="select">
                              <option>Select Category</option>
                              <option>Beverages</option>
                              <option>Snacks</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Barcode</label>
                            <input type="text" placeholder="Enter Barcode" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                           <label>Supplier</label>
                           <select class="select">
                              <option>Select Supplier</option>
                              <option>Kcc Mall of Marbel</option>
                              <option>San Miguel Corporation</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Unit Price</label>
                            <input type="text" placeholder="P 0.00" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Selling Price</label>
                            <input type="text" placeholder="P 0.00" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Date Added</label>
                            <input type="text" placeholder="" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Expiration</label>
                            <input type="text" placeholder="" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Critical Level</label>
                            <input type="text" placeholder="0" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                     <div class="form-group">
                        <label>Vatable Item</label>
                        <div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="vatableItem" id="vatableItemYes" value="yes">
                                 <label class="form-check-label" for="vatableItemYes">Yes</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="vatableItem" id="vatableItemNo" value="no">
                                 <label class="form-check-label" for="vatableItemNo">No</label>
                              </div>
                        </div>
                     </div>
                  </div>
                    <!-- Add other necessary fields as required -->
                </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" onclick="switchToVatModal()" data-bs-dismiss="modal">Cancel</button>
               <button type="button" class="btn btn-primary" onclick="switchToVatModal()">Add Item</button>
            </div>
        </div>
    </div>
</div>
<script>
function switchToVatModal() {
    // Close the current modal
    $('#addVatableItemModal').modal('hide');

    // Open the previous modal after a short delay to ensure smooth transition
    setTimeout(function() {
        $('#vatModal').modal('show');
    }, 500);  // Adjust the delay as needed
}
</script>

@stop