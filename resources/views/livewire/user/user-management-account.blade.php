<div>


    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h2>User Management</h2>
                </div>
            </div>

            <div class="card p-2">
                <div class="card-body">
                    <div class="table-top">
                        <div class="page-header">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-user">

                                <i class="fas fa-plus"></i> Add User

                            </button>


                        </div>
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="{{ asset('img/icons/search-whites.svg') }}" alt="img">
                                    <span><img src="{{ asset('img/icons/closes.svg') }}" alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">

                                <input type="text" class="form-control" placeholder="Search" wire:model.live.debounce.300ms = "search">
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive" wire:poll.1s>
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
                                @foreach ($employees as $e)
                                    <tr>
                                        <td>{{ $e->employee_id }}</td>
                                        <td class="productimgname">


                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="data:image/png;base64,{{ base64_encode($e->avatar) }}"
                                                    alt="product">
                                            </a>
                                            <a href="javascript:void(0);">{{ $e->firstname . ' ' . $e->lastname }}</a>
                                        </td>
                                        <td>{{ $e->username }}</td>
                                        <td>{{ $e->contact_number }}</td>
                                        <td>{{ $e->created_at }}</td>
                                        <td>
                                            @php
                                                $e->role = strtolower($e->role);
                                            @endphp
                                            @if ($e->role == 'cashier')
                                                <span class="badges bg-lightgreen">Cashier</span>
                                            @endif
                                            @if ($e->role == 'manager')
                                                <span class="badges bg-lightyellow">Manager</span>
                                            @endif
                                        </td>
                                        <td>
                                            @php

                                                $e->status = strtolower($e->status);
                                            @endphp
                                            @if ($e->status == 'active')
                                                <span class="badges bg-lightgreen">Active</span>
                                            @endif

                                            @if ($e->status == 'inactive')
                                                <span class="badges bg-lightred">Inactive</span>
                                            @endif
                                        </td>
                                        <td>

                                            <button class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#update-user"
                                                wire:click="editUser({{ $e->employee_id }})" type="button">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </button>
                                            <button class="btn btn-success" wire:click="sayHelllo"><i class="fa fa-eye"
                                                    aria-hidden="true"></i></button>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>

                <nav>
                    {{ $employees->links('vendor.pagination.bootstrap-5') }}
                </nav>

            </div>
        </div>
    </div>

    @include('livewire.user.user-modal')

</div>
