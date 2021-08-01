<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>the list of orders :</h1>
    @foreach ($cars as $car )

    <ul>
        <li>
            <h3>{{ $car['id'] }}</h3>
            {{ $car['name'] }}
            {{ $car['lastnamee'] }}
            {{ $car['address'] }}
            {{ $car['phone'] }}
            {{ $car['select'] }}
        </li>
    </ul>

        
    @endforeach
    <form action="/orders/{{ $car['id'] }}" method="POST">
        @csrf
        @method('DELETE')
        <h3>delete number {{ $car['id'] }}?</h3>
    
        <button>delete</button>
    </form>
   
   
        
</body>
</html>