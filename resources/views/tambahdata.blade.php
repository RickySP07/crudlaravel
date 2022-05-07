<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />

        <title>LatihanCrud</title>
    </head>
    <body>
        <h1 class="text-center mt-3 mb-4">Tambah Data Pegawai</h1>
        <div class="container">
            
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                         <form action="/insertdata" method="POST" enctype="multipart/form-data">
                            @csrf
                             <div class="mb-3">
                               <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                               <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                             </div>
                             <div class="mb-3">
                               <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                               <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="cowok">Cowok</option>
                                <option value="cewek">Cewek</option>
                              </select>
                             </div>
                             <div class="mb-3">
                               <label for="exampleInputEmail1" class="form-label">No Telpon</label>
                               <input type="number" name="notelpon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                             </div>
                             <div class="mb-3">
                               <label for="exampleInputEmail1" class="form-label">Masukkan Foto</label>
                               <input type="file" name="foto" class="form-control">
                             </div>
                             <button type="submit" class="btn btn-primary">Submit</button>
                           </form>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
