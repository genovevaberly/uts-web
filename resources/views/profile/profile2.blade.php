@extends('layouts.navbarMain')
@section('content')

<style>
    img{
        margin: 0 auto;
    }
    .fotoProduk{
        width: 180px;
        border-radius: 10%;
        padding-left: 3px;
        padding-right: 3px;
    }
    p{
        font-size: small;
        text-align: left;
    }
    .nengah{
        margin-left: 30%;
    }
    input{
        background-color: #dff2f5;
        width: 500px;
        height: 30px;
    }
    .flex-container {
        display: flex;
    }

    .flex-container > div {
        text-align: center;
        margin: 10px;
        border-radius: 10%;
        padding: 10px;
        font-size: 20px;
        font-weight: bold;
    } 

    .cards {
        flex: 0 0 calc(30% - 12rem); /* Adjust the width as needed */
        border: 1px solid #ddd;
        padding: 1rem;
        margin: 0.5rem;
        background-color: #f7f7f7;
    }
</style>

<div class="container mx-10">
<img src="{{url('img/selfieBig.png')}}" style="margin-top:15px;">
<div class="container nengah">
    <br>
<form>
                <div class="mb-3">
                    <label for="InputEmail" class="form-label"><strong>Username or Email address</strong></label>
                    <br><input type="email" class="form-control" id="inputEmail" placeholder="klasik123" disabled>
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label"><strong>Full Name</strong></label>
                    <br><input type="password" class="form-control" id="inputPassword" placeholder="Klasik Solafide" disabled>
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label"><strong>Phone Number</strong></label>
                    <br><input type="password" class="form-control" id="inputPassword" placeholder="08562132233" disabled>
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label"><strong>Country</strong></label>
                    <br><input type="password" class="form-control" id="inputPassword" placeholder="Indonesia" disabled>
                </div>
                </form>
</div>
<br>
<hr>
<br>

<div class="flex-container">
  <div><a href="{{url('profile')}}">Your Product</a></div>
  <div><a href="" style="text-decoration: underline;">Your Live Auction</a></div> 
</div>

<div class="flex-container">
    <div class="cards">
        <div>
            <p style="border: 1px solid #dff2f5; background-color: #dff2f5; border-radius: 5%; margin-bottom: 10px;">7 Oktober 2023 10.00 AM</p>
        </div>
        <div>
            <img class="fotoProduk" src="{{url('img/classicCar.png')}}" alt="">
        </div>
        <div>
            <p style="margin-top: 10px;">Classic Car</p>
        </div>
        <div>
            <p>Current bid $259.0</p>
        </div>
        <div>
            <p style="border: 1px solid #DFDDDD; background-color: #dff2f5; border-radius: 5%; margin-bottom: 10px;"><a href="{{url('edit')}}">Pay</a></p>
        </div>
    </div>

    <div class="cards">
        <div>
            <p style="border: 1px solid #dff2f5; background-color: #dff2f5; border-radius: 5%; margin-bottom: 10px;">9 Oktober 2023 10.00 AM</p>
        </div>
        <div>
            <img class="fotoProduk" src="{{url('img/classicCar.png')}}" alt="">
        </div>
        <div>
            <p style="margin-top: 10px;">Classic Car 2</p>
        </div>
        <div>
            <p>Current bid $299.0</p>
        </div>
        <div>
            <p style="border: 1px solid #DFDDDD; background-color: #dff2f5; border-radius: 5%; margin-bottom: 10px;"><a href="{{url('pay')}}">Pay</a></p>
        </div>
    </div>
</div>

<br><br>


<a href="{{url('add')}}"><h2 style="border: 5px solid aqua; border-radius: 5%; font-weight: bold; background-color: aqua; text-align: center;">Add Product</a></p>


</div>


@endsection