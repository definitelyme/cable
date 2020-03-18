@extends('layouts.app')

@section('content')
    <!-- Start Main Banner Area -->
    @include('layouts.components.welcome.main-banner')
    <!-- End Main Banner Area -->

    <!-- Start Featured Cards Area -->
    @include('layouts.components.welcome.featured-card')
    <!-- End Featured Cards Area -->

    <!-- Start Services Area -->
    @include('layouts.components.welcome.services')
    <!-- End Services Area -->

    <!-- Start Video Presentation Area -->
    {{-- @include('layouts.components.welcome.video-pres') --}}
    <!-- End Video Presentation Area -->

    <!-- Start Feedback Area -->
    {{-- @include('layouts.components.welcome.feedback') --}}
    <!-- End Feedback Area -->

    <!-- Start Event Area -->
    @include('layouts.components.welcome.events')
    <!-- End Event Area -->

    <!-- Start Team Area -->
    @include('layouts.components.welcome.team')
    <!-- End Team Area -->

    <!-- Start Blog Area -->
    @include('layouts.components.welcome.blog-area')
    <!-- End Blog Area -->

    <!-- Start Supporters Area -->
    @include('layouts.components.welcome.supporters')
    <!-- End Supporters Area -->

    <!-- Start Subscribe Area -->
    @include('layouts.components.welcome.subscribe')
    <!-- End Subscribe Area -->
@endsection
