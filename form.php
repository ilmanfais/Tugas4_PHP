<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-image: url('formimg1.svg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <?php
    $ar_judul = ['Nama', 'Umur', 'Gender', 'Pendidikan', 'Hobi'];
    ?>
    <div class="container">
        <table class="table table-dark table-striped-columns">
            <thead class="text-center">
                <tr>
                    <?php
                    foreach ($ar_judul as $jdl) {
                    ?>
                        <th><?= $jdl; ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <?php
                    $_nama = $_POST['nama'];
                    ?>
                    <th align="left"><?= $_nama; ?></th>
                    <?php
                    $_umur = $_POST['umur'];
                    ?>
                    <td><?= $_umur . " tahun"; ?></td>
                    <?php
                    $p_gender = $_POST['gender'];
                    ?>
                    <td><?= $p_gender; ?></td>
                    <?php
                    $p_pendidikan = $_POST['pendidikan'];
                    ?>
                    <td><?= $p_pendidikan; ?></td>

                    <td>
                        <?php
                        $hobi = $_POST['hobi'];
                        foreach ($hobi as $hbi) {
                            echo $hbi . " | ";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row" colspan="5">
                        <p><a href="proses.php" style="background-color: white; padding: 2px">Kembali</a></p>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
