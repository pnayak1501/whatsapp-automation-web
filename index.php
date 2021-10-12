  <?php
    if(isset($_POST['send'])){
      $phonenumber = $_POST['phonenumber']; 
      $message = $_POST['message'];
      header("Location: https://api.whatsapp.com/send?phone=91+$phonenumber?>&text=$message");
    }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Whatsapp Automation</title>
</head>
<body>
<div class="position-absolute top-0 start-50 translate-middle-x">
    <h1>Whatsapp Automation</h1>
</div>
<br>
<br>
<br>
  <div class="row">
  <div class="col-md-6 offset-md-3">
    <form action="index.php" method="POST">
    <div class="mb-3">
      <label for="text" class="form-label">Phone Number</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phonenumber">
    </div>
    <div class="mb-3">
      <label for="number" class="form-label">Message</label>
      <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="send">Send</button>
    </form>    
  </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>