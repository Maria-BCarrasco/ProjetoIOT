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
                <th scope="col">Ambiente</th>
                <th scope="col">Código</th>
                <th scope="col">Tipo</th>
                <th scope="col">Descrição</th>
                <th scope="col">Status</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sensors as $s)
                <tr>
                    <th scope="row">{{ $s->ambiente_id}}</th>
                    <td>{{ $s->codigo }}</td>
                    <td>{{ $s->tipo }}</td>
                    <td>{{ $s->descricao }}</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="switchCheckChecked"
                               {{ $s->status ? 'checked':''}}>
                            <label class="form-check-label" for="switchCheckChecked"></label>
                        </div>
                    </td>
                    <td>
                        <a href="{{ route('sensor.edit', ['id' => $s->id]) }}"
                            class="btn btn-sm bg-primary-subtle">Editar</a>
                        <button wire:click='delete({{ $s->id }})' class="btn btn-sm btn-primary">Excluir</button>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
