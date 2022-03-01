<main>
    <!-- Breadcrumbs nav -->
    <x-jet-breadcrumbs-nav>
        <x-slot name="crumbs">
            <span class="mx-5 text-gray-500 dark:text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </span>

            <a href="{{ route('provider.module') }}" class="text-gray-600 dark:text-gray-200 hover:underline"> Provider </a>
        </x-slot>

    </x-jet-breadcrumbs-nav>
    <!-- component -->
    <div class="p-5">
        <div class="mt-2">
            <form>
                <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                    <div class="w-64 font-bold h-6 mx-2 mt-3 text-gray-800">Datos generales</div>
                    <div class="flex-1 flex flex-col md:flex-row">
                        <div class="w-full flex-1 mx-2">
                            <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                <x-jet-input wire:model="companyName" placeholder="*Nombre Compañia" class="p-1 px-2 appearance-none outline-none w-full text-gray-800" required></x-jet-input>
                            </div>
                        </div>
                        <div class="w-full flex-1 mx-2">
                            <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                <x-jet-input wire:model="seller" placeholder="Vendedor" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"></x-jet-input>
                            </div>
                        </div>
                        <div class="w-full flex-1 mx-2">
                            <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                <x-jet-input wire:model="address" placeholder="Dirección" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"></x-jet-input>
                            </div>
                        </div>
                        <div class="w-full flex-1 mx-2">
                            <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                <x-jet-input wire:model="town" placeholder="Ciudad" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"></x-jet-input>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                    <div class="w-64 font-bold h-6 mx-2 mt-3 text-gray-800">Contacto
                    </div>
                    <div class="flex-1">
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full flex-1 mx-2">
                                <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                    <x-jet-input wire:model="conventionalTelephone" placeholder="Teléfono convencional" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "></x-jet-input>
                                </div>
                            </div>
                            <div class="w-full flex-1 mx-2">
                                <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                    <x-jet-input wire:model="cellphone" placeholder="Teléfono celular" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "></x-jet-input>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                    <div class="w-64 font-bold h-6 mx-2 mt-3 text-gray-800">
                        Datos legales
                    </div>
                    <div class="flex-1 flex flex-col md:flex-row">
                        <div class="w-full flex-1 mx-2">
                            <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                <x-jet-input wire:model="rucNumber" class="p-1 px-2 appearance-none outline-none w-full text-gray-800" placeholder="Número RUC"></x-jet-input>
                            </div>
                        </div>
                        <div class="w-full flex-1 mx-2">
                            <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                <x-jet-input wire:model="dgiRegistration" placeholder="Registro DGI" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"></x-jet-input>
                            </div>
                        </div>
                        <div class="w-full flex-1 mx-2">
                            <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                <x-jet-input wire:model="lineBussiness" placeholder="Giro de la empresa" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "></x-jet-input>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="flex-6 flex flex-col md:flex-row">
                        <x-jet-button wire:click="saveNewProvider()" class="text-sm  mx-2 w-32  focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
                            hover:bg-teal-700 hover:text-teal-100
                            bg-teal-100
                            text-teal-700
                            border duration-200 ease-in-out
                            border-teal-600 transition">Guardar
                        </x-jet-button>
                        <br>
                        <x-jet-button wire:click="cleaninput()" class="text-sm  mx-2 w-32  focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
                            hover:bg-teal-700 hover:text-teal-100
                            bg-teal-100
                            text-teal-700
                            border duration-200 ease-in-out
                            border-teal-600 transition">Cancelar
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle d-lg-inline-block  sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <x-jet-datatable id="providersTable">
                        <x-slot name="thead">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> # </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Empresa </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Vendedor </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Dirección </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Ciudad </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Teléfono </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Celular </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> RUC </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> DGI </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Giro empresarial </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Acciones </th>
                            </tr>
                        </x-slot>
                        <x-slot name="tbody">
                            @foreach($providers as $provider)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap"> {{ $provider->idCard }} </td>
                                <td class="px-6 py-4 whitespace-nowrap"> {{ $provider->companyName }} </td>
                                <td class="px-6 py-4 whitespace-nowrap"> {{ $provider->seller }} </td>
                                <td class="px-6 py-4 whitespace-nowrap"> {{ $provider->address }} </td>
                                <td class="px-6 py-4 whitespace-nowrap"> {{ $provider->town }} </td>
                                <td class="px-6 py-4 whitespace-nowrap"> {{ $provider->conventionalTelephone }} </td>
                                <td class="px-6 py-4 whitespace-nowrap"> {{ $provider->cellphone }} </td>
                                <td class="px-6 py-4 whitespace-nowrap"> {{ $provider->rucNumber }} </td>
                                <td class="px-6 py-4 whitespace-nowrap"> {{ $provider->dgiRegistration }} </td>
                                <td class="px-6 py-4 whitespace-nowrap"> {{ $provider->lineBussiness }} </td>
                                <td>
                                    <x-jet-button wire:click="updateProvider({{ $provider->id }})" class="px-2 mb-2 py-2 rounded-full text-gray-500 bg-gray-200 font-semibold text-sm flex align-center w-max cursor-pointer active:bg-gray-900 transition duration-300 ease">
                                        Editar</x-jet-button><br>
                                    <x-jet-button wire:click="delete({{ $provider->id }})" class="px-2 mb-2 py-2 rounded-full text-gray-500 bg-gray-200 font-semibold text-sm flex align-center w-max cursor-pointer active:bg-red-900 transition duration-300 ease">
                                        Eliminar</x-jet-button>
                            </tr>

                            @endforeach
                        </x-slot>
                    </x-jet-datatable><br>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script>
            $(document).ready(function() {

                var table = $('#providersTable').DataTable({
                        responsive: true
                    })
                    .columns.adjust()
                    .responsive.recalc();
            });

        </script>
    </x-slot>
</main>
