@if(count($colleges) > 0)
    @foreach ($colleges as $college)
        <h1>{{ $college->nama_kampus }}</h1>
        <img style="width: 40; height: 40;" src="/storage/public/logo_kampus/{{ $college->logo_kampus }}">   
    @endforeach
@endif