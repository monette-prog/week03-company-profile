@extends('layouts.app')

@section('title', 'Our Services - TechSolutions')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-5">Our Services</h1>
        <p class="text-center mb-5">We offer a wide range of technology services to meet your business needs.</p>
        
        <div class="row">
            <!-- Service 1: Web Development -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center p-4 shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-laptop-code fa-4x text-primary mb-3"></i>
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text">Custom websites and web applications built with modern technologies like Laravel, React, and Vue.js.</p>
                    </div>
                </div>
            </div>

            <!-- Service 2: Mobile Development -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center p-4 shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-mobile-alt fa-4x text-success mb-3"></i>
                        <h5 class="card-title">Mobile Development</h5>
                        <p class="card-text">Native and cross-platform mobile applications for iOS and Android using Flutter and React Native.</p>
                    </div>
                </div>
            </div>

            <!-- Service 3: UI/UX Design -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center p-4 shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-paint-brush fa-4x text-info mb-3"></i>
                        <h5 class="card-title">UI/UX Design</h5>
                        <p class="card-text">User-centered design solutions that enhance user experience and engagement through intuitive interfaces.</p>
                    </div>
                </div>
            </div>

            <!-- Service 4: Cloud Solutions -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center p-4 shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-cloud fa-4x text-warning mb-3"></i>
                        <h5 class="card-title">Cloud Solutions</h5>
                        <p class="card-text">Cloud infrastructure, migration, and management services using AWS, Azure, and Google Cloud.</p>
                    </div>
                </div>
            </div>

            <!-- Service 5: Cybersecurity -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center p-4 shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-shield-alt fa-4x text-danger mb-3"></i>
                        <h5 class="card-title">Cybersecurity</h5>
                        <p class="card-text">Comprehensive security assessments, vulnerability testing, and protection solutions for your business.</p>
                    </div>
                </div>
            </div>

            <!-- Service 6: IT Consulting -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center p-4 shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-chart-line fa-4x text-primary mb-3"></i>
                        <h5 class="card-title">IT Consulting</h5>
                        <p class="card-text">Strategic technology consulting to help you achieve your business goals and digital transformation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection