@extends('layouts.navbarLogin')
@section('content')
<style>
    body {
        background-size: cover;
        background-image: url("img/bgmain.png");
    }

    .forgot {
        display: inline;
        margin-left: 220px;

    }

    .global-container {
        height: 70%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 50px;
    }

    .card {
        opacity: 80%;
    }

    .login-form {
        padding: 30px 30px 30px 30px;
        border-radius: 10%;
    }

    /* .global-container1{
    height: 120%;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    color: #fec107;
}

.containerForm{
    width: 90%;
    padding: 16px;
    color: black;
    font-weight: bold;
    background-color: white !important;
}

.login-form{
    width: 380%;
    height: 450%;
    padding: 30px;
    margin: 35%;
    background-color: white !important;
    border-radius: 15px !important;

}

.card-text{
    margin-left: 20px;
    margin-right: 20px;;
    display: inline;
}

input[type="email"],
input[type="password"]{
    background-color: white;
    color: black;
    border-radius: 10px;
    margin-bottom: 25px;
}

input[type="email"]:focus,
input[type="password"]:focus {
    outline: none;
    border: none;
    background: white;
    color: black;
    margin: 0;

}

.card-title{
    font-weight: 900;
    padding-top: nones;
    padding-bottom: none;
}

.btn1{
    background: #fec107 !important;
    color: white !important;
    transform: translateY(10px);
    height: none;
    border: none;
    font-size: 14px;
    border-radius: 5px !important;
}

.resSub { 
    margin-left: 90%;
} */

    .containerBtn {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<div class="global-container">
    <div class="card login-form">
        <div class="card-body">
            <h1 class="card-title text-center" style="color: black;">Welcome to ElliteBid.com</h1>
        </div>
        <div class="card-text">
            <form action="{{route('actionLogin')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label"><strong>Email</strong></label>
                    <input type="email" name="email" class="form-control" placeholder="Email" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label"><strong>Password</strong></label>
                    <input type="password" name="password" class="form-control" plceholder="Password" id="password" required>
                </div>
                <div class="containerBtn">
                    <button type="submit" class="btn btn-primary center-button" style="height: 40px;" id="btn"><a
                            style="text-decoration:none; color:white; font-weight: bold;"
                            style="text-decoration: none; color:black; ">Log In</a></button>
                </div>
                <p class="text-center">
                    Belum punya akun? <a href="{{route('register')}}">Register Disini</a>
                </p>
            </form>
        </div>
    </div>
</div>
@endsection