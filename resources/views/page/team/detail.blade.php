@extends('layouts.detail')

@section('title', $team->title ?? 'Team Detail')

@section('content')

    <!-- start wpo-page-title -->
    <section class="wpo-page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>{{ $team->title ?? 'Team Detail' }}</h2>
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">Our Team</a></li>
                            <li>{{ $team->title ?? 'Detail' }}</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->

    <!-- .team-pg-area start -->
    <div class="team-pg-area section-padding">
        <div class="container">
            <div class="team-single-wrap">
                <div class="team-info-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="team-info-img">
                                @php $detailImage = $team->gambar_detail ?? $team->gambar; @endphp
                                @if($detailImage)
                                    <img src="https://letskonek.satuvisitech.com/images/post/{{ ($detailImage) }}" alt="{{ $team->title }}">
                                @else
                                    <img src="https://letskonek.satuvisitech.com/images/post/{{ ($detailImage) }}" alt="Default Team Member Image">
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="team-info-text">
                                <h2>{{ $team->title }}</h2>
                                <ul>
                                    @if($team->sub_title)<li>Position: <span>{{ $team->sub_title }}</span></li>@endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-exprience-area team-widget">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="exprience-wrap">
                                <h2>About {{ $team->title }}</h2>
                                <div>{!! $team->description !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .team-pg-area end -->

    <!-- end subscribe-section -->
@endsection
