<!DOCTYPE html>
<html lang="en" ng-cloak>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Information Management System | </title>
         <!-- No Cache BEGIN -->
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate, max-age=0">

    <link rel="stylesheet" type="text/css" href="/assets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/angular-block-ui/dist/angular-block-ui.min.css">
    <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/iCheck/skins/flat/green.css">
    <link rel="stylesheet" href="/assets/custom/css/custom.min.css">
    <base href="/">
     <!-- No Cache END-->
  </head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
    @include('layouts.sidebar')
    @include('layouts.nav')
      <div class="right_col" role="main">
      <div ng-view></div>
      </div>
    @include('layouts.global-templates')
    @include('layouts.footer')
    </div>
  </div>
  <script type="text/javascript" src="/assets/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="/assets/custom/js/custom.min.js"></script>
  <script data-main="/module-loader/requirejs-config.js" src="/assets/requirejs/require.js"></script>
  <script type="text/javascript" src="/js/app.js"></script>
  @yield('scripts')
</body>
</html>