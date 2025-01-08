@extends('layouts.frontend.app')

@section('title', 'Error')

@section('content')
    <div class="rts-about-area-three rts-section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-1 text-danger">Error:{{ $exception->getStatusCode() }}</h1>

                    <p class="disc">
                        Something went wrong. Please try again.
                    </p>
                    <a style="color: black" href="{{ route('frontend.home') }}" class="rts-btn btn-border radious-3">
                        Go Back Home <i class="fa-thin fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
