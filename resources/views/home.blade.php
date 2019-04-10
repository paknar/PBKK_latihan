@extends('app')

@section('title')
    Home
@endsection
@section('content')
<br><br>
<div class="col-md-2"></div>
<div class="col-md-4">
<div class="panel panel-info text-center">
<div class="panel-heading">
<h3>Mahasiswa</h3></div>
<ul class="list-group">
  <li class="list-group-item"><i class="fa fa-user fa-5x"></i></li>
  <li class="list-group-item"><a href="/mhs" class="btn btn-primary"><i class="fa fa-user"></i> DATA MAHASISWA</a></i>
</ul>
</div>
</div>
<div class="col-md-4">
    <div class="panel panel-info text-center">
        <div class="panel-heading">
            <h3>Dosen</h3>
        </div>
        <ul class="list-group">
            <li class="list-group-item"><i class="fa fa-university fa-5x"></i></li>
            <li class="list-group-item"><a href="/dosen" class="btn btn-primary"><i class="fa fa-university"></i> DATA DOSEN</a></li>
        </ul>
    </div>
</div>
<div class="col-md-2">
</div>
<div class="col-md-4">
</div>
<div class="col-md-4">
    <div class="panel panel-info text-center">
        <div class="panel-heading">
            <h3>Mata Kuliah</h3>
        </div>
        <ul class="list-group">
            <li class="list-group-item"><i class="fa fa-book fa-5x"></i></li>
            <li class="list-group-item"><a href="/matkul" class="btn btn-primary"><i class="fa fa-book"></i> DATA MATA KULIAH</a></li>
        </ul>
    </div>
</div>
@endsection
          