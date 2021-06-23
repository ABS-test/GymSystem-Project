@extends('layout')

@section('title') Blog @endsection

@section('content')
  <div class="container">
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
      <div class="col-md-6 px-0">
        <h1 class="font-italic">Title of a longer featured blog post</h1>
        <p class="my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
      </div>
    </div>
  </div>
  @foreach($data as $article_data)
  <div class="container">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <strong class="d-inline-block mb-2 text-primary">{{ $article_data->title}}</strong>
            <h3 class="mb-0">
              <p class="text-dark">{{ $article_data->slug}}</p>
            </h3>
            <div class="mb-1 text-muted">
              {{ $article_data->created_at}}
            </div>
            <p class="card-text mb-auto text-dark">{{ $article_data->short_description}}</p>
            <a href="{{ route('blog-articles-details', $article_data->id) }}">Continue reading</a>
        </div>
        <img class="card-img-right flex-auto d-none d-md-block article_img" src="../img/articles.jpg" alt="article image">
    </div>  
  </div>
  @endforeach

@endsection