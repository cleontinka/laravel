@extends('layouts.base')

@section('header')
    @include('parts.header')
@endsection

@section('breadcrumbs')
    @include('parts.breadcrumbs')
@endsection

@section('content')
    <!--container start-->
    <div class="container">
        <div class="row">
            @section('center-column')
                @include('parts.post')
            @show
        </div>
    </div>
    <!--container end-->
@endsection

@section('footer_links')
    @include('parts.footer_links')
@endsection

@section('footer_copyrights')
    @include('parts.footer_copyrights')
@endsection