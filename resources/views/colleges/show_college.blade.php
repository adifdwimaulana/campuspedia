<h1>{{ $college->nama_kampus }}</h1>
@foreach($faculties as $faculty)
    <h1>{{ $faculty->nama_fakultas }}</h1>
    <p>{{ $faculty->deskripsi_fakultas }}</p>
@endforeach