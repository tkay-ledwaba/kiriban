<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kirivan - Dashboard</title>
<link href="{{ asset('/css/style_projects.css') }}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>


</style>
</head>

<body>
    <div class="sidebar">
        <br>
        <div class="profile-card">
            <img src="/images/kirivan_logo.png" class="logo">
            <div class="profile-icon-label">
                <i class="fa fa-user-circle"></i>
            </div>
            <div class="username"><b>{{auth()->user()-> first_name}} {{auth()->user()-> last_name}}</b></div>
            <div class="email">{{auth()->user()->email}}</div>
        </div>

        <div class="list">
            <a href="/dashboard"><i class="fa fa-fw fa-home"></i> Dashboard</a>
            <a class="active" href="/projects"><i class="fa fa-fw fa-wrench"></i> Projects</a>
            <a href="/diary"><i class="fa fa-fw fa-book"></i> Diary</a>
            <a href="/team"><i class="fa fa-fw fa-users"></i> Team</a>
        </div>
    </div>

    <div class="content">
        <h2>Projects</h2>

        @foreach ($projects as $project)
            <div class="card">
                <div class="header">
                    <h4><b>{{$project->name}}</b></h4>
                </div>
                <div class="container">

                    <p>Overview: {{$project->overview}}</p>
                    <p>Due Date: {{$project->due_date}}</p>
                    <br>

                    @if (!empty($task))
                        @foreach ($tasks as $task)
                        <h4><b>{{$task->name}}</b></h4>
                        <p>1/10 Tasks | 10%</p>
                        <div id="myProgress">
                            <div id="myBar">10%</div>
                            <br>
                        </div>

                        <p><a href="/projects/{{$project->name}}" class="assign-button">View Tasks</a></p>

                        <div class="btn-group">
                            <button>Apple</button>
                            <button>Samsung</button>
                            <button>Sony</button>
                        </div>
                        @endforeach
                    @else

                        <p>Tasks have not been assigned.</p>
                        <p><a href="/projects/{{$project->name}}/tasks" class="assign-button">View Tasks</a></p>
                        <p><a href="/addtask/{{$project->id}}" class="assign-button">Assign Tasks</a></p>

                    @endif
                </div>
            </div>
            <br>
        @endforeach
    </div>
</body>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<script>
    var i = 0;
    function move() {
        if (i == 0) {
            i = 1;
            var elem = document.getElementById("myBar");
            var width = 10;
            var id = setInterval(frame, 10);

            function frame() {
                if (width >= 100) {
                    clearInterval(id);
                    i = 0;
                } else {
                    width++;
                    elem.style.width = width + "%";
                    elem.innerHTML = width  + "%";
            }
        }
      }
    }
</script>

<script>
$(document).ready(function() {
  $('#myButton').click(function() {
    var buttonId = $(this).attr('id');
    $.ajax({
      url: '/controller/method',
      data: { id: buttonId },
      success: function(response) {
        console.log(response);
      },
      error: function(error) {
        console.log(error);
      }
    });
  });
});
</script>

</html>
