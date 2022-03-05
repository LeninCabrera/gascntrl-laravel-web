<div>
    <livewire:home-module-component >
    <x-jet-dialog-modal wire:model="showFuelModal">
        <x-slot name="title">
            {{ __('Combustible') }}
        </x-slot>

        <x-slot name="content">
            <div class="mt-4" x-data="{ editMode: false }">
                <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                    <div class="flex-1 flex flex-col md:flex-row">
                        <div class="w-full flex-1 p-2">
                            <x-jet-input wire:model.defer="fuel.type" name="type" placeholder="Combustible" class="flex text-ellipsis border rounded my-2 p-2 px-2 uppercase appearance-none outline-none w-full text-gray-800" />
                        </div>
                        <div class="w-full flex-1 p-2 py-4">
                            <x-jet-button wire:click="saveNewFuel" class="w-full md:w-3/6 lg:w-3/6 text-sm focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-teal-700 hover:text-teal-100 bg-teal-100 text-teal-700 border duration-200 ease-in-out border-teal-600 transition"> 
                                AGREGAR 
                            </x-jet-button>
                        </div>
                    </div>
                </div>
                <x-jet-single-table>
                    <x-slot name="thead">
                        <tr>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Tipo de combustible</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Precio actual</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Costo actual</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Editar</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Eliminar</th>
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        @foreach ($fuels as $fuel)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-500 uppercase"> {{ $fuel->type }} </div>
                            </td>
    
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-500"> {{ $fuel->price ?? '---' }} </div>
                            </td>
    
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-500"> {{ $fuel->cost ?? '---' }} </div>
                            </td>
    
                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                <a x-show="!editMode" wire:click="editFuelSelectedById({{ $fuel->id }})" @click="editMode = true" class="cursor-pointer">
                                    <x-jet-icon.application-edit />
                                </a>
                                <a x-show="editMode" wire:click="editFuelSelectedById({{ $fuel->id }})" @click="editMode = false" class="cursor-pointer">
                                    <x-jet-icon.application-check />
                                </a>
                            </td>
                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                <a wire:click="deleteFuelSelectedById({{ $fuel->id }})" class="cursor-pointer">
                                    <x-jet-icon.application-trash />
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </x-slot>
                </x-jet-single-table>
            </div>
        </x-slot>

        <x-slot name="footer">
            <span class="inline-flex px-2 text-xs mt-5 font-semibold leading-5 text-blue-500 bg-blue-100 rounded-full">
                El precio y el costo del combustible debe actualizarse desde el modulo de configuraciones.
            </span>
        </x-slot>
    </x-jet-dialog-modal>
</div>
