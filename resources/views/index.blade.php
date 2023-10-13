
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Tabbed IFrames</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('asset')}}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('asset')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
<div class="wrapper">
   @include('admin.partials.side_bar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
        <div class="nav navbar navbar-expand navbar-white navbar-light border-bottom p-0">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            <div class="nav-item dropdown">
                <a class="nav-link bg-danger dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Close</a>
                <div class="dropdown-menu mt-0">
                    <a class="dropdown-item" href="#" data-widget="iframe-close" data-type="all">Close All</a>
                    <a class="dropdown-item" href="#" data-widget="iframe-close" data-type="all-other">Close All Other</a>
                </div>
            </div>
            <a class="nav-link bg-light" href="#" data-widget="iframe-scrollleft"><i class="fas fa-angle-double-left"></i></a>
            <ul class="navbar-nav overflow-hidden" role="tablist"></ul>
            <a class="nav-link bg-light" href="#" data-widget="iframe-scrollright"><i class="fas fa-angle-double-right"></i></a>

        </div>
        <div class="tab-content">
            <div class="tab-empty">
                <h2 class="display-4">
                   No Select Item
                </h2>
            </div>
            <div class="tab-loading">
                <div>
                    <h2 class="display-4">Tab is loading <i class="fa fa-sync fa-spin"></i></h2>
                </div>
            </div>
        </div>
    </div>
  @include('admin.partials.footer')
</div>
<script src="{{asset('asset')}}/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('asset')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('asset')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="{{asset('asset')}}/dist/js/adminlte.js"></script>
<script src="{{asset('asset')}}/plugins/sweetalert2/sweetalert2.js"></script>
</body>
</html>
