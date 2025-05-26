<div class="card">
    <div class="mb-4">
        <x-label class="mb-1">
            Código
        </x-label>

        <x-input 
        wire:model="producto.sku" 
        class="w-full" 
        placeholder="Por favor ingrese el código del producto" />
    </div>

    <div class="mb-4">
        <x-label class="mb-1">
            Nombre
        </x-label>

        <x-input 
        wire:model="producto.nombre" 
        class="w-full" 
        placeholder="Por favor ingrese el nombre del producto" />
    </div>

        <div class="mb-4">
        <x-label class="mb-1">
            Descripción
        </x-label>

        <x-textarea
        wire:model="producto.descripcion" 
        class="w-full" 
        placeholder="Por favor ingrese descripción del producto" />

    </div>

</div>
