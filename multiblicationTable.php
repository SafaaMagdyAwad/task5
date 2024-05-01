<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container border border-4 mt-5 rounded-5 text-center position-relative">
      <img src="https://cdn-icons-png.flaticon.com/512/4651/4651970.png" alt="" style="width:200px; transform: rotate(-10deg);" class="position-absolute start-0">
      <h1 class="fw-semibold">Multiplication Table</h1>
      <table class="table table-hover mx-auto mt-5">
        <thead>
          <tr class="table-dark">
            <th class="border-end">Number x Multiplier</th>
            <th>Result</th>
          </tr>
        </thead>
        <tbody>
<?php 
if((int)($_POST['number'])==0){  // to prevent string values (int)String=0  
  echo "enter valid number";
  $number=0;
}else{

  $number=$_POST['number'];
}
for($i=1;$i<=10;$i++){
?>
          <tr>
            <td class="border-end"><?php echo $i ?> x <?php echo $number ?></td>
            <td><?php echo $i*$number ?></td>
          </tr>
<?php } ?>          
  
        </tbody>
      </table>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
<?php
}else{
  echo " you cant access this page directly.";
}
?>
