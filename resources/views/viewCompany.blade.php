
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <div class="card-header" >
    <button type="button" class="btn btn-warning"><a class="nav-link" href="{{ route('viewEmployee') }}">{{ __('View Employees') }}</a></button>
    </div>
    <br>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<body>
@if(Session::has('deleteCompany'))
<span>{{Session::get('updateCompany')}}</span>
@endif
    
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr> <tr>
        <th scope="col">ID</th>
        <th scope="col">Company Name</th>
        <th scope="col" >Email</th> 
        <th scope="col" >Telephone</th> 
        <th scope="col">Company logo</th> 
        <th scope="col">Cover Image</th> 
        <th scope="col">Company Website</th> 
        <th scope="col">Other Infomations</th>
        <th scope="col">EDIT</th>
        <th scope="col">DELETE</th>
           
</tr> 
        </thead>
        <tbody>
          <tr>

          @foreach($companies as $companie)
       <tr>
           <td class="bg-danger">{{$companie->c_id}}</td>
           <td class="bg-primary" >{{$companie->Name}}</td>
           <td class="bg-success">{{$companie->email}}</td>
           <td class="bg-info" >{{$companie->telephone}}</td>
           <td class="bg-primary" >{{$companie->logo}}</td>
           <td class="bg-success" >{{$companie->coverImage}}</td>
           <td class="bg-info">{{$companie->website}}</td>
           <td class="bg-danger">{{$companie->otherInfo}}</td>
           <td>
               <button type="button" class="btn btn-warning"><a href="/editCompany/{{$companie->c_id}}">UPDATE</a></button>
           </td> 
           <td>
           <button type="button" class="btn btn-warning"><a href="/deleteCompany/{{$companie->c_id}}">DELETE</a></button>
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

