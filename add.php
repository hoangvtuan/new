<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TodoList</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="public/css/css.css">
</head>
<body>
	<div class="col-md-12 header">
		<h1 class="pt-2 pb-2">TODOLIST</h1>
	</div>
	<header>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">HOME</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="add.php">ADD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="edit.php">EDIT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="delete.php">DELETE</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>
    <div class="content pt-5 pb-5">
      <?php 
        session_start();
        require('controller/c_work.php');
          $c_work = new C_work();
          $c_work->addWork();
       ?>
      <form class="container pt-5 pb-5" method="post" action="add.php">
        <div class="form-group row">
          <label for="input1" class="col-sm-2 col-form-label">Work Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="input1" name="Workname" placeholder="Work Name">
          </div>
        </div>
        <div class="form-group row">
          <label for="input2" class="col-sm-2 col-form-label">Starting Date</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="input2" name="Startingdate" placeholder="Starting Date">
          </div>
        </div>
        <div class="form-group row">
          <label for="input3" class="col-sm-2 col-form-label">Ending Date</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="input3" name="Endingdate" placeholder="Ending Date">
          </div>
        </div>
        <div class="form-group row">
          <label for="input4" class="col-sm-2 col-form-label">Status</label>
          <div class="col-sm-10">
            <select name="Status" class="form-control">
              <option>Planning</option>
              <option>Doing</option>
              <option>Complete</option>
            </select>
          </div>
        </div>
    
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" name="submit" class="btn btn-primary">ADD</button>
          </div>
        </div>
      </form>
    </div>
	<div class="col-md-12 footer">
			<div class="col-md-12 text-center pt-4 pb-3">
				<h6>Copyright © 2018. All rights reserved. Design by Tuan Hoang.</h6>
			</div>
	</div>
</body>
</html>