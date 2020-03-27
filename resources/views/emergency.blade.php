@extends('base')

@section('content')
    <section style="padding:2rem;">
      <div class="container" >
        <div class="row justify-content-center">
          @livewire('banner')
          <div class="col-lg-10 col-xl-8">
            <a href="https://www.mohfw.gov.in/coronvavirushelplinenumber.pdf" target='_blank' class="card card-body hover-shadow-sm">
              <h4 class="mb-2">Helpline Numbers</h4>
              <span>(By state)</span>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="d-flex align-items-center">
                  <div class="text-small ml-2">
                    <span class="d-block">Provided by</span>
                    <span class="text-muted">Government of India</span>
                  </div>
                </div>
              </div>
            </a>
            <a href="https://www.mohfw.gov.in/" target='_blank' class="card card-body hover-shadow-sm">
              <h4 class="mb-2">Ministry Of Health and Family Welfare</h4>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="d-flex align-items-center">
                  <div class="text-small ml-2">
                    <span class="d-block">Provided by</span>
                    <span class="text-muted">Government of India</span>
                  </div>
                </div>
              </div>
            </a>
            <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019" target='_blank' class="card card-body hover-shadow-sm">
              <h4 class="mb-2">WHO: COVID-19 Home Page</h4>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="d-flex align-items-center">
                  <div class="text-small ml-2">
                    <span class="d-block">Provided by</span>
                    <span class="text-muted">World Health Organisation</span>
                  </div>
                </div>
              </div>
            </a>
            <a href="https://www.cdc.gov/coronavirus/2019-ncov/faq.html" target='_blank' class="card card-body hover-shadow-sm">
              <h4 class="mb-2">CDC</h4>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="d-flex align-items-center">
                  <div class="text-small ml-2">
                    <span class="d-block">Provided by</span>
                    <span class="text-muted">Centers of Disease Control and Prevention</span>
                  </div>
                </div>
              </div>
            </a>
            <a href="https://coronavirus.thebaselab.com/" target='_blank' class="card card-body hover-shadow-sm">
              <h4 class="mb-2">COVID-19 Global Tracker</h4>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="d-flex align-items-center">
                  <div class="text-small ml-2">
                    <span class="d-block">Provided by</span>
                    <span class="text-muted">Coronavirus.thebaselab</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
@endsection