<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
    <link rel="stylesheet" href="/css/form.css">
</head>
<body>
    <div>
        <form action="/done" method="POST">
            @csrf
            <label for="name">name</label>
            <input type="text" value="" name="name">
            <label for="lastname">lastname</label>
            <input type="text" value="" name="lastnamee">
            <label for="address">address</label>
            <input type="text" value="" name="address">
            <label for="phone">phone number</label>
            <input type="number" value="" name="phone"> &nbsp &nbsp
            <select name="select" id="">what do you want?
                <option value="bmw">bmw</option>
                <option value="benz">benz</option>
                <option value="tesla">tesla</option>
                <option value="audi">audi</option>
            </select>
            <br>
            <br>
            <input type="submit" value="submit">

        </form>
    </div>
</body>
</html>