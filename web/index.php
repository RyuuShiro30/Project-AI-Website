<!DOCTYPE html>
<html>
<head>
    <title>Prediksi Kelulusan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Prediksi Kelulusan Mahasiswa</h2>

<form action="process.php" method="POST">
    IPK: <input type="number" step="0.01" name="ipk" required><br>
    Kehadiran (%): <input type="number" name="kehadiran" required><br>
    Nilai UTS: <input type="number" name="uts" required><br>
    Nilai UAS: <input type="number" name="uas" required><br>
    <button type="submit">Prediksi</button>
</form>
</body>
</html>
