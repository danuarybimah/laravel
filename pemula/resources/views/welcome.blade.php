<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Form Tambah Barang</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('barangs.store') }}" method="POST">
        @csrf
        <label>Kode:</label><br>
        <input type="text" name="kode" value="{{ old('kode') }}"><br><br>

        <label>Nama Barang:</label><br>
        <input type="text" name="nama_barang" value="{{ old('nama_barang') }}"><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi">{{ old('deskripsi') }}</textarea><br><br>

        <label>Harga Satuan:</label><br>
        <input type="number" step="0.01" name="harga_satuan" value="{{ old('harga_satuan') }}"><br><br>

        <label>Jumlah:</label><br>
        <input type="number" name="jumlah" value="{{ old('jumlah') }}"><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('barangs.index') }}">Kembali ke Daftar Barang</a>
</body>
</html>
