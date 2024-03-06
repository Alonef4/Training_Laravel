<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/add.css")}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>NewProfile</h1>
        <br>
        <form action="/main" method = "POST" >
            @csrf
            <label for="">Name : </label>
            <input type="text" name = "name" required>
            <br>
            <br>
            <label for="">Phone : </label>
            <input type="text" name = "phone" required>
            <br><br>
            <button class ="submit-btn" type = "submit">Submit</button>
        </form>
    </div>
</body>
</html>
