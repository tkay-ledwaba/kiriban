<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{ asset('/css/style_tasks.css') }}" rel="stylesheet">
<style>

</style>
</head>
<body style="background-color:white;">

    <div class="navbar">
        <a href="#home">Back</a>

        @if(!empty($project))
            <h4>{{$project->name}}</h4>
        @endif

        <img src="/images/kirivan_logo.png" class="logo">

    </div>

    
</body>
</html>
