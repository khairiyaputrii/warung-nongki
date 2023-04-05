<footer class="bg-danger">
    <div class="d-flex flex-wrap">
        <div class="col-lg-3 col-12 p-3 d-flex align-items-center justify-content-center">
            <a href="{{ url('') }}" class="text-center"><img src="{{ asset('images/warung_nongki_logo.png') }}" alt="" class="w-25" style="min-width:200px"></a>
        </div>
        <div class="col-lg-3 col-12 text-white p-3">
            <h3>FOODS</h3>
            <hr>
            <ul>
                @foreach ($foodCategories as $foodCategory)
                    <li><a  href="{{ url('food/'.$foodCategory->id) }}" class="text-decoration-none text-white">{{ $foodCategory->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-lg-3 col-12 text-white p-3">
            <h3>DRINKS</h3>
            <hr>
            <ul>
                @foreach ($drinkCategories as $drinkCategory)
                    <li><a  href="{{ url('drink/'.$drinkCategory->id) }}" class="text-decoration-none text-white">{{ $drinkCategory->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-lg-3 col-12 text-white p-3">
            <h3>CONTACT US</h3>
            <hr>
            <p>warung-nongki@gmail.com</p>
        </div>
    </div>
</footer>