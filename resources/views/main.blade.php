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
        <div class="main">

            <br>

            <form action="/search" method="post">
                @csrf

                <label for="id">Enter your Search</label>
                <input type="text" name="search" id="search">
                
                <x-button-agreed text="Вперед"/>
            </form>
            <br>
            <!-- Table for results  -->

            @if ($cars ?? '')
                <table>
                    <caption><b>Table of Cars</b> </caption>

                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Year</th>
                        <th>HP</th>
                    </tr>


                    @foreach ($cars as $car)

                        <tr>
                            <th>{{ $car->id }} </td>
                            <td>{{ $car->name }}</td>
                            <td>{{ $car->year }}</td>
                            <td>{{ $car->HP }}</td>
                        </tr>


                    @endforeach

                </table>
        </div>
    </div>


    @if (count($cars) > 1)
        {{ $cars->links() }}
    @endif
    @endif



</body>

</html>
