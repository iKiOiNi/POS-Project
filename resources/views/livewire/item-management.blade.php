<div>
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h2>Item Management</h2>
                </div>
                <div class="d-flex justify-content-end mt-3 gap-2">


                    <button class="btn btn-primary px-3" data-bs-toggle="modal" data-bs-target="#addingModal"><i
                            class="fa fa-plus" aria-hidden="true"></i> Add Item</button>



                    <button class="btn btn-success px-3" data-bs-toggle="modal" data-bs-target="#vatModal">
                        <i class="fa fa-eye" aria-hidden="true"></i> Vatable
                        Items</button>

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="form-group">
                                <input type="text" placeholder="Search" wire:model.live.debounce.300ms = "search">
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">


                        <table class="table  datanew">
                            <thead>
                                <tr class="text-center">

                                    <th>Item ID</th>
                                    <th>Item Name</th>
                                    <th>Description</th>
                                    <th>Barcode</th>
                                    <th>Category</th>
                                    <th>Unit Price</th>
                                    <th>Select</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $i)
                                    <tr class="text-center">
                                        <td>{{ $i->itemID }}</td>
                                        <td>{{ $i->itemName }}</td>
                                        <td>{{ $i->description }}</td>
                                        <td>{{ $i->barcode }}</td>
                                        <td>{{ $i->itemCategory }}</td>
                                        <td>{{ $i->unitPrice }}</td>
                                        <td class="flex text-center">
                                            <button class="btn btn-sm btn-primary" class="me-3" data-bs-toggle="modal"
                                                data-bs-target="#updateModal"
                                                wire:click="selectItem({{ $i->itemID }})">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </button>

                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal"
                                                wire:click="selectItem({{ $i->itemID }})">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if ($selectedItem)
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true"
            wire:ignore.self>
            <div class="modal-dialog modal-dialog-centered ">
                <form wire:submit.prevent="delete">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Delete Item</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            @if (session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif

                            <p>Do you want to delete the <span class="fw-bold"> {{ $selectedItem->itemName }}</span>?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-sm btn-primary">Delete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    @endif

    <div class="modal fade" id="addingModal" tabindex="-1" aria-labelledby="addingModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered ">
            <form wire:submit.prevent="save">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addingModalLabel">New Item</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="row w-100">

                            <div class="col-lg-12 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Item Name</label>
                                    <input type="text" placeholder="Enter Item Name" wire:model="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Barcode</label>
                                    <input type="text" placeholder="Enter Barcode" wire:model="barcode">
                                    @error('barcode')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-select" wire:model="category">
                                        <option>Select Status</option>
                                        <option>Beverages</option>
                                        <option>Snacks</option>
                                    </select>

                                    @error('category')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Unit Price</label>
                                    <input type="text" placeholder="Enter Unit Price" wire:model="unitPrice">
                                    @error('unitPrice')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea type="text" placeholder="Enter Descriptions" wire:model="description">
                                    </textarea>
                                    @error('category')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-6 col-12">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                    id="flexRadioDefault1" wire:model="isVatable" value="yes">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Is Vatable
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered ">
            <form wire:submit.prevent="update">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModalLabel">New Item</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="row w-100">

                            <div class="col-lg-12 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Item Name</label>
                                    <input type="text" placeholder="Enter Item Name" wire:model="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Barcode</label>
                                    <input type="text" placeholder="Enter Barcode" wire:model="barcode">
                                    @error('barcode')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-select" wire:model="category">
                                        <option>Select Status</option>
                                        <option>Beverages</option>
                                        <option>Snacks</option>
                                    </select>

                                    @error('category')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Unit Price</label>
                                    <input type="text" placeholder="Enter Unit Price" wire:model="unitPrice">
                                    @error('unitPrice')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea type="text" placeholder="Enter Descriptions" wire:model="description">
                                </textarea>
                                    @error('category')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6 col-12">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Is Vatable
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
                                    <tr class="text-center">

                                        <th>Item ID</th>
                                        <th>Item Name</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Unit Price</th>
                                        <th>VAT</th>
                                        <th>Selling Price</th>
                                        <th>Date Added</th>
                                        <th>Supplier</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($vatable as $i)
                                        @php
                                            $vat = $i->unitPrice * 0.12;
                                            $sellingPrice = $i->unitPrice + $vat;
                                        @endphp
                                        <tr class="text-center">
                                            <td>{{ $i->itemID }}</td>
                                            <td>{{ $i->itemName }}</td>
                                            <td>{{ $i->description }}</td>
                                            <td>{{ $i->itemCategory }}</td>
                                            <td>P {{ $i->unitPrice }}</td>
                                            <td>P {{ $vat }}</td>
                                            <td>P {{ $sellingPrice }}</td>
                                            <td>{{ $i->created_at }}</td>
                                            <td>No Name</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>
