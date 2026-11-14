<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'NOIR Café')</title>
  <link rel="stylesheet" href="{{ asset('css/shared.css') }}">
  @stack('styles')
</head>
<body>
  <header class="site-header">
   <a class="brand" href="{{ route('home') }}">

    <span class="brand-name">
        NOIR
        <small>CAFÉ</small>
    </span>
</a>
    <nav aria-label="Main navigation">
      <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">HOME</a>

<a href="{{ route('menu') }}">MENU</a>

      <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">ABOUT</a>
      <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">CONTACT</a>
    </nav>
  </header>
  <main>@yield('content')</main>
  <footer class="site-footer">
    <p>© {{ date('Y') }} NOIR Café. Crafted with care.</p>
    <p>Group Members: Ashley Shanne P. Caiña · Carl Umayam · Richelle Ann W. Calabroso</p>
  </footer>
  @stack('scripts')
</body>
</html>
