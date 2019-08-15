<?php
include_once("koneksi.php");

$hasil = mysqli_query($mysqli, "SELECT * FROM tabel_user ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
    <table width='80%' border=1>
    <tr>
    <th>Nama</th> <th>Mobile</th> <th>Email</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($hasil)) {
        echo "<tr>";
        echo "<td>".$user_data['nama']. "</td>";
        echo "<td>".$user_data['mobile']. "</td>";
        echo "<td>".$user_data['email']. "</td>";
    }
    ?>
    </table>
</body>
</html>