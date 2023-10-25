@extends('layouts.navbarMain')
@section('content')

<style>
    img{
        margin: 0 auto;
    }
    .nengah{
        margin-left: 30%;
    }
</style>

<div class="container mx-10">
<img src="{{url('img/selfieBig.png')}}" style="margin-top:15px;">
<div class="container nengah">
    <br>
<form>
                <div class="mb-3">
                    <label for="InputEmail" class="form-label"><strong>Username or Email address</strong></label>
                    <br><input type="email" class="form-control" id="inputEmail">
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label"><strong>Full Name</strong></label>
                    <br><input type="password" class="form-control" id="inputPassword">
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label"><strong>Phone Number</strong></label>
                    <br><input type="password" class="form-control" id="inputPassword">
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label"><strong>Country</strong></label>
                    <br><input type="password" class="form-control" id="inputPassword">
                </div>
                </form>
</div>

</div>


@endsection