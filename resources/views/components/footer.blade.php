<!-- start of wpo-site-footer-section -->
<footer class="wpo-site-footer">
            <div class="wpo-upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-md-6 col-12 col-md-6 col-sm-12 col-12">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <a class="navbar-brand" href="index.php"><img src="{{asset('assets/images/logo/logo-putih.png')}}" alt=""></a>
                                </div>
                                <p>When the world offers you robots, we bring you real human connections.</p>

                                <p>Let's KONEK together! Advance your career and studies, and create a real impact!</p>
                                <div class="social">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fi flaticon-facebook-app-symbol"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fi flaticon-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fi flaticon-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fi flaticon-instagram-1"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-12 col-md-6 col-sm-12 col-12">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>About</h3>
                                </div>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/blog">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-12 col-md-6 col-sm-12 col-12">
                            <div class="widget link-widget s2">
                                <div class="widget-title">
                                    <h3>Connections</h3>
                                </div>
                                @php
                                    // Fetch active product categories
                                    $footerCategories = \App\Models\ProductCategory::where('status', '2')->orderBy('product_category')->get();
                                @endphp
                                <ul>
                                    @foreach($footerCategories as $category)
                                        <li><a href="{{ route('product.by-category', $category->slug) }}">Konek {{ $category->product_category }}</a></li>
                                    @endforeach
                                    {{-- Keep static links if needed --}}
                                    {{-- <li><a href="{{ route('register') }}">Register</a></li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-12 col-md-6 col-sm-12 col-12">
                            <div class="widget wpo-contact-widget">
                                <div class="widget-title">
                                    <h3>Contact Us</h3>
                                </div>
                                <div class="contact-ft">
                                    <ul>
                                        <li><i class="fi flaticon-email"></i>info@letskonek.com</li>
                                        <li><i class="fi flaticon-phone-call"></i>(+62)87751702263</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <div class="wpo-lower-footer">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-lg-6 col-md-12 col-12">
                            <ul>
                                <li>&copy; 2025 <a href="#">LetsKonek</a>. All rights reserved.</li>
                            </ul>
                        </div>
                        <div class="col col-lg-6 col-md-12 col-12">
                            <div class="link">
                                <ul>
                                    <li><a href="privacy.html">Privace & Policy</a></li>
                                    <li><a href="terms.html">Terms</a></li>
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<!-- end of wpo-site-footer-section -->