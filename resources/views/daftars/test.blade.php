<h1> list nama</h1>
<table>
    <thead>
        <tr>
            <th>nama</th>
            <th>alamat</th>
            <th>no telp</th>
            <th>jumlah</th>
            <th>kategori</th>
        </tr>
    </thead>
    <tbody>
        @foreach($daftars as $daftar)
            <tr>
                <td>{{$daftar->nama}}</td>
                <td>{{$daftar->alamat}}</td>
                <td>{{$daftar->telp}}</td>
                <td>{{$daftar->jumlah}}</td>
                <td>{{$daftar->kategori}}</td>
                <td>
                    <a href="/daftars/{{$daftar->id}}/edit">Edit</a>
                    <form action="/daftar/{{$daftar->id}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="hapus">
                    </form>
                </td>
            </tr>
        @endforeach
        
    </tbody>
    <a href="/daftars/create">create</a>
</table>