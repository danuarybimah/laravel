<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Barang</title>
</head>
<body>
    <h1>Form Tambah Barang</h1>

    <form action="{{ route('barangs.store') }}" method="POST">
        @csrf
        <label>Kode:</label><br>
        <input type="text" name="kode"><br><br>

        <label>Nama Barang:</label><br>
        <input type="text" name="nama_barang"><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi"></textarea><br><br>

        <label>Harga Satuan:</label><br>
        <input type="number" step="0.01" name="harga_satuan"><br><br>

        <label>Jumlah:</label><br>
        <input type="number" name="jumlah"><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('barangs.index') }}">Kembali ke Daftar Barang</a>
</body>
</html>
