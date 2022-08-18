<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Get Sensor Value</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
</head>
    <body>
      <div class="header">
					<a class="logo" href="#"><img src="https://s-m.com.sa/ar/images/logo.png" alt="logo" /></a>
		</div>
          </br>
            </br>
            <div class="getmethod">
                <?php
                    $SERVER ="localhost";
                    $username="root";
                    $password="";
                    $dbname="getmethod";

                    $conn=mysqli_connect($SERVER,$username,$password,$dbname);
                   if(empty($_GET['value']))
                   {
                    echo "Give value <br>";
                    echo " Not submit";
                   }
                   else
                   {
                    $value=$_GET['value'];
                    echo "  The value is : " . $_GET['value'];
                    echo " Successfully submit";
                   }
                   $query= "insert into getNumber values($value)" ;
                   $run=mysqli_query($conn,$query)
                ?>
              </div>
            </form>
    </body>
</html>