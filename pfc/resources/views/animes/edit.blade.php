<x-layout title="Editar Anime">
    <form action="{{route('animes.update', $anime->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mt-3">
            <div class="form-group col-8">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$anime->name}}">
            </div>
            <div class="form-group col-4">
                <label for="date" class="form-label">Data de lançamento:</label>
                <input type="date" name="date" id="date" class="form-control" value="{{$anime->date}}">
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group col-6">
                <label for="episodes" class="form-label">Quantidade de episodios:</label>
                <input type="number" name="episodes" id="episodes" class="form-control" value="{{$anime->episodes}}">
            </div>
            <div class="form-group col-6">
                <label for="seasons" class="form-label">Quantidade de Temporadas:</label>
                <input type="number" name="seasons" id="seasons" class="form-control" value="{{$anime->seasons}}">
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group col-6">
                <label for="studio" class="form-label">Estudio responsavel:</label>
                <input type="text" name="studio" id="studio" class="form-control" value="{{$anime->studio}}">
            </div>
            <div class="form-group col-6">
                <label for="authors" class="form-label">Autores:</label>
                <input type="text" name="authors" id="authors" class="form-control" value="{{$anime->authors}}">
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group col-12">
                <label for="synopsis" class="form-label">Sinopse: </label>
                <textarea  id="synopsis" name="synopsis" rows="3" class="form-control" style="resize: none">{{$anime->synopsis}}</textarea>
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group col-12">
                <label for="image" class="form-label">Link da Imagem:</label>
                <input type="text" name="image" id="image" class="form-control" value="{{$anime->image}}">
            </div>
        </div>
        <input type="submit" class="btn btn-success mt-3">
    </form>
</x-layout>
