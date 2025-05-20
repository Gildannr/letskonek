@extends('layouts.master')

@section('title', 'Mentors')

@section('content')
        
        <section class="wpo-page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Mentors</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>Mentors</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <!-- start wpo-Team-section -->
        <section class="wpo-team-section section-padding">
            <div class="container">
                <div class="wpo-section-title-s2">
                    <small>Creating Impact Together</small>
                    <h2>Meet our Mentors</h2>
                </div>
                <div class="wpo-team-wrap">
                    <div class="row">
                        @forelse ($mentors as $mentor)
                            <div class="col col-lg-3 col-md-6 col-12">
                                <div class="wpo-team-item">
                                    <div class="wpo-team-img">
                                        <div class="wpo-team-img-box">
                                            @if($mentor->gambar)
                                                <img src="https://letskonek.satuvisitech.com/images/post/{{ ($mentor->gambar) }}" alt="{{ $mentor->mentros_name }}">
                                            @else
                                                <img src="https://letskonek.satuvisitech.com/images/post/{{ ($mentor->gambar) }}" alt="{{ $mentor->mentros_name }}"> {{-- Default image --}}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="wpo-team-text">
                                        @if($mentor->slug)
                                            <h2><a href="{{ route('mentor.detail', $mentor->slug) }}">{{ $mentor->mentros_name }}</a></h2>
                                        @else
                                            <h2>{{ $mentor->mentros_name }}</h2>
                                        @endif
                                        {{-- Display description or a shorter title if available --}}
                                        {{-- <span>{{ Str::limit(strip_tags($mentor->description), 50) }}</span> --}}
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center">
                                <p>No mentors found.</p>
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
