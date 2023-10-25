<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    
</head>

<style>
    .borderNavbarRight{
        border: 1px solid aqua; 
        padding: 5px 10px; 
        border-radius: 5px;
        text-decoration: none;
    }
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#" style="font-weight: bold; color: #016170">ElliteBid.com</a>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ url('signup') }}" class="borderNavbarRight" style="margin-right: 10px; background-color: aqua; font-weight: bold; color: black;"> Sign Up</a></li>
      <li><a href="{{ url('/') }}" class="borderNavbarRight" style="background-color: aqua; font-weight: bold; color: black;"> Login </a></li>
    </ul>
    </div>
    </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-
    HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>