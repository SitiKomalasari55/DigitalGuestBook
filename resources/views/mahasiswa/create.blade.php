<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-left my-4">Digital GuestBook</h3>
                    <h5 class="text-left"><a href="#">By SitiKomalasari ( 20110120 ) </a></h5>         
                    <hr>
                </div>

                <div class="container">
                    <h1>Tambah data</h1> 
                    <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf 
            
                    <div class="form-group">
                        <label for="nama">Nama:</label> 
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="masukkan nama"> 
                    </div> 
                    
                    <div class="form-group">
                        <label for="alamat">Alamat:</label> 
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="masukkan alamat"> 
                    </div>
                    
                    <div class="form-group"> 
                        <label for="tanggal_lahir">Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Simpan</button> 
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-md btn-success">Kembali</a> 
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>
</html>