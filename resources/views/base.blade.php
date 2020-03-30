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

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162015262-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162015262-1');
</script>


    @include('common.script')

    @livewireScripts

   
    
  <script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
<script>
    Weglot.initialize({
        api_key: 'wg_fbec8ceecab86b90331b9aa9f2730f846'
    });
</script>
      
    @laravelPWA

    @stack('script')
  </body>
</html>
