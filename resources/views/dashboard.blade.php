<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kirivan - Dashboard</title>
<link href="{{ asset('/css/style_dashboard.css') }}" rel="stylesheet">
<style>
    body {
    margin: 0;
    font-family: "Lato", sans-serif;
}

.sidebar {
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #e8a452;
    position: fixed;
    height: 100%;
    overflow: auto;
}

.sidebar a {
    display: block;
    color: white;
    padding: 16px;
    text-decoration: none;
}

  .sidebar a.active {
    background-color: #f1f1f1;
    color: #e8a452;
  }

  .sidebar a:hover:not(.active) {
    background-color: #414141;
    color: white;
  }

    /* Logo */
    .logo {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 180px;
    }

    .profile-card {
            text-align: center;
            margin: 16px;
        }


  div.content {
    margin-left: 200px;
    padding: 1px 16px;
    height: 1000px;
  }

  .card {
    padding: 4px;
    background-color: #e8a452;
    color: #ffffff;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 38%;

}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

    .container {
        padding: 1px 4px;
    }

  @media screen and (max-width: 700px) {
    .sidebar {
      width: 100%;
      height: auto;
      position: relative;
    }
    .sidebar a {float: left;}
    div.content {margin-left: 0;}
  }

  @media screen and (max-width: 400px) {
    .sidebar a {
      text-align: center;
      float: none;
    }
  }

    </style>
</head>

<body>
    <div class="sidebar">
        <br>
        <img src="/images/kirivan_logo.png" class="logo">

        <div class="profile-card">
            <div class="profile-icon-label">
                <i class="fas fa-user-circle"></i>
            </div>
            <div class="username"><b>{{auth()->user()-> first_name}} {{auth()->user()-> last_name}}</b></div>
            <div class="email">{{auth()->user()->email}}</div>
        </div>
        <a class="active" href="/dashboard">Dashboard</a>
        <a href="/projects">Projects</a>
        <a href="/diary">Diary</a>


      </div>

      <div class="content">
        <h2>Dashboard</h2>
        @if(!empty($projects))
        @foreach ($projects as $project)
        <div class="card">
            <div class="container">
                <h4><b>{{$project->name}}</b></h4>

                <label for="file">8 Tasks:</p>
                <progress id="file" value="32" max="100"> 40% </progress>
            </div>
          </div>
        </div>
        @endforeach
        @endif

</body>
</html>
