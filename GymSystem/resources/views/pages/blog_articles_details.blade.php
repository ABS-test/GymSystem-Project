@extends('layout')

@section('title') Blog @endsection

@section('content')
<!--It is a single article detailed information, displayed on click of button "Continue reading" in one article on page "Blog"-->
        <div class="container">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">{{ $data->title}}</strong>
                    <h3 class="mb-0">
                        <p class="text-dark">{{$data->slug}}</p>
                    </h3>
                    <div class="mb-1 text-muted">{{ $data->created_at}}</div>
                    <div class="mb-1 text-muted">{{ $data->updated_at}}</div>
                    <p class="card-text mb-auto text-dark"><b>{{ $data->short_description}}</b></p>
                    <p class="card-text mb-auto text-dark">{{ $data->content}}</p>
                    <a href="{{ route('blog') }}">Go back</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="../img/articles.jpg" alt="article image">
            </div><!--card flex-md-row mb-4 box-shadow h-md-250-->
        </div> <!--container-->
@endsection