 <div id="step-1" class="@if($steps==0) active @endif tab-pane step-content" style="">
                  <div class="p-4 bg-primary-alt">
                    <div class="col-xl-12 col-lg-12 text-center">
                    <h2>Primary infomation:</h2>
                    
                        <div class="form-group" wire:key="name">
                            <label for="name title">Enter Your Name *</label>
                            <input type="text" class="form-control" id="name" aria-describedby="Name" placeholder="Name">
                        </div>
                        <div class="form-group" wire:key="mobile">
                          <label for="name">Enter Your Mobile *</label>
                            <div class="input-group ">
                          <div class="input-group-prepend">
                            <span class="input-group-text">+91</span>
                          </div>
                          <input type="text" class="form-control" aria-label="mobile" name="mobile" placeholder="8080808080">
                        </div>      
                        </div>
                        <div class="form-group" wire:key="adress">
                           <label for="address">Enter your Address *:</label>
                           <textarea class="form-control" id="adress" rows="2" placeholder="Address"></textarea>
                        </div>                            
                           
                        

      <div class="form-group" wire:key="name">
        <label for="name title">Enter Your Name *</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="Name" placeholder="Name">
      </div>
      <div class="form-group" wire:key="mobile">
        <label for="name">Enter Your Mobile *</label>
        <div class="input-group ">
          <div class="input-group-prepend">
            <span class="input-group-text">+91</span>
          </div>
          <input type="text" class="form-control" aria-label="mobile" name="mobile" placeholder="8080808080">
        </div>
      </div>
      <div class="form-group" wire:key="adress">
        <label for="address">Enter your Address *:</label>
        <textarea class="form-control" id="adress" name="adress" rows="2" placeholder="Address"></textarea>
      </div>



      <div class="custom-control custom-checkbox mb-3">
        <input wire:model='is_preg' type="checkbox" class="custom-control-input" id="customCheck1" >
        <label class="custom-control-label" for="customCheck1">Is there any pregnent womwn in family?</label>
      </div>
      @if ($is_preg)
      <div class="form-group ">
        <input wire:model='preg_count' type="number" class="form-control" id="preg-women" name="pregnent_count" aria-describedby="preg-women"
          placeholder="If yes please specify the count">
      </div>
      @endif

      <div class="custom-control custom-checkbox mb-3">
        <input wire:model='is_newborn' type="checkbox" class="custom-control-input" id="customCheck2">
        <label class="custom-control-label" for="customCheck2">Is there any new born member in family?</label>
      </div>
      @if ($is_newborn)
      <div class="form-group ">
        <input wire:model='newborn_count' type="number" class="form-control" name="newborn_count" aria-describedby="preg-women"
          placeholder="If yes please specify the count">
      </div>
      @endif



      <div class="form-group ">
        <label for="family">Number of total family members:</label>
        <input wire:model='family_count' type="number" class="form-control" id="family" name="family_count" aria-describedby="family"
          placeholder="1" value="1" min="1" max="10">
        @error('family_count') <span class="error">{{ $message }}</span> @enderror
      </div>

      <a href="#" class="btn btn-primary sw-btn-next">Next</a>
    </div>

  </div>
</div>

@push('script')
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    $(".wizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection) {
      console.log("You are on step " + stepNumber + " now");
      console.log( @this.get('steps'));
      @this.set('steps', stepNumber);
  });
    })
</script>
@endpush