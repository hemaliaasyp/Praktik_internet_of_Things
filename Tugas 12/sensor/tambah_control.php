<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <title>Tambah Data Control</title>

</head>

<body>
    <div class="conteiner" style="margin-left: 300px; margin-right: 300px;">
        <h2 class="alert alert-warning text-center mt-5">Tambah Objek Control</h2>

        <form action="prosesTambah_control.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
            <div class="form-group">
                <label>ID_Control</label>
                <input type="text" class="form-control" name="id_control" id="id_control" required>
            </div>

            <div class="form-group">
                <label>Objek control</label>
                <input type="text" class="form-control" name="nama_objek_control" required>
            </div>
            <div class="mb-3">
                <label>Status</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="state" id="0" value="0">
                    <label class="form-check-label" for="0">Off</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="state" id="1" value="1">
                    <label class="form-check-label" for="1">On</label>
                </div>
            </div>
            <button type="submit" class="btn btn-success" name="simpan" value="Submit" style="margin-top: 20px;">SIMPAN</button>
            <button type="reset" class="btn btn-danger" value="Reset" style="margin-top: 20px;">RESET</button>

        </form>
    </div>

</body>

</html>