@extends('base')

@section('content')
       <section class="min-vh-100-light py-5">
      <div class="container">
        <div class="row justify-content-center mb-md-6">
          <div class="col-auto">
            <a href="index-2.html">
              <img src="assets/img/logo.svg" alt="Leap">
            </a>
          </div>
        </div>
        <div class="row text-center py-6">
          <div class="col">
            <div class="decoration-check mb-4">
              
              <img class="icon bg-white" src="assets/img/icons/interface/check.svg" alt="check interface icon"  />
            </div>
            <h2 class="h1">Form Sumbitted</h2>
            <div class="lead mb-4">Thanks for filling form! 🙏 You’ll receieve an notification.Please Share this form.</div>
            <a class="btn btn-primary btn-sm" href="/familyform">Fill Other Member Details</a>
            <a class="btn btn-primary btn-sm"  id="share">Share</a>
          </div>
        </div>
      </div>
    </section>
@endsection

@push('script')
    <script>
      const btn = document.querySelector('#share');
      btn.addEventListener('click', async () => {
  try {
    await navigator.share({
      title: 'Dhule Fights Corona',
      text: 'dhulekar are ready to fight',
      url: 'https://dhulefightscorona.com',
    });
  } catch(err) {
    console.log(err);
    }
    });</script>
@endpush