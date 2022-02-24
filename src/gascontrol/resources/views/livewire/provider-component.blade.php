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
            <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                <div class="w-64 font-bold h-6 mx-2 mt-3 text-gray-800">Datos generales</div>
                <div class="flex-1 flex flex-col md:flex-row">
                    <div class="w-full flex-1 mx-2">
                        <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                            <input placeholder="Nombre Compañia" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "> </div>
                    </div>
                    <div class="w-full flex-1 mx-2">
                        <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                            <input placeholder="Vendedor" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "> </div>
                    </div>
                    <div class="w-full flex-1 mx-2">
                        <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                            <input placeholder="Dirección" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "> </div>
                    </div>
                    <div class="w-full flex-1 mx-2">
                        <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                            <input placeholder="Ciudad" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "> </div>
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
                                <input placeholder="Teléfono convencional" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "> </div>
                        </div>
                        <div class="w-full flex-1 mx-2">
                            <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                                <input placeholder="Teléfono celular" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row border-b border-gray-200 pb-4 mb-4">
                <div class="w-64 font-bold h-6 mx-2 mt-3 text-gray-800">Datos legales</div>
                <div class="flex-1 flex flex-col md:flex-row">
                    <div class="w-full flex-1 mx-2">
                        <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                            <input placeholder="Numero RUC" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "> </div>
                    </div>
                    <div class="w-full flex-1 mx-2">
                        <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                            <input placeholder="Registro DGI" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "> </div>
                    </div>
                    <div class="w-full flex-1 mx-2">
                        <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                            <input placeholder="Giro de la empresa" class="p-1 px-2 appearance-none outline-none w-full text-gray-800 "> </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="w-64 mx-2 font-bold h-6 mt-3 text-gray-800">

                </div>
                <div class="flex-6 flex flex-col md:flex-row">
                    <button class="text-sm  mx-2 w-32  focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
                        hover:bg-teal-700 hover:text-teal-100
                        bg-teal-100
                        text-teal-700
                        border duration-200 ease-in-out
                        border-teal-600 transition">Guardar
                    </button>
                    <br>
                    <button class="text-sm  mx-2 w-32  focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
                        hover:bg-teal-700 hover:text-teal-100
                        bg-teal-100
                        text-teal-700
                        border duration-200 ease-in-out
                        border-teal-600 transition">Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle d-lg-inline-block  sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <x-jet-datatable id="dispensersTable">
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
                            </tr>
                        </x-slot>
                        <x-slot name="tbody">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap"> 1 </td>
                                <td class="px-6 py-4 whitespace-nowrap"> Claro </td>
                                <td class="px-6 py-4 whitespace-nowrap"> Juan Antonio Perez Ruiz</td>
                                <td class="px-6 py-4 whitespace-nowrap"> Ciudad Sandino KM 7 carretera vieja a Leon </td>
                                <td class="px-6 py-4 whitespace-nowrap"> Managua </td>
                                <td class="px-6 py-4 whitespace-nowrap"> 77224589 </td>
                                <td class="px-6 py-4 whitespace-nowrap"> 55441155 </td>
                                <td class="px-6 py-4 whitespace-nowrap"> 1234567890 </td>
                                <td class="px-6 py-4 whitespace-nowrap"> 1234567890</td>
                                <td class="px-6 py-4 whitespace-nowrap"> Comercialización butano</td>
                            </tr>
                        </x-slot>
                    </x-jet-datatable><br>
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
{{--
    <div class="form-group">
        <div class="">
            <br>
            <label for="rucNumber">RUC</label>
            <input type="text" class="form-control" id="rucNumber" name="rucNumber" placeholder="Número RUC" required>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="">
            <br>
            <label for="rucNumber">RUC</label>
            <input type="text" class="form-control" id="rucNumber" name="rucNumber" placeholder="Número RUC" required>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="">
            <br>
            <label for="rucNumber">RUC</label>
            <input type="text" class="form-control" id="rucNumber" name="rucNumber" placeholder="Número RUC" required>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="">
            <br>
            <label for="dgiRegistration">Número DGI</label>
            <input type="text" class="form-control" id="dgiRegistration" name="dgiRegistration" placeholder="DGI" required>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="">
            <br>
            <label for="address">Dirección</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Número RUC" required>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="">
            <br>
            <label for="town">Ciudad</label>
            <input type="text" class="form-control" id="town" name="town" placeholder="Ciudad" required>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="">
            <br>
            <label for="conventionalTelephone">Teléfono</label>
            <input type="text" class="form-control" id="conventionalTelephone" name="conventionalTelephone" placeholder="" required>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="">
            <br>
            <label for="cellphone">Celular</label>
            <input type="text" class="form-control" id="cellphone" name="cellphone" placeholder="" required>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="">
            <br>
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="">
            <br>
            <label for="lineBussines">Giro del negocio</label>
            <input type="text" class="form-control" id="lineBussines" name="lineBussines" placeholder="" required>
        </div>
    </div>
    <br>
    <div class="">
        <x-jet-button type="submit" class="'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
            Crear nuevo proveedor
        </x-jet-button>
    </div>
    <br> --}}
