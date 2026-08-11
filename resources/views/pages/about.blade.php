@extends('layouts.app')

@section('title', 'About Us - TechSolutions')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-5">About TechSolutions</h1>
        
        <!-- Company History (Walang Image) -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <h3>Our History</h3>
                <p>Founded in 2020, TechSolutions started as a small team of passionate developers with a vision to make technology accessible to everyone. Over the years, we've grown into a full-service technology company serving clients worldwide.</p>
                <p>Today, we continue to push boundaries and innovate, helping businesses transform their digital presence.</p>
            </div>
        </div>

        <!-- Mission and Vision -->
        <div class="row mb-5">
            <div class="col-md-6">
                <div class="card h-100 p-4">
                    <h3><i class="fas fa-bullseye text-primary me-2"></i>Our Mission</h3>
                    <p>To empower businesses with innovative technology solutions that drive growth, efficiency, and success in the digital age.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 p-4">
                    <h3><i class="fas fa-eye text-success me-2"></i>Our Vision</h3>
                    <p>To be the leading technology partner for businesses worldwide, known for excellence, innovation, and customer satisfaction.</p>
                </div>
            </div>
        </div>

        <!-- Core Values -->
        <h3 class="text-center mb-4">Our Core Values</h3>
        <div class="row text-center mb-5">
            <div class="col-md-3">
                <i class="fas fa-handshake fa-3x text-primary mb-3"></i>
                <h5>Integrity</h5>
                <p>We do what's right, always.</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-lightbulb fa-3x text-warning mb-3"></i>
                <h5>Innovation</h5>
                <p>We embrace change and creativity.</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-users fa-3x text-success mb-3"></i>
                <h5>Collaboration</h5>
                <p>We succeed together.</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-star fa-3x text-danger mb-3"></i>
                <h5>Excellence</h5>
                <p>We strive for the best.</p>
            </div>
        </div>

        <!-- Team Introduction -->
        <h3 class="text-center mb-4">Meet Our Team</h3>
        <div class="row text-center">
            <div class="col-md-3">
                <img src="https://via.placeholder.com/150" class="rounded-circle mb-2" alt="Team Member">
                <h5>John Doe</h5>
                <p>CEO & Founder</p>
            </div>
            <div class="col-md-3">
                <img src="https://via.placeholder.com/150" class="rounded-circle mb-2" alt="Team Member">
                <h5>Jane Smith</h5>
                <p>Lead Developer</p>
            </div>
            <div class="col-md-3">
                <img src="https://via.placeholder.com/150" class="rounded-circle mb-2" alt="Team Member">
                <h5>Mike Johnson</h5>
                <p>UX Designer</p>
            </div>
            <div class="col-md-3">
                <img src="https://via.placeholder.com/150" class="rounded-circle mb-2" alt="Team Member">
                <h5>Sarah Lee</h5>
                <p>Project Manager</p>
            </div>
        </div>
    </div>
@endsection