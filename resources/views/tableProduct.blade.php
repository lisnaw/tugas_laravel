<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Produk</title>
    <style>

    body{
        background-color: #bcd7e0
    }
        table {
            width: 70%;
            border-collapse: collapse;
            margin: auto;
        }
        h1 {
            text-align: center;
            color: #4b879c;
        }
        th, td {
            border: 1px solid rgb(37, 78, 135);
            padding: 4px;
            text-align: left;
            font-size: 20px;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        button {
            padding: 8px 12px;
            font-size: 16px;
            color: #000000;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Daftar Produk</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Product as $Product)
                <tr>
                    <td>{{ $Product->nama }}</td>
                    <td>{{ $Product->stok }}</td>
                    <td>{{ $Product->harga }}</td>
                    <td>{{ $Product->deskripsi }}</td>
                    <td>
                        <!-- Bungkus kedua tombol dalam div dengan kelas "action-buttons" -->
                        <div class="action-buttons">
                            <form action="/product/{{ $Product->id }}/edit" method="GET">
                                <button type="submit">Edit</button>
                            </form>

                            <form action="/product/{{ $Product->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
