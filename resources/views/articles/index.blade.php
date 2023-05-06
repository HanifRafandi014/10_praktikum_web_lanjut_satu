@extends('layouts.app')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="row">
    <div style="margin: 0 10% 0 10%;">
        <a href="{{ route('cetak_pdf') }}" class="btn btn-success">Cetak PDF</a>
        <a href="{{ route('articles.create') }}" class="btn btn-primary" style="margin-left: 10px;">Tambah Artikel</a>
    </div>
</div><br>
<table class="table table-bordered table-hover" style="width:80%;margin: 0 auto;">
    <tr align="center">
        <th>Judul</th>
        <th>Konten</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>
    @foreach ($articles as $article)
    <tr>
        <td><a href="{{ route('articles.edit', ['article'=>$article->id]) }}">{{ $article->title  }}</a></td>
        <td>{{ $article->content }}</td>
        <td><img width="150px" src="{{asset('storage/'.$article->featured_image)}}"></td>

        <td class="col-md-2" align="center">
            <form action="{{ route('articles.destroy',$article->id) }}" method="POST">
                <a class="btn btn-primary" href="{{ route('articles.edit',$article->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection