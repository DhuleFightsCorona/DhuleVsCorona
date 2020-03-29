@extends('base')

@section('content')

 <section >
      <div class="container" >
        @livewire('stats')
        <div class="row">
           @livewire('news')
        </div>
      </div>
    </section>
    
@endsection