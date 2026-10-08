<div class="mt-5">

    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3">
        <input type="text" wire:model.live='search' placeholder="Pesquisar..." class="form-control">
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Status</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ambientes as $a)
                <tr>
                    <th scope="row">{{ $a->id }}</th>
                    <td>{{ $a->nome }}</td>
                    <td>{{ $a->descricao }}</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="switchCheckChecked"
                             id="status {{$sensor->id}}"  wire:click="status({{$sensor->id}})" @checked($sensor->status)>
                            <label class="form-check-label" for="switchCheckChecked"></label>
                        </div>
                    </td>
                    <td>
                        <a href="{{ route('ambiente.edit', ['id' => $a->id]) }}"
                            class="btn btn-sm bg-primary-subtle">Editar</a>
                        <button wire:click='delete({{ $a->id }})' class="btn btn-sm btn-primary">Excluir</button>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
