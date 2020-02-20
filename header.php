<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
  float:right;
}
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}
input.primary:checked + .slider {
  background-color: #2196F3;
}
input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
</style>
<body style="background-color: #f0f5f1">

<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="color: white">SISTec</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php" style="color: white">HOME</a></li>
      <li><a href="addFaculty.php" style="color: white">ADD FACULTY</a></li>
      <li><a href="addSubject.php" style="color: white">ADD SUBJECT</a></li>
      <li><a href="addFacultyPref.php" style="color: white">FACULTY PREFERENCES</a></li>
    </ul>
  </div>
</nav>
