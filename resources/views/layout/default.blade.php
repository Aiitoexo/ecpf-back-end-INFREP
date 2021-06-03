@extends('base')

@section('body')
    @include('partials.navbar.navbar_desktop')
    @yield('main')
    @include('partials.footer')
@endsection


