<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kirivan - Add Project</title>
<link href="{{ asset('/css/style_project.css') }}" rel="stylesheet">
</head>
<body>
    <div class="project-container">
        <img src="/images/kirivan_logo.png" class="logo">

        <form action="{{route('addProject')}}" method="POST">

            @if($errors->any())
            <div class>
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif

            <h2>Add Project</h2>

            @csrf
            <div class="input-group">
                <input type="name" id="name" name="name" required placeholder="Project Name"><br><br>
                <input type="overview" id="overview" name="overview" required placeholder="Overview"><br><br>
                <input type="objectives" id="objectives" name="objectives" required placeholder="Objectives"><br><br>
                <input type="date" id="due_date" name="due_date" required placeholder="Due Date"><br><br>
                <input type="goals" id="goals" name="goals" required placeholder="Goals"><br><br>
                <input type="hidden" id="owner" name="owner" value="{{auth()->user()->first_name}} {{auth()->user()->last_name}}"><br><br>
                <input type="hidden" id="uid" name="uid" value="{{auth()->user()->uid}}">
            </div>

            <button class="add-button" type="submit">ADD PROJECT</button>
            <br>
        </form>
    </div>
</body>
</html>
