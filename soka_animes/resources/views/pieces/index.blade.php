<x-layout title="Lista Obras">
    <h1>Listagem de Animes e Mangas: </h1>
    <a href="{{route('pieces.create')}}">Adicionar</a>
    <table>
        <tr>
            <th>Nome</th>
            <th>Lancamento</th>
            <th>sinopse</th>
            <th>capitulos/episodios</th>
            <th>status</th>
            <th>autor</th>
            <th>tipo</th>
        </tr>
        @foreach($pieces as $piece)
            <tr>
                <td>{{$piece->name}}</td>
                <td>{{$piece->realease_date}}</td>
                <td>{{$piece->synopsis}}</td>
                <td>{{$piece->chapters}}</td>
                <td>{{$piece->status}}</td>
                <td>{{$piece->author}}</td>
                <td>{{$piece->type}}</td>
            </tr>
        @endforeach
    </table>
</x-layout>
