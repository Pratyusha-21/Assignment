
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <link rel="stylesheet" href="style.css">
      <script src="name.js"></script>
  </head>
  <body>
    <!-- Includes Navbar -->
    <?php
    include'header.php';
    ?>

    <form action="form5.php" enctype="multipart/form-data" class="container mt-5" method="post">
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

    <!-- Takes image as input -->
      <label for="myfile">Select an Image:</label>
      <input type="file" id="myfile" name="image" class="image mt-5" accept="image/*"><br><br>
      
      <!-- Takes marks in text area -->

      <h1>Enter Your Marks:</h1>
      <textarea name="marks" class="form-control-file" cols="45" rows="5"></textarea>
      <br><br>
      
      <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
      <div class="input-group mb-2 mr-sm-2">
        <div class="input-group-prepend">
          <p>Phone Number:</p>
          <div class="input-group-text">+91</div>
        </div>
        <input type="number" name="number" id="inlineFormInputGroupUsername2" class="number">
      </div>
      
      <!-- takes email as input -->
      <label for="mail">Email Id:</label>
      <input type="text" id="mail" name="mail" class="mail"><br><br><br>
      <input type="submit" value="Submit" name="submit">


    </form>
    <!-- Pagination -->
    <footer>
    <?php include'footer.php';?>
    </footer>
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