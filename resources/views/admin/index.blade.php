<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

{{--    @vite('resources/js/app.js')--}}
    @stack('js')
    @stack('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
    <div class="wrapper">
        @include('admin.partials.nav_bar')
        @include('admin.partials.side_bar')
        <div class="content-wrapper">
            @yield('content')
        </div>
        @include('admin.partials.footer')
    </div>
<script src="{{asset('asset')}}/plugins/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js"></script>
<script src="{{asset('asset')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('asset')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="{{asset('asset')}}/dist/js/adminlte.min.js"></script>
<script src="{{asset('asset')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('asset')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('asset')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('asset')}}/plugins/sweetalert2/sweetalert2.js"></script>
<script src="{{asset('asset')}}/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{asset('asset')}}/plugins/jquery-validation/additional-methods.min.js"></script><script src="{{asset('asset')}}/plugins/select2/js/select2.full.min.js"></script>
</body>
</html>
