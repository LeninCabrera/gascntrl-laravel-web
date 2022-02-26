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
            <x-jet-button class="ml-3" wire:click="saveNewDispenser">
                {{ __('Añadir nuevo') }}
            </x-jet-button>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="shadow-2xl rounded-2xl lg:w-1/2 sm:w-screen overflow-hidden mx-10">
            <div class="m-6 mt-0 sm:px-6 lg:px-8">
                <div class="bg-scroll bg-contain overflow-auto h-80">
                    @foreach ($dispensers as $dispenser)
                    <ul class="block w-11/12 my-4 mx-auto" x-data="{selected:null}">
                        <li class="flex align-center flex-col">
                            <div 
                                @click="selected !== 0 ? selected = 0 : selected = null"
                                wire:click="getHosesForDispenserId({{ $dispenser->id }})"
                                class="cursor-pointer px-5 py-3 bg-white text-indigo-500 font-bold text-centerflex items-center justify-center hover:opacity-75 hover:shadow rounded-2xl uppercase">
                                <div class="bg-indigo-100 text-indigo-400 w-8 h-8 md:w-10 md:h-10 rounded-md flex items-center justify-center font-bold text-lg font-display">
                                    <span x-text="{{ $dispenser->id }}"></span>
                                </div>
                                {{ $dispenser->description }}
                            </div>
                            <div x-show="selected == 0" class="border-4 border-violet-300 rounded-xl py-12 px-2 mt-4 mx-6 bg-scroll bg-contain overflow-auto">
                                @if (count($hoses) == 0)
                                    No hay mangueras asignadas a este dispensador.
                                    <span wire:click="togleModal" class="px-2 mb-4 py-2 rounded-full text-gray-500 bg-gray-200 font-semibold text-sm flex align-center w-max cursor-pointer active:bg-gray-900 transition duration-300 ease">
                                        +
                                    </span>
                                @else
                                    @foreach ($hoses as $hose)
                                    <span class="px-2 mb-4 py-2 rounded-full text-gray-500 bg-gray-200 font-semibold text-sm flex align-center w-max cursor-pointer active:bg-gray-900 transition duration-300 ease">
                                        {{ $hose->description }}
                                    </span>
                                    @endforeach
                                @endif
                            </div>
                        </li>
                    </ul>
                    @endforeach 
                </div>
            </div>
        </div>
    </div>

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
