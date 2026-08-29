@extends('layouts.app')

@section('title', 'About Us')
@section('meta_description', 'Learn about our IT company — our story, mission, values, and the team behind Software Development, AI Automations, Digital Marketing, SEO, Shopify Ecommerce & Mobile Applications.')
@section('meta_keywords', 'about us, IT company Pakistan, software development team, AI automation experts, digital marketing agency')

@section('content')

@include('partials.breadcrumb', ['pageTitle' => 'About Us'])

{{-- =====================================================
     WHO WE ARE
     ===================================================== --}}
<section class="about_area section-padding">
    <div class="container">
        <div class="row align-items-center">

        <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
    <div class="about_img_wrap">
        <img src="{{ asset('assets/img/rizwan-ceo.jpg') }}" class="img-fluid" alt="Rizwan, CEO">
    </div>
</div><!-- END COL -->

            <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="single_about_content" style="margin-top:0; box-shadow:none; padding:0 0 0 20px;">
                    <h2>Who We Are</h2>
                    <p>We are a full-service IT company helping businesses turn ideas into powerful digital products. For over a decade, we've partnered with startups and established brands alike, delivering Software Development, AI Automations, Digital Marketing, SEO, Shopify Ecommerce, and Mobile Applications that actually move the needle.</p>
                    <p style="margin-top:20px;">Our team of developers, designers, strategists, and marketers works as an extension of yours — combining technical expertise with genuine curiosity about your business goals to build solutions that last.</p>
                    <a class="btn_one" href="{{ route('contact') }}">Get In Touch</a>
                </div>
            </div><!-- END COL -->

        </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
</section>
{{-- END WHO WE ARE --}}


{{-- =====================================================
     MISSION / VISION / VALUES
     ===================================================== --}}
<section class="service_area section-padding">
    <div class="container">

        <div class="section-title text-center">
            <h2>What Drives Us</h2>
            <p>The principles that shape every project we take on and every relationship we build.</p>
        </div>

        <div class="row">

            <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single_service">
                    <img src="{{ asset('assets/img/icon/research.png') }}" alt="Our Mission">
                    <h4>Our Mission</h4>
                    <p>To empower businesses of every size with reliable, scalable technology that removes friction and drives measurable growth.</p>
                </div>
            </div><!-- END COL -->

            <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="single_service">
                    <img src="{{ asset('assets/img/icon/strategy.png') }}" alt="Our Vision">
                    <h4>Our Vision</h4>
                    <p>To be the long-term technology partner of choice for companies who want thoughtful, future-proof digital products.</p>
                </div>
            </div><!-- END COL -->

            <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="single_service">
                    <img src="{{ asset('assets/img/icon/brand.png') }}" alt="Our Values">
                    <h4>Our Values</h4>
                    <p>Transparency, craftsmanship, and accountability. We say what we mean, ship what we promise, and stand behind our work.</p>
                </div>
            </div><!-- END COL -->

        </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
</section>
{{-- END MISSION / VISION / VALUES --}}


{{-- =====================================================
     COUNTER SECTION
     ===================================================== --}}
<section data-stellar-background-ratio="0.3" class="counter_feature section-padding">
    <div class="container">
        <div class="row text-center">

            <div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single-project">
                    <img src="{{ asset('assets/img/icon/counter-1.png') }}" alt="Happy Clients">
                    <h2 class="counter-num">150</h2>
                    <h4>Happy Clients</h4>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="single-project">
                    <img src="{{ asset('assets/img/icon/counter-2.png') }}" alt="Projects Done">
                    <h2 class="counter-num">300</h2>
                    <h4>Projects Done</h4>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="single-project">
                    <img src="{{ asset('assets/img/icon/counter-3.png') }}" alt="Years in Business">
                    <h2 class="counter-num">10</h2>
                    <h4>Years in Business</h4>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
                <div class="single-project single-project-mrnone">
                    <img src="{{ asset('assets/img/icon/counter-4.png') }}" alt="Support Cases">
                    <h2 class="counter-num">1200</h2>
                    <h4>Support Cases</h4>
                </div>
            </div>

        </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
</section>
{{-- END COUNTER --}}


{{-- =====================================================
     WHY CHOOSE US
     ===================================================== --}}
<section class="why_choose_area section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single_why_choose">
                    <h2>Why businesses <br> choose to work <br> with us</h2>
                    <p>We don't just write code or run campaigns — we take the time to understand your business, then build solutions that fit. Here's what sets us apart:</p>
                    <ul style="list-style:none; padding:0; margin-bottom:30px;">
                        <li style="margin-bottom:15px;"><i class="ti-check" style="color:#ffaa17; margin-right:10px;"></i> Dedicated project teams, not rotating freelancers</li>
                        <li style="margin-bottom:15px;"><i class="ti-check" style="color:#ffaa17; margin-right:10px;"></i> Transparent timelines, pricing, and communication</li>
                        <li style="margin-bottom:15px;"><i class="ti-check" style="color:#ffaa17; margin-right:10px;"></i> Post-launch support that doesn't disappear</li>
                        <li style="margin-bottom:15px;"><i class="ti-check" style="color:#ffaa17; margin-right:10px;"></i> Cross-disciplinary team under one roof</li>
                    </ul>
                    <a class="btn_one" href="{{ route('services.index') }}">Our Services</a>
                </div>
            </div><!-- END COL -->

            <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="single_why_choose_img">
                    <img src="{{ asset('assets/img/home-office.png') }}" class="img-fluid" alt="Why Choose Us">
                </div>
            </div><!-- END COL -->

        </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
</section>
{{-- END WHY CHOOSE US --}}


{{-- =====================================================
     OUR PROCESS
     ===================================================== --}}
<section class="feature_area">
    <div class="container">
        <div class="row feature_bg" style="margin-top:0;">

            <div class="section-title text-center">
                <h2>How We Work</h2>
                <p>A clear, collaborative process from first conversation to launch and beyond.</p>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single_feature">
                    <img src="{{ asset('assets/img/icon/research.png') }}" alt="Discover">
                    <h4>01. Discover</h4>
                    <p>We learn about your goals, users, and constraints before proposing a single solution.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="single_feature">
                    <img src="{{ asset('assets/img/icon/design.png') }}" alt="Design">
                    <h4>02. Design</h4>
                    <p>We map out the strategy and design the experience before writing a line of code.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="single_feature">
                    <img src="{{ asset('assets/img/icon/web.png') }}" alt="Build">
                    <h4>03. Build</h4>
                    <p>Our developers build in focused sprints, with regular check-ins so you're never in the dark.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
                <div class="single_feature">
                    <img src="{{ asset('assets/img/icon/strategy.png') }}" alt="Grow">
                    <h4>04. Grow</h4>
                    <p>After launch we monitor, optimize, and support so your product keeps performing.</p>
                </div>
            </div>

        </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
</section>
{{-- END OUR PROCESS --}}


{{-- =====================================================
     MEET THE TEAM
     ===================================================== --}}
     <section class="team_area section-padding" style="background-color:#f9fcff; background-image: url({{ asset('assets/img/bg/team-bg.jpg') }}); background-size:cover; background-position:center;">
    <div class="container">

        <div class="section-title text-center">
            <h2 class="section-title">Meet Our Team</h2>
            <p class="section-title">The people behind the strategy, design, and code.</p>
        </div>

        <div class="row">

            @forelse($team ?? [] as $member)
            <div class="col-lg-3 col-sm-6 col-xs-12 our-team wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single-team text-center">
                    <img src="{{ asset('storage/' . $member->photo) }}" class="img-fluid" alt="{{ $member->name }}">
                    <h3>{{ $member->name }}</h3>
                    <p>{{ $member->position }}</p>
                    <ul class="social">
                        <li><a class="facebook" href="{{ $member->facebook_url ?? '#' }}"><i class="ti-facebook"></i></a></li>
                        <li><a class="twitter" href="{{ $member->twitter_url ?? '#' }}"><i class="ti-twitter-alt"></i></a></li>
                        <li><a class="google" href="{{ $member->linkedin_url ?? '#' }}"><i class="ti-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            @empty
            {{-- Static fallback team members --}}
            <div class="col-lg-3 col-sm-6 col-xs-12 our-team wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single-team text-center">
                    <img src="{{ asset('assets/img/team/1.jpg') }}" class="img-fluid" alt="Founder & CEO">
                    <h3>Ahmed Raza</h3>
                    <p>Founder &amp; CEO</p>
                    <ul class="social">
                        <li><a class="facebook" href="#"><i class="ti-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a class="google" href="#"><i class="ti-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12 our-team wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="single-team text-center">
                    <img src="{{ asset('assets/img/team/2.jpg') }}" class="img-fluid" alt="Lead Developer">
                    <h3>Sara Khan</h3>
                    <p>Lead Developer</p>
                    <ul class="social">
                        <li><a class="facebook" href="#"><i class="ti-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a class="google" href="#"><i class="ti-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12 our-team wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="single-team text-center">
                    <img src="{{ asset('assets/img/team/3.jpg') }}" class="img-fluid" alt="AI & Automation Lead">
                    <h3>Bilal Ahmed</h3>
                    <p>AI &amp; Automation Lead</p>
                    <ul class="social">
                        <li><a class="facebook" href="#"><i class="ti-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a class="google" href="#"><i class="ti-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12 our-team wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
                <div class="single-team text-center">
                    <img src="{{ asset('assets/img/team/4.jpg') }}" class="img-fluid" alt="Head of Marketing">
                    <h3>Ayesha Malik</h3>
                    <p>Head of Marketing</p>
                    <ul class="social">
                        <li><a class="facebook" href="#"><i class="ti-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a class="google" href="#"><i class="ti-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            @endforelse

        </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
</section>
{{-- END TEAM --}}


{{-- =====================================================
     TESTIMONIALS
     ===================================================== --}}
<div class="testimonial_area section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h2>From Our Clients</h2>
            <p>Don't just take our word for it — here's what our clients say about working with us.</p>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-sm-12 col-xs-12">
                <div class="row">

                    @forelse($testimonials ?? [] as $testimonial)
                    <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                        <div class="single_testimonial">
                            <div class="testimonial_img">
                                <img src="{{ asset('storage/' . $testimonial->avatar) }}" alt="{{ $testimonial->name }}">
                            </div>
                            <p>{{ $testimonial->message }}</p>
                            <h4>{{ $testimonial->name }}</h4>
                            <h5>{{ $testimonial->position }}, {{ $testimonial->company }}</h5>
                        </div>
                    </div>
                    @empty
                    {{-- Static fallback testimonials --}}
                    <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                        <div class="single_testimonial">
                            <div class="testimonial_img">
                                <img src="{{ asset('assets/img/testimonial/1.jpg') }}" alt="Alex Chohan">
                            </div>
                            <p>They delivered our Shopify store on time and exceeded every expectation. Our sales increased by 60% in the first month after launch!</p>
                            <h4>Alex Chohan</h4>
                            <h5>Director, Accurate Themes</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                        <div class="single_testimonial">
                            <div class="testimonial_img">
                                <img src="{{ asset('assets/img/testimonial/2.jpg') }}" alt="Johnson Brown">
                            </div>
                            <p>The AI automation system they built saved our team 20+ hours per week. Incredible work and outstanding communication throughout.</p>
                            <h4>Johnson Brown</h4>
                            <h5>Marketing Head, Spyro Themes</h5>
                        </div>
                    </div>
                    @endforelse

                </div><!-- END ROW -->
            </div>
        </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
</div>
{{-- END TESTIMONIALS --}}

{{-- =====================================================
     HIRE US CTA
     ===================================================== --}}
<div class="hire_us_area">
    <div class="container">
        <div class="hire_us_box row align-items-center">

        <div class="col-lg-4 col-sm-12 col-xs-12 hire_img text-center">
    <i class="ti-bar-chart" style="font-size: 120px; color: #ffaa17;"></i>
</div>

            <div class="col-lg-8 col-sm-12 col-xs-12 hire_content wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <h2>Ready to build something great together?</h2>
                <p>Tell us about your project and we'll get back to you within 24 hours with next steps.</p>
                <a class="btn_one" href="{{ route('contact') }}">Get a Free Quote</a>
            </div><!-- END COL -->

        </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
</div>
{{-- END HIRE US CTA --}}

<style>
/* ===================== HIRE US CTA ===================== */
.hire_us_area{
    padding: 90px 0 90px;
    background: #f4f6fb;
}

.hire_us_box{
    background: #fff;
    border-radius: 16px;
    padding: 50px 40px;
    box-shadow: 0 20px 50px rgba(13,19,33,0.08);
}

.hire_img i{
    display: inline-block;
}

.hire_content h2{
    font-size: 34px;
    font-weight: 800;
    color: #0d1321;
    margin-bottom: 15px;
}
.hire_content p{
    font-size: 15px;
    color: #6b7280;
    margin-bottom: 25px;
}

.btn_one{
    display: inline-block;
    padding: 14px 34px;
    border: 2px solid #0d1321;
    border-radius: 50px;
    color: #0d1321;
    font-weight: 600;
    text-decoration: none;
    transition: all .3s ease;
}
.btn_one:hover{
    background: #ffaa17;
    border-color: #ffaa17;
    color: #fff;
}

/* ===================== GLOBAL RESPONSIVE FIXES ===================== */

/* ---- Section Top / Banner ---- */
.section-top{
    padding: 100px 0 60px;
}
.section-top-title h1{
    font-size: 42px;
}

/* ---- Who We Are ---- */
.about_area img{
    margin-bottom: 30px;
}

/* ---- Mission / Vision / Values cards ---- */
.single_service{
    margin-bottom: 30px;
}

/* ---- Counter Section ---- */
.single-project{
    margin-bottom: 30px;
}

/* ---- Why Choose Us ---- */
.single_why_choose_img{
    margin-top: 30px;
}

/* ---- Our Process (Feature Area) ---- */
.single_feature{
    margin-bottom: 30px;
}

/* ---- Team Cards ---- */
.single-team{
    margin-bottom: 30px;
}

/* ---- Testimonials ---- */
.single_testimonial{
    margin-bottom: 30px;
}

/* ===================== TABLET (max-width: 991px) ===================== */
@media (max-width: 991px){
    .section-top{
        padding: 80px 0 50px;
    }
    .section-top-title h1{
        font-size: 34px;
    }

    .single_about_content{
        padding: 0 !important;
        margin-top: 30px !important;
    }

    .single_why_choose h2{
        font-size: 28px;
        margin-bottom: 15px;
    }

    .hire_content h2{
        font-size: 28px;
    }

    .hire_us_box{
        padding: 40px 25px;
    }
}

/* ===================== MOBILE (max-width: 767px) ===================== */
@media (max-width: 767px){
    .section-top{
        padding: 70px 0 40px;
    }
    .section-top-title h1{
        font-size: 28px;
    }
    .breadcrumb li{
        font-size: 13px;
    }

    .section-title h2{
        font-size: 26px;
    }
    .section-title p{
        font-size: 14px;
    }

    .single_why_choose h2{
        font-size: 24px;
        line-height: 1.4;
    }
    .single_why_choose h2 br{
        display: none;
    }

    .counter-num{
        font-size: 32px;
    }

    .hire_content h2{
        font-size: 24px;
        line-height: 1.4;
    }
    .hire_content p{
        font-size: 14px;
    }
    .hire_us_box{
        padding: 30px 20px;
        border-radius: 12px;
    }
    .hire_img{
        margin-bottom: 15px;
    }
    .hire_img i{
        font-size: 70px !important;
    }
}

/* ===================== SMALL MOBILE (max-width: 480px) ===================== */
@media (max-width: 480px){
    .section-top-title h1{
        font-size: 24px;
    }
    .section-title h2{
        font-size: 22px;
    }
    .btn_one{
        padding: 12px 26px;
        font-size: 14px;
    }
    .footer_bottom_links{
        gap: 14px;
    }
}
</style>
@endsection