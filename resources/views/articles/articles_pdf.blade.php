<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>

<body>
    <style>
        <?php include(public_path() . '/css/bootstrap.min.css'); ?>
    </style>
    <center>
        <h4>Laporan Artikel</h4>
    </center>

    <table class='table table-striped table-bordered' style="width:95%;margin: 
    0 auto;">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Isi</th>
            <th>Gambar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $a)
        <tr>
            <td>{{ $a->title }}</td>
            <td>{{ $a->content }}</td>
            <td><img width="100px" src="{{ storage_path('app/public/'.$a->featured_image) }}"></td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>

</html>