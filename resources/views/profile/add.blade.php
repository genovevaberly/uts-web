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
    <h1>Add Product</h1>
    <hr>
    <br>
    <div class="nengah">


    <form>
                <div class="mb-3">
                    <label for="InputEmail" class="form-label"><strong>Product Name</strong></label>
                    <br><input type="text" class="form-control" id="inputEmail">
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
                    <br><textarea id="description" name="description" rows="4" cols="50" placeholder="write your description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label"><strong>Date of End</strong></label>
                    <br><input type="date" class="form-control" id="inputPassword" >
                </div>
          
                <div class="mb-3">
                    <label for="InputPassword" class="form-label"><strong>Time of End</strong></label>
                    <br><input type="time" class="form-control" id="inputPassword" >
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label"><strong>Opening Bid</strong></label>
                    <br><input type="number" class="form-control" id="inputPassword" >
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label"><strong>Photo</strong></label>
                    <br><input type="file" class="form-control" id="inputPassword" placeholder="Add File">
                </div>
                </form>
                </div>

                <br><br>
                <a href="{{url('profile')}}"><h2 style="border: 5px solid aqua; border-radius: 5%; font-weight: bold; background-color: aqua; text-align: center;">Save</a></p>

</div>

@endsection