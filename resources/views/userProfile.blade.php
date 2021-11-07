<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>

<body>
    @if($id ?? '')
    <h1>User #{{$id}}</h1>
    @elseif($number ?? '')
    <h2 style="color:red">Admin#{{$number}}</h2>
    @else
    <h2 style="color:gray; text-align:center">404: PAGE NOT FOUND</h2>
    @endif
</body>

</html>