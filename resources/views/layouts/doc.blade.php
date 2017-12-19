<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Laravel Starter - Documentation</title>

    <!-- Bootstrap -->
    <link href="{{ asset('/doc/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2">
                <ul class="nav nav-sidebar">
                    <li class="{{ Route::currentRouteName() == 'documentation.index' ? 'active' : '' }}">
                        <a href="{{ route('documentation.index') }}">
                            Introduction
                        </a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'documentation.requirements' ? 'active' : '' }}">
                        <a href="{{ route('documentation.requirements') }}">
                            Requirements
                        </a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'documentation.installation' ? 'active' : '' }}">
                        <a href="{{ route('documentation.installation') }}">
                            Installation
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-9 col-md-10">
                @yield('content')
            </div>
        </div>
    </div>
  </body>
</html>