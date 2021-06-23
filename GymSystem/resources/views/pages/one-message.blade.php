@extends('layout')

@section('title') Contact data @endsection

@section('content')

    <div class="container text-center">
        <h3>{{ $data->firstName}} {{$data->lastName }}</h3>
    </div>
    
    <div class="container alert alert-info">
        <p>{{ $data->email }}</p>
        <p>{{ $data->adress }}</p>
        <p><small>{{ $data->created_at }}</small></p>
        <p><small>{{ $data->updated_at }}</small></p>
        <a class="btn btn-info" href="{{ route('contact-info') }}">Go back</a>
        <a class="btn btn-danger" href="{{ route('contact-delete', $data->id) }}">Delete</a>
    </div>

@endsection