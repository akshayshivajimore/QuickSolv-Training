<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Form</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
       
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
     
        {{ Form::open(array('url' => 'foo/bar')) }}
    

        {{ Form::close() }}
        {{Form::label('name', 'Name :');}}
        {{Form::text('name', '');}}<br><br>
       {{Form::label('email', 'E-Mail :');}}
       {{Form::text('email', '');}}<br><br>
       {{Form::label('phone', 'Phone :');}}
       {{Form::text('phone', '');}}<br><br>
       {{Form::label('gender', 'Gender :');}}
      {{ Form::radio('male','yes');}}<br><br>
      {{Form::label('hobbies', 'Hobbies :');}}


      {{Form::label('city', 'City :');}}
      {{Form::select('city', array('m' => 'mumbai', 'p' => 'pune','t'=>'thane','v'=>'vashi'));}}<br><br>

      {{Form::submit('ADD');}}
      
      
    </div>
    </body>
</html>