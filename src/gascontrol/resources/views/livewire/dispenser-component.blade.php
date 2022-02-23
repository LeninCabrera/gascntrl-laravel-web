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
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block w-1/2 sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <x-jet-datatable id="dispensersTable">
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
                                    <span class="px-2 mb-4 py-2 rounded-full text-gray-500 bg-gray-200 font-semibold text-sm flex align-center w-max cursor-pointer active:bg-gray-900 transition duration-300 ease">
                                        Manguera #1
                                    </span>
                                    <span class="px-2 mb-4 py-2 rounded-full text-gray-500 bg-gray-200 font-semibold text-sm flex align-center w-max cursor-pointer active:bg-gray-900 transition duration-300 ease">
                                        Manguera #2
                                    </span>
                                    <span class="px-2 mb-4 py-2 rounded-full text-gray-500 bg-gray-200 font-semibold text-sm flex align-center w-max cursor-pointer active:bg-gray-900 transition duration-300 ease">
                                        Manguera #5
                                    </span>
                                    <span class="px-2 mb-4 py-2 rounded-full text-gray-500 bg-gray-200 font-semibold text-sm flex align-center w-max cursor-pointer active:bg-gray-900 transition duration-300 ease">
                                        Manguera #7
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
                        responsive: true
                    })
                    .columns.adjust()
                    .responsive.recalc();
            });
        </script>
    </x-slot>
</main>
