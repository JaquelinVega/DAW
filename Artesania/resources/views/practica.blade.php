<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica</title>
    <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/practica.css')}}">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col mt-3 px-md-1 d-lg-block d-none d-xl-block"><div class="p-3 border bg-primary text-center alto1">A</div></div>
            <div class="col mt-3 px-md-1 d-lg-none d-xl-none d-m-block"><div class="p-3 border bg-primary text-center alto1">L</div></div>
        </div>
        <div class="row">
            <div class="col mt-3 px-md-1 d-lg-block d-xl-block d-m-block d-none"><div class="p-3 border bg-primary text-center alto2">B</div></div>
            <div class="col mt-3 px-md-1"><div class="p-3 border bg-primary text-center alto2">C</div></div>
            <div class="col mt-3 px-md-1"><div class="p-3 border bg-primary text-center alto2">D</div></div>
            <div class="col mt-3 px-md-1 col mt-3 px-md-1 d-lg-none d-none d-xl-block"><div class="p-3 border bg-primary text-center alto2">E</div></div>
        </div>
        <div class="row d-lg-block d-xl-block d-m-block d-none">
            <div class="col mt-3 px-md-1"><div class="p-3 border bg-primary text-center alto3">F</div></div>
            <div class="col mt-3 px-md-1"><div class="p-3 border bg-primary text-center alto3">G</div></div>
        </div>
        <div class="row">
            <div class="col-8 mt-3 px-md-1 d-lg-none d-none d-xl-block"><div class="p-3 border bg-primary text-center alto4">H</div></div>
            <div class="col-4 mt-3 px-md-1 d-lg-none d-none d-xl-block"><div class="p-3 border bg-primary text-center alto4">I</div></div>
        </div>
        <div class="row justify-content-evenly">
            <div class="col-3 mt-3 px-md-1 d-lg-none d-none d-xl-block"><div class="p-3 border bg-primary text-center alto5">J</div></div>
            <div class="col-3 mt-3 px-md-1 d-lg-none d-none d-xl-block"><div class="p-3 border bg-primary text-center alto5">K</div></div>
        </div>
        <div class="row d-lg-none d-xl-none d-m-block">
            <div class="col-12 mt-3 px-md-1"><div class="p-3 border bg-primary text-center alto3">F</div></div>
            <div class="col-12 mt-3 px-md-1"><div class="p-3 border bg-primary text-center alto3">M</div></div>
            <div class="col-12 mt-3 px-md-1"><div class="p-3 border bg-primary text-center alto4">H</div></div>
            <div class="col-12 mt-3 px-md-1"><div class="p-3 border bg-primary text-center alto4">I</div></div>
            <div class="col-12 mt-3 px-md-1 "><div class="p-3 border bg-primary text-center alto5">J</div></div>
            <div class="col-12 mt-3 px-md-1 "><div class="p-3 border bg-primary text-center alto5">K</div></div>
        </div>
    </div>
<script src="{{asset('/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>