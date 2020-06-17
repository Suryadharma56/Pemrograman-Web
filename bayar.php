<?phpinclude_once('config.php');

if (isset($_POST['Proses'])){
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $NoHP = $_POST['NoHP'];

$result = mysqli_query($mysqli, "INSERT INTO order(Nama,Alamat,NoHP,) VALUES('$Nama','$Alamat','$NoHP',)");
var_dump($result);header("Location: Proses.php");}