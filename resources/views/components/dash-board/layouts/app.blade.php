<!DOCTYPE html>
<html lang="en">

<head>
    <x-dash-board.partials.head />
    @stack('styles')
    <style>
        input[type="file"] {
            background: white;
        }

        .pagination-boxes {
            list-style: none;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            /* Adjust the spacing between boxes as needed */

        }

        .pagination-boxes li {
            display: inline-block;
            padding: 5px 10px;
            border: 1px solid #ccc;
            background-color: #f7f7f7;
            border-radius: 4px;
        }
        .pagination-boxes li a {
            color: #007bff;
            text-decoration: none;
        }

        .pagination-boxes li.active {
            background-color: #007bff;
            color: #fff;
        }

        .pagination-boxes li.disabled {
            pointer-events: none;
            opacity: 0.5;
        }
    </style>
</head>

<body>
    <x-dash-board.partials.nav-bar />
    <div class="container-fluid page-body-wrapper">
        <x-dash-board.partials.side-bar />
        {{ $slot }}
    </div>



    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->

    @stack('scripts')

</body>

</html>
