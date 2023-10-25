@extends('layouts.navbarMain')
@section('content')


<div class="container mx-10">
    <h1>Add Product</h1>
    <hr>
    <form>
                <div class="mb-3">
                    <label for="InputEmail" class="form-label"><strong>Product Name</strong></label>
                    <br><input type="email" class="form-control" id="inputEmail">
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label"><strong>Category</strong></label>
                    <br><input type="password" class="form-control" id="inputPassword">
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label"><strong>Description</strong></label>
                    <br><input type="password" class="form-control" id="inputPassword" placeholder="write your description">
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label"><strong>Date of End</strong></label>
                    <br><input type="date" class="form-control" id="inputPassword" >
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label"><strong>Date of End</strong></label>
                    <br><input type="date" class="form-control" id="inputPassword" >
                </div>
                </form>

</div>

@endsection