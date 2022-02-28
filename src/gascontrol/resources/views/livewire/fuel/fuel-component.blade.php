<!-- TODO: This modal dialog will be moved to another file after -->
<x-jet-dialog-modal wire:model="showHosesModal">
    <x-slot name="title">
        {{ __('Agregar manguera') }}
    </x-slot>

    <x-slot name="content">
        <div class="mt-4">
            
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('showHosesModal')">
            {{ __('Cancelar') }}
        </x-jet-secondary-button>

        <x-jet-button class="ml-3"
                    wire:loading.attr="disabled">
            {{ __('Agregar') }}
        </x-jet-button>
    </x-slot>
</x-jet-dialog-modal>
