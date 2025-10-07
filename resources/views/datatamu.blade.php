<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tamu </title>
</head>
<body>
    <h2> data tamu</h2>
    <form action="/hasiltamu" method="post">
    @csrf
    <label>namalengkap:</label>
    <input type="text" name="namalengkap"><br><br>

    <label>Jenis Kelamin:</label>
    <input type="text" name="jeniskelamin"><br><br>

    <label>alamatpenginapan:</label>
    <textarea name="alamatpenginapan"></textarea><br><br>

    <button type="submit">Kirim</button>
    </form>
</body>
</html>