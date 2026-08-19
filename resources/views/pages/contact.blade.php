@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<div class="contact-container">

    <h1>Contact Us</h1>

    <p class="subtitle">
        We'd love to hear from you — Let's Build Together.
    </p>

    <div class="contact-info">

        <div class="contact-item">
            <span class="label">Email</span>
            <span class="value">info@techsolutions.com</span>
        </div>

        <div class="contact-item">
            <span class="label">Phone</span>
            <span class="value">+63 912 345 6789</span>
        </div>

        <div class="contact-item">
            <span class="label">Address</span>
            <span class="value">Manila, Philippines</span>
        </div>

    </div>

</div>

@endsection


@section('styles')

<style>

    .contact-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 60px 20px;
    }

    .contact-container h1 {
        font-size: 3.5rem;
        font-weight: 700;
        color: #ff2d95;
        margin-bottom: 5px;
    }

    .subtitle {
        font-size: 1.5rem;
        color: #ff2d95;
        margin-bottom: 35px;
    }

    .contact-info {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        background: #f8f8f8;
        padding: 30px;
        border-radius: 8px;
        border-left: 4px solid #ff2d95;
        text-align: left;
    }

    .contact-item {
        display: flex;
        flex-direction: column;
    }

    .contact-item .label {
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #ff2d95;
        font-weight: 600;
    }

    .contact-item .value {
        font-size: 1.1rem;
        color: #000;
        margin-top: 5px;
    }

    @media (max-width: 768px) {

        .contact-info {
            grid-template-columns: 1fr;
        }

    }

</style>

@endsection