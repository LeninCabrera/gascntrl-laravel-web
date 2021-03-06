<main x-data="{ showForm: false }">
    <x-jet-breadcrumbs-nav>
        <x-slot name="crumbs">
            <span class="mx-5 text-gray-500 dark:text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </span>

            <a href="{{ route('customer.module') }}" class="text-gray-600 dark:text-gray-200 hover:underline"> Cliente </a>
        </x-slot>

    </x-jet-breadcrumbs-nav>
    <div class="p-6 m-6 shadow-2xl rounded-2xl" x-show="showForm">
        <div class="mt-2">
            <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                <div class="w-64 font-bold h-6 mx-2 mt-3 text-gray-800">Datos generales</div>
                <div class="flex-1 flex flex-col md:flex-row">
                    <div class="w-full flex-1 mx-2">
                        <x-jet-input wire:model.defer="idCard" wire:loading.class="opacity-25" placeholder="*Número de cédula" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"></x-jet-input>

                    </div>
                    <div class="w-full flex-1 mx-2">
                        <x-jet-input wire:model.defer="name" wire:loading.class="opacity-25" placeholder="Nombre" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"></x-jet-input>

                    </div>
                    <div class="w-full flex-1 mx-2">
                        <x-jet-input wire:model.defer="lastName" wire:loading.class="opacity-25" placeholder="Apellido" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"></x-jet-input>

                    </div>
                    <div class="w-full flex-1 mx-2">
                        <x-jet-input wire:model.defer="address" wire:loading.class="opacity-25" placeholder="Dirección" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"></x-jet-input>

                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                <div class="w-64 font-bold h-6 mx-2 mt-3 text-gray-800">Contacto
                </div>
                <div class="flex-1">
                    <div class="flex flex-col md:flex-row">
                        <div class="w-full flex-1 mx-2">
                            <x-jet-input wire:model.defer="cellphone" wire:loading.class="opacity-25" placeholder="Teléfono" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "></x-jet-input>

                        </div>
                        <div class="w-full flex-1 mx-2">
                            <x-jet-input wire:model.defer="email" wire:loading.class="opacity-25" placeholder="email" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "></x-jet-input>

                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-end flex-col md:flex-row">
                <x-jet-button wire:click="saveNewCustomer" wire:loading.class="animate-pulse" class="text-sm  mx-2 w-32  focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
                        hover:bg-teal-700 hover:text-teal-100
                        bg-teal-100
                        text-teal-700
                        border duration-200 ease-in-out
                        border-teal-600 transition">
                    <span wire:loading.remove>Guardar</span>
                </x-jet-button>
                <br>
                <x-jet-button @click="showForm = false" wire:click="resetFilters" class="text-sm  mx-2 w-32  focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
                        hover:bg-teal-700 hover:text-teal-100
                        bg-teal-100
                        text-teal-700
                        border duration-200 ease-in-out
                        border-teal-600 transition">
                    Cancelar
                </x-jet-button>
            </div>
        </div>
    </div>
    <div class="p-6 m-6 shadow-2xl rounded-2xl">
        <div class="flex mb-4 justify-end">
            <x-jet-button class="ml-3" @click="showForm = true" x-show="!showForm">
                {{ __('Añadir nuevo') }}
            </x-jet-button>
        </div>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle d-lg-inline-block  sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <x-jet-datatable id="customersTable">
                            <x-slot name="thead">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> # </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> N° de cédula </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Nombres </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Apellidos </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Dirección </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Número de teléfono </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Email </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Acciones </th>
                                </tr>
                            </x-slot>
                            <x-slot name="tbody">
                                @foreach($customers as $customer)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap"> {{ $customer->id }} </td>
                                    <td class="px-6 py-4 whitespace-nowrap"> {{ $customer->id_Card }} </td>
                                    <td class="px-6 py-4 whitespace-nowrap"> {{ $customer->name }} </td>
                                    <td class="px-6 py-4 whitespace-nowrap"> {{ $customer->last_Name }} </td>
                                    <td class="px-6 py-4 whitespace-nowrap"> {{ $customer->address }} </td>
                                    <td class="px-6 py-4 whitespace-nowrap"> {{ $customer->cellphone }} </td>
                                    <td class="px-6 py-4 whitespace-nowrap"> {{ $customer->email }} </td>
                                    <td>
                                        <x-jet-button wire:click="updatecustomer({{ $customer->id }})" class="px-2 mb-2 py-2 rounded-full text-gray-500 bg-gray-200 font-semibold text-sm flex align-center w-max cursor-pointer active:bg-gray-900 transition duration-300 ease">
                                            Editar</x-jet-button><br>
                                        <x-jet-button wire:click="delete({{ $customer->id }})" class="px-2 mb-2 py-2 rounded-full text-gray-500 bg-red-200 font-semibold text-sm flex align-center w-max cursor-pointer active:bg-red-900 transition duration-300 ease">
                                            Eliminar</x-jet-button>
                                </tr>

                                @endforeach
                            </x-slot>
                        </x-jet-datatable><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script>
            $(document).ready(function() {

                var table = $('#customersTable').DataTable({
                        responsive: true
                    })
                    .columns.adjust()
                    .responsive.recalc();
            });

        </script>
    </x-slot>
</main>
