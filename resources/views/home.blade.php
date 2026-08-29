@extends('layouts.app')

@section('title', 'Home')
@section('meta_description', 'Professional IT solutions — Software Development, AI Automations, Digital Marketing, SEO, Shopify Ecommerce & Mobile Applications.')
@section('meta_keywords', 'software development, AI automation, digital marketing, SEO, Shopify ecommerce, mobile applications, IT company Pakistan')

@section('content')

{{-- =====================================================
     START HOME / HERO VIDEO
     ===================================================== --}}
<section id="home" class="home_video html-video">
    <video class="text-center" muted autoplay loop>
        <source type="video/webm" src="{{ asset('assets/videos/video.webm') }}">
        <source type="video/mp4"  src="{{ asset('assets/videos/video.mp4') }}">
        Your browser does not support the video tag.
    </video>
    <div class="hero-text slider-caption text-center">
        <h2>Elevate Business Success with Technology</h2>
        <p>From Software Development and AI Automations to Mobile Apps and Shopify stores — we turn your ideas into powerful digital products.</p>
        <a href="{{ route('services.index') }}" class="page-scroll btn btn-default btn_one">Our Services</a>
        <a href="{{ route('contact') }}"        class="page-scroll btn btn-default btn_one" style="margin-left:10%;">Get a Quote</a>
    </div>
</section>
{{-- END HOME --}}


{{-- =====================================================
     FEATURES / WHAT WE DO
     ===================================================== --}}
<section class="feature_area">
    <div class="container">
        <div class="row feature_bg">

            <div class="section-title text-center">
                <h2>What We Do</h2>
                <p>End-to-end technology services tailored to your business goals. We help companies grow with smart digital solutions.</p>
            </div>

            {{-- Software Development --}}
            <div class="col-lg-4 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single_feature">
                    <img src="{{ asset('assets/img/icon/web.png') }}" alt="Software Development">
                    <h4>Software Development</h4>
                    <p>Custom web and enterprise software built with modern technologies to solve your unique business challenges.</p>
                    <a href="{{ route('services.show', 'software-development') }}">Learn More</a>
                </div>
            </div>

            {{-- AI Automations --}}
            <div class="col-lg-4 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="single_feature">
                    <img src="{{ asset('assets/img/icon/strategy.png') }}" alt="AI Automations">
                    <h4>AI Automations</h4>
                    <p>Harness AI to automate repetitive tasks, gain data insights, and supercharge your business operations.</p>
                    <a href="{{ route('services.show', 'ai-automations') }}">Learn More</a>
                </div>
            </div>

            {{-- Digital Marketing --}}
            <div class="col-lg-4 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="single_feature">
                    <img src="{{ asset('assets/img/icon/brand.png') }}" alt="Digital Marketing">
                    <h4>Digital Marketing</h4>
                    <p>Data-driven strategies to grow your online presence, attract qualified leads, and increase revenue.</p>
                    <a href="{{ route('services.show', 'digital-marketing') }}">Learn More</a>
                </div>
            </div>

            {{-- SEO --}}
            <div class="col-lg-4 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
                <div class="single_feature">
                    <img src="{{ asset('assets/img/icon/research.png') }}" alt="SEO">
                    <h4>SEO</h4>
                    <p>Dominate search rankings and drive organic traffic with our proven SEO strategies and technical expertise.</p>
                    <a href="{{ route('services.show', 'seo') }}">Learn More</a>
                </div>
            </div>

            {{-- Shopify Ecommerce --}}
            <div class="col-lg-4 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
                <div class="single_feature">
                    <img src="{{ asset('assets/img/icon/design.png') }}" alt="Shopify Ecommerce">
                    <h4>Shopify Ecommerce</h4>
                    <p>Launch, grow, and optimize your Shopify store with custom development, design, and marketing solutions.</p>
                    <a href="{{ route('services.show', 'shopify-ecommerce') }}">Learn More</a>
                </div>
            </div>

            {{-- Mobile Applications --}}
            <div class="col-lg-4 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" data-wow-offset="0">
                <div class="single_feature">
                    <img src="{{ asset('assets/img/icon/photo.png') }}" alt="Mobile Applications">
                    <h4>Mobile Applications</h4>
                    <p>Beautiful, high-performance iOS and Android apps that your users will love and keep coming back to.</p>
                    <a href="{{ route('services.show', 'mobile-applications') }}">Learn More</a>
                </div>
            </div>

        </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
</section>
{{-- END FEATURES --}}


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

        {{-- Video Play Button --}}
        <div class="row text-center">
            <div class="col-lg-8 offset-lg-2 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="video_btn" style="background-image: url({{ asset('assets/img/bg/video-bg.jpg') }}); background-size:cover; background-position: center center;">
                    <a class="video-play venobox" data-vbtype="video" data-autoplay="true" href="https://www.youtube.com/watch?v=alswD2tCc_Q">
                        <i class="ti-control-play"></i>
                    </a>
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
                    <h2>We create <br> amazing digital <br> products</h2>
                    <p>We are a passionate team of developers, designers, and marketers committed to delivering exceptional digital solutions. From AI-powered automations to Shopify stores and mobile apps — we bring your vision to life with precision and creativity.</p>
                    <a class="btn_one" href="{{ route('about') }}">Learn More</a>
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
     PORTFOLIO / LATEST WORKS
     ===================================================== --}}
<section id="portfolio" class="portfolio_area section-padding">
    <div class="container-fluid">

        <div class="section-title text-center">
            <h2>Latest Works</h2>
            <p>A glimpse of what we've built for our clients across different industries and technologies.</p>
        </div>

        {{-- Filter Buttons --}}
        <div class="col-lg-12 text-center">
            <div class="portfolio_filter">
                <ul>
                    <li class="active filter" data-filter="all">All</li>
                    <li class="filter" data-filter=".software">Software</li>
                    <li class="filter" data-filter=".mobile">Mobile App</li>
                    <li class="filter" data-filter=".shopify">Shopify</li>
                    <li class="filter" data-filter=".seo">SEO</li>
                    <li class="filter" data-filter=".marketing">Marketing</li>
                </ul>
            </div>
        </div>

        <div class="portfolio-grid">
            <div class="row">

                @forelse($portfolios as $item)
                <div class="col-lg-4 col-sm-6 col-xs-12 portfolio-item mix {{ strtolower(str_replace(' ', '', $item->category)) }}">
                    <div class="single-gallery">
                        <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="{{ $item->title }}">
                        <a href="{{ asset('storage/' . $item->image) }}" class="gallery_enlarge_icon venobox" data-gall="myGallery">
                            <i class="ti-eye"></i>
                        </a>
                        <h4><a href="{{ route('portfolio.show', $item->slug) }}">{{ $item->title }}</a></h4>
                    </div>
                </div>
                @empty
                {{-- Static fallback items --}}
                <div class="col-lg-4 col-sm-6 col-xs-12 portfolio-item mix software">
                    <div class="single-gallery">
                        <img src="{{ asset('assets/img/portfolio/1.jpg') }}" class="img-fluid" alt="Software Project">
                        <a href="{{ asset('assets/img/portfolio/1.jpg') }}" class="gallery_enlarge_icon venobox" data-gall="myGallery"><i class="ti-eye"></i></a>
                        <h4><a href="{{ route('portfolio.index') }}">View Project</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 portfolio-item mix mobile">
                    <div class="single-gallery">
                        <img src="{{ asset('assets/img/portfolio/2.jpg') }}" class="img-fluid" alt="Mobile App">
                        <a href="{{ asset('assets/img/portfolio/2.jpg') }}" class="gallery_enlarge_icon venobox" data-gall="myGallery"><i class="ti-eye"></i></a>
                        <h4><a href="{{ route('portfolio.index') }}">View Project</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12 portfolio-item mix shopify marketing">
                    <div class="single-gallery">
                        <img src="{{ asset('assets/img/portfolio/3.jpg') }}" class="img-fluid" alt="Shopify Store">
                        <a href="{{ asset('assets/img/portfolio/3.jpg') }}" class="gallery_enlarge_icon venobox" data-gall="myGallery"><i class="ti-eye"></i></a>
                        <h4><a href="{{ route('portfolio.index') }}">View Project</a></h4>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12 portfolio-item mix seo marketing">
                    <div class="single-gallery">
                        <img src="{{ asset('assets/img/portfolio/4.jpg') }}" class="img-fluid" alt="SEO Campaign">
                        <a href="{{ asset('assets/img/portfolio/4.jpg') }}" class="gallery_enlarge_icon venobox" data-gall="myGallery"><i class="ti-eye"></i></a>
                        <h4><a href="{{ route('portfolio.index') }}">View Project</a></h4>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12 portfolio-item mix software mobile">
                    <div class="single-gallery">
                        <img src="{{ asset('assets/img/portfolio/5.jpg') }}" class="img-fluid" alt="Web App">
                        <a href="{{ asset('assets/img/portfolio/5.jpg') }}" class="gallery_enlarge_icon venobox" data-gall="myGallery"><i class="ti-eye"></i></a>
                        <h4><a href="{{ route('portfolio.index') }}">View Project</a></h4>
                    </div>
                </div>
                @endforelse

            </div><!-- END ROW -->

            <div class="col-lg-12 text-center">
                <div class="portfolio_btn">
                    <a class="btn_one" href="{{ route('portfolio.index') }}">View More</a>
                </div>
            </div>
        </div><!-- END PORTFOLIO GRID -->

    </div><!-- END CONTAINER -->
</section>
{{-- END PORTFOLIO --}}


{{-- =====================================================
     SKILLS SECTION
     ===================================================== --}}
<section class="skills_area section-padding" style="background-image: url({{ asset('assets/img/bg/skill-bg.jpg') }}); background-size:cover; background-position:center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-8 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="skill_bg">
                    <div class="skill_content">
                        <h2>Generating New Ideas. Solving Big Problems</h2>
                        <p>We combine cutting-edge technology with creative thinking to deliver solutions that make a real difference for your business growth.</p>
                    </div>
                    <div class="skill_bar">
                        <div class="progress-bar-linear">
                            <p class="progress-bar-text">Software Development <span>90%</span></p>
                            <div class="progress-bar"><span data-percent="90"></span></div>
                        </div>
                        <div class="progress-bar-linear">
                            <p class="progress-bar-text">AI Automations <span>90%</span></p>
                            <div class="progress-bar"><span data-percent="85"></span></div>
                        </div>
                        <div class="progress-bar-linear">
                            <p class="progress-bar-text">Mobile Applications <span>85%</span></p>
                            <div class="progress-bar"><span data-percent="80"></span></div>
                        </div>
                        <div class="progress-bar-linear">
                            <p class="progress-bar-text">Shopify Ecommerce <span>95%</span></p>
                            <div class="progress-bar"><span data-percent="88"></span></div>
                        </div>
                        <div class="progress-bar-linear">
                            <p class="progress-bar-text">Digital Marketing & SEO <span>90%</span></p>
                            <div class="progress-bar"><span data-percent="88"></span></div>
                        </div>
                    </div>
                </div>
            </div><!-- END COL -->
        </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
</section>
{{-- END SKILLS --}}


{{-- =====================================================
     PROMOTIONAL AREA
     ===================================================== --}}
<div class="promotional_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="promotional_content">
                    <img src="{{ asset('assets/img/team-image.jpg') }}" class="img-fluid" alt="Our Team">
                    <p>We are a results-driven IT company passionate about building technology that helps businesses grow. Our expert team delivers end-to-end solutions — from strategy and design to development and deployment.</p>
                </div>
            </div><!-- END COL -->
        </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
</div>
{{-- END PROMOTIONAL AREA --}}


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

                    @forelse($testimonials as $testimonial)
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
                    <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                        <div class="single_testimonial">
                            <div class="testimonial_img">
                                <img src="{{ asset('assets/img/testimonial/3.jpg') }}" alt="David Miller">
                            </div>
                            <p>Our mobile app ranks top in the App Store since launch. Professional team, clean code, and excellent UI/UX design. Highly recommended!</p>
                            <h4>David Miller</h4>
                            <h5>Founder, Theme Ocean</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
                        <div class="single_testimonial">
                            <div class="testimonial_img">
                                <img src="{{ asset('assets/img/testimonial/4.jpg') }}" alt="Maya Khan">
                            </div>
                            <p>Their SEO work took us from page 5 to page 1 on Google within 3 months. The organic traffic growth has been phenomenal for our business.</p>
                            <h4>Maya Khan</h4>
                            <h5>Chairman, Web Template</h5>
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
     LATEST BLOG
     ===================================================== --}}
<section class="blog_area section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h2>Latest Blog</h2>
            <p>Stay updated with the latest trends in technology, digital marketing, and IT solutions.</p>
        </div>
        <div class="row text-center">

            @forelse($posts as $post)
            <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="home_single_blog">
                    <img src="{{ asset('storage/' . $post->featured_image) }}" class="img-fluid" alt="{{ $post->title }}">
                    <div class="home_blog_content">
                        <div class="blog_title_info">
                            <h2><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h2>
                            <span>{{ $post->published_at->format('F d, Y') }}</span>
                            <span><a href="{{ route('blog.index') }}">{{ $post->category }}</a></span>
                        </div>
                        <p>{{ $post->excerpt }}</p>
                        <a class="home_b_btn" href="{{ route('blog.show', $post->slug) }}">Read More</a>
                    </div>
                </div>
            </div>
            @empty
            {{-- Static fallback blog posts --}}
            <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="home_single_blog">
                    <img src="{{ asset('assets/img/blog/1.jpg') }}" class="img-fluid" alt="Blog">
                    <div class="home_blog_content">
                        <div class="blog_title_info">
                            <h2><a href="{{ route('blog.index') }}">How AI is Transforming Business Operations in 2025</a></h2>
                            <span>May 10, 2025</span>
                            <span><a href="{{ route('blog.index') }}">AI & Technology</a></span>
                        </div>
                        <p>Discover how businesses are leveraging AI automations to save time, cut costs, and scale faster than ever before.</p>
                        <a class="home_b_btn" href="{{ route('blog.index') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="home_single_blog">
                    <img src="{{ asset('assets/img/blog/2.jpg') }}" class="img-fluid" alt="Blog">
                    <div class="home_blog_content">
                        <div class="blog_title_info">
                            <h2><a href="{{ route('blog.index') }}">Top Shopify Features You Should Be Using in 2025</a></h2>
                            <span>May 05, 2025</span>
                            <span><a href="{{ route('blog.index') }}">Ecommerce</a></span>
                        </div>
                        <p>Maximize your Shopify store's potential with these powerful features and plugins that boost conversions and sales.</p>
                        <a class="home_b_btn" href="{{ route('blog.index') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="home_single_blog">
                    <img src="{{ asset('assets/img/blog/3.jpg') }}" class="img-fluid" alt="Blog">
                    <div class="home_blog_content">
                        <div class="blog_title_info">
                            <h2><a href="{{ route('blog.index') }}">Why Mobile-First Development Matters in 2025</a></h2>
                            <span>April 28, 2025</span>
                            <span><a href="{{ route('blog.index') }}">Mobile Dev</a></span>
                        </div>
                        <p>With over 60% of traffic from mobile devices, here's why your next app must have a mobile-first approach.</p>
                        <a class="home_b_btn" href="{{ route('blog.index') }}">Read More</a>
                    </div>
                </div>
            </div>
            @endforelse

        </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
</section>
{{-- END BLOG --}}


{{-- =====================================================
     CONTACT SECTION
     ===================================================== --}}
<div id="contact" class="contact_area section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="section-title-white">Say Hello, Let's Start Something New</h2>
            <p class="section-title-white">Have a project in mind? We'd love to hear about it. Drop us a message and we'll get back to you within 24 hours.</p>
        </div>
        <div class="row">
            <div class="col-lg-offset-1 col-lg-10 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="contact">

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form class="form" action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text"  name="name"    class="form-control @error('name') is-invalid @enderror"    placeholder="Name"    value="{{ old('name') }}"    required>
                                @error('name')    <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email"   class="form-control @error('email') is-invalid @enderror"   placeholder="Email"   value="{{ old('email') }}"   required>
                                @error('email')   <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text"  name="subject" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" value="{{ old('subject') }}" required>
                                @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <textarea rows="6" name="message" class="form-control @error('message') is-invalid @enderror" placeholder="Type your message..." required>{{ old('message') }}</textarea>
                                @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="contact_btn" title="Submit Your Message!">Send Message</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div><!-- END COL -->
        </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
</div>
{{-- END CONTACT --}}


{{-- =====================================================
     PARTNER LOGOS
     ===================================================== --}}
<div class="partner-logo section-padding">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single_logo single_logo_bm">
                    <a href="#"><img src="{{ asset('assets/img/partner/1.png') }}" class="img-fluid" alt="Partner"></a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="single_logo">
                    <a href="#"><img src="{{ asset('assets/img/partner/2.png') }}" class="img-fluid" alt="Partner"></a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="single_logo single_logo_bm">
                    <a href="#"><img src="{{ asset('assets/img/partner/3.png') }}" class="img-fluid" alt="Partner"></a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
                <div class="single_logo">
                    <a href="#"><img src="{{ asset('assets/img/partner/4.png') }}" class="img-fluid" alt="Partner"></a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
                <div class="single_logo">
                    <a href="#"><img src="{{ asset('assets/img/partner/5.png') }}" class="img-fluid" alt="Partner"></a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" data-wow-offset="0">
                <div class="single_logo">
                    <a href="#"><img src="{{ asset('assets/img/partner/6.png') }}" class="img-fluid" alt="Partner"></a>
                </div>
            </div>
        </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
</div>
{{-- END PARTNER LOGOS --}}

@endsection


@push('scripts')
<script>
    $(document).ready(function () {
        // Init Venobox (video lightbox + gallery enlarge)
        $('.venobox').venobox();
    });
</script>
@endpush