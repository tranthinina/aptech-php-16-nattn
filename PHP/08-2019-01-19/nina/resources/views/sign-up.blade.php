<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <form action="{{asset('sign-up-success')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="ten" >
    <input type="text" name="abc" >
    <button type="submit">Click me</button>
    </form>
</body>
</html>