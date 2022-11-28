<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center font-weight-blod">
            EDIT DATA MAHASISWA
        </div>
        <a href=/read class="btn btn-success"> Tampilkan data </a>
        <div class="card-body">
            <form name="add-blog-post-form" id="add-blog-post-form" method="POST" action="{{ url('store-mahasiswa') }}">
                @csrf
                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" id="nim" name="nim" class="form-control" required="" value={{ $datanya->nim }}>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" required="" value={{ $datanya->nama }}>
                </div>
                <div class="form-group">
                    <label>Umur</label>
                    <input type="number" id="umur" name="umur" class="form-control" required="" value={{ $datanya->umur }}>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" required="">
                    {{ $datanya->alamat }}
                    </textarea>
                </div>

                <div class="form-group">
                    <label>Kota</label>
                    <input type="text" id="kota" name="kota" class="form-control" required="" value={{ $datanya->kota }}>
                </div>

                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" id="kelas" name="kelas" class="form-control" required="" value={{ $datanya->kelas }}>
                </div>

                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" id="jurusan" name="jurusan" class="form-control" required="" value={{ $datanya->jurusan }}>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
</body>
</html>