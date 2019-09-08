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
		<ul class="errrors" style="list-style-type: none;">
			
		</ul>
		<div class="success_msg">
			
		</div>
	</div>
    <div class="row">
        <div class="col-sm-6">
            <form id="customer_form">
				  <div class="form-group">
				    <label for="name">Name</label>
				    <input type="name" class="form-control" id="name" name="name">
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" id="email" name="email">
				  </div>
				  <label>Mobile number :</label>
				  <input type="number" class="form-control" name="Mobile_number">
				</br>
				  <button type="submit" class="btn btn-success" id="customer_submit_btn">Submit</button>
				</form>
            
        </div>
        
    </div>
    
</div>

<script type="text/javascript">
	$(function() {
		$("#customer_form").on("submit", function(e) {
			// alert('pok')
			e.preventDefault()
			$.ajax({
				url: '/store_customer',
				method: 'POST',
				data: new FormData(this),
	            headers:{
	               'X-CSRF-TOKEN': "{{ csrf_token() }}"
	             },   
				processData: false,
				contentType: false,
				success: function(obj) {
					$(".alert-danger").remove()
					$(".success_msg").html("<li class='alert alert-success'>Submitted successfully!</li>")
					// alert('Submitted Successfully.')
				},
				error: function(obj) {
					console.log(obj)
					$(".alert-danger").remove()
					$.each(obj.responseJSON.errors, function(key, val) {
						// alert(val)
						$(".errrors").append("<li class='alert alert-danger'>"+val+"</li>")
						// console.log(val)
					})

					// alert("Server Error occured! PLease contact supprt team.")
				}
			})
		})
	})

</script>

</body>
</html>