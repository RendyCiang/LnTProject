<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Karyawan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
         body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: green; /* Warna latar belakang selain form */
            color: white; /* Warna teks untuk kontras */
        }
        form {
            width: 50%; /* Sesuaikan panjang form */
            margin-bottom: 20px;
            border: 1px solid white; /* Tambahkan border pada form */
            padding: 20px; /* Tambahkan padding agar isi form tidak terlalu dekat dengan border */
            background-color: #343a40; /* Warna latar belakang form */
            border-radius: 10px; /* Tambahkan border-radius untuk membuat sudut form lebih bulat */
        }
        .form-nama_karyawan,
        .form-umur_karyawan,
        .form-alamat_karyawan {
            margin-bottom: 15px;
        }
        label {
            color: pink;
        }
        input {
            width: 100%; /* Panjang input menyesuaikan dengan panjang form */
            padding: 5px; /* Tambahkan padding agar isi input tidak terlalu dekat dengan border */
            box-sizing: border-box; /* Termasuk padding dan border dalam lebar dan tinggi total */
        }
        button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form method="POST" action="/update_karyawan/{{$karyawanData->id}}">
        @method('patch')
        @csrf
        <div class="form-nama_karyawan">
            <div class="nama_karyawan">
                <label for="nama_karyawan">Nama_Karyawan</label>
            </div>    
            <input type ="text" name = "nama_karyawan" id="nama_karyawan" value="{{old('nama_karyawan')}}">
            @error('nama_karyawan')
                <p>{{$message}}</p>
            @enderror
        </div>
        
        <div class="form-umur_karyawan">
            <div class="umur_karyawan">
                <label for="umur_karyawan">Umur</label>
            </div>
                <input type="number" name= "umur_karyawan" id="umur_karyawan" placeholder="Contoh : 18" value="{{old('umur_karyawan')}}">
                @error('umur_karyawan')
                    <p>{{$message}}</p>
                @enderror
        </div>
        
        <div class="form-alamat_karyawan">
            <label for="alamat_karyawan">Alamat</label>
            <div class="alamat_karyawan">
                <input type="text" name = "alamat_karyawan" id="alamat_karyawan" placeholder="Masukan Alamat Karyawan" value="{{old('alamat_karyawan')}}">
                @error('alamat_karyawan')
                    <p>{{$message}}</p>
                @enderror
            </div>
        </div>
        
        <div class="form-nomor_karyawan">
            <label for="nomor_karyawan">Nomor Telp</label>
            <div class="nomor_karyawan">
                <input type="text" name = "nomor_karyawan" id="nomor_karyawan" placeholder="Masukan Alamat Karyawan" value="{{old('nomor_karyawan')}}">
                @error('nomor_karyawan')
                    <p>{{$message}}</p>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</body>
</html>