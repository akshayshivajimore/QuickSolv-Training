<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
table, td, th {
  border: 1px solid;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
        
    </head>
    <body class="antialiased">
    <h2>User Table</h2>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Name</name>
            <td>Email</td>
            <td>phone</td>
            <td>password</td>
            <td>Action</td>
</tr>

@foreach($formArr as $table)

<tr>
            <td>{{$table->id}}</td>
            <td>{{$table->name}}</td>
            <td>{{$table->email}}</td>
            <td>{{$table->phone}}</td>
            <td>{{$table->password}}</td>
            <td>
                <a href="delete/{{$table->id}}">Delete</a>
            <a href="edit/{{$table->id}}">Edit</a>
        </td>
</tr>
@endforeach
</table><br><br>

<h2>User Details</h2>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>User ID</name>
            <td>Age</td>
            <td>Address</td>
            <td>City</td>
            <td>State</td>
            <td>Country</td>
            <td>pincode</td>
            <td>Action</td>
</tr>


</table><br><br>

    </body>
</html>