@extends('base')

@section('content')

 <section style="padding:2rem;">
      <div class="container" >
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            @livewire('banner')
            @include('component.formalert')
            @livewire('bored')
            
          </div>
        </div>
        <div class="row">
           @livewire('news')
        </div>
      </div>
    </section>
    
@endsection