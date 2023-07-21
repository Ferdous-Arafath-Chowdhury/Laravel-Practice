<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>API DATA</h1>
    {{-- {{$col['data']}} --}} 

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
        
            <td>Photo</td>
        </tr>
 
    
    @foreach ($col as $user)
        <tr>

            <td>
                {{$user['id']}}
            </td>
            <td>
                {{$user['first_name']}}
            </td> 

            <td>
                <img src="{{$user['avatar']}}" alt="">
            </td>
        </tr>
    @endforeach
</table>
   
</body>
</html>