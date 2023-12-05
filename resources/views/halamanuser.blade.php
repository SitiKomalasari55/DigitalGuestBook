<!-- resources/views/products/index.blade.php -->
                    
@extends('layouts.app')

@section('content')
<div class="container" style="background-color: skyblue;">
    <h1>Dashboard User</h1>
    <p>
        <a href="#" style="text-decoration: none;">Tambah</a>
        &nbsp;
        <a href="#" style="text-decoration: none;">Edit</a>
        &nbsp;
        <a href="#" style="text-decoration: none;">Hapus</a>
    </p>
    <li>
        <ul>
        @foreach ($products as $product)
            <li>{{ $product['name'] }} - {{ $product['price'] }}</li>
        @endforeach

        </ul>
    </li>
</div>
@endsection