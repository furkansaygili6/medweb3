<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>@yield("tittle")</title>
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
</head>
    @include("frontend.navbar")
<ul>

    <img src="img/homepage1.png" >
    <img src="img/homepage2.png" >
   <img src="img/homepage4.png" >
    <img src="img/homepage5.png" height="400" >
    <li class="clear"></li>
</ul>
@include("frontend.urungoster")

</body>

@include("frontend.footer")
</html>
