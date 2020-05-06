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

    <h1>Student Data Input</h1>
    <form action="proses.php" method="POST">
        <div class="form-group">
            <label for="formNama">Full Name</label>
            <input type="text" class="form-control" name="Name" placeholder="Full Name">
        </div>
        <div class="form-group">
            <label for="formNIM">NIM</label>
            <input type="text" class="form-control" placeholder="NIM" name="NIM">
        </div>
        <div class="form-group">
            <label for="formTL">Date of Birth</label>
            <input type="date" class="form-control" name="Date_of_Birth">
        </div>
        <div class="form-group">
            <label for="formTempatLahir">Place of Birth</label>
            <input type="text" class="form-control" name="Place_of_Birth" placeholder="Place of Birth">
        </div>
        <div class="form-group">
            <label for="formUmur">Age</label>
            <input type="text" class="form-control" name="Age" placeholder="Age">
        </div>
        <div class="form-group">
            <label for="formHobby">Hobby</label>
            <input type="text" class="form-control" name="Hobby" placeholder="Hobby">
        </div>
        <div class="form-group">
            <label for="formAnnotation">Annotation</label>
            <textarea class="form-control" name="Annotation" placeholder="Annotation" rows="4" cols="50"></textarea>
        </div>
        </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
  </body>
</html>