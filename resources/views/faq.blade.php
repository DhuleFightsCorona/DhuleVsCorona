@extends('base')

@section('content')
    <section style="padding:2rem;">
      <div class="container" >
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            @livewire('banner')
          </div>
          <div class="col">
            
            <h2>FAQ</h2>
          </div>
        </div>
        <div class="row">
          
          <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="d-flex mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="NaN">
              <div class="process-circle bg-primary"></div>
              <div class="ml-3">
                <h5 class="mb-0">Are you official?</h5>
                <span class="text-small text-muted">No</span>
              </div>
            </div>
            <div class="d-flex mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="NaN">
              <div class="process-circle bg-primary"></div>
              <div class="ml-3">
                <h5 class="mb-0">Then who are you?</h5>
                                <span class="text-small text-muted">We are a group of dedicated volunteers from who are
                                    curating the news coming from state bulletins, press releases and news houses. We
                                    extract the details. We never collect or expose
                                    any personally identifiable data regarding the patients.
                                </span>
              </div>
            </div>
            <div class="d-flex mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="NaN">
              <div class="process-circle bg-primary"></div>
              <div class="ml-3">
                <h5 class="mb-0">Why are you guys putting in time and resources to do this while not
                                    gaining a single penny from it?</h5>
                                <span class="text-small text-muted">Because it affects all of us. Today it's someone
                                    else who is getting infected. Tomorrow it will be us. We need to prevent the spread.
                                    We need to document the data so that people with knowledge are able to use this data
                                    to make informed decisions.</span>

              </div>
            </div>
            <div class="d-flex mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="NaN">
              <div class="process-circle bg-primary"></div>
              <div class="ml-3">
                 <h5 class="mb-0">Why are you guys putting in time and resources to do this while not
                                    gaining a single penny from it?</h5>
                                <span class="text-small text-muted">Because it affects all of us. Today it's someone
                                    else who is getting infected. Tomorrow it will be us. We need to prevent the spread.
                                    We need to document the data so that people with knowledge are able to use this data
                                    to make informed decisions.</span>
              </div>
            </div>
            <div class="d-flex mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="NaN">
              <div class="process-circle bg-primary"></div>
              <div class="ml-3">
                <h5 class="mb-0">How is the data gathered for this project?</h5>
                                <span class="text-small text-muted">We collect the details from state press releases,
                                    official government links and reputable news channels as source. Data is validated
                                    by a group of volunteers and published into a Google sheet and an API, which is
                                    available for all</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection