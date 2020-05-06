<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body{
            width: 500px;
            margin: 0 auto;
            margin-bottom: 20px;
        }
        h1{
            margin-bottom: 20px;
        }
    </style>

    <title>Formulir</title>
  </head>
  <body>
    <h1>This is Your Data!</h1>
    <p>Name           : <?php echo $_POST["Name"]; ?> </p>
    <p>NIM            : <?php echo $_POST["NIM"]; ?> </p>
    <p>Date of Birth  : <?php echo $_POST["Date_of_Birth"]; ?> </p>  
    <p>Place of Birth : <?php echo $_POST["Place_of_Birth"]; ?></p>  
    <p>Age            : <?php echo $_POST["Age"], " ";  
    
        if($_POST["Age"] <= 10 ){
                echo "(Kid)";
        }
        elseif($_POST["Age"] <= 20){
                echo "(Teenager)";
        }
        elseif($_POST["Age"] <= 25){
                echo "(Adult)";
        }
        else{
                echo "(OLD)";
        }
        ?> </p>

    <p>Hobby         : <?php echo $_POST["Hobby"]; ?> </p>  
    <p>Annotation    : <?php echo $_POST["Annotation"]; ?> </p>  
  
  </body>
</html>