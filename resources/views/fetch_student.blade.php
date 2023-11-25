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
    <h1>STUDENT DATA</h1>
    <p>LARAVEL CRUD</p>
</div>

 
<a href="registor">
    <input type="button" value="Add New Students" class='btn btn-dark btn-md m-3'></a>
<table class=' container table mt-5 text-center'>
   <thead>
   <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>CLASS</th>
        <th>SECTION</th>
    </tr>
   </thead>

   <tbody>
    @foreach($result as $row)
   <tr>
        <td>{{$row-> id}}</td>
        <td>{{$row-> name}}</td>
        <td>{{$row-> class}}</td>
        <td>{{$row-> section}}</td>
        <td>
            <a href="delete/{{$row-> id}}">
                <input type="button" value="Delete" class='btn btn-danger'>
               
            </a>
            <a href="update/{{$row-> id}}">
            <input type="button" value="Update" class='btn btn-success'>
               
            </a>
            
        </td>
    </tr>
    @endforeach
    
   </tbody>
</table>
   
</body>
</html>
