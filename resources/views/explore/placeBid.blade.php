@extends('layouts.navbarMain')
@section('content')

<style>
    .gbrProduk{
        width: 30%;
        margin: 0 auto;
        margin-top: 20px;
    }

    h1{
        font-weight: bold;
        font-size: 35px;
    }

    .flex-container {
        display: flex;
    }

    .flex-container > div {
        background-color: #efefef;
        text-align: center;
        margin: 10px;
        border-radius: 10%;
        padding: 10px;
        font-size: 14px;
        font-weight: bold;
    } 
</style>

<img class="gbrProduk" src="{{url('/img/classicCar.png')}}">
<br>
<div class="container mx-10">
<h1>
    Classic Car
</h1>

<p>
Presenting the 1972 Chevrolet Chevelle SS, a timeless American muscle car. With timeless design and top-down fun, it's perfect for sunny drives. Restored with attention to detail and with only 55,000 miles on the odometer, this Classic Car is a rare find. 
</p>
<br>
<p>
    Item condition: New
</p>
<br>
<p style="font-weight: bold;">Time left :</p>
<div class="flex-container">
  <div>7 <br>Days</div>
  <div>13 <br>Hours</div>
  <div>35 <br>Minutes</div>
  <div>17 <br>Seconds</div>
</div>

<p style="font-weight: bold;">Auction Ends: November 1, 2023 12:00 AM</p>
<p style="font-weight: bold; color:blue;">Current Bid: $640,000,000</p>

<div class="flex-container">
  <div><a href="#" type="button">-</a></div>
  <div>$640,000,000</div>
  <div><a href="#" type="button">+</a></div>
  <div style="color: green;"><a href="#" type="button" style="font-size: 16px;">Bid</a></div>
</div>

</div>

@endsection