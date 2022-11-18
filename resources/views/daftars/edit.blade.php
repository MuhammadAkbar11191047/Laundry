<form action="/daftars/{{$daftar->id}}" method="POST">
    @method('PUT')
    @csrf
    nama : <input type="text" name="nama" value="{{$daftar->nama}}"><br>
    alamat : <input type="text" name="alamat" value="{{$daftar->alamat}}"> <br>
    no telp : <input type="text" name="telp" value="{{$daftar->telp}}"><br>
    jumlah : <input type="text" name="jumlah" value="{{$daftar->jumlah}}"><br>
    kategori : <input type="text" name="kategori" value="{{$daftar->kategori}}"><br>

    <input type="submit" value="save">
</form>