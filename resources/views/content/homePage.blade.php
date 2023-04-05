@extends('layout')
@section('uncommon_head')
<script src="{{ asset('js/homePage.js') }}"></script>
@stop

@section('content')
<div class="p-2">
    @if (session()->has('email'))
        <h3>Welcome back, {{ $userInformation->first_name }}!</h3>
    @else
        <h3>Welcome to our website!</h3>   
    @endif
    
    <div class="p-3 d-flex flex-wrap ">
        <div class="p-2 col-md-6 col-12">
            <div class="card h-100">
                <img src="{{ asset('images/pusat.jpg') }}" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Warung Nongki Cafe Surabaya Timur</h5>
                  <h6 class="card-subtitle mb-2 text-muted ">Located in Arief Rahman Hakim road</h6>
                </div>
            </div>
        </div>
        
        <div class="p-2 col-md-6 col-12">
            <div class="card h-100">
                <img src="{{ asset('images/cabang.jpg') }}" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Warung Nongki Cafe Surabaya Pusat</h5>
                  <h6 class="card-subtitle mb-2 text-muted ">Located in Tunjungan road</h6>
                </div>
            </div>
        </div>
        
    </div>
    
    <p>Our Warung Nongki (WN) cafe have 2 branches in Surabaya! They are located in Surabaya Timur (Arief Rahman Hakim Road) and Surabaya Pusat (Tunjungan Road). They both have a very different vibe 
        the one in Surabaya Timur have outdoor and indoor place with a Monochrome and Wood aesthetic, while the one that is located in Surabaya Pusat only have indoor place with a minimalist vibes with 
        some indoor plants!
    </p>
    <hr>
    
    <h3>Website Creator</h3>
    <ul>
        <li>Khairiya Maisa Putri 5025211192</li>
        <li>Raden Roro Kayla Angelica Priambudi 5025211262</li>
    </ul>
</div>
@stop