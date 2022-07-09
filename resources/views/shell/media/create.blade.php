@extends('shell.shared.layout')

@section('content')

<h2 class="page-header">Yeni Ortam Dosyası</h2>

<form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8 col-xl-9">
            <div class="form-group">
                <label>Başlık</label>
                <input type="text" name="title" class="form-control" value="Başlıksız" required>
            </div>
            <div class="form-group">
                <label>Klasör</label>
                <input type="text" name="folder" class="form-control">
            </div>
            <div class="form-group">
                <label>Ortam Dosyası</label>
                <input type="file" name="files[]" class="form-control" accept=".jpg, .jpeg, .png, .gif, .doc, .docx, .pdf, .xls, .xlsx,.ppt,.pptx,.txt,.mp4,.mp3,.mov,.svg" multiple required />
            </div>
        </div>
        <div class="col-lg-4 col-xl-3">
            <hr>
            <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
        </div>
    </div>
</form>

@endsection