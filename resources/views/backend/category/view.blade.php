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
        html{
            font-size: 62.5%;
        }
        h3 {
            font-family:serif;
            font-size:3.5rem;
            margin-top:1.7em;
        }
        .image{
            margin-top:7rem;
           
        }
        p{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 1.5rem;

        }
    </style>
</head>

<body>

    <div style="background-color: rgb(123, 192, 169); height:59.5rem" class="container text-left">
        <div class="row">
            <div class="col-md-4 text-center image ">
                <img  style="height:45rem; width:20rem"  src="https://imgs.search.brave.com/3yYf2vWfkbz3NsX7diNPJYGDScuI8PjuguHCPuGG044/rs:fit:474:225:1/g:ce/aHR0cHM6Ly90c2Uy/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5m/ZWFWRDduM0lUUGgx/bFFlc0xaSGlBSGFI/YSZwaWQ9QXBp"
                    alt="">
            </div>
            <div class="col-md-8">
                <div>
                    <h3>Name</h3>
                    <p>baby dress</p>
                    <h3>Description</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima reiciendis exercitationem fuga
                        facere sunt praesentium, incidunt nulla alias harum! Fuga ab animi quo doloribus. Magni veniam
                        consequuntur nostrum officia sit.</p>
                        <h3>Status</h3>
                        <p>Active</p>
                </div>
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