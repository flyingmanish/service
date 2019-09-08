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
		<div class="col-sm-3">
			<button id="get_customer_details_btn" class="btn btn-info">Get Customer Details</button>
		</div>
		<div class="col-sm-9">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th>Sr.No</th>
						<th>Customer Name</th>
						<th>Email</th>
						<th>Mobile</th>
					</tr>
				</thead>
				<tbody id="customer_table_body">
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function() {
		$("#get_customer_details_btn").on("click", function(e) {
			// alert('pok')
			e.preventDefault()
			$.ajax({
				url: '/readCustomerDetails',
				method: 'GET',
				dataType: 'JSON',
				// data: new FormData(this),
	            headers:{
	               'X-CSRF-TOKEN': "{{ csrf_token() }}"
	             },   
				processData: false,
				contentType: false,
				success: function(obj) {
					console.log(obj)
					$("#customer_table_body").empty()
					$.each(obj, function(key, val) {
						$("#customer_table_body").append("<tr><td>"+val.id+"</td><td>"+val.name+"</td><td>"+val.email+"</td><td>"+val.mobile+"</td>mobile</tr>")					
					});

				},
				error: function(obj) {
					alert("error")
					// console.log(obj)
					// $(".alert-danger").remove()
					// $.each(obj.responseJSON.errors, function(key, val) {
					// 	// alert(val)
					// 	$(".errrors").append("<li class='alert alert-danger'>"+val+"</li>")
					// 	// console.log(val)
					// })

					// // alert("Server Error occured! PLease contact supprt team.")
				}
			})
		})
	})

</script>

</body>
</html>