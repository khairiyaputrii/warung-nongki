@extends('layout')
@section('uncommon_head')
<script src="{{ asset('js/registerPage.js') }}" ></script>
@stop

@section('content')
<div class="d-flex flex-column align-items-center justify-content-center p-3">
    <h1 class="text-center">Registration</h1>
    <form action="" class="bg-light col-lg-6 col-md-8 col-sm-9 col-12 shadow-sm p-2">
        <div class="p-2">
            <label for="firstName" class="form-label">First Name&nbsp;<span class="text-danger">*</span>&nbsp;</label>
            <input type="text" name="firstName" id="firstName" class="form-control">
        </div>
        <div class="p-2">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" name="lastName" id="lastName" class="form-control">
        </div>
        <div class="p-2">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" name="phone" id="phone" class="form-control">
        </div>
        <div class="p-2">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" id="address" class="form-control"></textarea>
        </div>
        <div class="p-2">
            <label for="email" class="form-label">Email&nbsp;<span class="text-danger">*</span></label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="p-2">
            <label for="password" class="form-label">Password&nbsp;<span class="text-danger">*</span></label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="p-2">
            <label for="confPassword" class="form-label">Confirm Password&nbsp;<span class="text-danger">*</span></label>
            <input type="password" name="confPassword" id="confPassword" class="form-control">
        </div>
        <div class="p-2">
            <button type="button" class="bg-danger text-white form-control" id="submitRegister">Kirim</button>
        </div>
    </form>
    <div class="p-3">
        <a href="login" class="text-danger">Already have an account? Log In</a>
    </div>
</div>

<script>
    var token = "{{ csrf_token() }}"
</script>

@stop