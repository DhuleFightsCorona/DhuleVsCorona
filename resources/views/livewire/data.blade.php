<div id="step-1" class="@if($steps==0) active @endif tab-pane step-content" style="">
  <div class="p-3 bg-primary-alt">
    <div class="col-xl-12 col-lg-12 text-center">
      <div id='change1'>
        <h2>Primary information:</h2>
      </div>


      <div id='change2' class="form-group">
        <label for="name title">Enter Your Name *</label>
        <input wire:model='name' type="text" class="form-control" id="name" value="{{old('name')}}" name="name"
          aria-describedby="Name" placeholder="Name">
        @error('name') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      <div id='change3' class="form-group">
        <label for="name">Enter Your Mobile *</label>
        <div class="input-group ">
          <div class="input-group-prepend">
            <span class="input-group-text">+91</span>
          </div>
          <input wire:model='mobile' type="number" class="form-control" aria-label="mobile" value="{{old('mobile')}}"
            name="mobile" placeholder="8080808080">
        </div>
        @error('mobile') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      <div id='change4' class="form-group" wire:key="adress">
        <label for="address">Enter your Address *:</label>
        <textarea wire:model='adress' class="form-control" id="adress" name="adress" rows="2"
          placeholder="Address">{{old('adress')}}</textarea>
        @error('adress') <div class="text-danger">{{ $message }}</div> @enderror
      </div>



      <div class="custom-control custom-checkbox mb-3" id='change5'>
        <input wire:model='is_preg' type="checkbox" class="custom-control-input" name="is_preg" id="customCheck1"
          value="{{old('is_preg')}} ">
        <label class="custom-control-label" for="customCheck1">Is there any pregnant women in family?</label>
      </div>
      @if ($is_preg)
      <div class="form-group " id='change6'>
        <input wire:model='pregnent_count' type="number" class="form-control" id="preg-women" name="pregnent_count"
          value="{{old('pregnent_count')}}" aria-describedby="preg-women" placeholder="If yes please specify the count">
        @error('pregnent_count') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      @endif

      <div class="custom-control custom-checkbox mb-3" id="change7">
        <input wire:model='is_newborn' type="checkbox" class="custom-control-input" name="is_newborn"
          value="{{old('is_newborn')}}" id="customCheck2">
        <label class="custom-control-label" for="customCheck2">Is there any new born member in family?</label>
      </div>
      @if ($is_newborn)
      <div class="form-group" id="change8">
        <input wire:model='newborn_count' type="number" class="form-control" name="newborn_count"
          value="{{old('newborn_count')}}" aria-describedby="preg-women" placeholder="If yes please specify the count">
        @error('newborn_count') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      @endif



      <div class="form-group " id='change9'>
        <label for="family">Number of total family members:</label>
        <input wire:model='family_count' type="number" class="form-control" id="family" name="family_count"
          value="{{old('family_count')}}" aria-describedby="family" placeholder="Family Count" value="1">
        @error('family_count') <div class="text-danger">{{ $message }}</div> @enderror
      </div>

      <a wire:click='check_validation' class="btn btn-primary text-center" style="color:#fff">Next</a>
    </div>

  </div>
</div>

@push('script')
<script type="text/javascript">

  window.livewire.on('validated', is_validated => {
    if (is_validated) {
      $('.wizard').smartWizard("next");
    }
  });
  document.addEventListener('DOMContentLoaded', function () {
    $(".wizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection) {
      @this.set('steps', stepNumber)
    });

  });


</script>
@endpush