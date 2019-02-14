<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" name="dictionary" action="{{route('result')}}">
    @csrf
    <label> Simple Dictionary</label>
    <input type="text" name="word" placeholder="Input text">
    <select name="select">
        <option value="vie">English to VietNamese</option>
        <option value="eng">VietNamese to English</option>
    </select>
    <button type="submit" name="submit">submit</button>
</form>
</body>
</html>