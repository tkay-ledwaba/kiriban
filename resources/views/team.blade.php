<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
body {
    margin: 0;
    font-family: "Lato", sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e8a452;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #e8a452;
  color: black;
}

.topnav a.active {
  background-color: #e8a452;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}
.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

/* Logo */
.logo {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 120px;
}
.sidebar {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #e8a452;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #ffffff;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 00px;
}

.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#e8a452;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}

.my-float{
	margin-top:22px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #e8a452;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: ##e8a452;
  color: white;
}

/* Project Name wire:input field */
#name{
    width: 97%;
    height: 30px;
    border: solid;
    border-color: #E8A452;
    border-width: 1px;
    border-radius: 3px;
    padding-left: 8px;
    padding-right: 8px;
}

/* Overview :input field */
#overview{
    width: 97%;
    height: 30px;
    border: solid;
    border-color: #E8A452;
    border-width: 1px;
    border-radius: 3px;
    padding-left: 8px;
    padding-right: 8px;
}


/* Objectives :input field */
#objectives{
    width: 97%;
    height: 30px;
    border: solid;
    border-color: #E8A452;
    border-width: 1px;
    border-radius: 3px;
    padding-left: 8px;
    padding-right: 8px;
}

/* Due Date :input field */
#due-date{
    width: 97%;
    height: 30px;
    border: solid;
    border-color: #E8A452;
    border-width: 1px;
    border-radius: 3px;
    padding-left: 8px;
    padding-right: 8px;
}

/* Goals :input field */
#goals{
    width: 97%;
    height: 30px;
    border: solid;
    border-color: #E8A452;
    border-width: 1px;
    border-radius: 3px;
    padding-left: 8px;
    padding-right: 8px;
}

/* Login button */
.add-button{
    background-color: #E8A452;
    width: 100%;
    height: 35px;
    border: none;
    border-radius: 3px;
    padding-left: 8px;
    color: #FFFFFF;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media screen and (max-height: 450px)
and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>



    <div class="sidebar">
        <img src="/images/kirivan_logo.png" class="logo">
        <h2>{{auth()->user()-> first_name}} {{auth()->user()-> last_name}}</h2>
        <h1>{{auth()->user()-> email}}</h1>
        <a href="/dashboard"><i class="fa fa-fw fa-home"></i> Dashboard</a>
        <a href="/projects"><i class="fa fa-fw fa-wrench"></i> Projects</a>
        <a href="/diary"><i class="fa fa-fw fa-book"></i> Diary</a>
        <a href="/team"><i class="fa fa-fw fa-users"></i> Team</a>
    </div>

    <div class="main">

        <div class="topnav">
            <a class="active" href="#home">Dashboard</a>
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search..." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>

        <!-- Trigger/Open The Modal -->
        <button id="myBtn" class="float"><i class="fa fa-plus my-float"></i></button>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Add a New Project</h2>
                </div>

                <div class="modal-body">
                    <section>
                        <br>
                        <div class="input-group">
                            <input type="name" id="name" name="name" required placeholder="Project Name">
                        </div>
                        <br>

                        <div class="input-group">
                            <input type="overview" id="overview" name="overview" required placeholder="Overview">
                        </div>
                        <br>

                        <div class="input-group">
                            <input type="objectives" id="objectives" name="objectives" required placeholder="Objectives">
                        </div>
                        <br>

                        <div class="input-group">
                            <input type="due-date" id="due-date" name="due-date" required placeholder="Due Date">
                        </div>
                        <br>

                        <div class="input-group">
                            <input type="goals" id="goals" name="goals" required placeholder="Goals">
                        </div>
                        <br>

                        <button class="add-button" type="submit">Add Project</button>
                    </section>
                </div>

                <div class="modal-footer">
                    <br>
                </div>
        </div>
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

</html>
