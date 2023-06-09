<?php
    include('config.inc');
    //$pw = "Passw0rd!";
?>
<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uuemõisa Miil 2023</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<?php
if($_GET['id']){
    $id = $_GET['id'];
    $paring = "SELECT * FROM competition WHERE id=$id";
    $valjund = mysqli_query($conn,$paring);
    while($rida = mysqli_fetch_row($valjund)){
?>
<h1>Muuda/Kustuta võistleja</h1>
<form action="#" method="get">
Eesnimi <input type="text" name="firstname" value="<?php echo $rida[1]; ?>"><br>
Perenimi <input type="text" name="lastname" value="<?php echo $rida[2]; ?>"><br>
Võistlusklass
<div class="dropdown me-1">
        <select class="form-select" id="class" name="class" required>
            <option value="M" <?php if ($rida[3] == 'M') echo 'selected'; ?>>M(mees)</option>
            <option value="N" <?php if ($rida[3] == 'N') echo 'selected'; ?>>N(naine)</option>
            <option value="L" <?php if ($rida[3] == 'L') echo 'selected'; ?>>L(kuni 16 aastane)</option>
        </select>
    </div>  
E-mail <input type="email" name="email" value="<?php echo $rida[4]; ?>"><br>
<!-- Peidetud väli! -->
<input type="number" name="id" hidden value="<?php echo $rida[0]; ?>"><br>
<input type="submit" name="update" value="Muuda andmeid"><br>
<br>
<input type="submit" name="delete" value="Kustuta võistleja"><br>
</form>

<?php
//while ja if lõpud
    }
}
// Kustuta võistleja
if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM competition WHERE id = '$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Võistleja edukalt kustutatud.";
    } else {
        echo "Viga kasutaja kustutamisel: " . $conn->error;
    }
}

//muuda võistleja andmeid
if($_GET['id'] && $_GET['firstname']){
    $id = $_GET['id'];
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $class = $_GET['class'];
    $email = $_GET['email'];

    $paring_uuenda = "UPDATE competition 
    SET firstname='".$firstname."',
    lastname='$lastname',
    class='$class',
    email='$email'
    WHERE id='$id'
    ";
    //var_dump($paring_uuenda);
    //saada teele ja suuna kui edukas
    $valjund = mysqli_query($conn, $paring_uuenda);
    if($valjund){
        echo "edukalt muudetud, suuname <a href=\"admin.php\">tagasi</a>";
        echo '<META HTTP-EQUIV="Refresh" Content="1; URL=admin.php">';
        die();
        } else {
        echo "mingi jama";
        }
}
?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</div>
  </body>
</html>





