
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
  <a class="skip-link" href="#main-content">Skip to main content</a>

  <header class="site-header">
    <a class="brand" href="{{ route('home') }}">
      <span class="brand-name">
        NOIR
        <small>CAFÉ</small>
      </span>
    </a>

    <nav aria-label="Main navigation">
      <a href="{{ route('home') }}"
         class="{{ request()->routeIs('home') ? 'active' : '' }}"
         @if(request()->routeIs('home')) aria-current="page" @endif>HOME</a>

      <a href="{{ route('menu') }}"
         class="{{ request()->routeIs('menu') ? 'active' : '' }}"
         @if(request()->routeIs('menu')) aria-current="page" @endif>MENU</a>

      <a href="{{ route('about') }}"
         class="{{ request()->routeIs('about') ? 'active' : '' }}"
         @if(request()->routeIs('about')) aria-current="page" @endif>ABOUT</a>

      <a href="{{ route('contact') }}"
         class="{{ request()->routeIs('contact') ? 'active' : '' }}"
         @if(request()->routeIs('contact')) aria-current="page" @endif>CONTACT</a>
    </nav>
  </header>

  <main id="main-content" tabindex="-1">
    @yield('content')
  </main>

  <footer class="site-footer">
    <p>© {{ date('Y') }} NOIR Café. Crafted with care.</p>
    <p>Group Members: Ashley Shanne P. Caiña · Carl Umayam · Richelle Ann W. Calabroso</p>
  </footer>

  @stack('scripts')
</body>
</html>
