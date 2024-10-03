<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

    body {
        background-color: #d3f6ff;
        font-family: Arial, sans-serif;
    }
    table {
        width: 70%;
        border-collapse: collapse;
        margin: 40px auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        color: #4b879c;
        margin-bottom: 20px;
    }
    th, td {
        border: 1px solid rgb(109, 141, 186);
        padding: 12px 15px;
        text-align: left;
        font-size: 18px;
    }
    th {
        background-color: #cbe0f3;
        color: #4b879c;
        font-weight: bold;
        text-align: center;
    }
    td {
        background-color: #fcfcfc;
    }
    tr {
        transition: background-color 0.3s ease;
        cursor: pointer;
    }
    tr:hover {
        background-color: #d1f0e0;
    }
    tr:hover td {
        color: #4b879c;
    }

    .action-buttons {
        display: flex;
        justify-content: center;
        gap: 10px;
    }
    button {
        padding: 8px 14px;
        font-size: 16px;
        background-color: #9bc9d6;
        border: none;
        color: #333;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }
    button:hover {
        background-color: #71d4a1;
        transform: scale(1.05);
    }
    button:active {
        transform: scale(1.1);
    }

</style>
</head>

</head>
<body>
    <h1>Daftar Produk</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Product as $show => $product)
            <tr>
                    <td>{{ $show + $Product ->firstItem()}}</td>
                    <td>{{ $product->nama }}</td>
                    <td>{{ $product->stok }}</td>
                    <td>{{ $product->harga }}</td>
                    <td>{{ $product->deskripsi }}</td>
                    <td>
                        <div class="action-buttons">
                            <form action="/product/{{ $product->id }}/edit" method="GET">
                                <button type="submit">Edit</button>
                            </form>

                            <form action="/product/{{ $product->id }}" method="POST">
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

<nav class="d-flex justify-content-center" aria-label="Page navigation">
        {{ $Product->links() }}
    </nav>

</body>
</html>
