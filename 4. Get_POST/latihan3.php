<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center pt-2">Aplikasi Buku Digital</h3>
                    <div class="card-body">
                        <form action="latihan1.php" method="post">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="teks" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Pasword</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

                <div class="col-md-3 ">

                </div>
            </div>
        </div>
</body>

</html>