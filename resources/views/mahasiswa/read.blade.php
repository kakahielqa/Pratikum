<html>
    <head>
        <!-- Rqeuired meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Read Table!</title>
    </head>

<body>
<hr>
<br>

<h2> DATA MAHASISWA </h2>
<a href=/create class="btn btn-success"> Tambah data </a>
<table class="table table-striped">
    <thead class="table-dark">
    <tr> <th> NIM </th> <th> NAMA </th> <th> UMUR </th>
        <th> ALAMAT </th>
        <th> KOTA </th> <th> KELAS </th> <th> JURUSAN </th>
        <th> ACTION </th>
    </tr>
    </thead>
    @foreach ($datanya as $dt)
        <tr>
            <td> {{ $dt->nim }} </td>
            <td> {{ $dt->nama }} </td>
            <td> {{ $dt->umur }} </td>
            <td> {{ $dt->alamat }} </td>
            <td> {{ $dt->kota }} </td>
            <td> {{ $dt->kelas }} </td>
            <td> {{ $dt->jurusan }} </td>
            <td> <a href=/delete?nim={{ $dt->nim }} class="btn btn-danger" onclick="return confirm('Yakin data mau dihapus ?')"> HAPUS </a>
                <a href=/edit?nim={{ $dt->nim }} class="btn btn-primary" onclick="return confirm('Yakin data mau diedit ?')"> EDIT </a>
            </td>
        </tr>
    @endforeach
</table>
<hr>
</body>
</html>