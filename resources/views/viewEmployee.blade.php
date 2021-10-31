
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <div class="card-header" >
    <button type="button" class="btn btn-warning"><a class="nav-link" href="{{ route('register') }}">{{ __('View Co') }}</a></button>
    </div>
    <br>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<body>
@if(Session::has('deleteEmployee'))
<span>{{Session::get('updateEmployee')}}</span>
@endif
    
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr> <tr>
      
        <th scope="col" >ID</th>
        <th scope="col">Frist Name</th>
        <th scope="col">Last Name</th> 
        <th scope="col">Company</th> 
        <th scope="col">Phone Number</th> 
        <th scope="col" >Email</th>
        <th scope="col">Profile Photo</th>
        <th scope="col">EDIT</th>
        <th scope="col">DELETE</th>
</tr> 
        </thead>
        <tbody>
          <tr>

          @foreach($employees as $employee)
       <tr>
           <td class="bg-info">{{$employee->id}}</td>
           <td class="bg-danger">{{$employee->fName}}</td>
           <td class="bg-primary">{{$employee->lName}}</td>
           <td class="bg-success">{{$employee->company}}</td>
           <td class="bg-info">{{$employee->phone}}</td>
           <td class="bg-warning">{{$employee->email}}</td>
           <td>{{$employee->profile_Photo}}</td>
           <td>
               <button type="button" class="btn btn-warning"><a href="/editEmployee/{{$employee->id}}">UPDATE</a></button>
           </td> 
           <td>
           <button type="button" class="btn btn-warning"><a href="/deleteEmployee/{{$employee->id}}">DELETE</a></button>
    </td>
        
</tr>
  @endforeach
  
          
          <tr>
    
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>

