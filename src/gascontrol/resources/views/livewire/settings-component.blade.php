<main>
    <!-- Breadcrumbs nav -->
    <x-jet-breadcrumbs-nav>
        <x-slot name="crumbs">
            <span class="mx-5 text-gray-500 dark:text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </span>
        
            <a href="{{ route('settings.module') }}" class="text-gray-600 dark:text-gray-200 hover:underline"> Settings </a>
        </x-slot>
    </x-jet-breadcrumbs-nav>
    <div class="h-screen mt-6 flex">
        <div class="mx-auto flex-auto">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('settings.module') }}">
                    <div class="bg-gray-200 flex justify-center items-center">
                        <div id="" class="flex items-center"> 
                            <x-jet-application-settings-icon />
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>
