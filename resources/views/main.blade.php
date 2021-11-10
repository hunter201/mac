<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Welcome</title>
</head>

<body>
    <div class="container">
        <main>
            <div class="row">
                <h1>
                    {{$count}}
                </h1>
                @if ($cars ?? '')
                    @foreach ($cars as $car)
                        <div class="col-lg-3 col-xl-2 col-xxl-3 title-col">
                            <h3>{{$car->id}}</h3>
                        </div>
                        <div class="col-lg-3 col-xl-2 col-xxl-3 title-col">
                            <h3>{{$car->name}}</h3>
                        </div>
                        <div class="col-lg-3 col-xl-2 col-xxl-3 title-col">
                            <h3>{{$car->HP}}</h3>
                        </div>
                        <div class="col-lg-3 col-xl-2 col-xxl-3 title-col">
                            <h3>{{$car->year}}</h3>
                        </div>
                    @endforeach

                @endif

            </div>
        </main>
    </div>

</body>

</html>
