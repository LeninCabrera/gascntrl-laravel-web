<div>
    <livewire:home-module-component >
    <x-jet-dialog-modal wire:model="showTankModal">
        <x-slot name="title">
            {{ __('Tanques de combustibles') }}
        </x-slot>

        <x-slot name="content">
            <div class="mt-4" x-data="{ editMode: false }">
                <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                    <div class="flex-1 flex flex-col md:flex-row">
                        <div class="w-full flex-1 p-2">
                            <x-jet-input wire:model.defer="tank.description"  placeholder="Descripcion" class="flex text-ellipsis border rounded my-2 p-2 px-2 uppercase appearance-none outline-none w-full text-gray-800" />
                        </div>
                        <div class="w-full flex-1 p-2">
                            <x-jet-input wire:model.defer="tank.capacity"  placeholder="Capacidad" class="flex text-ellipsis border rounded my-2 p-2 px-2 uppercase appearance-none outline-none w-full text-gray-800" />
                        </div>
                        <div class="w-full flex-1 p-2">
                            <x-jet-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                            COMBUSTIBLE
                                        </button>
                                    </span>
                                </x-slot>
                                <x-slot name="content">
                                    <div class="w-60">
                                        @foreach ($fuels as $fuel)
                                        <div wire:click="setFuel({{ $fuel->id }})" class="block px-4 py-2 text-xs text-gray-400 uppercase">
                                            {{ $fuel->type }}
                                        </div>
                                        @endforeach
                                    </div>
                                </x-slot>
                            </x-jet-dropdown>
                        </div>
                        <div class="w-full flex-1 p-2 py-4">
                            <button wire:click="saveNewTank" class="w-full md:w-3/7 text-sm focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-teal-700 hover:text-teal-100 bg-teal-100 text-teal-700 border duration-200 ease-in-out border-teal-600 transition"> 
                              AGREGAR 
                            </button>
                        </div>
                    </div>
                </div>
                <x-jet-single-table>
                    <x-slot name="thead">
                        <tr>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Descripción</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Capacidad</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Stock Actual</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Editar</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Eliminar</th>
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        @foreach ($tanks as $tank)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-500 uppercase"> {{ $tank->description }} </div>
                            </td>
    
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-500"> {{ $tank->capacity ?? '---' }} </div>
                            </td>
    
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-500"> {{ $tank->existence ?? '---' }} </div>
                            </td>
    
                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                <a x-show="!editMode" @click="editMode = true" class="cursor-pointer">
                                    <x-jet-icon.application-edit />
                                </a>
                                <a x-show="editMode" @click="editMode = false" class="cursor-pointer">
                                    <x-jet-icon.application-check />
                                </a>
                            </td>
                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                <a wire:click="deleteFuelSelectedById({{ $tank->id }})" class="cursor-pointer">
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
        </x-slot>
    </x-jet-dialog-modal>
</div>