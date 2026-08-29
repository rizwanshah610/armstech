@extends('layouts.app')

@section('title', 'Contact Us')
@section('meta_description', 'Get in touch with our team — software development, AI automations, digital marketing, SEO, Shopify ecommerce and mobile app experts ready to help.')

@push('styles')
<style>
    .contact-wrap {
        background: #f9fcff;
    }

    .contact-card {
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 20px 50px -20px rgba(14, 92, 166, 0.2);
        overflow: hidden;
    }

    .contact-info {
        background: #0e5ca6;
        padding: 30% 45px;
        height: 100%;
        color: #fff;
    }

    .contact-info h3 {
        color: #fff;
        font-size: 26px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .contact-info > p {
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 40px;
        line-height: 1.7;
    }

    .info-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 30px;
    }

    .info-item .icon-box {
        flex: 0 0 46px;
        width: 46px;
        height: 46px;
        background: rgba(255, 255, 255, 0.12);
        border-radius: 50%;
        text-align: center;
        line-height: 46px;
        margin-right: 18px;
        font-size: 18px;
        color: #ffaa17;
    }

    .info-item .info-text h5 {
        color: #fff;
        font-size: 15px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 5px;
    }

    .info-item .info-text p,
    .info-item .info-text a {
        color: rgba(255, 255, 255, 0.85);
        font-size: 15px;
        margin: 0;
    }

    .info-item .info-text a:hover { color: #ffaa17; }

    .contact-social {
        margin-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.15);
        padding-top: 25px;
    }

    .contact-social a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.12);
        color: #fff;
        margin-right: 8px;
        transition: 0.3s;
        font-size: 14px;
    }

    .contact-social a:hover { background: #ffaa17; color: #fff; }

    .contact-form-panel {
        padding: 60px 50px;
    }

    .contact-form-panel h3 {
        font-size: 28px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .contact-form-panel > p {
        color: #747474;
        margin-bottom: 35px;
    }

    .field-group { margin-bottom: 24px; }

    .field-group label {
        display: block;
        font-size: 13px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #1b2032;
        margin-bottom: 8px;
    }

    .field-control {
        width: 100%;
        height: 54px;
        padding: 0 18px;
        border: 1px solid #e6e9ee;
        border-radius: 8px;
        background: #f9fcff;
        font-family: 'Poppins', sans-serif;
        font-size: 15px;
        color: #1b2032;
        transition: 0.25s;
    }

    textarea.field-control {
        height: auto;
        padding: 15px 18px;
        resize: vertical;
    }

    .field-control:focus {
        outline: none;
        border-color: #ffaa17;
        background: #fff;
        box-shadow: 0 0 0 3px rgba(255, 170, 23, 0.12);
    }

    .field-control.is-invalid {
        border-color: #e74c3c;
        background: #fff6f6;
    }

    .field-error {
        color: #e74c3c;
        font-size: 13px;
        margin-top: 6px;
    }

    .btn-send {
        display: inline-block;
        background: #ffaa17;
        border: 2px solid #ffaa17;
        color: #fff;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 15px 45px;
        border-radius: 30px;
        transition: 0.3s;
    }

    .btn-send:hover {
        background: #1b2032;
        border-color: #1b2032;
        color: #fff;
    }

    .contact-map-frame {
        width: 100%;
        height: 450px;
        border: 0;
        display: block;
    }

    @media (max-width: 991px) {
        .contact-info { padding: 45px 30px; }
        .contact-form-panel { padding: 45px 30px; }
    }
</style>
@endpush

@section('content')
    {{-- Home / Contact Us --}}
    @include('partials.breadcrumb', [
        'pageTitle' => 'Contact Us',
    ])

    <!-- START CONTACT AREA -->
    <div class="contact-wrap section-padding">
        <div class="container">

            @if(session('success'))
                <div class="alert alert-success" style="border-radius: 8px; padding: 16px 22px; margin-bottom: 30px;">
                    {{ session('success') }}
                </div>
            @endif

            <div class="contact-card">
                <div class="row no-gutters">

                    <!-- INFO PANEL -->
                    <div class="col-lg-4">
                        <div class="contact-info">
                            <h3>Get In Touch</h3>
                            <p>
                                Have a project in mind or just a question? Fill out the form
                                and our team will get back to you within one business day.
                            </p>

                            <div class="info-item">
                                <span class="icon-box"><i class="fa fa-map-marker"></i></span>
                                <div class="info-text">
                                    <h5>Our Office</h5>
                                    <p>123 Business Avenue, Suite 400,<br>Lahore, Punjab, Pakistan</p>
                                </div>
                            </div>

                            <div class="info-item">
                                <span class="icon-box"><i class="fa fa-envelope"></i></span>
                                <div class="info-text">
                                    <h5>Email Us</h5>
                                    <a href="mailto:info@yourcompany.com">info@yourcompany.com</a>
                                </div>
                            </div>

                            <div class="info-item">
                                <span class="icon-box"><i class="fa fa-phone"></i></span>
                                <div class="info-text">
                                    <h5>Call Us</h5>
                                    <a href="tel:+10000000000">+1 (000) 000-0000</a>
                                </div>
                            </div>

                            <div class="contact-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- END INFO PANEL -->

                    <!-- FORM PANEL -->
                    <div class="col-lg-8">
                        <div class="contact-form-panel">
                            <h3>Send Us a Message</h3>
                            <p>We'd love to hear from you. Tell us a bit about your project below.</p>

                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="field-group">
                                            <label for="name">Your Name</label>
                                            <input type="text" id="name" name="name"
                                                   class="field-control @error('name') is-invalid @enderror"
                                                   placeholder="John Doe" value="{{ old('name') }}">
                                            @error('name')<div class="field-error">{{ $message }}</div>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-group">
                                            <label for="email">Your Email</label>
                                            <input type="email" id="email" name="email"
                                                   class="field-control @error('email') is-invalid @enderror"
                                                   placeholder="john@example.com" value="{{ old('email') }}">
                                            @error('email')<div class="field-error">{{ $message }}</div>@enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-group">
                                            <label for="phone">Phone (optional)</label>
                                            <input type="text" id="phone" name="phone"
                                                   class="field-control"
                                                   placeholder="+1 000 000 0000" value="{{ old('phone') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-group">
                                            <label for="service">Service You Need</label>
                                            <select id="service" name="service" class="field-control">
                                                <option value="">Select a Service</option>
                                                <option value="software" {{ old('service') == 'software' ? 'selected' : '' }}>Software Development</option>
                                                <option value="ai" {{ old('service') == 'ai' ? 'selected' : '' }}>AI Automations</option>
                                                <option value="marketing" {{ old('service') == 'marketing' ? 'selected' : '' }}>Digital Marketing</option>
                                                <option value="seo" {{ old('service') == 'seo' ? 'selected' : '' }}>SEO</option>
                                                <option value="shopify" {{ old('service') == 'shopify' ? 'selected' : '' }}>Shopify Ecommerce</option>
                                                <option value="mobile" {{ old('service') == 'mobile' ? 'selected' : '' }}>Mobile Applications</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="field-group">
                                            <label for="message">Your Message</label>
                                            <textarea id="message" name="message" rows="6"
                                                      class="field-control @error('message') is-invalid @enderror"
                                                      placeholder="Tell us about your project...">{{ old('message') }}</textarea>
                                            @error('message')<div class="field-error">{{ $message }}</div>@enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn-send">Send Message</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END FORM PANEL -->

                </div>
            </div>

        </div>
    </div>
    <!-- END CONTACT AREA -->

    <!-- START MAP -->
    <div class="map">
        <iframe
            class="contact-map-frame"
            src="https://maps.google.com/maps?q=Lahore%2C%20Punjab%2C%20Pakistan&t=&z=13&ie=UTF8&iwloc=&output=embed"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    <!-- END MAP -->

@endsection