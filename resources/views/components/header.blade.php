<header id="header">
    <div class="wpo-site-header wpo-header-style-2">
        <nav class="navigation navbar navbar-expand-lg navbar-light" style="padding-top: 10px; padding-bottom: 10px;">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-3 d-lg-none dl-block">
                        <div class="mobail-menu">
                            <button type="button" class="navbar-toggler open-btn">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar first-angle"></span>
                                <span class="icon-bar middle-angle"></span>
                                <span class="icon-bar last-angle"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{asset('assets/images/logo/logo.png')}}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-1 col-1">
                        <div id="navbar" class="collapse navbar-collapse navigation-holder">
                            <button class="menu-close"><i class="ti-close"></i></button>
                            <ul class="nav navbar-nav mb-2 mb-lg-0">
                            <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About Us</a></li>
                                <li class="menu-item-has-children">
                                    <a style="cursor: pointer;">Services</a>
                                    <ul class="sub-menu">
                                        @php
                                            $categories = \App\Models\ProductCategory::where('status', '2')->get();
                                        @endphp
                                        @foreach($categories as $category)
                                        <li class="{{ $category->products->count() > 0 ? 'menu-item-has-children' : '' }}">
                                            <a href="{{ route('product.by-category', $category->slug) }}">Konek {{ $category->product_category }}</a>
                                            @php
                                                $products = \App\Models\Product::where('product_category_id', $category->product_category_id)
                                                            ->where('status', '2')
                                                            ->get();
                                            @endphp
                                            @if($products->count() > 0)
                                            <ul class="sub-menu">
                                                @foreach($products as $product)
                                                    <li><a href="{{ route('product.detail', ['category_slug' => $category->slug, 'product_slug' => $product->slug]) }}">{{ $product->product_name }}</a></li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/mentors">Mentors</a>
                                </li>
                                <li>
                                    <a href="/blog">News and Insights</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-2">
                        <div class="header-right">
                        <div class="close-form">
                        @auth
                            <div class="dropdown d-inline">
                                <button class="dropdown-toggle" style="background: none" type="button"
                                    id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ auth()->user()->fullname }}
                                    <i class="fi flaticon-user"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                                    <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout.post') }}"
                                            class="dropdown-item">
                                            @csrf
                                            <button style="background: none" type="submit">
                                                <span>Logout</span>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <a class="login" href="{{ route('login') }}">
                                <span class="text">Sign In</span>
                                <span class="mobile">
                                    <i class="fi flaticon-charity"></i>
                                </span>
                            </a>
                            <a class="theme-btn" href="{{ route('register') }}">
                                <span class="text">Sign Up</span>
                                <span class="mobile">
                                    <i class="fi flaticon-charity"></i>
                                </span>
                            </a>
                        @endauth
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>