<?php

include "connect.php";
$id = $_GET['updateid'];
$sql = "SELECT * FROM `crud` WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE `crud` SET name = '$name', email = '$email', mobile = '$mobile', password = '$password' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "Data updated successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-5 border">
      <form method="post">
        <div class="mb-3 row">
          <label for="name" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" value="<?php echo $name; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="<?php echo $email; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile number" value="<?php echo $mobile; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="password" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" value="<?php echo $password; ?>">
          </div>
        </div>
        <div>
          <button class="btn btn-primary m-5 w-25" type="submit" name="submit">Update</button>
        </div>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
