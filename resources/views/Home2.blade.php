@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center align-items-center vh-100 bg-light position-relative">
    <!-- Background decoration -->
    <div class="position-absolute w-100 h-100" style="background: linear-gradient(45deg, rgba(100, 181, 246, 0.3), rgba(236, 231, 247, 0.7)), url('/images/background-pattern.svg'); background-size: cover; background-position: center;"></div>

    <!-- Content -->
    <div class="text-center fade-in position-relative">
        <h1 class="text-primary fw-bold" style="font-size: 110px; font-family: 'Arial', sans-serif;">Welcome Page</h1>
        <p class="fs-2 mt-3 text-secondary" style="font-family: 'Verdana', sans-serif; font-size: 1.5rem;">I am Enas Melad</p>
        <!-- <a href="#" class="btn btn-primary btn-lg mt-4 shadow-lg">Get Started</a> -->
    </div>
</div>

<style>
    /* Animation for fade-in effect */
    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in {
        animation: fadeIn 2s ease-in-out;
    }
</style>
@endsection
