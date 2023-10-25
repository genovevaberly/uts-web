@extends('layouts.navbarMain')
@section('content')

<style>
    input{
        background-color: #eeeeee;
        margin-top: 10px;
        height: 35px;
        width: 400px;
        border-radius: 5%;
    }
    select{
        background-color: #eeeeee;
        margin-top: 10px;
        height: 35px;
        width: 400px;
        border-radius: 5%;
    }
    textarea{
        background-color: #eeeeee;
    }
    h1{
        font-size: 20px;
        font-weight: bold;
    }
    .nengah{
        margin-left: 30px;
    }
</style>

<div class="container mx-10">
    <br>
    <h1>Edit Product</h1>
    <hr>
    <br>
    <div class="nengah">


    <form>
                <div class="mb-3">
                    <label for="InputEmail" class="form-label"><strong>Product Name</strong></label>
                    <br><input type="text" class="form-control" id="inputEmail" placeholder="Classic Car">
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label"><strong>Category</strong></label>
                    <br>
                    <select id="dropdown" name="dropdown">
                        
                        <option value="option1">Cars</option>
                        <option value="option2">Accessories</option>
                        <option value="option3">Antique</option>
                        <option value="option3">Fashion Bag</option>
                        <option value="option3">Shoes</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label"><strong>Description</strong></label>
                    <br><textarea id="description" name="description" rows="4" cols="50" placeholder="with timeless design and very fast engine"></textarea>
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label"><strong>Date of End</strong></label>
                    <br><input type="text" class="form-control" id="inputPassword" placeholder="7 Oktober 2023">
                </div>
          
                <div class="mb-3">
                    <label for="InputPassword" class="form-label"><strong>Time of End</strong></label>
                    <br><input type="text" class="form-control" id="inputPassword" placeholder="10.00 AM">
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label"><strong>Opening Bid</strong></label>
                    <br><input type="text" class="form-control" id="inputPassword" placeholder="150.000.000$">
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label"><strong>Photo</strong></label>
                    <br><input type="text" class="form-control" id="inputPassword" placeholder="picture_classic_car.jpg">
                </div>
                </form>
                </div>

                <br><br>
                <a href="{{url('profile')}}"><h2 style="border: 5px solid aqua; border-radius: 5%; font-weight: bold; background-color: aqua; text-align: center;">Update</a></p>

</div>

@endsection