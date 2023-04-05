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
                <img src="{{ asset('images/warung_nongki_pusat.jpg') }}" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Warung Nongki Pusat</h5>
                  <h6 class="card-subtitle mb-2 text-muted ">Kabarnya, udah ada 6 pasangan terjalin disini :D</h6>
                </div>
            </div>
        </div>
        
        <div class="p-2 col-md-6 col-12">
            <div class="card h-100">
                <img src="{{ asset('images/warung_nongki_1.webp') }}" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Warung Nongki Cabang 1</h5>
                  <h6 class="card-subtitle mb-2 text-muted ">Disini heboh banget, ada yang menyatakan cinta sambil main gitar</h6>
                </div>
            </div>
        </div>
        
    </div>
    
    <p>Warung Nongki (WN) memiliki slogan <i>Togetherness is Everything</i>. Kami ingin mendekatkan pengunjung yang datang, baik keluarga, pasangan, gebetan dan teman.
    Untuk mewujudkan hal tersebut, kami memiliki menu-menu yang murah dan simpel banget untuk dipesan. Sehingga, kalian ga perlu pusing mau ketemuan dimana.
    Fasilitas kami mantap dan rapih-rapih, sehingga kalian bakal betah banget nongkrong disini. Sesuai dengan slogan kami, <i>Togetherness is Everything.</i></p>
    <hr>
    
    <h3>Pembuat Website</h3>
    <p>Dengan sepenuh hati, kami membuat website ini</p>
    <ul>
        <li>Khairiya Maisa Putri</li>
        <li>Raden Roro Kayla Angelica Priambudi</li>
    </ul>
</div>
@stop