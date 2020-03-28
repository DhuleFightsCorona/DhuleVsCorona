<div>

<section class="bg-primary-alt">
      <div class="container">
        <div class="row mb-4">
          <div class="col">
            <h3 class="h2">Top Headlines of COVID-19</h3>
          </div>
        </div>
        <div class="row">
         @foreach ($response['articles'] as $article)
    <div class="col-md-6 col-lg-4 d-flex">
            <div class="card">
              <a href="{{$article['url']}}">
                <img src="{{$article['urlToImage']}}" height="200px" width="220px" alt="Image" class="card-img-top">
              </a>
              <div class="card-body d-flex flex-column">
                <div class="d-flex justify-content-between mb-3">
                  <div class="text-small d-flex">
                    
                    <span class="text-muted">{{(new Carbon\Carbon($article['publishedAt']))->diffForHumans()}}</span>
                  </div>
                  
                </div>
                <a href="{{$article['url']}}">
                  <h4>{{$article['title']}}</h4>
                </a>
                <p class="flex-grow-1">
                  {{  Illuminate\Support\Str::limit($article['description'],18)}}
                </p>
                <div class="d-flex align-items-center mt-3">
                  <div class="ml-1">
                    <span class="text-small text-muted">By</span>
                    <span class="text-small">{{$article['author']}}</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endforeach
          
         
        </div>
      </div>
    </section>  
</div>

