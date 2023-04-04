<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
<form method="post" action="{{url('store_form')}}" style="display: flex; flex-direction: column; width: 500px">
    @csrf
    <label for="name"> Имя</label>
    <input type="text" name="name">
    <label for="surname"> Фамилия</label>
    <input type="text" name="surname">
    <label for="mail"> E-mail</label>
    <input type="text" name="mail">
    <input type="submit" value="Отправить">
</form>
</body>
</html>
