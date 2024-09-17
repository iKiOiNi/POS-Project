<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, html5, responsive">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>MG Mini Mart</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @livewireStyles

</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left active">
                <a href="/" class="logo">
                    <img src="{{ asset('img/icons/MGMart.png') }}" alt="Business logo">
                </a>
                <a href="/" class="logo-small">
                    <img src="{{ asset('img/icons/MGMart.png') }}" alt="Business logo">
                </a>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="">
                            <a href="/dashboard">
                                <img src="{{ asset('img/icons/mg-dashboard.svg') }}" alt="img">
                                <span> Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="/user">
                                <img src="{{ asset('img/icons/people-outline.svg') }}" alt="img">
                                <span> User Management</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a  data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="supplierSubmenu">
                                <img src="{{ asset('img/icons/shopping-cart-outline.svg') }}" alt="img">
                                <span> Supplier</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul id="supplierSubmenu" class="collapse">
                                <li><a href="/supplier">Supplier Information</a></li>
                                <li><a href="/order">Order Supplies</a></li>
                                <li><a href="/delivery">Delivery Records</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/item_management">
                                <img src="{{ asset('img/icons/item.svg') }}" alt="img">
                                <span> Item Management</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#inventorySubmenu"
                                aria-expanded="false" aria-controls="inventorySubmenu">
                                <img src="{{ asset('img/icons/inventory.svg') }}" alt="img">
                                <span> Inventory Management</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul id="inventorySubmenu" class="collapse">
                                <li><a href="/inventory_management">Inventory Management</a></li>
                                <li><a href="/inventory_adjustment">Inventory Adjustment</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/activity_log">
                                <img src="{{ asset('img/icons/activity_log.svg') }}" alt="img">
                                <span> Activity Log</span>
                            </a>

                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#reportsSubmenu"
                                aria-expanded="false" aria-controls="reportsSubmenu">
                                <img src="{{ asset('img/icons/product.svg') }}" alt="img">
                                <span> Reports</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul id="reportsSubmenu" class="collapse">
                                <li><a href="/inventory_report">Inventory Report</a></li>
                                <li><a href="/reorder_list_report">Reorder List Report</a></li>
                                <li><a href="/fast_moving_item_report">Fast-Moving Items Report</a></li>
                                <li><a href="/slow_moving_item_report">Slow-Moving Items Report</a></li>
                                <li><a href="/sales_report">Sales Report</a></li>
                                <li><a href="/stock_movement_report">Stock Movement Report</a></li>
                                <li><a href="/expiration_report">Expiration Report</a></li>
                                <li><a href="/sales_return_report">Sales Return Report</a></li>
                                <li><a href="/transaction_history_report">Transaction History Report</a></li>

                            </ul>
                        </li>
                        <li><a href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
    @livewireScripts
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('plugins/apexchart/chart-data.js') }}"></script>
    <script src="{{ asset('plugins/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('plugins/peity/chart-data.js') }}"></script>
    <script src="{{ asset('plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('plugins/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('plugins/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('plugins/flot/chart-data.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        async function printReport() {
            const {
                jsPDF
            } = window.jspdf;

            const doc = new jsPDF();
            const salesTable = document.getElementById('salesTable');

            doc.text('MG Mini Mart Sales Report', 10, 10);
            doc.text('Brgy. Tinongcop, Tantangan, South Cot.', 10, 20);
            doc.text('Manager: Glo-Ann Panes', 10, 30);
            doc.autoTable({
                html: '#salesTable',
                startY: 40
            });

            doc.save('sales-report.pdf');
        }
    </script>

</body>

</html>
