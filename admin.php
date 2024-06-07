<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Kue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>


    <div class="container my-5">
        <div class="card">
            <div class="card-body">
                <h1>Data Pesan</h1>
                <?php
                include "koneksi.php";
                $pesan = mysqli_query($koneksi, "SELECT * FROM kontak");
                ?>
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                    </tr>

                    <!-- data pesan -->
                    <?php
                    foreach ($pesan as $key => $value) {
                        # code...
                        $no = $key + 1;
                    ?>
                        <tr>
                            <td> <?= $no ?> </td>
                            <td> <?= $value["nama"] ?> </td>
                            <td> <?= $value["email"] ?> </td>
                            <td> <?= $value["pesan"] ?> </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>