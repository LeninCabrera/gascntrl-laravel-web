<main>
    <!-- Breadcrumbs nav -->
    <x-jet-breadcrumbs-nav>
        <x-slot name="crumbs">
            <span class="mx-5 text-gray-500 dark:text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </span>
        
            <a href="{{ route('dispenser.module') }}" class="text-gray-600 hover:underline"> Dispensadores </a>
        </x-slot>
    </x-jet-breadcrumbs-nav>

    <div class="flex justify-center m-4">
        <div class="w-1/2 flex justify-end px-16">
            <x-jet-button class="ml-3">
                {{ __('Añadir nuevo') }}
            </x-jet-button>
        </div>
    </div>

    <div class="flex justify-center">
        <div class="w-1/2 overflow-hidden">
            <div class="m-6 mt-0 sm:px-6 lg:px-8">
                <div class="shadow border-b border-gray-200 sm:rounded-lg bg-scroll bg-contain overflow-auto h-80">
                    <x-jet-datatable id="dispensersTable" class="min-w-full">
                        <x-slot name="thead">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> N° de Dispensador </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Descripción </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Mangueras </th>
                            </tr>
                        </x-slot>
                        <x-slot name="tbody">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900 text-center"> 1 </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <x-jet-input type="text" value="DISPENSADOR #1" class="block text-center mt-1 w-full" />
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="block flex m-4 justify-center">
                                        <x-jet-label  value="{{ __('no tienes ninguna manguera asignada a este dispensador') }}" />
                                    </div>
                                    <!-- <span class="px-2 mb-4 py-2 rounded-full text-gray-500 bg-gray-200 font-semibold text-sm flex align-center w-max cursor-pointer active:bg-gray-900 transition duration-300 ease">
                                        
                                    </span>-->
                                    <span class="px-2 mb-4 py-5 rounded-full text-gray-500 bg-gray-200 font-semibold text-sm flex align-center w-max cursor-pointer active:bg-gray-900 transition duration-300 ease">
                                        +
                                    </span>
                                </td>
                            </tr>
                        </x-slot>
                    </x-jet-datatable>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script>
            $(document).ready(function() {
        
                var table = $('#dispensersTable').DataTable({
                        "responsive": true,
                        "paging": false,
                        "searching": false,
                        "bInfo" : false
                    });
            });
        </script>
    </x-slot>
</main>
