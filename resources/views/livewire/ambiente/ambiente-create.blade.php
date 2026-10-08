<div class="mt-5">
    <form class="row g-3" wire:submit.prevent='store'>
      
        <div class="col-12">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" wire:model='nome'>
        </div>
        <div class="col-12">
            <label for="velor" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="valor" wire:model='valor'>
        </div>
        <div class="col-12">
            <label for="qtd_estoque" class="form-label">Status</label>
            <input type="text" class="form-control" id="qtd_estoque" wire:model='qtd_estoque'>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>
