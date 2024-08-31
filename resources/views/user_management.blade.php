@extends('layout')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h2>User Management</h2>
            </div>
        </div>
        
        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="page-header">
                        <div class="page-btn" onclick="launchModal()">
                            <a class="btn btn-added">
                                <img src="{{ asset('img/icons/plus.svg') }}" alt="img" class="me-1">Add User
                            </a>
                        </div>
                    </div>
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="{{ asset('img/icons/search-whites.svg') }}" alt="img">
                                <span><img src="{{ asset('img/icons/closes.svg') }}" alt="img"></span>
                            </a>
                        </div>
                        <div class="search-input">
                            <a class="btn btn-searchset">
                                <img src="{{ asset('img/icons/search-white.svg') }}" alt="img">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>ID No.</th>
                                <th>Full Name</th>
                                <th>Username</th>
                                <th>Contact No.</th>
                                <th>Date Joined</th>
                                <th>Access Level</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001501</td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="{{ asset('img/product/noimage.png') }}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Glo-Ann Panes</a>
                                </td>
                                <td>mgSuperuser</td>
                                <td>09365845254</td>
                                <td>15/08/2020</td>
                                <td><span class="badges bg-lightyellow">Manager</span></td>
                                <td><span class="badges bg-lightgreen">Active</span></td>
                                <td>
                                    <a class="me-3" onclick="launchModal()">
                                        <img src="{{ asset('img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3" onclick="launchModal()">
                                        <img src="{{ asset('img/icons/eye1.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <!-- Repeat the table rows as needed -->
                        </tbody>
                    </table>
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
                <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <form method="post" action="database/db_connect.php" enctype="multipart/form-data">
                    <div class="row w-100">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="FirstName" placeholder="Enter First Name" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input type="text" name="MiddleName" placeholder="Enter Middle Name">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="LastName" placeholder="Enter Last Name" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Suffix</label>
                                <input type="text" name="Suffix" placeholder="Enter Suffix">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Age</label>
                                <input type="number" name="Age" placeholder="Enter Age" required>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="Address" placeholder="Enter Address" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="Username" placeholder="Enter Username" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="Password" placeholder="Enter Password" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="ConfirmPassword" placeholder="Confirm your Password" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Contact No.</label>
                                <input type="number" name="ContactNumber" placeholder="Enter Contact Number" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="select" name="Gender" required>
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Access Level</label>
                                <select class="select" name="AccessLevel" required>
                                    <option value="">Select Access Level</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Cashier">Cashier</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="select" name="Status" required>
                                    <option value="">Select Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Avatar</label>
                                <div class="image-upload">
                                    <input type="file" name="avatar">
                                    <div class="image-uploads">
                                        <img src="{{ asset('img/icons/upload-outline.svg') }}" alt="img">
                                        <h4>Drag and drop a file to upload</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Employee</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@stop
