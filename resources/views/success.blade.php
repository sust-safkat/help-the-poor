<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  

<div class="container">
  <h2>Message!</h2>
  <!-- <p>Add the alert-link class to any links inside the alert box to create "matching colored links".</p> -->
  <div class="alert alert-success">
    <strong>Success!</strong> You should <a class="alert-link" onclick="goBack()">Return</a>.
    <script>
    function goBack() {
        window.history.back();
    }
</script>
  </div>
 <!--  <div class="alert alert-info">
    <strong>Info!</strong> You should <a href="#" class="alert-link">read this message</a>.
  </div>
  <div class="alert alert-warning">
    <strong>Warning!</strong> You should <a href="#" class="alert-link">read this message</a>.
  </div>
  <div class="alert alert-danger">
    <strong>Danger!</strong> You should <a href="#" class="alert-link">read this message</a>.
  </div> -->
</div>

</body>
</html>