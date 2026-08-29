@extends('layouts.app')

@section('title', $service->title)
@section('meta_description', Str::limit(strip_tags($service->short_description), 155))

@section('content')
@include('partials.breadcrumb', [
    'pageTitle' => $service->title,
    'items' => [
        ['url' => route('services.index'), 'title' => 'Services'],
    ],
])

    @php
        // Same mapping logic used on the services index page, kept in sync here
        $slug = Str::slug($service->slug);

        $iconMap = [
            'software-development' => 'web.png',
            'ai-automations'       => 'strategy.png',
            'digital-marketing'    => 'brand.png',
            'seo'                  => 'research.png',
            'shopify-ecommerce'    => 'design.png',
            'mobile-applications'  => 'photo.png'
        ];

        $staticIcon = $iconMap[$slug] ?? ($service->icon ?? 'web.png');
    @endphp

    <!-- START SERVICE DETAILS -->
    <div class="single_project_area section-padding">
        <div class="container">
            <div class="row">

                <!-- MAIN CONTENT -->
                <div class="col-lg-8">

                    <div class="project_dec">
                        <img src="{{ asset('assets/img/icon/' . $staticIcon) }}"
                             alt="{{ $service->title }}"
                             style="max-height: 70px; width: auto; margin-bottom: 25px;" />

                        <h2 style="margin-bottom: 20px; font-weight: 600;">{{ $service->title }}</h2>

                        <p>
                            {{ $service->description ?? $service->long_description ?? $service->short_description }}
                        </p>
                    </div>

                    {{-- Feature / deliverables list — only renders if the service has one --}}
                    @if(!empty($service->features) && count($service->features) > 0)
                        <div class="project_dec">
                            <h4 class="blog_head_title" style="border: 0; margin-bottom: 20px;">
                                What's Included
                            </h4>

                            <div class="about_project_details">
                                <ul>
                                    @foreach($service->features as $feature)
                                        <li><i class="fa fa-check-circle"></i> {{ $feature }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    {{-- Process / how-we-work steps — only renders if provided --}}
                    @if(!empty($service->process) && count($service->process) > 0)
                        <div class="project_dec">
                            <h4 class="blog_head_title" style="border: 0; margin-bottom: 30px;">
                                How We Work
                            </h4>

                            <div class="row">
                                @foreach($service->process as $index => $step)
                                    <div class="col-md-6" style="margin-bottom: 30px;">
                                        <div class="single_marketing">
                                            <div class="marketing_icon_img">
                                                <span style="display:inline-block; width:50px; height:50px; line-height:50px; text-align:center; border-radius:50%; background:#f9fcff; color:#ffaa17; font-weight:700; font-size:20px; float:left; margin-right:20px;">
                                                    {{ $index + 1 }}
                                                </span>
                                            </div>
                                            <h3 style="font-size: 18px; margin-bottom: 10px;">
                                                {{ $step['title'] ?? $step }}
                                            </h3>
                                            @if(is_array($step) && !empty($step['description']))
                                                <p>{{ $step['description'] }}</p>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- CTA banner --}}
                    <div class="project_dec text-center" style="background: #0e5ca6;">
                        <h3 style="color: #fff; margin-bottom: 15px;">Ready to get started with {{ $service->title }}?</h3>
                        <p style="color: #fff; margin-bottom: 25px;">
                            Let's talk about your project and how we can help you achieve your goals.
                        </p>
                        <a class="btn_one" href="{{ route('contact') }}">Get In Touch</a>
                    </div>

                </div>
                <!-- END MAIN CONTENT -->

                <!-- SIDEBAR -->
                <div class="col-lg-4">

                    {{-- Other services list --}}
                    @if(!empty($relatedServices) && count($relatedServices) > 0)
                        <div class="latest_blog">
                            <h4 class="blog_sidebar_title">Our Services</h4>

                            @foreach($relatedServices as $related)
                                <div class="single_latest_blog">
                                    <h4>
                                        <a href="{{ route('services.show', $related) }}"
                                           style="{{ $related->id === $service->id ? 'color:#ffaa17;' : '' }}">
                                            {{ $related->title }}
                                        </a>
                                    </h4>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    {{-- Quick contact card --}}
                    <div class="banner text-center">
                        <h4 class="blog_sidebar_title" style="border: 0;">Have a Question?</h4>
                        <p style="margin-bottom: 20px;">
                            Reach out and our team will get back to you within one business day.
                        </p>
                        <a class="btn_one" href="{{ route('contact') }}">Contact Us</a>
                    </div>

                    {{-- Pricing plans teaser --}}
                    <div class="advertisement_post text-center">
                        <h4 class="blog_sidebar_title" style="border: 0;">Monthly IT Plans</h4>
                        <p style="margin-bottom: 20px;">
                            Prefer ongoing support? Explore our dedicated monthly service plans.
                        </p>
                        <a class="btn_one" href="{{ route('services.index') }}#pricing">View Plans</a>
                    </div>

                </div>
                <!-- END SIDEBAR -->

            </div>
        </div>
    </div>
    <!-- END SERVICE DETAILS -->


    {{-- Related services grid, using the same card markup as the services index page --}}
    @if(!empty($relatedServices) && count($relatedServices) > 0)
        <section class="service_area section-padding">
            <div class="container">

                <div class="section-title text-center">
                    <h2>Related Services</h2>
                    <span></span>
                </div>

                <div class="row text-center">
                    @foreach($relatedServices->where('id', '!=', $service->id)->take(3) as $key => $related)
                        @php
                            $relatedSlug = Str::slug($related->slug);
                            $relatedIcon = $iconMap[$relatedSlug] ?? ($related->icon ?? 'web.png');
                            $delay = 0.1 + (($key % 3) * 0.1);
                        @endphp

                        <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp"
                             data-wow-duration="1s"
                             data-wow-delay="{{ $delay }}s"
                             data-wow-offset="0"
                             style="margin-bottom: 30px;">

                            <div class="single_service" style="min-height: 380px; padding: 40px 20px; background: #fff; border-radius: 4px; box-shadow: 0 2px 15px rgba(0,0,0,0.03); position: relative;">

                                <div class="service_content_wrapper">
                                    <img src="{{ asset('assets/img/icon/' . $relatedIcon) }}"
                                         alt="{{ $related->title }}"
                                         style="margin-bottom: 20px; max-height: 60px; width: auto; display: inline-block;" />

                                    <h4 style="margin-bottom: 15px; font-weight: 600; text-transform: capitalize;">
                                        {{ $related->title }}
                                    </h4>
                                    <p style="margin-bottom: 20px; color: #666; line-height: 1.6;">
                                        {{ Str::limit($related->short_description, 120, '...') }}
                                    </p>
                                </div>

                                <div style="position: absolute; bottom: 30px; left: 0; width: 100%; text-align: center;">
                                    <a class="btn_one" href="{{ route('services.show', $related) }}">More Info</a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    @endif

@endsection