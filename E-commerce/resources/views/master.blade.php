<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Commerce Project</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <script
          src="https://code.jquery.com/jquery-3.6.3.min.js"
          integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
          crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </head>
     <body>
     {{View::make('header')}}
       @yield('content')
       {{View::make('footer')}}
    </body>

    <style>
    .custom-login{
    height: 500px;
    padding-top:7rem;
    }

    .slide-div{
        padding: 40px 100px;

    }
    .slider-div{
    /* background-color: lavender; */
    text-align: center;

    }
img.slider-img{
height: 600px !important;
background-color: red;
}

.para{
    background-color: lavender;
    color: black;

}
    .card{
    margin-top:10rem;
    }

    .trending-img{
        height: 100px;

    }
        .trending-items{
            float: left;
            width: 20%
        }

      .trending-wrapper{
        margin: 20px;
      }

     .search-box{
        width: 500px;
     }
    .custom-product{
        /* width: 100px; */
        float: center;
        margin-left: 200px;
        /* background: lightgreen; */
    }
    .trending-wrapper{
        text-align: center;
        margin-left: 200px;
    }
    .searched-item{

    }
    .session-div{
        list-style-type: none;

    }
    .cart-list-devider{
    border-buttom: 1px solid #ccc;
    margin-buttom: 20px;
    padding-buttom: 20px;
    }
    </style>
</html>
