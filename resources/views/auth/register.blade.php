<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kirivan - Register</title>
<link href="{{ asset('/css/style_register.css') }}" rel="stylesheet">
</head>
<body>
  <div class="signin-container">
    <img src="/images/kirivan_logo.png" class="logo">

    <form action="{{route('registerUser')}}" method="POST" enctype="multipart/form-data">

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


        @csrf
        <h2>Add User</h2>

        <div class="input-group">
            <input type="file" id="image" name="image">
            <input type="first_name" id="first_name" name="first_name" required placeholder="First Name">
            <br><br>
            <input type="last_name" id="last_name" name="last_name" required placeholder="Last Name">
            <br><br>
            <input type="email" id="email" name="email" required placeholder="Email Address">
            <br><br>
            <input type="password" id="password" name="password" required placeholder="Password">
            <br><br>
            <button class="login-button" type="submit">
                <span class="button-sticker">🔑</span>
                Add User
            </button>
        </div>


        <div class="input-group">
        </div>
        <br>

        <div class="input-group">
         </div>
        <br>

        <div class="input-group">
         </div>

        <div class="input-group">
         </div>

    </form>
  </div>
</body>
</html>
