<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toys Corporation</title>
</head>

<body>
    <div class="container">
        <header class="header">
            <h1>{{ $title ?? "Greeting on our new site"}}</h1>
        </header>
        <main class="main">
            <table border="2">
                <thead>The table #{{$id ?? ''}} </thead>
                <tbody>
                    @for ($i =0; $i<1; $i++) <tr>
                        <td>{{$name[$i] ?? 'Empty'}}</td>
                        <td>{{$name[$i+1] ?? 'Empty'}}</td>
                        <td>{{$name[$i+2] ?? 'Empty'}}</td>
                        </tr>

                        @endfor
                </tbody>
            </table>
        </main>
        <footer class="footer">
            <h2>Goodbye and see you soon</h2>
        </footer>
    </div>
</body>

</html>