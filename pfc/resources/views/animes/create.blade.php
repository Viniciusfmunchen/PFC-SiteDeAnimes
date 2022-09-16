<x-layout title="Novo Anime">
    <form action="{{route('animes.store')}}" method="POST">
        @csrf
        <div class="row mt-3">
            <div class="form-group col-8">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group col-4">
                <label for="date" class="form-label">Data de lançamento:</label>
                <input type="date" name="date" id="date" class="form-control">
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group col-6">
                <label for="episodes" class="form-label">Quantidade de episodios:</label>
                <input type="number" name="episodes" id="episodes" class="form-control">
            </div>
            <div class="form-group col-6">
                <label for="seasons" class="form-label">Quantidade de Temporadas:</label>
                <input type="number" name="seasons" id="seasons" class="form-control">
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group col-6">
                <label for="studio" class="form-label">Estudio responsavel:</label>
                <input type="text" name="studio" id="studio" class="form-control">
            </div>
            <div class="form-group col-6">
                <label for="authors" class="form-label">Autores:</label>
                <input type="text" name="authors" id="authors" class="form-control">
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group col-12">
                <label for="synopsis" class="form-label">Sinopse: </label>
                <textarea  id="synopsis" name="synopsis" rows="3" class="form-control" style="resize: none"></textarea>
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group col-12">
                <label for="image" class="form-label">Link da Imagem:</label>
                <input type="text" name="image" id="image" class="form-control">
            </div>
        </div>
        <input type="submit" class="btn btn-success mt-3">
    </form>
</x-layout>
