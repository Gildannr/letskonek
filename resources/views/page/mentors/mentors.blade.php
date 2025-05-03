@extends('layouts.master')

@section('title', 'Mentors')

@section('content')

    <!-- start wpo-page-title -->
    <section class="wpo-page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Team</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>Our Team</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
            <div class="shape-1"><img src="{{ asset('assets/images/shape/1.svg') }}" alt=""></div>
            <div class="shape-2"><img src="{{ asset('assets/images/shape/2.svg') }}" alt=""></div>
            <div class="shape-3"><img src="{{ asset('assets/images/shape/3.svg') }}" alt=""></div>
            <div class="shape-4"><img src="{{ asset('assets/images/shape/4.svg') }}" alt=""></div>
        </section>
        <!-- end page-title -->

        <!-- start wpo-Team-section -->
        <section class="wpo-team-section section-padding">
            <div class="container">
                <div class="wpo-section-title-s2">
                    <small>Our Professionals</small>
                    <h2>Team
                    </h2>
                </div>
                <div class="wpo-team-wrap">
                    <div class="row">
                        @forelse ($mentors as $mentor)
                            <div class="col col-lg-3 col-md-6 col-12">
                                <div class="wpo-team-item">
                                    <div class="wpo-team-img">
                                        <div class="wpo-team-img-box">
                                            @if($mentor->gambar)
                                                <img src="{{ asset('storage/' . $mentor->gambar) }}" alt="{{ $mentor->title }}">
                                            @else
                                                <img src="{{ asset('assets/images/team/1.jpg') }}" alt="{{ $mentor->title }}"> {{-- Default image --}}
                                            @endif
                                            {{-- Social links can be added later if needed --}}
                                            {{-- <ul>
                                                <li><a href="#"><i class="fi flaticon-facebook-app-symbol"></i></a></li>
                                                <li><a href="#"><i class="fi flaticon-twitter"></i></a></li>
                                                <li><a href="#"><i class="fi flaticon-linkedin"></i></a></li>
                                            </ul> --}}
                                        </div>
                                    </div>
                                    <div class="wpo-team-text">
                                        @if($mentor->slug)
                                            <h2><a href="{{ route('team.detail', $mentor->slug) }}">{{ $mentor->title }}</a></h2>
                                        @else
                                            <h2>{{ $mentor->title }}</h2>
                                        @endif
                                        <span>{{ $mentor->sub_title ?? '' }}</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center">
                                <p>No team members found.</p>
                            </div>
                        @endforelse
                    </div>
                    <div class="pagination-wrapper pagination-wrapper-center mt-5">
                        {{ $mentors->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div> 
        </section>
        <!-- end Team-section -->
@endsection
