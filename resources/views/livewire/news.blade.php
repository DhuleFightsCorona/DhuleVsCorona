<div>
@foreach ($response['articles'] as $article)
    {{$article['author']}}
@endforeach
<div class="highlight-selected" data-flickity>
  <div class="carousel-cell">
    <img src="/assets/img/article-1.jpg" alt="Image 1">
  </div>
  <div class="carousel-cell">
    <img src="/assets/img/article-2.jpg" alt="Image 2">
  </div>
  <div class="carousel-cell">
    <img src="/assets/img/article-3.jpg" alt="Image 3">
  </div>
</div>
</div>

@push('script')
      
    <!-- Fancybox (handles image and video lightbox and galleries) -->
    <script type="text/javascript" src="assets/js/jquery.fancybox.min.js"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
   
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/theme.js"></script>
@endpush