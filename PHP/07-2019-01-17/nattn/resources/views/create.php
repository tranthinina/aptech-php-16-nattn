<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding : 8px;
}
</style>
</head>
<body>
<div class="container offset">
  <div class="row mt-4">
    <div class="col-2 offset-2 mt-2">
      <button type="button" class="btn btn-primary btn-sm">Home</button>
    </div>
    <div class="col-8">
      <h2>LARAVEL CRUD USERS DEMO</h2>
    </div>
  </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-8 offset-2 text-align center">
             <form>
                <div class="form-group">
                    <label for="exampleInputEmail1"><h6>NAME</h6></label>
                    <input type="Name" name="name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInput"><h6>EMAIL</h6></label>
                    <input type="Email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><h6>PASSWORD</h6></label>
                    <input type="Password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-danger">CONFIRM</button>
            </form>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row offset-2">
        <div class="col-6">
            <p class="text-muted">LARAVEL CRUD USERS DEMO</p>
        </div>
        <div class="col-4 text-right">
            <button type="button" class="btn btn-info btn-sm ">CREATE AN USER</button>
        </div>
    </div>
</div>
</body>
</html>