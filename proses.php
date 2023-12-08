<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('formimg.svg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <form class="form-horizontal mx-auto" action="form.php" method="post">
            <fieldset>

                <!-- Form Name -->
                <legend class="text-center">Form Name</legend>

                <!-- Nama Lengkap -->
                <div class="form-group row">
                    <label class="col-md-4 control-label text-right" for="nama">Nama Lengkap</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                            </div>
                            <input id="nama" name="nama" class="form-control" placeholder="" type="text">
                        </div>
                    </div>
                </div>


                <!-- Search input-->
                <div class="form-group row">
                    <label class="col-md-4 control-label text-right" for="umur">Umur</label>
                    <div class="col-md-4">
                        <input id="umur" name="umur" type="search" placeholder="" class="form-control input-md">
                    </div>
                </div>

                <!-- Multiple Radios (inline) -->
                <div class="form-group row">
                    <?php
                    $p_gender = [
                        "" => "Laki-laki", "Perempuan"
                    ];
                    ?>
                    <label class="col-md-4 control-label text-right" for="gender">Gender</label>
                    <div class="col-md-4">
                        <label class="radio-inline">
                            <?php
                            foreach ($p_gender as $key => $val) {
                                echo '<input type="radio" name="gender" value = "' . " " . $val . '">' . " " . $val . " ";
                            }
                            ?>
                        </label>
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group row">
                    <?php
                    $pendidikan = [
                        "" => " ", "SD", "SMP", "SMA", "DI", "DII", "DIII", "S1", "S2", "S3"
                    ];
                    ?>
                    <label class="col-md-4 control-label text-right" for="pendidikan">Pendidikan</label>
                    <div class="col-md-4">
                        <select id="pendidikan" name="pendidikan" class="form-control">
                            <?php
                            foreach ($pendidikan as $key => $value) {
                                echo '<option value="' . $value . '">' . $value . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!-- Multiple Checkboxes -->
                <div class="form-group row">
                    <?php
                    $hobi = [
                        "Baca Buku", "Travelling", "Olahraga",
                        "Nonton", "Naik Gunung", "Mancing"
                    ];
                    ?>
                    <label class="col-md-4 control-label text-right" for="hobi">Hobi</label>
                    <div class="col-md-4">
                        <?php
                        foreach ($hobi as $key => $val) {
                            echo '<input type="checkbox" name="hobi[]" value="' . $val . '">' . $val . '<br/>';
                        }
                        ?>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button id="daftar" name="daftar" class="btn btn-primary">Daftar</button>
                    </div>
                </div>

            </fieldset>
        </form> 
    </div>

</body>

</html>