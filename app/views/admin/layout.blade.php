<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Antonio Carlos Ribeiro - Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/templates/sb-admin/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/layouts/admin/css/flags.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/templates/sb-admin/css/sb-admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/templates/sb-admin/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/layouts/admin/css/morris-0.4.3.min.css') }}">

	  <style>
		  body {
			  font-family: arial;
		  }
	  </style>
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="{{ URL::route('admin.languages.index') }}">Antonio Carlos Ribeiro - Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->

        @include('admin._partials.mainMenu')
      </nav>

      <div id="page-wrapper">

			@yield('pageHeader')

			@include('admin._partials.messages')

			@yield('content')

	        @yield('secondary.content')

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="{{ asset('assets/templates/sb-admin/js/jquery-1.10.2.js') }}"></script>
    <script src="{{ asset('assets/templates/sb-admin/js/bootstrap.js') }}"></script>

    <script src="{{ asset('assets/layouts/admin/js/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/layouts/admin/js/morris-0.4.3.min.js') }}"></script>

    <script src="{{ asset('assets/layouts/admin/js/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/layouts/admin/js/jquery.flot.pie.js') }}"></script>

    <script src="{{ asset('assets/layouts/admin/js/moment.min.js') }}"></script>

    <script type="text/javascript">
    	@yield('inline-javascript')
    </script>

    @include('global._partials.google-analytics')
  </body>
</html>
