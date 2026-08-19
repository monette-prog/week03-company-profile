@extends('layouts.app')

@section('title', 'About')

@section('content')

<div class="about-container">

    <h1>About TechSolutions</h1>

    <p class="subtitle">
        YOUR TRUSTED TECHNOLOGY PARTNER.
    </p>

    <div class="about-content">

        <div class="about-section">
            <h2>Our Mission</h2>
            <p>
                To provide innovative and high-quality solutions that help
                businesses grow and succeed in the digital age.
            </p>
        </div>

        <div class="about-section">
            <h2>Our Vision</h2>
            <p>
                To be a globally recognized company known for excellence,
                integrity, and customer satisfaction.
            </p>
        </div>

        <div class="about-section">

            <h2>Our Values</h2>

            <ul>
                <li><strong>Integrity</strong> – We act with honesty and transparency.</li>
                <li><strong>Innovation</strong> – We embrace change and new ideas.</li>
                <li><strong>Customer Focus</strong> – We prioritize our customers' needs.</li>
                <li><strong>Teamwork</strong> – We collaborate to achieve great results.</li>
            </ul>

        </div>

        <div class="about-section">

            <h2>About Us</h2>

            <p>
                We are a team of passionate developers and designers committed
                to building web applications that make a difference. With years
                of experience in the industry, we have helped numerous clients
                achieve their goals through technology.
            </p>

        </div>

    </div>

</div>

@endsection


@section('styles')

<style>

    .about-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 60px 20px;
    }

    .about-container h1 {
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

    .about-content {
        display: flex;
        flex-direction: column;
        gap: 20px;
        text-align: left;
    }

    .about-section {
        background: #f8f8f8;
        padding: 25px;
        border-radius: 8px;
        border-left: 4px solid #ff2d95;
    }

    .about-section h2 {
        color: #ff2d95;
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .about-section p,
    .about-section li {
        color: #000;
        font-size: 1.05rem;
        line-height: 1.6;
    }

    .about-section ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .about-section ul li {
        padding: 5px 0;
    }

</style>

@endsection