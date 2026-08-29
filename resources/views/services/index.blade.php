@extends('layouts.app')

@section('title', 'Our Services')
@section('meta_description', 'Professional IT solutions — Software Development, AI Automations, Digital Marketing, SEO, Shopify Ecommerce & Mobile Applications.')

@section('content')
    {{-- 1. Generic & Safe Breadcrumb --}}
    @include('partials.breadcrumb')

    <!-- START FIXED SERVICE GRID -->
    <section class="service_area section-padding">
        <div class="container">				
            <div class="row text-center">					
                
                @if($services && count($services) > 0)
                    @foreach($services as $key => $service)
                        @php
                            // Dynamic safe loop timing intervals calculation logic
                            $delay = 0.1 + (($key % 3) * 0.1);
                            
                            // Database Slugs standard cleaning mapping layout 
                            $slug = Str::slug($service->slug);
                            
                            // Strict structural fallback image mappings assignment arrays
                            $iconMap = [
                                'software-development' => 'web.png',
                                'ai-automations'       => 'strategy.png',
                                'digital-marketing'    => 'brand.png',
                                'seo'                  => 'research.png',
                                'shopify-ecommerce'    => 'design.png',
                                'mobile-applications'  => 'photo.png'
                            ];

                            // Check array mapping else apply structural default index pattern fallback
                            $staticIcon = $iconMap[$slug] ?? ($service->icon ?? 'web.png');
                        @endphp
                        
                        <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="{{ $delay }}s" data-wow-offset="0" style="margin-bottom: 30px;">
                            <!-- Min-height block ensure karega ke lines unequal hone par bhi content perfectly structured rahe -->
                            <div class="single_service" style="min-height: 380px; padding: 40px 20px; background: #fff; border-radius: 4px; box-shadow: 0 2px 15px rgba(0,0,0,0.03); position: relative;">
                                
                                <div class="service_content_wrapper">
                                    {{-- Perfect Absolute Local Directory Hardcoded Assets Rendering URL --}}
                                    <img src="{{ asset('assets/img/icon/' . $staticIcon) }}" alt="{{ $service->title }}" style="margin-bottom: 20px; max-height: 60px; width: auto; display: inline-block;" />

                                    <h4 style="margin-bottom: 15px; font-weight: 600; text-transform: capitalize;">{{ $service->title }}</h4>
                                    <p style="margin-bottom: 20px; color: #666; line-height: 1.6;">{{ Str::limit($service->short_description, 120, '...') }}</p>
                                </div>
                                
                                {{-- Absolute position bottom wrapper taake button button ek hi floor line par tick ho --}}
                                <div style="position: absolute; bottom: 30px; left: 0; width: 100%; text-center;">
                                    <a class="btn_one" href="{{ route('services.show', $service) }}">More Info</a>
                                </div>
                            
                            </div>
                        </div><!-- END COL -->	
                    @endforeach
                @else
                    {{-- Emergency state safe container system fallback template alignment structure if verification loop empty --}}
                    <div class="col-md-12 text-center" style="padding: 80px 0; width: 100%;">
                        <div class="alert alert-warning" style="display: inline-block; padding: 15px 40px; border-radius: 4px;">
                            No services available at the moment.
                        </div>
                    </div>
                @endif
                
            </div><!-- END ROW -->				
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SERVICE GRID -->

    
<!-- START PRICING TABLE -->
<div class="pricing-table-area section-padding" style="background-image: url({{ asset('assets/img/bg/pricing-bg.jpg') }}); background-size:cover; background-position:center;">
    <div class="container">

        <div class="section-title text-center">
            <h2 class="section-title-white">Monthly IT Service Plans</h2>
            <p class="section-title-white">
                Flexible dedicated IT support for businesses that need reliable development,
                automation, ecommerce, marketing, and digital solutions.
            </p>
        </div>

        <div class="row">

            <!-- STARTER PLAN -->
            <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp"
                 data-wow-duration="1s"
                 data-wow-delay="0.2s"
                 data-wow-offset="0">

                <div class="pricingTable blue">

                    <div class="pricingTable-header">
                        <div class="price-value">
                            <span class="currency">$</span>
                            <span class="amount">3,499</span>
                            <span class="duration">/month</span>
                        </div>
                    </div>

                    <div class="pricing-content">

                        <h3 class="title">Starter</h3>

                        <p style="margin-bottom: 20px;">
                            <strong>Up to 30 hours/week</strong>
                        </p>

                        <ul>
                            <li>Software Development</li>
                            <li>Digital Marketing</li>
                            <li>SEO</li>
                            <li>Shopify Ecommerce</li>
                        </ul>

                        <p style="margin-top: 20px; font-size: 14px;">
                            Choose any <strong>2 services</strong> from the included services.
                        </p>

                        <p style="font-size: 14px;">
                            Dedicated support, weekly progress updates and
                            approximately 130 hours/month.
                        </p>

                    </div>

                    <div class="pricingTable-signup">
                        <a href="#">Get Started</a>
                    </div>

                </div>
            </div>
            <!-- END STARTER PLAN -->


            <!-- BUSINESS PLAN -->
            <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp"
                 data-wow-duration="1s"
                 data-wow-delay="0.3s"
                 data-wow-offset="0">

                <div class="pricingTable blue">

                    <div class="pricingTable-header">
                        <div class="price-value">
                            <span class="currency">$</span>
                            <span class="amount">4,499</span>
                            <span class="duration">/month</span>
                        </div>
                    </div>

                    <div class="pricing-content">

                        <h3 class="title">Business</h3>

                        <p style="margin-bottom: 20px;">
                            <strong>Up to 30 hours/week</strong>
                        </p>

                        <ul>
                            <li>Software Development</li>
                            <li>AI Automations</li>
                            <li>Digital Marketing</li>
                            <li>SEO</li>
                            <li>Shopify Ecommerce</li>
                        </ul>

                        <p style="margin-top: 20px; font-size: 14px;">
                            Choose any <strong>2 services</strong> from the included services.
                        </p>

                        <p style="font-size: 14px;">
                            Priority support, dedicated resources,
                            weekly communication and approximately 130 hours/month.
                        </p>

                    </div>

                    <div class="pricingTable-signup">
                        <a href="#">Get Started</a>
                    </div>

                </div>
            </div>
            <!-- END BUSINESS PLAN -->


            <!-- PROFESSIONAL PLAN -->
            <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp"
                 data-wow-duration="1s"
                 data-wow-delay="0.4s"
                 data-wow-offset="0">

                <div class="pricingTable blue">

                    <div class="pricingTable-header">
                        <div class="price-value">
                            <span class="currency">$</span>
                            <span class="amount">5,499</span>
                            <span class="duration">/month</span>
                        </div>
                    </div>

                    <div class="pricing-content">

                        <h3 class="title">Professional</h3>

                        <p style="margin-bottom: 20px;">
                            <strong>Up to 30 hours/week</strong>
                        </p>

                        <ul>
                            <li>Software Development</li>
                            <li>AI Automations</li>
                            <li>Digital Marketing</li>
                            <li>SEO</li>
                            <li>Shopify Ecommerce</li>
                            <li>Mobile Applications</li>
                        </ul>

                        <p style="margin-top: 20px; font-size: 14px;">
                            Choose any <strong>2 services</strong> from the included services.
                        </p>

                        <p style="font-size: 14px;">
                            Senior-level support, priority development,
                            strategy meetings and approximately 130 hours/month.
                        </p>

                    </div>

                    <div class="pricingTable-signup">
                        <a href="#">Get Started</a>
                    </div>

                </div>
            </div>
            <!-- END PROFESSIONAL PLAN -->

        </div>
    </div>
</div>
<!-- END PRICING TABLE -->


    <!-- START PARTNER LOGO SECTION -->
<div class="partner-logo section-padding" style="clear: both; display: block; width: 100%; background: #fff;">
    <div class="container">										
        <div class="row text-center">
            
            <div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single_logo single_logo_bm">
                    <a href="#"><img src="{{ asset('assets/img/partner/1.png') }}" alt="Partner" class="img-fluid"/></a>
                </div>						
            </div><!--- END COL -->
            
            <div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="single_logo">
                    <a href="#"><img src="{{ asset('assets/img/partner/2.png') }}" alt="Partner" class="img-fluid"/></a>
                </div>						
            </div><!--- END COL -->
            
            <div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="single_logo single_logo_bm">
                    <a href="#"><img src="{{ asset('assets/img/partner/3.png') }}" alt="Partner" class="img-fluid"/></a>
                </div>						
            </div><!--- END COL -->
            
            <div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
                <div class="single_logo">
                    <a href="#"><img src="{{ asset('assets/img/partner/4.png') }}" alt="Partner" class="img-fluid"/></a>
                </div>						
            </div><!--- END COL -->
            
            <div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
                <div class="single_logo">
                    <a href="#"><img src="{{ asset('assets/img/partner/5.png') }}" alt="Partner" class="img-fluid"/></a>
                </div>						
            </div><!--- END COL -->
            
            <div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" data-wow-offset="0">
                <div class="single_logo">
                    <a href="#"><img src="{{ asset('assets/img/partner/6.png') }}" alt="Partner" class="img-fluid"/></a>
                </div>						
            </div><!--- END COL -->

        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->	
</div>
<!-- END PARTNER LOGO -->


@endsection
