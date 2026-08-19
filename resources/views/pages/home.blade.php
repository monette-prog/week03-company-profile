@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="home-container">

    <h1 class="welcome-title">
        WELCOME TO TECHSOLUTIONS
    </h1>

    <p class="trusted-partner">
        YOUR TRUSTED TECHNOLOGY PARTNER.
    </p>

    <p class="description">
        We deliver innovative solutions for your business.
    </p>

    <p class="description">
        We create thoughtful, reliable, and professional solutions
        designed to help people and businesses move forward.
    </p>

    <div class="button-group">

        <a href="{{ route('about') }}" class="btn-primary">
            EXPLORE COMPANY
        </a>

        <a href="{{ route('services') }}" class="btn-secondary">
            VIEW SERVICES →
        </a>

    </div>

</div>

@endsection


@section('styles')

<style>

    .home-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 60px 20px 20px;
        text-align: left;
    }

    .welcome-title {
        font-size: 3.5rem;
        font-weight: 800;
        color: #000000;
        margin: 0 0 5px;
        letter-spacing: 1px;
        line-height: 1.1;
    }

    .trusted-partner {
        font-size: 1.8rem;
        font-weight: 400;
        color: #ff2d95;
        margin-bottom: 20px;
    }

    .description {
        font-size: 1.05rem;
        color: #000000;
        max-width: 700px;
        line-height: 1.6;
        margin-bottom: 10px;
    }

    .button-group {
        display: flex;
        gap: 15px;
        margin-top: 30px;
    }

    .btn-primary {
        background: #ff2d95;
        color: white;
        padding: 12px 25px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 600;
    }

    .btn-secondary {
        color: #ff2d95;
        padding: 12px 20px;
        text-decoration: none;
        font-weight: 600;
    }

    @media (max-width: 768px) {

        .welcome-title {
            font-size: 2.5rem;
        }

        .trusted-partner {
            font-size: 1.4rem;
        }

        .button-group {
            flex-wrap: wrap;
        }

    }

</style>

@endsection