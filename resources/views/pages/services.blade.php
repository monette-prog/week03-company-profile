@extends('layouts.app')

@section('title', 'Services')

@section('content')

<div class="services-container">

    <h1>Our Services</h1>

    <p class="subtitle">
        We deliver innovative solutions for your business.
    </p>

    <div class="services-grid">

        <!-- 1. Web Development -->
        <div class="service-card">
            <h2>Web Development</h2>
            <p>
                Custom websites and web applications built with modern technologies.
            </p>
        </div>

        <!-- 2. Mobile App Development -->
        <div class="service-card">
            <h2>Mobile App Development</h2>
            <p>
                Native and cross-platform mobile applications for iOS and Android.
            </p>
        </div>

        <!-- 3. UI/UX Design -->
        <div class="service-card">
            <h2>UI/UX Design</h2>
            <p>
                User-centered design solutions that enhance user experience.
            </p>
        </div>

        <!-- 4. IT Consulting -->
        <div class="service-card">
            <h2>IT Consulting</h2>
            <p>
                Expert advice to help you navigate the world of technology.
            </p>
        </div>

        <!-- 5. Cybersecurity -->
        <div class="service-card">
            <h2>Cybersecurity</h2>
            <p>
                Security solutions that protect your systems, data, and business
                from cyber threats.
            </p>
        </div>

        <!-- 6. Cloud Solutions -->
        <div class="service-card">
            <h2>Cloud Solutions</h2>
            <p>
                Reliable and scalable cloud solutions that improve accessibility,
                performance, and business efficiency.
            </p>
        </div>

    </div>

</div>

@endsection


@section('styles')

<style>

    .services-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 60px 20px;
    }

    .services-container h1 {
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

    /* 6 CARDS - 2 COLUMNS */
    .services-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .service-card {
        background: #f8f8f8;
        padding: 25px;
        border-radius: 8px;
        border-left: 4px solid #ff2d95;
        text-align: left;
    }

    .service-card h2 {
        color: #ff2d95;
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .service-card p {
        color: #000000;
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 0;
    }

    /* MOBILE */
    @media (max-width: 768px) {

        .services-container {
            padding: 40px 20px;
        }

        .services-container h1 {
            font-size: 2.5rem;
        }

        .subtitle {
            font-size: 1.2rem;
        }

        .services-grid {
            grid-template-columns: 1fr;
        }

    }

</style>

@endsection