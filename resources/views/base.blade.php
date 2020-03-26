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

  
    <section class="p-3">
        <div class="container text-center">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12 col-xl-12">
                    <h1>Please Enter Your Details</h1>
                    <div class="text-small text-muted text-center">* fields are mandatory</div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-3">
        <div class="container">
          <form class="wizard sw-main sw-theme-default">
             @livewire('links')
              <div class="sw-container tab-content" style="min-height: 158px;">
               
                @livewire('data')
               
                @livewire('data2')

               
              </div>
  
                </div>
            
    </section>
   


    @include('common.footer')
    
    @include('common.script')

    @livewireScripts

    @stack('script')
  </body>
</html>
