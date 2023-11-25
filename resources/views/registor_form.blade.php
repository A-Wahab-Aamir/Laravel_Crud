<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid text-center p-5 bg-dark text-white display-4">
    <h1>REGISTOR STUDENT</h1>
    <p>LARAVEL CRUD</p>
</div>

    
    <form action="insert" method="post" class=' container mt-5'>
        @csrf
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Name</label>
    <input type="text" class="form-control" name='name' id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Class</label>
    <input type="number" name='class' class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Section</label>
    <input type="text" name='section' class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Resgitor</button>
        
    </form>
   
</body>
</html>
