<html>
<meta charset="utf-8"/>
<title>Change Backgrounds</title>
<link rel="stylesheet" type="text/css" href="css/style9.css" />
    <link rel="stylesheet" href="https://bootswatch.com/3/cerulean/bootstrap.min.css">
<head>

</head>
<body id="img1" background="images/9.jpg">
<?php
mb_internal_encoding("UTF-8");
echo "hello world"; 
ini_set("display_errors", "0");
  error_reporting(E_ALL);

 // getExtension Method

$msg='';
if($_SERVER['REQUEST_METHOD'] == "POST")
{
$name = $_POST['login'];
$pass = $_POST['password'];

$hostname='localhost';
$username='root';
$password='';
$dbname='edureka';
$usertable='login';

try
{
    if ($db = mysqli_connect($hostname, $username, $password))
    {
        mysqli_select_db($con,$dbname);
        $query = "insert into ".$usertable." values('".$name."','".$pass."');";
        mysqli_query($con,$query);
        $msg = '<div class="alert alert-dismissible alert-success" >
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Well done!</strong> <div name="test"><a href="#" class="alert-link">Login Suceeded.</a></div>
</div>';
    }
    else
    {
        throw new Exception('Unable to connect');
    }
}
catch(Exception $e)
{
    $msg="Login Failed";
}


}

?>
<form action="" method='post'>
<div class="container">
<div class="center">
<div class="jumbotron">
  <div class="row">
  <div class="col-sm-4" >
	Username
	</div>
	<div class="col-sm-4">
	<input type='text' name='login'/>
	</div>
  <br><br>
  <div class="col-sm-4" >
	Enter Password
	</div>
  <div class="col-sm-4">
	<input type='password' name='password'/>
	</div>
 <br><br>
 <div class="col-sm-4">
	
	</div>
	<div class="col-sm-4">
	<input type='submit' name='click' value='Submit' class="btn btn-primary"/>
	</div>
  </div>
  <div class="row" name="hello">
    <?php echo $msg; ?>
  </div>
  </div>
  </div>
  </div>
</form>
</body>
</html>
