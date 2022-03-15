<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crud</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
       
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
           
                <table border="1">
                    <tr>
                        <td>Id</td>
                        <td>name</td>
                        <td>Email</td>
                        <td>Phone</td>
                        <td>Age</td>
                        <td>Gender</td>
                        <td>Address</td>
                        <td>Photo</td>
                        <td>Action</td>
</tr>
@foreach($crudArr as $crud)
<tr>
    <td>{{$crud->patient_idid}}</td>
    <td>{{$crud->name}}</td>
    <td>{{$crud->email}}</td>
    <td>{{$crud->phone_number}}</td>
    <td>{{$crud->age}}</td>
    <td>{{$crud->gender}}</td>
    <td>{{$crud->address}}</td>
    <td>{{$crud->action}}</td>
    <td>{{$crud->action}}</td>
</tr>
@endforeach
</table>

        </div>
    </body>
</html>
