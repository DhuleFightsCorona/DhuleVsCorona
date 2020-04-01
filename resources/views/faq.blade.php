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
                <span class="text-small text-muted">No. We are not official. We are here to assist health
authorities.</span>
              </div>
            </div>
            <div class="d-flex mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="NaN">
              <div class="process-circle bg-primary"></div>
              <div class="ml-3">
                <h5 class="mb-0">Then who are you?</h5>
                                <span class="text-small text-muted">We are the group of students from Dhule. As, all of us
have computer science background, we decided to use
our knowledge and skills for our city. We never expose
any personally identifiable data regarding the patients
except health authorities.
                                </span>
              </div>
            </div>
            <div class="d-flex mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="NaN">
              <div class="process-circle bg-primary"></div>
              <div class="ml-3">
                <h5 class="mb-0">Why are you guys putting in time and resources to do this while not
                                    gaining a single penny from it?</h5>
                                <span class="text-small text-muted">Serving the nation and humanity are the only reasons
behind this. Because it affects all of us. Today it's
someone else who is getting infected. Tomorrow it will
be us. We need to prevent the spread. We need to document the data so that people with knowledge are
able to use this data to make informed decisions.</span>

              </div>
            </div>
            
            <div class="d-flex mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="NaN">
              <div class="process-circle bg-primary"></div>
              <div class="ml-3">
                <h5 class="mb-0">How is the data gathered for this project?</h5>
                                <span class="text-small text-muted">Our aim is to collect and analyse health data of citizens.
We are collecting this data through form available on
our website. We are also using government APIs. Other
details are being collected from state press releases,
official government links and reputable news channels
as source.</span>
              </div>
            </div>
            <div class="d-flex mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="NaN">
              <div class="process-circle bg-primary"></div>
              <div class="ml-3">
                <h5 class="mb-0">How long are you going to work on this
project ?</h5>
                                <span class="text-small text-muted">We are going to work until government declares that
we have beaten COVID-19..</span>
              </div>
            </div>
            <div class="d-flex mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="NaN">
              <div class="process-circle bg-primary"></div>
              <div class="ml-3">
                <h5 class="mb-0">For more information contact <a href="/aboutus"> our team! </a></h5>
                              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection