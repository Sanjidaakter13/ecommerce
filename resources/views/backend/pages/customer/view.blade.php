
@extends('backend.template.master')

@section('content')

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        html {
            font-size: 62.5%;

        }

        .form-label {
            font-family: serif;
            font-size: 3.5rem;
            margin-top: 1.7em;
            color: FloralWhite;
        }

    

        .form-control {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 1.5rem;
            color: MidnightBlue;
        }

    </style>
</head>

<body>
  
    <div style="background-color: LightSlateGray; height:59.5rem" class="container text-left">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7">
                 <div class=container>
                        <form action="">
                            <div class="form-group">
                                <label for="name" class="form-label">Name: </label>
                                <input type="text" id="name" readonly class="form-control form-control-lg" value="{{ $users->name}}">
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-label">Number: </label>
                                <input type="number" id="name" readonly class="form-control form-control-lg" value="{{ $users->mobile}}">
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-label">Email: </label>
                                <input type="email" id="name" readonly class="form-control form-control-lg" value="{{ $users->email}}">
                            </div>

                        </form>
                    </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

</body>

</html>

@endsection

