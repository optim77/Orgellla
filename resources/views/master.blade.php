<!DOCTYPE html>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zone</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbQzabutLSxb1lAsIg5tKt7JMSf6X6Ago&callback=initMap">
    </script>


</head>
<body>
<!--NAV BAR-->
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-4 display-4  text-uppercase text-center">
            <a class="text-warning te" href="{{url('/')}}">Allegro</a>
        </div>

        <div class="col-md-4">
            <form action="{{route('search')}}" method="get" class="form-inline mt-4">
                <input class="form-control mr-sm-2 w-75" name="phrase" type="text" placeholder="Szukaj">
                <button class="btn btn-outline-success my-2  my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="col-md-4 mt-4">
            @if(Auth::check())
                <a class="text-dark" href="{{route('profile')}}"><i class="far fa-user h2 ml-5"></i></a>
                <a class="text-dark" href="{{route('logout')}}"><i id="basketIcon" class="fas fa-sign-out-alt h2 ml-5"></i></a>
                @else
                <a class="text-dark" href="{{route('login')}}"><i id="basketIcon" class="far fa-user h2 ml-5"></i></a>

            @endif

        </div>
    </div>
</div>

<div class="mt-5 mb-5"></div>

@yield('categories')


@yield('promo')


{{--<div class="footer mt-3 bg-dark p-3">--}}

{{--</div>--}}


</body>
</html>