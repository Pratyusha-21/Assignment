<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  </head>
  <style type="text/css">
  	body{
  		background-color: skyblue;
  	}
  	.navbar-brand{
  		font-size: 30px;
  		color: blue;
      
  	}
  	.navbar .container-fluid{
  		background-color: gray;
      display: flex;
  	}
  	.container .form-group{
  		font-size: 60px;
  	}
    /* .pagination{
    justify-content: center;
    
    }
    .pagination a {
      color: black;
       
      padding: 8px 16px;      
      text-decoration: none;      
      transition: background-color .3s;
}

.pagination a.active {
  background-color: dodgerblue;
  color: white;
} */

.pagination a:hover:not(.active) {background-color: #ddd;}
  </style>
 
  <body>
  <?php
    session_start();
    if($_SESSION["flag"]!=1){
      header('location:login.html');
    }
    ?>
  	<nav class="navbar bg-body-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="phpassignment.php">Home</a>
    <a class="navbar-brand" href="logout.php">Logout</a>

  </div>

</nav>
 <form action="form1.php" class="container mt-5" method="post">   
<div class="form-group my-5">
  <label for="usr"> First Name:</label>
  <input type="text" class="form-control" id="firstname" name="firstname">
</div>
<div class="form-group">
  <label for="usr">Last Name:</label>
  <input type="text" class="form-control" id="lastname" name="lastname">
</div>
<div class="form-group">
  <label for="usr">Full Name:</label>
  <input type="text" class="form-control" disabled id="editText" name="fullname">
</div>
<input type="submit" name="submit">
</form>

<footer>
  <nav aria-label="Page navigation example" class="fixed-bottom mb-5">
    <ul class="pagination justify-content-center ">
      <li class="page-item">
        <a class="page-link" href="form1h.php" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="form1h.php">1</a></li>
      <li class="page-item"><a class="page-link" href="form2h.php">2</a></li>
      <li class="page-item"><a class="page-link" href="form3h.php">3</a></li>
      <li class="page-item"><a class="page-link" href="form4h.php">4</a></li>
      <li class="page-item"><a class="page-link" href="form5h.php">5</a></li>
      <li class="page-item"><a class="page-link" href="form6h.php">6</a></li>
      <li class="page-item">
        <a class="page-link" href="form2h.php" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>
  </footer>

<script>
  $(document).ready(function () {
      var firstname = "";
      $("#firstname").keyup(function () {
          $('#editText').val($('#firstname').val());
          firstname =$('#firstname').val()
      });
      $("#lastname").keyup(function () {
          $('#editText').val(firstname + " "+ ($('#lastname').val()));
      });
  });
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>

