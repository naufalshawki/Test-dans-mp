<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Job</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="container">
    <h2 class="mt-4 mb-4">Halaman {{$page}}</h2>
    <h4>Ada {{$jumlah}} Total Pekerjaan</h4>
<center>
        @for($i = 1; $i<=$loop; $i++)
        @if($i==$page)
      <a href="{{$i}}" style="color:blue; font-size:20px;">{{ $i }}</a>
      @else
    <a href="{{$i}}" >{{ $i }}</a>
    @endif
      @endfor
</center>
    <table id="data_user" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Tipe Pekerjaan</th>
                <th>Nama Perusahaan</th>
                <th>Lokasi</th>
                <th>Jabatan/Posisi</th>
                <th>URL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($response as $item)
            <tr>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->company}}</td>
                    <td>{{ $item->location}}</td>
                    <td>{{ $item->title}}</td>
                    <td><a href="{{$item->url}}" target="_blank">Link</a></td>
                </tr>
            @endforeach

    </table>
    <center>
</center>
    <script>
    $(document).ready(function() {
    $('#data_user').DataTable();
} );
</script>
</body>
</html>
