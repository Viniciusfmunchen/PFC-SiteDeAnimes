<x-layout title="Listagem animes">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Lancamento</th>
            <th scope="col">Episodios</th>
            <th scope="col">Temporadas</th>
            <th scope="col">Estudio</th>
            <th scope="col">Autores</th>
            <th scope="col">Sinopse</th>
            <th scope="col">Capa</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $animes as $anime)
        <tr>
            <th scope="row">{{$anime->id}}</th>
            <td>{{$anime->name}}</td>
            <td>{{$anime->date}}</td>
            <td>{{$anime->episodes}}</td>
            <td>{{$anime->seasons}}</td>
            <td>{{$anime->studio}}</td>
            <td>{{$anime->authors}}</td>
            <td>{{$anime->synopsis}}</td>
            <td><img src="{{url('storage/{$anime->image}')}}" alt="{{$anime->name}}"></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>
