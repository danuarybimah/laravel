<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Daftar Barang</h1>
    <a href="{{ route('barangs.create') }}">Tambah Barang</a>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Harga Satuan</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @forelse($barangs as $barang)
                <tr>
                    <td>{{ $barang->kode }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->deskripsi }}</td>
                    <td>{{ $barang->harga_satuan }}</td>
                    <td>{{ $barang->jumlah }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Tidak ada data barang.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
