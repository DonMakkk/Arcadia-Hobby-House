@extends('layouts.app')
@section('header')
@include('components.header')
@endsection
@section('main')
@include('components.shopByCategory')
@include('components.products')
@include('components.banner')
@include('components.bestSeller')
@include('components.joinTheCommunity')
@endsection

