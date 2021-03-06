<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Central Digital Learning</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        @yield('style')
        <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
        <style media="screen">
          html, body{
             width:100%;
             height:100%;
             background-color:#fff;
             font-family: 'Sansita', sans-serif;
          }
        </style>
    </head>
      <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

          @include("layouts.header")
          @include("layouts.sidebar")

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
                @yield("content")
          </div><!-- /.content-wrapper -->
          <footer class="main-footer">
            <div class="pull-right hidden-xs">
              <b>Laravel</b> 5.2
            </div>
            <strong>Copyright &copy; 2016 <a href="#">Central Digital Learning Teknik Kimia</a>.</strong> All rights reserved.
          </footer>

        </div><!-- ./wrapper -->

        @yield('script')
    </body>
</html>
