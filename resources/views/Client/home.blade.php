@extends('layout.app')
@section('title')
   Home
@endsection

@section('content')

<main id="main">

    <!-- ======= About Section ======= -->
   @include('include.about')<!-- End About Section -->

    <!-- ======= Facts Section ======= -->
   @include('include.facts')<!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
   @include('include.skills')<!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
   <!-- End Resume Section -->
   @include('include.resume')
    <!-- ======= Portfolio Section ======= -->
   @include('include.protfolio')<!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    @include('include.services')<!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    @include('include.testimonial')<!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    @include('include.contact')<!-- End Contact Section -->

  </main>
@endsection