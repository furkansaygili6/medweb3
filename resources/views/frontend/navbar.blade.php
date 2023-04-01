<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .navbar{
            border-radius:  40px/10px;
        }
        .nav{
            color: #ffffff;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>@yield("tittle")</title>
</head>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary" >
    <nav class="navbar bg-primary">
        <div class="container">
            <a class="navbar-" href="{{"homepage"}}">
                <img src="img/m.png" alt="MERCAN MEDİKAL" width="40" height="36">
            </a>
        </div>
    </nav>

    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <span class="rounded">        tüm kenarlar </span><br><br>

    </button>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{"hakkimizda"}}">HAKKIMIZDA</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{"iletisim"}}">İLETİŞİM</a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="ÜRÜN ARAYIN" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">ARA</button>
    </form>
    <ul>
    </ul>
    <ul></ul>




    <div class="dropdown ">
        <button class="btn btn-secondary dropdown-toggle btn-light " type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="darkColor" class="bi bi-person-circle" viewBox="0 0 16 16"> <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <a href="kayit"  >
            <button0 class="dropdown-item" type="button">KAYIT OL </button0>
            </a>
            <a href="giris">
            <button1 class="dropdown-item" type="button">GİRİŞ YAP</button1>


        </div>
    </div>
    <ul>
    </ul>
    <a href="cast">
    <button type="button" class="btn btn-light">Sepet  </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
        </svg>

    </button>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</nav>
<ul class="nav">
    <li class="nav-item">
            <li></li>
        <a class="nav-link active" aria-current="page" href="#">İLK YARDIM</a>
    </li>
    <li></li>


    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">REVİR MALZEMELERİ</a>
    </li>
    <li></li>



    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">MEDİKAL CİHAZLAR</a>
    </li>
<li></li>


    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">TANSİYON ALETİ,STETESKOP</a>
    </li>
    <li></li>


    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">MEDİKAL ÜRÜNLER</a>
    </li>

    <li></li>

    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">HASTA BAKIM</a>

    <li></li>
    <li></li>

    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">TEKERLİKLİ SANDELYELER</a>




</ul>

</html>
