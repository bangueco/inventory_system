<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
  <header>
    <div class="logo">@yield('title')</div>
  </header>
  <div class="sidebar">
    <ul>
      <li><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
      <li><a href="{{ route('manage_products.page') }}">Manage Products</a></li>
      <li><a href="{{ route('logout.user') }}">Logout</a></li>
    </ul>
  </div>
  <main>
    @yield('content')
  </main>
</body>

</html>