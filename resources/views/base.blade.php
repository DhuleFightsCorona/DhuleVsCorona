<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    @include('common.header')

     @livewireStyles

    @stack('header')
    
  </head>

  <body>
    <div class="loader">
      <div class="loading-animation"></div>
    </div>

    @include('common.navbar')

    {{-- @livewire('counter') --}}

    @yield('content')
    
    @include('common.footer')
    
    @include('common.script')

    @livewireScripts

    @stack('script')
  </body>
</html>
