<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="covid.css">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* The grid: Three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 50px;
  text-align: center;
  font-size: 25px;
  cursor: pointer;
  color: white;
}

.containerTab {
  padding: 20px;
  color: white;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Closable button inside the container tab */
.closebtn {
  float: right;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
</style>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'];?>">
  <label for="cars">Choose a car:</label>
  <select name="cars" id="cars" multiple>
    <option class='btn btn-primary btn-lg' style='background: white; color:rgb(23, 79, 182);margin-bottom: 5px' value="volvo">Volvo</option><br>
    <option class='btn btn-primary btn-lg' style='background: white; color:rgb(23, 79, 182);margin-bottom: 5px' value="saab">Saab</option><br>
    <option class='btn btn-primary btn-lg' style='background: white; color:rgb(23, 79, 182);margin-bottom: 5px' value="opel">Opel</option><br>
    <option class='btn btn-primary btn-lg' style='background: white; color:rgb(23, 79, 182);margin-bottom: 5px' value="audi">Audi</option><br>
  </select>
  <br><br>
  <input type="submit" name='submit' value="Submit">
</form>


<?php

if(isset($_POST['submit'])){
  echo "cars=".$_POST['cars'];
}

?>

</body>
</html> 