{{-- =====================================================
     SITE FOOTER (FIXED COMPLETE VERSION)
     Save as: resources/views/layouts/partials/footer.blade.php
     Include in layouts/app.blade.php with: @include('layouts.partials.footer')
     ===================================================== --}}

<footer class="site-footer">

    {{-- =============== FOOTER TOP =============== --}}
    <div class="footer_top section-padding">
        <div class="container">
            <div class="row">

                {{-- Company Info --}}
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                    <a href="{{ route('home') }}" class="footer_logo">
                        <img src="{{ asset('assets/img/arms-logo.png') }}" alt="{{ config('app.name') }}" class="img-fluid">
                    </a>
                    <p>We are a results-driven IT company delivering Software Development, AI Automations, Digital Marketing, SEO, Shopify Ecommerce, and Mobile Applications that help businesses grow.</p>

                    <ul class="footer_social">
                        <li><a href="#" target="_blank" aria-label="Facebook"><i class="ti-facebook"></i></a></li>
                        <li><a href="#" target="_blank" aria-label="Twitter / X"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#" target="_blank" aria-label="LinkedIn"><i class="ti-linkedin"></i></a></li>
                        <li><a href="#" target="_blank" aria-label="Instagram"><i class="ti-instagram"></i></a></li>
                        <li><a href="#" target="_blank" aria-label="YouTube"><i class="ti-youtube"></i></a></li>
                    </ul>
                </div><!-- END COL -->

                {{-- Quick Links --}}
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                    <h4 class="footer_title">Quick Links</h4>
                    <ul class="footer_links">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('services.index') }}">Services</a></li>
                        <li><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
                        <li><a href="{{ route('blog.index') }}">Blog</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div><!-- END COL -->

                {{-- Our Services --}}
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h4 class="footer_title">Our Services</h4>
                    <ul class="footer_links">
                        <li><a href="{{ route('services.show', 'software-development') }}">Software Development</a></li>
                        <li><a href="{{ route('services.show', 'ai-automations') }}">AI Automations</a></li>
                        <li><a href="{{ route('services.show', 'digital-marketing') }}">Digital Marketing</a></li>
                        <li><a href="{{ route('services.show', 'seo') }}">SEO</a></li>
                        <li><a href="{{ route('services.show', 'shopify-ecommerce') }}">Shopify Ecommerce</a></li>
                        <li><a href="{{ route('services.show', 'mobile-applications') }}">Mobile Applications</a></li>
                    </ul>
                </div><!-- END COL -->

                {{-- Contact + Newsletter --}}
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
                    <h4 class="footer_title">Get In Touch</h4>
                    <ul class="footer_contact">
                        <li><i class="ti-location-pin"></i> 123 Business Avenue, Lahore, Pakistan</li>
                        <li><i class="ti-mobile"></i> <a href="tel:+920000000000">+92 300 0000000</a></li>
                        <li><i class="ti-email"></i> <a href="mailto:info@example.com">info@example.com</a></li>
                        <li><i class="ti-time"></i> Mon – Sat: 9:00 AM – 6:00 PM</li>
                    </ul>

                    <form class="footer_newsletter" action="{{ route('newsletter.subscribe') }}" method="POST">
                        @csrf
                        <label for="footer_newsletter_email" class="sr-only">Email address</label>
                        <input type="email" id="footer_newsletter_email" name="email" class="form-control" placeholder="Your email address" required>
                        <button type="submit" title="Subscribe"><i class="ti-paper-plane"></i></button>
                    </form>
                </div><!-- END COL -->

            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </div>
    {{-- =============== END FOOTER TOP =============== --}}


    {{-- =============== FOOTER BOTTOM =============== --}}
    <div class="footer_bottom" style="padding: 20px 0; border-top: 1px solid rgba(255,255,255,0.06);">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <p class="copyright_text" style="margin: 0; font-size: 14px; color: #9099ac;">&copy; {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved.</p>
                </div><!-- END COL -->

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 target-links">
                    <ul class="footer_bottom_links" style="list-style: none; padding: 0; margin: 0; display: flex; justify-content: flex-end; gap: 20px;">
                        <li><a href="#" style="color: #9099ac; font-size: 14px; text-decoration: none;">Privacy Policy</a></li>
                        <li><a href="#" style="color: #9099ac; font-size: 14px; text-decoration: none;">Terms &amp; Conditions</a></li>
                        <li><a href="#" style="color: #9099ac; font-size: 14px; text-decoration: none;">Support</a></li>
                    </ul>
                </div><!-- END COL -->

            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </div>
    {{-- =============== END FOOTER BOTTOM =============== --}}

    {{-- Back to top --}}
    <a href="#home" class="back_to_top page-scroll" aria-label="Back to top">
        <i class="ti-angle-up"></i>
    </a>

</footer>


{{-- =====================================================
     FOOTER STYLES (COMPLETED AND SYNTAX REPAIRED)
     ===================================================== --}}
<style>
.site-footer { background:#0d1321; color:#b7bdcc; position:relative; width:100% !important; clear: both !important; display: block !important; }
.footer_top { padding-top:70px; padding-bottom:40px; }
.footer_widget .footer_logo img { max-height:42px; margin-bottom:20px; }
.footer_widget p { font-size:14px; line-height:1.8; color:#9099ac; margin-bottom:20px; }
.footer_title { color:#fff; font-size:18px; font-weight:600; margin-bottom:25px; position:relative; padding-bottom:12px; }
.footer_title:after { content:""; position:absolute; left:0; bottom:0; width:36px; height:2px; background:#ffaa17; }
.footer_social { list-style:none; padding:0; margin:0; display:flex; gap:10px; }
.footer_social li a { display:flex; align-items:center; justify-content:center; width:38px; height:38px; border-radius:50%; background:rgba(255,255,255,0.06); color:#fff; font-size:15px; transition:all .3s ease; }
.footer_social li a:hover { background:#ffaa17; color:#fff; transform:translateY(-3px); }
.footer_links { list-style:none; padding:0; margin:0; }
.footer_links li { margin-bottom:12px; }
.footer_links li a { color:#9099ac; font-size:14px; text-decoration:none; transition:color .25s ease, padding-left .25s ease; }
.footer_links li a:hover { color:#ffaa17; padding-left:4px; }
.footer_contact { list-style:none; padding:0; margin:0 0 22px; }
.footer_contact li { display:flex; align-items:flex-start; gap:10px; font-size:14px; color:#9099ac; margin-bottom:14px; line-height:1.6; }
.footer_contact li i { color:#ffaa17; margin-top:3px; }
.footer_contact li a { color:#9099ac; text-decoration:none; }
.footer_contact li a:hover { color:#ffaa17; }

/* REPAIRED AND FIXED NEWSLETTER INPUT CSS BLOCK */
.footer_newsletter { position:relative; display: flex; width: 100%; margin-top: 15px; }
.footer_newsletter input { width:100%; height:48px; border-radius:6px 0 0 6px; border:1px solid rgba(255,255,255,0.1); background: rgba(255,255,255,0.05); padding: 10px 15px; color: #fff; }
.footer_newsletter input:focus { outline: none; border-color: #ffaa17; }
.footer_newsletter button { background: #ffaa17; border: none; width: 50px; height: 48px; border-radius: 0 6px 6px 0; color: #fff; font-size: 16px; cursor: pointer; transition: background 0.2s; }
.footer_newsletter button:hover { background: #e09310; }

@media only screen and (max-width: 767px) {
    .footer_bottom_links { justify-content: center !important; margin-top: 10px !important; }
    .copyright_text { text-align: center !important; }
}
</style>
