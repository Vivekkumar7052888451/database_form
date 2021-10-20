<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row bg-light p-3">
     <div class="col-sm-8 mx-auto">
		<div class="card">
		  <div class="card-header">Form</div>
		  <div class="card-body">
		     <form action=""method="post">
				  <div class="form-group">
					<label>Name:</label>
					<input type="name" class="form-control" placeholder="Name" id="name"name="name">
				  </div>
				  <div class="form-group">
					<label>Email address:</label>
					<input type="email" class="form-control" placeholder="Enter email" id="email"name="email">
				  </div>
				  <div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" placeholder="Enter password" id="pwd"name="password">
				  </div>
				  
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
		  </div>
		 
		</div>
	 </div>
	 
  </div>
</div>
<h1>Student data</h1>
@foreach($result as $data)
{{$data->id}}
{{$data->name}}
{{$data->email}}
{{$data->password}}
@endforeach
</body>
</html>