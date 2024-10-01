<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Produk</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid rgb(181, 114, 114);
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Daftar Produk</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>stok</th>
                <th>harga</th>
                <th>Deskripsi</th>
                <th>created_at</th> <!-- Kolom untuk created_at -->
                <th>updated_at</th> <!-- Kolom untuk updated_at -->
            </tr>
        </thead>
        <tbody>
            @foreach ($Product as $product) <!-- Pastikan variabel tidak memiliki nama yang sama dengan model -->
                <tr>
                    <td>{{ $product->id }}</td> <!-- Tampilkan ID produk -->
                    <td>{{ $product->nama }}</td>
                    <td>{{ $product->stok }}</td>
                    <td>{{ $product->harga }}</td>
                    <td>{{ $product->deskripsi }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
