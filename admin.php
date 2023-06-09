<?php
include('config.inc');
?>
<!doctype html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Uuemõisa miil 2023</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <?php include('menuu.php'); ?>
  <main class="container">
  <div class="table-responsive">
    <?php
    //Vali andmebaas, kus andmeid kuvatakse
    $sql = "SELECT * FROM `competition`";
    $result = $conn->query($sql);
    

    if ($result->num_rows > 0) {
      echo '<table class="table table-striped">';
      echo '<thead><tr><th>Eesnimi</th><th>Perenimi</th><th>Võistlusklass</th><th>Email</th><th></th></tr></thead><tbody>';
      while ($row = $result->fetch_assoc()) {
        echo '<tr><td>'.$row["firstname"].'</td><td>'.$row["lastname"].'</td><td>'.$row["class"].'</td><td>'.$row["email"].'</td><td><a href="muuda.php?id='.$row["id"].'">Muuda/Kustuta</a></td></tr>';
      }
      echo '</tbody></table>';
    } else {
      echo "Võistlejaid ei leitud";
    }
    
    $paring = "SELECT COUNT(*) AS kokku FROM competition";
    $valjund = mysqli_query($conn,$paring);
    while($rida = mysqli_fetch_row($valjund)){
      echo "Kokku võistlejaid: <strong>" .$rida[0]. "</strong><br>";
    }
    $paring = "SELECT COUNT(*) AS naised FROM competition WHERE class = 'N'";
    $valjund = mysqli_query($conn,$paring);
    while($rida = mysqli_fetch_row($valjund)){
      echo "Naiste võistlusklassis on kokku: <strong>" .$rida[0]. "</strong><br>";
    }
    $paring = "SELECT COUNT(*) AS mehed FROM competition WHERE class = 'M'";
    $valjund = mysqli_query($conn,$paring);
    while($rida = mysqli_fetch_row($valjund)){
      echo "Meeste võistlusklassis on kokku: <strong>" .$rida[0]. "</strong><br>";
    }
    $paring = "SELECT COUNT(*) lapsed FROM competition WHERE class = 'L'";
    $valjund = mysqli_query($conn,$paring);
    while($rida = mysqli_fetch_row($valjund)){
      echo "Laste võistlusklassi on kokku: <strong>" .$rida[0]. "</strong><br>";
    }
    


// Sulgen andmebaasi ühenduse
$conn->close();
?>
  </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
