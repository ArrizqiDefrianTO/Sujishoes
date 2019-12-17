<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Tambah Barang</title>
  </head>
  <body>


<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Form Tambah Barang</h1>
        </div>
    </div>


    <div class="container mt-5">
    <form action="/admin" method="post">
    @csrf

    <div class="form-group">
        <label for="nama">Nama Barang</label>
        <input type="text" class="form-control" id="nama"
        placeholder="Masukkan Nama Barang .." name="name">
    </div>

    <div class="form-group">
        <label for="color">Warna</label>
        <input type="text" class="form-control" id="color"
        placeholder="Masukkan Color ID .." name="color_id">
    </div>

    <div class="form-group">
        <label for="kategori">Kategori</label>
        <input type="text" class="form-control" id="kategori"
        placeholder="Masukkan Kategori ID" name="category_id">
    </div>

    <div class="form-group">
        <label for="desc">Deskripsi</label>
        <input type="text" class="form-control" id="desc"
        placeholder="Masukkan Deskrips ..   " name="description">
    </div>

    <div class="form-group">
    <label for="gambar">Gambar</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="image" id="gambar">
            <label class="custom-file-label" for="gambar" aria-describedby="gambar">Choose file</label>
        </div>
    <div class="input-group-append">
            <span class="input-group-text" name='image' id="gambar">Upload</span>
        </div>
        </div>

    <div class="form-group">
        <label for="price">Harga</label>
        <input type="text" class="form-control" id="price"
        placeholder="Masukkan Harga .." name="price">
    </div>

    <div class="form-group">
        <label for="weight">Berat</label>
        <input type="text" class="form-control" id="weight"
        placeholder="Masukkan Harga .." name="weight">
    </div>


    <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>

   

</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
