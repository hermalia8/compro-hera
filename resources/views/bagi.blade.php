<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagi-bagian</title>

</head>

<body>
    <h3>Matematika Sederhana</h3>
    <form action="{{ route ('bagi.action') }}" method="post">
        @csrf
        <label for="">Angka 1</label>
        <input type="text" placeholder="Masukkan angka" name="angka1" required>
        <br><br>
        <label for="">Angka 2</label>
        <input type="text" placeholder="Masukkan angka" name="angka2" required>
        <br><br>
        <button>Jumlahkan</button>
    </form>

    @if(isset($hasil))
    <hr>
    <h2>Jumlahnya adalah : {{ $hasil ?? 0 }}</h2>
    @endif
</body>

</html>