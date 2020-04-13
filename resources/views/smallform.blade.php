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
          <form class="" id='forme' action="/f" method="post">
            @csrf
            @method('POST')
             @livewire('links')
              <div class="" style="min-height: 158px;">
                <div class="p-3 bg-primary-alt">
                    <div class="col-xl-12 col-lg-12 text-center">
                      <div id='change1' >
                        <h2 >Primary information:</h2>
                      </div>
                    
                   
      <div id='change2'  class="form-group" >
        <label  for="name title">Enter Your Name *</label>
      <input wire:model='name' type="text" class="form-control" id="name" value="{{old('name')}}" name="name" aria-describedby="Name" placeholder="Name">
      @error('name') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      <div id='change3' class="form-group" >
        <label for="name">Enter Your Mobile *</label>
        <div class="input-group ">
          <div class="input-group-prepend">
            <span class="input-group-text">+91</span>
          </div>
          <input wire:model='mobile' type="number" class="form-control" aria-label="mobile" value="{{old('mobile')}}" name="mobile" placeholder="8080808080">
        </div>
        @error('mobile') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      <div id='change4' class="form-group" wire:key="adress">
        <label for="address">Enter your Address *:</label>
        <textarea  wire:model='adress' class="form-control" id="adress" name="adress" rows="2" placeholder="Address" >{{old('adress')}}</textarea>
        @error('adress') <div class="text-danger">{{ $message }}</div> @enderror
      </div>


{{-- 
      <div class="custom-control custom-checkbox mb-3" id='change5'>
      <input wire:model='is_preg' type="checkbox" class="custom-control-input"  name="is_preg" id="customCheck1" value="{{old('is_preg')}} " >
        <label class="custom-control-label" for="customCheck1">Is there any pregnant women in family?</label>
      </div>
      @if ($is_preg)
      <div class="form-group " id='change6'>
        <input wire:model='pregnent_count' type="number" class="form-control" id="preg-women"  name="pregnent_count" value="{{old('pregnent_count')}}"  aria-describedby="preg-women"
          placeholder="If yes please specify the count">
          @error('pregnent_count') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      @endif

      <div class="custom-control custom-checkbox mb-3" id="change7">
        <input wire:model='is_newborn' type="checkbox" class="custom-control-input" name="is_newborn" value="{{old('is_newborn')}}" id="customCheck2">
        <label class="custom-control-label" for="customCheck2">Is there any new born member in family?</label>
      </div>
      @if ($is_newborn)
      <div class="form-group" id="change8">
        <input wire:model='newborn_count' type="number" class="form-control" name="newborn_count" value="{{old('newborn_count')}}"  aria-describedby="preg-women"
          placeholder="If yes please specify the count">
          @error('newborn_count') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      @endif --}}


{{-- 
      <div class="form-group " id='change9'>
        <label for="family">Number of total family members:</label>
        <input wire:model='family_count' type="number" class="form-control" id="family" name="family_count" value="{{old('family_count')}}"  aria-describedby="family"
          placeholder="Family Count" value="1" >
      @error('family_count') <div class="text-danger">{{ $message }}</div> @enderror
      </div> --}}

      {{-- <a wire:click='check_validation' class="btn btn-primary text-center" style="color:#fff">Next</a> --}}
    {{-- </div>

  </div>
                --}}
<div class="form-group">
                            <label id='change11'>Select Blood Group</label>
                            <select wire:ignore class="form-control" wire:model='blood_group' name="blood_group">
                                <option  selected>Select Blood Group *</option>
                                <option value="A+" >A+</option>
                                <option value="A-">A-</option>
                                <option value="B+" >B+</option>
                                <option value="B-" >B-</option>
                                <option value="AB+" >AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+" >O+</option>
                                <option value="O-" >O-</option>
                                <option value="dk" >Don't Know</option>
                            </select>
                             @error('blood_group') <div class="text-danger" id='change12'>{{ $message }}</div> @enderror
                            </div>
                            <div class="custom-control custom-checkbox mb-3 text-center">
                <input  type="checkbox" class="custom-control-input" id="customCheck4">
                <label class="custom-control-label" for="customCheck4" id='change13'>Are You Ready To Donate Blood?</label>
            </div>
                            <div class="row" id='change14'>
                                <div class="col-sm-6">
                    <div class="form-group">
                        <label id='change15'>Gender *</label>
                       <select wire:ignore class="form-control" wire:model='gender' name="gender">
                                <option selected>Select Gender</option>
                                <option value="male" >Male</option>
                                <option value="female">Female</option>
                                <option value="other" >Other</option>
                                
                            </select>
                             @error('gender') <div class="text-danger" id='change16'>{{ $message }}</div> @enderror
                    </div>
                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                            <label for="age" >Age *</label>
                            <input wire:model='age' type="number" class="form-control" id="age" name='age' {{old('age')}} aria-describedby="age" placeholder="0">
                                         @error('age') <div class="text-danger" >{{ $message }}</div> @enderror
                                    </div>
                                </div>

                            </div>
                            
                
               

            </div>
            <div class="form-group text-center">
                <label id='change19'>Are you experiencing any of the symptoms below(mark all those applicable)</label>
                <select class="form-control" name="symptoms[]" multiple>
                    <option>Dry cough</option>
                    <option>Sneezing</option>
                    <option>Sore Throat</option>
                    <option>Weakness</option>
                    <option>Sore Throat</option>
                    <option>Difficulty in breathing</option>
                    <option>Drowsiness</option>
                    <option>Persistant pain and pressure in chest</option>
                    <option>Severe Weakness</option>
                    <option>None Of The Above</option>
                </select>
            </div>
            <div class="form-group text-center" id='change20'>
                <label for="sym2">Symptoms which are not listed above(specify if any)</label>
                <input wire:model='symptoms_details' type="text" class="form-control" id="sym2" aria-describedby="sym2" name='symptoms_details' placeholder="Symptoms">
                 @error('symptoms_details') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="form-group text-center">
                <label for="trav" id='change22'>Please select your travel and exposure details:</label>
                <select wire:ignore class="form-control" name='exposure[]'>
                    <option value="1" selected>No contact with anyone with Symptoms</option>
                    <option value="2">History of travel or meeting in affected geographical area in last 14
                        days</option>
                    <option value="3">Close Contact with confirmed COVID in last 14 days</option>
                </select>
            </div>

            <div class="row text-center">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label id='change23'>Any Travel History (mark all those applicable)</label>
                        <select wire:ignore class="form-control" multiple name='travel[]'>
                            <option>International</option>
                            <option>Interstate</option>
                            <option>Interdistrict</option>
                            <option>None Of The Above</option>
                        </select>
                    </div>
                </div> 
                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label id='change25'>Are you experiencing any of the symptoms below(mark all those applicable)</label>
                            <select wire:ignore  wire:model='medical_condition' class="form-control" multiple name='medical_condition[]'>
                                <option>Diabetes</option>
                                <option>High Blood Pressure</option>
                                <option>Kidney Disease</option>
                                <option>Heart Disease</option>
                                <option>Lung Disease</option>
                                <option>Strokes</option>
                                <option>Reduced Immunity</option>
                                <option>None Of The Above</option>
                            </select>
                        </div>
                    </div>
                </div>
               
            </div>


            
                <div class="custom-control custom-checkbox mb-3 text-center">
                <input wire:model='is_medical_history' name='is_medical_history' type="checkbox" class="custom-control-input" id="customCheck3">
                <label class="custom-control-label" for="customCheck3" id='change26'>Select checkbox if you have any Medical
                    history.</label>
            </div>
            {{-- @if ($is_medical_history) --}}
            <div class="row text-center" id='change27'>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="operation">Any Operative History(optional)</label>
                        <input wire:model='operative_history' type="text" class="form-control" id="operation" name="operative_history" aria-describedby="operation"
                            placeholder="mention here">
                             @error('operative_history') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="allergy">Allergies(optional)</label>
                        <input wire:model='allergy' type="text" class="form-control" id="allergy" name="allergy" aria-describedby="allergy"
                            placeholder="mention here">
                             @error('allergy') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
               
                
                

            </div>
        
       
            {{-- @endif --}}
            <button wire:click.prevent='sumbit' class="btn btn-primary text-center">Save</a>

</div>
        
    </div>
              </form>
               
              </div>
  
                </div>
            
    </section>
@endsection

