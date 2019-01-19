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
    <div class="container offset-2">
        <div class="row my-5">
            <div class="col ">
              <table style="width:80%" class="text-center"  >
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th> 
                  <th>Action</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Na</td>
                  <td>na@gmail.com</td>
                  <td>
                      <button type="button" class="btn btn-primary btn-sm">Show</button>
                      <button type="button" class="btn btn-warning btn-sm ml-3 mr-3">Edit</button>
                      <button type="button" class="btn btn-danger btn-sm">Delete</button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Ni</td>
                  <td>ni@gmail.com</td>
                  <td>
                      <button type="button" class="btn btn-primary btn-sm">Show</button>
                      <button type="button" class="btn btn-warning btn-sm ml-3 mr-3">Edit</button>
                      <button type="button" class="btn btn-danger btn-sm">Delete</button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Mai</td>
                  <td>mai@gmail.com</td>
                  <td>
                      <button type="button" class="btn btn-primary btn-sm">Show</button>
                      <button type="button" class="btn btn-warning btn-sm ml-3 mr-3">Edit</button>
                      <button type="button" class="btn btn-danger btn-sm">Delete</button>
                  </td>
                </tr>
              </table>
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