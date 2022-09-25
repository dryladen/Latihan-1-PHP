<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 1 PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="container-fluid text-center mt-3 p-3 bg-primary text-white rounded shadow">
      <h1>Latihan 1 PHP Dasar</h1>
    </div>
    <form action="index.php" method="post" class="p-5 mx-5">
      <div class="mb-3 mt-3">
        <label for="kata" class="form-label"><b>Kalimat</b></label>
        <input type="text" class="form-control" placeholder="Masukan String" name="kata" id="kata" required>
      </div>
      <div class="mb-3">
        <label for="pengulangan" class="form-label"><b>Pengulangan</b></label>
        <input type="number" class="form-control" placeholder="Masukan Angka" name="range" id="pengulangan" required>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
      echo "<div class=' mx-5 mb-5 border rounded shadow text-center'>";
      echo "<h3 class='bg-primary p-2 text-white rounded'>Hasil</h3>";
      if (!empty($_POST['kata']) && !empty($_POST['range'])) {
        for ($i = 1; $i <= $_POST['range']; $i++) {
          echo "<p>$_POST[kata] $i</p>";
        }
        $hasil = $_POST['range'] % 2 == 1 ? "Ganjil" : "Genap";
        echo "<p class='bg-primary m-5 p-3 text-white rounded'><b>$_POST[range] merupakan bilangan $hasil</b></p>";
      } else {
        echo "<h1>Pengulangan minimal 1</h1>";
      }
      echo "</div>";
    } ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>