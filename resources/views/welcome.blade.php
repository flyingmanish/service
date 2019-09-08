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
            <form action="/store_user" method="POST">
                {{csrf_field()}}
  <div class="form-group">
    <label for="name">Name</label>
    <input type="name" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:<i style="color: red">*</i></label>
    <input type="password" class="form-control" id="pwd" name="password">
  </div>
  <div class="form-group">
    <label for="pwd">Confirm Password:</label>
    <input type="password" class="form-control" id="pwd" name="password">
  </div>
  <label>Mobile number :</label>
  <input type="number" class="form-control" name="Mobile_number">
</br>
  <label>Hobbies :</label>
  <div class="checkbox">
  <label><input type="checkbox" value="Hockey" name="Hobbies">Hockey</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="Cricket" name="Hobbies">Cricket</label>
</div>
<div class="checkbox disabled">
  <label><input type="checkbox" value="Football" name="Hobbies">Football</label>
</div>
  <div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1">
    <option value="Delhi">Delhi</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Kolkata">Kolkata</option>
    <option value="Pune">Pune</option>
  </select>
</div>
</br>
<label>Gender :</label>
  <div class="radio">
  <label><input type="radio" name="optradio" value="male">Male</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="female">Female</label>
</div>
<div class="radio disabled">
  <label><input type="radio" name="optradio" value="other">Other</label>
</div>
  <div class="form-group">
  <label for="Address">Address :</label>
  <textarea class="form-control" rows="5" id="Address" name="Address"></textarea>
</div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
            
        </div>
        
    </div>
    
</div>

</body>
</html>