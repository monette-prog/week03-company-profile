@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container mt-5">
        <div class="p-5 bg-light rounded">
            <h1 class="display-4">Welcome to TechSolutions</h1>
            <p class="lead">Your trusted technology partner.</p>
            <hr>
            <p>We deliver innovative solutions for your business.</p>
            <a href="{{ route('about') }}" class="btn btn-primary btn-lg">Learn More</a>
        </div>
    </div>
@endsection