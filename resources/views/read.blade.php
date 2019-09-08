<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
<!-- {{$service}} -->

<h1>Product Table</h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th>Name</th>
      <th>email</th>
      <th>Password</th>
      <th>Mobile_number</th>
    </tr>
  </thead>
  <tbody>
    @foreach($service as $s)
    <tr>
      <td>{{$s->name}}</td>
      <td>{{$s->email}}</td>
      <td>{{$s->password}}</td>
      <td>{{$s->Mobile_number}}</td>
      <td>
        <a href="/delete_user/{{$s->id}}" class="btn btn-danger">delete</a>
        <a href="/edit_user/{{$s->id}}" class="btn btn-info">edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</body>
</html>