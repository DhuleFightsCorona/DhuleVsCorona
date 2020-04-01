<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    @include('common.header')

     @livewireStyles

    @stack('header') 
    
    @laravelPWA
  </head>

  <body>
  

    @include('common.navbar')

    {{-- @livewire('counter') --}}

    @yield('content')
    
    @include('common.footer')

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162015262-1" aync></script>
<script >
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162015262-1');
</script>


    @include('common.script')

    @livewireScripts

   <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    
  <script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
<script>
    Weglot.initialize({
        api_key: 'wg_fbec8ceecab86b90331b9aa9f2730f846',
        dangerously_force_dynamic: ["#change3","#change1","#change2","#change4","#change5","#change6","#change7","#change8","#change9","#change10","#change11","#change12","#change13","#change14","#change15","#change16","#change17","#change18","#change19","#change20","#change21","#change22","#change23","#change24","#change25","#change26","#change27"],
    });

</script>

    @stack('script')
  </body>
</html>
