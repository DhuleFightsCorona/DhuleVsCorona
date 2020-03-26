 <div id="step-2" class=" @if($steps==1) active @endif tab-pane step-content" style="">
                  <div class="p-4 bg-primary-alt">
                    <div class="col-xl-12 col-lg-12 text-center">
                    <h2>Health Details</h2>
                        <div class="form-group">
                            <select class="form-control">
                                <option selected>Select Blood Group</option>
                                <option value="A+">A+</option>
                                <option value="A-"">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB+">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="weight">Weight (in Kgs)*:</label>
                                <input type="number" class="form-control" id="weight" aria-describedby="weight"
                                    placeholder="0">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="height">Height (in cm)*:</label>
                            <input type="number" class="form-control" id="height" aria-describedby="height"
                                placeholder="0">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="number" class="form-control" id="age" aria-describedby="age" placeholder="0">

                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Gender:</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="male" name="custom-radio" class="custom-control-input">
                                <label class="custom-control-label" for="male">Male</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="female" name="custom-radio" class="custom-control-input">
                                <label class="custom-control-label" for="female">Female</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="other" name="custom-radio" class="custom-control-input">
                                <label class="custom-control-label" for="other">Other</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label >Physically challenged?:</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="yes" name="custom-radio" class="custom-control-input">
                                <label class="custom-control-label" for="yes">Yes</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="no" name="custom-radio" class="custom-control-input">
                                <label class="custom-control-label" for="no">No</label>
                            </div>
                            </div>
                        </div>
            
            
                    </div>
                    <div class="form-group">
                        <label >Are you experiencing any of the symptoms below(mark all those applicable)</label>
                        <select class="form-control" multiple>
                        <option value="drycough">Dry cough</option>
                        <option value="2">Sneezing</option>
                        <option >Sore Throat</option>
                        <option >Weakness</option>
                        <option >Sore Throat</option>
                        <option >Difficulty in breathing</option>
                        <option >Drowsiness</option>
                        <option >Persistant pain and pressure in chest</option>
                        <option >Severe Weakness</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sym2">Symptoms which are not listed above(specify if
                                any):</label>
                            <input type="text" class="form-control" id="sym2" aria-describedby="sym2"
                                placeholder="Symptoms">
                    </div>
                    
                    <div class="form-group">
                                      <div data-children-count="1">
                <label for="temp">Approximate Body temperature(in F):</label>
                <input type="range" class="custom-range" id="custom-range-example-1" min="97" max="105" value="99">
              </div>
              <div class="custom-range-labels">
                <span>97 F</span>
                 <span>98 F</span>
                  <span>99 F</span>
                   <span>100 F</span>
                    <span>101 F</span>
                     <span>102 F</span>
                      <span>103 F</span>
                       <span>104 F</span>
                        <span>105 F</span>
                        
              </div>
                    </div>
                    <div class="form-group">
                        <label for="trav">Please select your travel and exposure details:</label>
                            <select class="form-control">
                                <option value="1">No Travel History</option>
                                <option value="2">No contact with anyone with Symptoms</option>
                                <option value="4">History of travel or meeting in affected geographical area in last 14
                                    days</option>
                                <option value="6">Close Contact with confirmed COVID in last 14 days</option>
                            </select>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                             <div class="form-group">
                        <label >Any Travel History (mark all those applicable)</label>
                        <select class="form-control" multiple>
                        <option >International</option>
                        <option >Interstate</option>
                        <option >Interdistrict</option>
                        </select>
                    </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label>How have your symptoms progressed over the last 48 hours ?:</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="prog1" name="custom-radio" class="custom-control-input">
                                    <label class="custom-control-label" for="prog1">Improved</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="prog2" name="custom-radio" class="custom-control-input">
                                    <label class="custom-control-label" for="prog2">No Change</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="prog3" name="custom-radio" class="custom-control-input">
                                    <label class="custom-control-label" for="prog3">Worsened</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="prog4" name="custom-radio" class="custom-control-input">
                                    <label class="custom-control-label" for="prog4">Worsened Considerably</label>
                                </div>
                                </div>
                        </div>
                        </div> 

                   
                            
                            

                         <div class="custom-control custom-checkbox mb-3">
  <input wire:model='is_medical_history' type="checkbox" class="custom-control-input" id="customCheck3">
  <label class="custom-control-label" for="customCheck3">Select checkbox if you have any Medical history.</label>
</div>
@if ($is_medical_history)
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                   <label for="operation">Any operative history:</label>
                            <input type="text" class="form-control" id="operation" aria-describedby="operation"
                                placeholder="mention here">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="allergy">Allergies:</label>
                            <input type="text" class="form-control" id="allergy" aria-describedby="allergy"
                                placeholder="mention here">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="med">Medicines required on daily/monthly basis(specify if
                                any):</label>
                            <input type="text" class="form-control" id="med" aria-describedby="med"
                                placeholder="medicines">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="ins">Insulin or injections required on daily/weekly
                                basis(specify if any):</label>
                            <input type="text" class="form-control" id="ins" aria-describedby="ins"
                                placeholder="specify their names">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="form-group">
                        <label >Are you experiencing any of the symptoms below(mark all those applicable)</label>
                        <select class="form-control" multiple>
                        <option value="drycough">Diabetes</option>
                        <option value="2">High Blood Pressure</option>
                        <option >Kidney Disease</option>
                        <option >Heart Disease</option>
                        <option >Lung Disease</option>
                        <option >Strokes</option>
                        <option >Reduced Immunity</option>
                        </select>
                    </div>
                            </div>
                        </div>

                    </div>
                                               
@endif
                            
                           <a href="#" class="btn btn-primary sw-btn-next">Next</a>
                        </div>
                    </div>
                  </div>
</div>

@push('script')
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        $(".wizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
         console.log("You are on step "+stepNumber+" now");
         console.log( @this.get('steps'));
         @this.set('steps', stepNumber);
      });
    })
</script>
@endpush