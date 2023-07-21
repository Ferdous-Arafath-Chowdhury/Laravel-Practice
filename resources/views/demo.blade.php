<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:green">

 @php

    $d = 'GG';

    echo $d;
  $users  = [
    'Ferdous' => 23,
    'Shafe'  => 22,
    'Nasim' => 34
  ] 

  
    @endphp

    <ul> 

    

    @foreach ($users as $keys => $value)
        <li>
          {{$keys}} : {{$value}} 
        </li>
    @endforeach

</ul>

<h1>
    Hello {{$token}}  I am {{$d}}
</h1>


<p>REceiving Data</p>
<h2>Wlcome Mr {{$name}}  and your age is {{$age}}</h2>
<p>Data</p>
<h2>
    <ul>

    
    @foreach ($data as $name => $work) 
           <li> {{$name}}: {{$work}} </li>
        
    @endforeach

</ul>
</h2>
   
</body>
</html>