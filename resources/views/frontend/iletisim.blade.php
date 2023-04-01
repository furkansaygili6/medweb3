<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >
    <style>
        /* HOVER COLOR */

        a svg:hover #facebook,
        a svg:hover #instagram {
            fill: #111;
        }

        /* GENERAL STYLES */

        body {
            background-color: #bad0b8;
            background-image: -webkit-linear-gradient(right, #4e98e7, #f7fafc);
            background-image: -moz-linear-gradient(right, #4e98e7, #f7fafc);
            background-image: -o-linear-gradient(right, #4e98e7, #f7fafc);
            background-image: -ms-linear-gradient(right, #4e98e7, #f7fafc);
            background-image: linear-gradient(right, #4e98e7, #f7fafc);
        }
        article {
            width: 100%;
            margin: 60px auto;
            text-align: center;
            zoom: 2;
        }
        a {
            outline: none;
            border: 0;
            text-decoration: none;
        }
        a svg #facebook,
        a svg #instagram {
            transition: 200ms;
            transition-timing-function: ease-in-out;
            -webkit-transition: 200ms;
            -webkit-transition-timing-function: ease-in-out;
        }

        ul {overflow:hidden;}
        ul li {float:left; margin-right:20px;}
        ul li img {border:2px solid #000;}
        .clear {clear: both}

    </style>
    <title>@yield("tittle")</title>
</head>
<body>
@include('frontend/navbar')

<div class="list-group-item">
    <div class="row">
        <div class="col-12 col-lg-3">
            Firma Adı
        </div>
        <div class="col-12 col-lg-4">
            MERCAN MEDİKAL
        </div>
    </div>
</div>
<div class="list-group-item">
    <div class="row">
        <div class="col-12 col-lg-3">
            YETKİLİ KİŞİ
        </div>
        <div class="col-12 col-lg-4">
            FURKAN SAYGILI
        </div>
    </div>
</div>
<div class="list-group-item">
    <div class="row">
        <div class="col-12 col-lg-3">
            TELEFON
        </div>
        <div class="col-12 col-lg-4">
            4566545654
        </div>
    </div>
</div>
<div class="list-group-item">
    <div class="row">
        <div class="col-12 col-lg-3">
            E-MAİL
        </div>
        <div class="col-12 col-lg-4">
            furkannnsaygili@gmail.com
        </div>
    </div>
</div>
<div class="list-group-item">
    <div class="row">
        <div class="col-12 col-lg-3">
            ŞEHİR
        </div>
        <div class="col-12 col-lg-4">
            GAZİANTEP
        </div>
    </div>
</div>
<div class="list-group-item">
    <div class="row">
        <div class="col-12 col-lg-3">
            SEMT
        </div>
        <div class="col-12 col-lg-4">
            ŞAHİNBEY
        </div>
    </div>
</div>
<div class="list-group-item">
    <div class="row">
        <div class="col-12 col-lg-3">
            VERGİ NO
        </div>
        <div class="col-12 col-lg-4">
            4565456
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" ></script>

</body>
</html>





