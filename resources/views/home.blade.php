@extends('base')

@push('header')
    <style>
      table {
    border-collapse: separate;
    border-spacing: 2px;
   
}
.table thead th {
    vertical-align: bottom;
    border: 2px solid #dee2e6;
    border-radius: 5px;
}
table tbody tr {
  background-color: rgb(248, 249, 250);
}
.table td, .table th {
    vertical-align: top;
    border: 2px solid #dee2e6;
    border-radius: 5px;
}
.card {
    margin-bottom: 0rem;
}
.table-sm td{
    padding: .25rem;
}
table thead th.sticky {
    top: 4px;
    background: #f1f1f1;
}
.sticky {
    position: -webkit-sticky;
    position: sticky;
}
.title {
  font-size: 2rem;
}

@media (max-width: 1200px) {
  .title {
    font-size: calc(.2rem + 3.3vw);
  }
}
.striped { 
    stroke: red;
}
    </style>
@endpush

@section('content')

 <section >
      <div class="container" >
        @livewire('stats')
        
         <livewire:maps>
                  
      </div>
    </section>
    
@endsection