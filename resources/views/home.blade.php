@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> -->
                <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-left my-4">Digital GuestBook</h3>
                    <h5 class="text-left"><a href="#">By Siti Komalasari ( 20110120 ) </a></h5>         
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        @if(auth()->user()->roles == 'admin')
                            <a href="{{ route('mahasiswa.create') }}" class="btn btn-md btn-success mb-3">Tambah Data</a>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">No Telepon</th>
                                <th scope="col">Alamat</th>
                                @if(auth()->user()->roles == 'admin')
                                    <th scope="col">Aksi</th>
                                @endif
                              </tr>
                            </thead>
                            <tbody>
                                @php $no = 1 @endphp
                                @foreach ($posts as $p)
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->alamat }}</td>
                                    <td>{{ $p->tanggal_lahir }}</td>
                                    @if(auth()->user()->roles == 'admin')
                                        <td>
                                            <!-- Tombol Edit -->
                                            <a href="{{ route('mahasiswa.edit', ['mahasiswa' => $p->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                                            
                                            <!-- Tombol Hapus -->
                                            <form action="{{ route('mahasiswa.destroy', ['mahasiswa' => $p->id]) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    @endif
                                    

                                </tbody>
                            @endforeach
                          </table>  
                    </div>
                    @if (session('success'))
                        <div class="alert alert-primary">success</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
</div>
@endsection
