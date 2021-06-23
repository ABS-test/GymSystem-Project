@extends('layout')

@section('title') Info @endsection

@section('content')

    <div class="container text-center">
        <h1>All information from contact form</h1>
    </div>
    
    @foreach($data as $element)
        <div class="container alert alert-info">
            <h3>{{ $element->firstName }}</h3>
            <p>{{ $element->email }}</p>
            <p><small>{{ $element->created_at }}</small></p>
            <a class="btn btn-info" href="{{ route('contact-data-one-item', $element->id) }}">More info</a>
        </div>
    @endforeach

@endsection