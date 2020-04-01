<div class="card text-center" style="margin-bottom:1rem;">

  <div class="card-body">
    <h5 class="card-title">Bored In Qurantine</h5>
    <p class="card-text">Why not make the quarntine more fun!?</p>
    <a wire:click='generate' wire:loading.class="disabled" class="btn btn-primary" style="color:white;">Generate Activity</a>
    @if($bored)
    <p class='mt-2'><mark><strong>Activity : {{$bored['activity']}}</strong></mark></p>
    @endif
  </div>

</div>