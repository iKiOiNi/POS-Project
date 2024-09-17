<div>
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header d-flex justify-content-between mt-3">
                <div class="page-title">
                    <h2>Order Supplies</h2>
                </div>

            </div>

            <form>

                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex justify-contet-normal gap-3 w-50">
                        <div class="form-group col-md-4">
                            <label for="supplierId">Supplier</label>
                            <select id="supplierId" class="form-control">
                                <option selected>Choose...</option>
                                <!-- Add supplier options here -->
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="deliveryDate">Delivery Date</label>
                            <input type="date" class="form-control" id="deliveryDate" value="2024-04-17">
                        </div>
                    </div>
                    <div>
                        <button type="button" class="btn btn-success" data-bs-target="#exampleModal"
                            data-bs-toggle="modal">Add Delivery</button>

                    </div>
                </div>


            </form>
            <div class="card px-2 pt-3 pb-2">
                <div class="d-flex justify-content-between ">
                    <div>
                        <h5>Item List</h5>
                    </div>

                    <div class="d-flex justify-content-end gap-1 align-items-center ">
                        <div class="form-group ">
                            <input type="text" class="form-control" id="searchItem" placeholder="Search Item ">

                        </div>
                        <div class="form-group">

                            <select class="form-select">
                                <option>Category</option>
                                <option>Beverages</option>
                                <option>Grocery</option>
                            </select>
                        </div>
                    </div>
                </div>
                <table class="table table-striped rounded overflow-auto">
                    <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Supplier</th>
                            <th scope="col">Total Item</th>
                            <th scope="col">Total Cost</th>
                            <th scope="col">Date Create</th>
                            <th scope="col">Status</th>
                            <th scope="col">View</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->purchase_order_id }}</td>
                                <td>{{ $order->supplier->CompanyName }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->total_price }}</td>
                                <td>{{ $order->order_date }}</td>
                                <td>{{ $order->status }}</td>
                                <td><button class="btn btn-primary" data-bs-target="#listModal" data-bs-toggle="modal"
                                        wire:click="selectOrder({{ $order->purchase_order_id }})">View
                                        Details</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Update Status
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><button class="dropdown-item" wire:click="completeOrder({{$order->purchase_order_id}})">Complete</button></li>
                                            <li><button class="dropdown-item" wire:click="cancelOrder({{$order->purchase_order_id}})">Cancel</button></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        <!-- Add rows for items here -->
                    </tbody>
                </table>
            </div>


        </div>
    </div>

    @if (session()->has('message-status'))
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="..." class="rounded me-2" alt="...">
                    <strong class="me-auto">Order Status</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('message-status') }}
                </div>
            </div>
        </div>
    @endif




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="createOrder">
                    <div class="modal-body">

                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                        <div class="row w-100">
                            <div class="col-lg-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label>Select Supplier</label>

                                    <select class="form-select" wire:model="supplierSelection">
                                        <option value="">Select Supplier</option>
                                        @foreach ($suppliers as $supplier)
                                            <option value="{{ $supplier->SupplierId }}">{{ $supplier->CompanyName }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>


                            <div>
                                <button class="btn btn-primary" data-bs-target="#itemList" data-bs-toggle="modal">
                                    Add Item
                                </button>

                            </div>
                            <table class="table table-responsive">
                                <th>
                                    <tr>
                                        <td>Action</td>
                                        <td>Item Name</td>
                                        <td>Quantity</td>
                                        <td>Price</td>
                                        <td>Total</td>
                                    </tr>
                                </th>
                                <tbody>

                                    @foreach ($selectedItems as $selectedItem)
                                        <tr>
                                            <td>
                                                <button class="btn btn-sm fs-10" data-bs-target="#editItem"
                                                    data-bs-toggle="modal"
                                                    wire:click="editItem({{ $selectedItem['item_id'] }})">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                            <td>{{ $selectedItem['item_name'] }}</td>
                                            <td>{{ $selectedItem['quantity'] }}</td>
                                            <td>{{ $selectedItem['unit_price'] }}</td>

                                            <td>{{ $selectedItem['total_price'] }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="2">Total</td>
                                        <td colspan="2">{{ $totalQuantity }}</td>

                                        <td colspan="2">{{ $totalPrice }}</td>

                                    </tr>
                                    <!-- Add rows for items here -->

                            </table>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>

            </div>

        </div>
    </div>

    <div class="modal fade" id="itemList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="addItem">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Select Item</label>
                            <select class="form-select" wire:model="itemSelection">
                                <option value="">Select Item</option>

                                @foreach ($items as $item)
                                    <option value="{{ $item->itemID }}">{{ $item->itemName }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="from-group">
                            <label for="">Quantity</label>
                            <input type="number" class="form-control" wire:model="itemQuantity">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" data-bs-target="#exampleModal"
                            data-bs-toggle="modal">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="modal fade" id="listModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($orderDetails)
                                @foreach ($orderDetails as $order)
                                    <tr>
                                        <td>{{ $order->item->itemName }}</td>
                                        <td>{{ $order->quantity }}</td>
                                        <td>{{ $order->unit_price }}</td>
                                        <td>{{ $order->total_price }}</td>
                                    </tr>
                                @endforeach

                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>





    <div class="modal fade" id="editItem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="updateItem">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Item Name</label>
                            <input type="text" class="form-control" readonly value="{{ $itemEditName }}">

                        </div>

                        <div class="from-group">
                            <label for="">Quantity</label>
                            <input type="number" class="form-control" wire:model="itemEditQuantity">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-target="#exampleModal"
                            data-bs-toggle="modal" wire:click="removeItem({{ $itemEditID }})">Delete</button>
                        <button type="submit" class="btn btn-primary" data-bs-target="#exampleModal"
                            data-bs-toggle="modal">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
