<html>
  <head>
    <title>Q6</title>
    </style>
  </head>
  <body  >
  <form method="POST">
    <lable><h3><b>Area</lable></b></h3><br>
  	<input type="number" name = "base" placeholder="Base">
    <br>
    <input type="number" name = "height" placeholder="Height">
    <br>
      <br>
    <button type= "submit" name="tri">Triangle</button>
    <br>
    <br>
    <button type= "submit" name="rect">Rectangle</button>
    <br>
    <br>
  </form>
  </body>
</html>
 <?php
 
   if(isset($_POST['tri']))  
    {   
        $base = ($_POST['base']);
   $height = ($_POST['height']);
   

      echo "<br>";
      $area = (0.5 * $base * $height);
      echo "Area of triangle :- ";

       echo $area;
    }
    if(isset($_POST['rect']))  
    { 
      $base = ($_POST['base']);
   $height = ($_POST['height']);
     
      $area = ($base * $height);
      echo "<br>";
      echo "Area of rectangle :- ";
      echo $area;
    }
 ?>