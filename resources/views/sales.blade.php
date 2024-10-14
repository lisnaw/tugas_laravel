<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
    <h1>{{ $title }}</h1>
    <p>Tanggal: {{ $date }}</p>
</div>
<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach($sales as $sale)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $sale['product'] }}</td>
            <td>{{ $sale['quantity'] }}</td>
            <td>Rp {{ number_format($sale['price'], 0, ',', '.') }}</td>
            <td>Rp {{ number_format($sale['quantity'] * $sale['price'], 0, ',', '.') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


</body>
</html>
