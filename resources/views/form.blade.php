@extends('base')

@section('content')
    <section class="p-3">
        <div class="container text-center">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12 col-xl-12">
                   @livewire('banner')
                    <h1>Enter Your Details</h1>
                    <div class="text-small text-muted text-center">* fields are mandatory</div>
                    <div class="text-small text-muted text-center">We are collecting detail health data of citizens of Dhule. We are analyzing it periodically and notifying it to health authorities of our city.</div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-3">
        <div class="container">
          <form class="wizard sw-main sw-theme-default" id='former' action="/f" method="post">
            @csrf
            @method('POST')
             @livewire('links')
              <div class="sw-container tab-content" style="min-height: 158px;">
               
                
                @livewire('data')
               
                @livewire('data2')

                
              </form>
               
              </div>
  
                </div>
            
    </section>
@endsection

