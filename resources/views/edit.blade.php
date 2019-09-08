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

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <form action="/update_user/{{$service->id}}" method="POST">
                {{csrf_field()}}
  <div class="form-group">
    <label for="name">Name</label>
    <input type="name" class="form-control" id="name" name="name" value="{{$service->name}}">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{$service->email}}">
  </div>
  <div class="form-group">
    <label for="pwd">Password:<i style="color: red">*</i></label>
    <input type="password" class="form-control" id="pwd" name="password" value="{{$service->password}}">
  </div>
  <div class="form-group">
    <label for="pwd">Confirm Password:<i style="color: red">*</i></label>
    <input type="password" class="form-control" id="pwd" name="password">
  </div>
  <label>Mobile number</label>
  <input type="number" name="Mobile_number" class="form-control" id="Mobile_number" value="{{$service->Mobile_number}}">
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
            
        </div>
        
    </div>
    
</div>

</body>
</html>