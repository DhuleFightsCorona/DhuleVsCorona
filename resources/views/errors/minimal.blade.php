<!DOCTYPE html>
<html lang="en">
    <head>
        @include('common.header')
    </head>
    <body>
    <div class="loader">
      <div class="loading-animation"></div>
    </div>

    <section class="min-vh-100 bg-primary-3 text-light py-5 o-hidden">
      <div class="container">
        <div class="row justify-content-center mb-md-6">
          <div class="col-auto">
            <a href="/">
              <img src="/template/assets/img/logo-white.svg" alt="Dhule Fights Corona">
            </a>
          </div>
        </div>
        <div class="row text-center py-6">
          <div class="col layer-2">
            <h1 class="display-1 mb-0">@yield('code')</h1>
            <h2 class="h1">@yield('message')</h2>
            <div class="lead mb-4">It appears the page you were looking for couldn’t be found.</div>
            <a class="btn btn-primary btn-lg" href="/">Go back to home</a>
          </div>
        </div>
      </div>
      
    </section>
    @include('common.script')
    </body>
</html>
    

