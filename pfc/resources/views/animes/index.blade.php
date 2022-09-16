<x-layout title="Listagem animes">

        <a href="{{ route('animes.create')}}" class="btn btn-warning mt-4 mb-4">Criar anime</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Capa</th>
            <th scope="col">Nome</th>
            <th scope="col">Lancamento</th>
            <th scope="col">Qt. Eps</th>
            <th scope="col">Qt. Temps</th>
            <th scope="col">Estudios</th>
            <th scope="col">Autores</th>
            <th scope="col">Sinopse</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($animes as $anime)
        <tr style="max-height: 100px">

                <th><img src="{{$anime->image}}" alt="{{$anime->name}}"></th>
                <th>{{$anime->name}}</th>
                <th>{{$anime->date}}</th>
                <th>{{$anime->episodes}}</th>
                <th>{{$anime->seasons}}</th>
                <th>{{$anime->studio}}</th>
                <th>{{$anime->authors}}</th>
                <th>{{$anime->synopsis}}</th>
                <th><a href="{{route('animes.edit', $anime->id)}}" class="btn btn-primary btn-sm" style="height: 30px; width: 30px">✎</a></th>
                <th><form action="{{route('animes.destroy', $anime->id)}}" method="POST" class="ms-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sn" style="width: 30px; height: 30px">
                        🗑
                    </button>
                </form></th>

            @endforeach
        </tr>
        </tbody>
    </table>
</x-layout>
