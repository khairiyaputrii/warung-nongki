@extends('layout')
@section('uncommon_head')
<script src="{{ asset('js/editProfilePage.js') }}" ></script>
@stop

@section('content')
<div class="d-flex flex-column align-items-center justify-content-center p-3">
    <h1 class="text-center">UBAH PROFIL</h1>
    <form action="" class="bg-light col-lg-6 col-md-8 col-sm-9 col-12 shadow-sm p-2">
        <div class="p-2">
            <label for="firstName" class="form-label">Nama Depan&nbsp;<span class="text-danger">*</span>&nbsp;</label>
            <input type="text" name="firstName" id="firstName" class="form-control" value="{{ $userInformation->first_name }}">
        </div>
        <div class="p-2">
            <label for="lastName" class="form-label">Nama Belakang</label>
            <input type="text" name="lastName" id="lastName" class="form-control" value="{{ $userInformation->last_name }}">
        </div>
        <div class="p-2">
            <label for="phone" class="form-label">Nomor Telepon</label>
            <input type="tel" name="phone" id="phone" class="form-control" value="{{ $userInformation->phone }}">
        </div>
        <div class="p-2">
            <label for="address" class="form-label">Alamat</label>
            <textarea name="address" id="address" class="form-control">{{ $userInformation->address }}</textarea>
        </div>
        <div class="p-2">
            <label for="password" class="form-label">Kata Sandi&nbsp;<span class="text-danger">*</span></label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="p-2">
            <label for="confPassword" class="form-label">Konfirmasi Kata Sandi&nbsp;<span class="text-danger">*</span></label>
            <input type="password" name="confPassword" id="confPassword" class="form-control">
        </div>
        <div class="p-2">
            <button type="button" class="bg-danger text-white form-control" id="submitChange">Kirim</button>
        </div>
    </form>
</div>

<script>
    var token = "{{ csrf_token() }}"
</script>

@stop