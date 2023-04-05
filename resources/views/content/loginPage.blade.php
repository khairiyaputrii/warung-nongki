@extends('layout')
@section('uncommon_head')
<script src="{{ asset('js/loginPage.js') }}" ></script>
@stop

@section('content')
<div class="d-flex flex-column align-items-center justify-content-center p-3">
    <h1 class="text-center">MASUK</h1>
    <form action="" class="bg-light col-lg-6 col-md-8 col-sm-9 col-12 shadow-sm p-2">
        <div class="p-2">
            <label for="email" class="form-label">Email&nbsp;<span class="text-danger">*</span></label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="p-2">
            <label for="password" class="form-label">Kata Sandi&nbsp;<span class="text-danger">*</span></label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="p-2">
            <button type="button" class="bg-danger text-white form-control" id="submitLogin">Kirim</button>
        </div>
    </form>
    <div class="p-3">
        <a href="register" class="text-danger">Belum punya akun? Daftar sekarang</a>
    </div>
</div>

<script>
    var token = "{{ csrf_token() }}"
</script>

@stop