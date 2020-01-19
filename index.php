

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .head{
      min-height:150px;
      background-color: #ffc;
      font-size: 6rem;
      text-align: center;
      padding-top: 15px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="head">The Students Result Database</div>
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
      
    </div>
  </div>
</nav>
  
<div class="container">

  <table class="table bordered">
  <tr>
    <th>Name</th>
    <th>Subject</th>
    <th>Mark</th>
  </tr>
  <?php
 function gpa($mark){
    switch ($mark) {
      case ($mark>79):
        return "A+";
        break;
      case ($mark>69) && ($mark<80):
        return "A";
        break;
      case ($mark>59) && ($mark<70):
        return "A-";
        break;

      case ($mark>49) && ($mark<50):
        return "B";
        break;
      case ($mark>33) && ($mark<40):
        return "C";
        break;
      
      default:
        return "Fail";
        break;
    }
    }

  $myFile=file('file.txt');
  foreach ($myFile as $value) {
    $d=explode('*',$value);
   
  
  ?>
 
  <tr>
    <td><?php echo $d[0] ?></td>
    <td><?php echo $d[1] ?></td>
    <td><?php echo gpa($d[2]) ?></td>
  </tr>
  <?php } ?>
</table>
</div>

</body>
</html>