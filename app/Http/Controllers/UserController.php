<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\UserProfileModel;

class UserController extends Controller
{
    public function registerUser(Request $request){
        $error = array();
        $status = '';

        $first_name =  strip_tags(trim($request['firstName']));
        $last_name = strip_tags(trim($request['lastName']));
        $phone = strip_tags(trim($request['phone']));
        $address = strip_tags(trim($request['address']));
        $email = strtolower(trim($request['email']));
        $password = $request['password'];
        $conf_password = $request['confPassword'];

        if ($first_name == '') {
            array_push($error, 'Nama depan tidak boleh kosong.');
        }

        if ($phone != '' && !(strlen($phone) >= 11 && strlen($phone) <=12)){
            array_push($error, 'Nomor telepon hanya terdiri dari 11 sampai 12 angka.');
        } else if ($phone != '' && !is_numeric($phone)) {
            array_push($error, 'Nomor telepon hanya terdiri dari angka.');
        }

        if ($email == ''){
            array_push($error, 'Email tidak boleh kosong.');
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            array_push($error, 'Email yang dimasukkan tidak valid.');
        } else if (UserModel::where('email', $email )->exists()){
            array_push($error, 'Email telah terdaftar.');
        }

        if (strlen($password) < 6){
            array_push($error, 'Password harus memiliki minimal 6 karakter.');
        } else if ($conf_password != $password){
            array_push($error, 'Konfirmasi Password harus sama dengan password.');
        }
        
        if (count($error) > 0){
            $status = 'Failed';
        } else {
            $userProfileModel = new UserProfileModel;
            $userProfileModel['first_name'] = $first_name;
            $userProfileModel['last_name'] = $last_name;
            $userProfileModel['phone'] = $phone;
            $userProfileModel['address'] = $address;
            $userProfileModel->save();
    
            $userModel = new UserModel;
            $userModel['email'] = $email;
            $userModel['password'] = $password;
            $userModel['user_profile_id'] = $userProfileModel->id;
            $userModel->save();

            $status = 'Succeed';
        }

        $output = ['status' => $status, 'error' => $error];
        echo json_encode($output);
    }

    public function loginUser(Request $request){
        $error = array();
        $status = '';

        $email = strtolower(trim($request['email']));
        $password = $request['password'];

        if ($email == ''){
            array_push($error, 'Email tidak boleh kosong.');
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            array_push($error, 'Email yang dimasukkan tidak valid.');
        }

        if ($password == ''){
            array_push($error, 'Password tidak boleh kosong.');
        }
        
        if (count($error) > 0){
            $status = 'Failed';
        } else {
            if (UserModel::where(['email' => $email, 'password' => $password])->exists() == False){
                $status = 'Failed';
                array_push($error, 'Email atau password salah, silahkan coba lagi.');
            } else {
                session(['email' => $email]);
                $status = 'Succeed';
            }
        }

        $output = ['status' => $status, 'error' => $error];
        echo json_encode($output);
    }

    public function getUserInformation(){
        if (session()->has('email')) {
            $email = session('email');
            $user = UserModel::find($email);
            $userProfile = UserProfileModel::find($user->user_profile_id);
            return $userProfile;
        } else {
            return NULL;
        }
    }

    public function logoutUser(){
        session(['email' => NULL]);
    }

    public function updateUser(Request $request){
        $error = array();
        $status = '';

        $first_name =  strip_tags(trim($request['firstName']));
        $last_name = strip_tags(trim($request['lastName']));
        $phone = strip_tags(trim($request['phone']));
        $address = strip_tags(trim($request['address']));
        $password = $request['password'];
        $conf_password = $request['confPassword'];

        if ($first_name == '') {
            array_push($error, 'Nama depan tidak boleh kosong.');
        }

        if ($phone != '' && !(strlen($phone) >= 11 && strlen($phone) <=12)){
            array_push($error, 'Nomor telepon hanya terdiri dari 11 sampai 12 angka.');
        } else if ($phone != '' && !is_numeric($phone)) {
            array_push($error, 'Nomor telepon hanya terdiri dari angka.');
        }

        if (strlen($password) < 6){
            array_push($error, 'Password harus memiliki minimal 6 karakter.');
        } else if ($conf_password != $password){
            array_push($error, 'Konfirmasi Password harus sama dengan password.');
        }
        
        if (count($error) > 0){
            $status = 'Failed';
        } else {
            $email = session('email');
            $userModel = UserModel::find($email);
            $userModel['password'] = $password;
            $userModel->save();

            $userProfileModel = UserProfileModel::find($userModel['user_profile_id']);
            $userProfileModel['first_name'] = $first_name;
            $userProfileModel['last_name'] = $last_name;
            $userProfileModel['phone'] = $phone;
            $userProfileModel['address'] = $address;
            $userProfileModel->save();
    
            $status = 'Succeed';
        }

        $output = ['status' => $status, 'error' => $error];
        echo json_encode($output);
    }
}
                   