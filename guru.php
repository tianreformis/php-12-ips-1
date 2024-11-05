<?php
include 'koneksi.php';
// Menambahkan guru baru
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nip = $_POST['nip'];
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $teachermajor = $_POST['teachermajor'];
    $departement = $_POST['departement'];
    

    $sql = "INSERT INTO guru (nip, fullname, address, teachermajor,departement) VALUES ('$nip', '$fullname','$address','$teachermajor','$departement')";
    if ($conn->query($sql) === TRUE) {
        echo "Guru berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$sql = "SELECT * FROM guru";
$result = $conn->query($sql);
?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Guru</h1>
    <a href="index.php">Home</a>

    <form method="POST">
        <input type="text" name="nip" placeholder="NIP" required>
        <input type="text" name="fullname" placeholder="Nama Lengkap" required>
        <input type="text" name="address" placeholder="Alamat" required>
        <input type="text" name="teachermajor" placeholder="Pendidikan" required>
        <input type="text" name="departement" placeholder="Jabatan" required>
        <button type="submit">Tambah Guru</button>
    </form>

    <p></p>
    <table border="1">
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pendidikan</th>
            <th>Jabatan</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['nip'] . "</td>";
                echo "<td>" . $row['fullname'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                            echo "<td>" . $row['teachermajor'] . "</td>";
                echo "<td>" . $row['departement'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Tidak ada guru. </td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>

<!-- 
Michelle
Valen
Hellena
Joyner
Karen
Chelsya
Annya
Tifern
Kenneth
Aurrel
-->