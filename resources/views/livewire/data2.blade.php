<div id="step-2" class=" @if($steps==1) active @endif tab-pane step-content text-center" style="">
    <div class="p-4 bg-primary-alt">
        <div class="col-xl-12 col-lg-12 text-center">
            <h2 id='change10'>Health Details</h2>
            <div class="form-group">
                <label id='change11'>Select Blood Group</label>
                <select wire:ignore class="form-control" wire:model='blood_group' name="blood_group">
                    <option selected>Select Blood Group *</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="dk">Don't Know</option>
                </select>
                @error('blood_group') <div class="text-danger" id='change12'>{{ $message }}</div> @enderror
            </div>
            <div class="custom-control custom-checkbox mb-3 text-center">
                <input type="checkbox" class="custom-control-input" id="customCheck4">
                <label class="custom-control-label" for="customCheck4" id='change13'>Are You Ready To Donate
                    Blood?</label>
            </div>
            <div class="row" id='change14'>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="weight">Weight (in Kgs) *</label>
                        <input wire:model='weight' type="number" class="form-control" id="weight" name='weight'
                            value="{{old('weight')}}" aria-describedby="weight" placeholder="0">
                        @error('weight') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="height">Height (in ft.) *:</label>
                        <input wire:model='height' type="number" class="form-control" id="height" name='height'
                            {{old('height')}} aria-describedby="height" placeholder="0">
                        @error('height') <div class="text-danger" id='change17'>{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="age">Age *</label>
                        <input wire:model='age' type="number" class="form-control" id="age" name='age' {{old('age')}}
                            aria-describedby="age" placeholder="0">
                        @error('age') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>

            </div>




        </div>
        <div class="row text-center">
            <div class="col-sm-6">
                <div class="form-group">
                    <label id='change15'>Gender *</label>
                    <select wire:ignore class="form-control" wire:model='gender' name="gender">
                        <option selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>

                    </select>
                    @error('gender') <div class="text-danger" id='change16'>{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label id='change17'>Are you physically challenged?*</label>
                    <select wire:ignore class="form-control" wire:model='is_physically_challenged'
                        name="is_physically_challenged">
                        <option selected>Select</option>
                        <option value="0">No</option>
                        <option value="1">Yes</option>

                    </select>
                    @error('is_physically_challenged') <div class="text-danger" id='change18'>{{ $message }}</div>
                    @enderror
                </div>
            </div>


        </div>
        <div class="form-group text-center">
            <label id='change19'>Are you experiencing any of the symptoms below(mark all those applicable)</label>
            <select wire:ignore class="form-control" name="symptoms[]" multiple>
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
            <input wire:model='symptoms_details' type="text" class="form-control" id="sym2" aria-describedby="sym2"
                name='symptoms_details' placeholder="Symptoms">
            @error('symptoms_details') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="form-group text-center" id='change21'>
            <div data-children-count="1">
                <label for="temp">Do you have Fever?*</label>
                <input wire:model='temp' type="range" class="custom-range" id="temp" name="temp" min="97" max="105"
                    value="@if(old('temp')) {{old('temp')}} @else 99 @endif">
                @error('temp') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            <div class="custom-range-labels">
                <span>97C</span>
                <span>98C</span>
                <span>99C</span>
                <span>100C</span>
                <span>101C</span>
                <span>102C</span>
                <span>103C</span>
                <span>104C</span>
                <span>105C</span>
            </div>
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
            <div class="col-lg-6" id='change24'>
                <div class="form-group text-center">
                    <label>How have your symptoms progressed over the last 48 hours ?:</label>
                    @error('symptoms_condition') <div class="text-danger">{{ $message }}</div> @enderror
                    <div class="custom-control custom-radio">
                        <input wire:model='symptoms_condition' type="radio" id="prog1" name="symptoms_condition"
                            value="Improved" class="custom-control-input">
                        <label class="custom-control-label" for="prog1">Improved</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input wire:model='symptoms_condition' type="radio" id="prog2" name="symptoms_condition"
                            value="No Change" class="custom-control-input">
                        <label class="custom-control-label" for="prog2">No Change</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input wire:model='symptoms_condition' type="radio" id="prog3" name="symptoms_condition"
                            value="Worsened" class="custom-control-input">
                        <label class="custom-control-label" for="prog3">Worsened</label>
                    </div>
                </div>
            </div>
        </div>






        <div class="col-lg-12">
            <div class="form-group">
                <div class="form-group">
                    <label id='change25'>Are you experiencing any of the Disease below (mark all those
                        applicable)</label>
                    <select wire:ignore wire:model='medical_condition' class="form-control" multiple
                        name='medical_condition[]'>
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
        <div class="custom-control custom-checkbox mb-3 text-center">
            <input wire:model='is_medical_history' name='is_medical_history' type="checkbox"
                class="custom-control-input" id="customCheck3">
            <label class="custom-control-label" for="customCheck3" id='change26'>Select checkbox if you have any Medical
                history.</label>
        </div>
        @if ($is_medical_history)
        <div class="row text-center" id='change27'>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="operation">Any Operative History:</label>
                    <input wire:model='operative_history' type="text" class="form-control" id="operation"
                        name="operative_history" aria-describedby="operation" placeholder="mention here">
                    @error('operative_history') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="allergy">Allergies:</label>
                    <input wire:model='allergy' type="text" class="form-control" id="allergy" name="allergy"
                        aria-describedby="allergy" placeholder="mention here">
                    @error('allergy') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="med">Medicines required on daily/monthly basis(specify if
                        any):</label>
                    <input wire:model='medicine' type="text" class="form-control" id="medicine" name="medicine"
                        aria-describedby="med" placeholder="Eg: Medicine Daily Two Times">
                    @error('medicine') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="ins">Insulin or injections required on daily/weekly basis(specify if any):</label>
                    <input wire:model='insulin' type="text" class="form-control" id="insulin" name="insulin"
                        aria-describedby="ins" placeholder="Eg: Insuline Daily Two Times">
                    @error('insulin') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>


        </div>


        @endif
        <button wire:click.prevent='sumbit' class="btn btn-primary text-center">Save</a>

    </div>

</div>
</div>
</div>
</div>

@push('script')
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        $(".wizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection) {
            @this.set('steps', stepNumber)
        });
    });

    window.livewire.on('validatedas', () => {
        $('#former').submit();
    });
</script>
@endpush