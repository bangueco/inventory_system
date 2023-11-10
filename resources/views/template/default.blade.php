<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('assets/css/framework/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  @yield('links')
</head>

<body>
  <div class="body">
    <div class="sidebar">
      <ul>
        <li><a class="sidelink" href="{{ route('dashboard.page') }}">Dashboard</a></li>
        <li><a class="sidelink" href="{{ route('manage_products.page') }}">Manage Products</a></li>
        <li><a class="sidelink" href="{{ route('manage_accounts.page') }}">Manage Accounts</a></li>
        <li><a class="sidelink" href="{{ route('logout.user') }}">Logout</a></li>
      </ul>
    </div>
    <main class="container">
      @yield('content')
    </main>
    <script src="{{ asset('assets/javascript/libraries/jquery.min.js.js') }}"></script>
    <script src="{{ asset('assets/javascript/index.js') }}"></script>
    @yield('javascript')
  </div>
</body>

</html>