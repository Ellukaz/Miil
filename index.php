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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
  <body>
<?php
    include('config.inc');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $class = $_POST['class'];
        $email = $_POST['email'];

        // Kontrolli, kas kasutaja on juba registreeritud
        $query = "SELECT * FROM competition WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Sa oled juba registreeritud.');</script>";
        } else {
            // Laadi andmed andmebaasi
            $query = "INSERT INTO competition (firstname, lastname, class, email) VALUES ('$firstname', '$lastname', '$class', '$email')";
            if (mysqli_query($conn, $query)) {
                echo "<script>alert('Registreerimine õnnestus.');</script>";
            } else {
                echo "<script>alert('Registreerimine ebaõnnestus. Palun proovi uuesti.');</script>";
            }
        }
    }
?>

    <?php include('menuu.php'); ?>

    <div class="container-md">
        <!-- Registreerimisvorm -->
        <section id="registration">
            <h2>Registreerimine</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="mb-3">
                    <label for="firstname" class="form-label">Eesnimi</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Perenimi</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                </div>
                <div class="dropdown me-1">
            <div class="mb-3">
                <label for="class" class="form-label">Vali Võistlusklass</label>
                <select class="form-select" id="class" name="class" required>
                <option value="M">M(mees)</option>
                <option value="N">N(naine)</option>
                <option value="L">L(kuni 16 aastane)</option>
                </select>
                </div>
            </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <button type="submit" class="btn btn-primary">Registreeri</button>
            </form>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

