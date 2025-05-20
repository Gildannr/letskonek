@extends('layouts.master')

@section('title', $mentor->mentros_name ?? 'Mentor Detail')

@section('content')

    <!-- start wpo-page-title -->
    <section class="wpo-page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>{{ $mentor->mentros_name ?? 'Mentor Detail' }}</h2>
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('mentors') }}">Mentors</a></li>
                            <li>{{ $mentor->mentros_name ?? 'Detail' }}</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->
>
    <div class="team-pg-area section-padding">
        <div class="container">
            <div class="team-single-wrap">
                <div class="team-info-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="team-info-img">
                                @if($mentor->gambar)
                                    <img src="https://letskonek.satuvisitech.com/images/post/{{ ($mentor->gambar) }}" alt="{{ $mentor->mentros_name }}">
                                @else
                                    <img src="https://letskonek.satuvisitech.com/images/post/{{ ($mentor->gambar) }}" alt="Default Mentor Image">
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="team-info-text">
                                <h2>{{ $mentor->mentros_name }}</h2>
                                <div>{!! $mentor->description !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
