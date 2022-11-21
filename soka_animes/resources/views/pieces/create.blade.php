<x-layout title="Adicionar Obra">
    <form action="{{ route('pieces.store') }}" method="POST">
        @csrf

    </form>
</x-layout>
