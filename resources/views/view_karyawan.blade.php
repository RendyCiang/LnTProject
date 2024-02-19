<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset ('css/home.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Data Karyawan</a>
        </div>
    </nav>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Alamat</th>
      <th scope="col">Nomor</th>
    </tr>
  </thead>
  <tbody>
    @foreach($KaryawanData as $data)
    <tr>
        <th scope="row">{{$data -> id}}</th>
        <td>{{$data -> nama_karyawan}}</td>
        <td>{{$data -> umur_karyawan}}</td>
        <td>{{$data -> alamat_karyawan}}</td>
        <td>{{$data -> nomor_karyawan}}</td>
        <td>
            <button class="btn btn-light">
            <a href="/edit_karyawan/{{$data->id}}">Edit</a>
            <form action="/delete_karyawan/{{ $data->id }}" method="POST">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-dark">Delete</button>            </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
        
        <a href="/add"class="btn btn-primary" href="#" role="button">Tambah</a>
    </div>
</body>

</html>