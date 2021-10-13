<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C-R-U-D</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  </head>

  <body>
  <div class="container">
    <h2>C-R-E-A-T-E</h2>
  <form action="create" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}" /> 
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
  
  <br>
  <button type="submit" class="btn btn-danger">Submit</button>
</form>


<!-- Read Data -->
<br>
<h2>R-E-A-D</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
    </tr>
  </thead>
  <tbody>
    @foreach($viewData as $row)
    <tr>
      <td>{{$row->id}}</th>
      <td>{{$row->name}}</th>
      <td>{{$row->email}}</th>
      <td>{{$row->password}}</th>
    </tr>
    @endforeach
  </tbody>
</table>
<br>
<!-- Update Data -->
<h2>U-P-D-A-T-E</h2>
<form action="update" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}" />   
    <label for="name">ID</label>
    <input type="number" class="form-control" id="id" name="id" placeholder="Enter Name">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">  
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
    <button type="submit" class="btn btn-danger" style="margin:5px">Submit</button>
    <br>
	</form>
  <br>
<!-- Delete Data -->
<h2>D-E-L-E-T-E</h2>
<form action="delete" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}" />   
    <label for="id">ID</label>
    <input type="number" class="form-control" id="id" name="id" placeholder="Enter ID">
    <button type="submit" class="btn btn-danger mb-5" style="margin:5px">Submit</button>
    <br>
	</form>
</div>

<!-- footer -->
<footer class="text-center text-white pb-3 pt-3" style="background-color:black" >
© Russel 2021 - Just a CRUD app 
</footer>
</div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  </body>
</html>
