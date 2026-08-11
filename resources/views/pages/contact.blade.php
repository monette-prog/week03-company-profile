@extends('layouts.app')

@section('title', 'Contact Us - TechSolutions')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-5">Contact Us</h1>
        
        <div class="row">
            <!-- LEFT SIDE: Contact Form -->
            <div class="col-lg-6 mb-4">
                <h4>Send us a Message</h4>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your full name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="your@email.com">
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Your message here..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            
            <!-- RIGHT SIDE: Contact Info + Social Media + Map -->
            <div class="col-lg-6">
                <h4>Contact Information</h4>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <i class="fas fa-map-marker-alt text-primary me-2"></i>
                        123 Tech Street, Digital City
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-envelope text-primary me-2"></i>
                        info@techsolutions.com
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-phone text-primary me-2"></i>
                        (123) 456-7890
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-clock text-primary me-2"></i>
                        Mon-Fri: 9:00 AM - 6:00 PM
                    </li>
                </ul>
                
                <!-- Social Media Links -->
                <div class="mt-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="btn btn-outline-primary me-2"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="btn btn-outline-info me-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-outline-primary me-2"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="btn btn-outline-dark"><i class="fab fa-github"></i></a>
                </div>

                <!-- Google Map -->
                <div class="mt-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.1583091352!2d-74.11976354838256!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sph!4v1699999999999!5m2!1sen!2sph" 
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
@endsection