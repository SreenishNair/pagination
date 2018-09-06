<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <br>
    <h1>Send mail</h1>
    <form action="send" method="post">
        {{csrf_field()}}
        to: <input type=" text" name="to">
        <br>
        <br>
        <br>
        Select an Image: <input type="file" name="img"><br><br>
        message: <textarea name="message" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Send">
        </form>
</body>
</html>