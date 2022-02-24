<x-app-layout>
    <!-- Breadcrumbs nav -->
    <x-jet-breadcrumbs-nav>
    </x-jet-breadcrumbs-nav>
    <div class="h-screen mt-6 flex">
        <div class="mx-auto">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('settings.module') }}">
                    <div class="bg-gray-200 flex justify-center items-center">
                        <div id="" class="flex items-center">
                            <x-jet-icon.application-settings class="ease-in-out transform hover:scale-75 transition duration-500" />
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="mx-auto">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('provider.module') }}">
                    <div class="bg-gray-200 flex justify-center items-center">
                        <div id="" class="flex items-center">
                            <x-jet-icon.application-dispenser class="ease-in-out transform hover:scale-75 transition duration-500" />
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="mx-auto">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('settings.module') }}">
                    <div class="bg-gray-200 flex justify-center items-center">
                        <div id="" class="flex items-center">
                            <x-jet-icon.application-purchase class="ease-in-out transform hover:scale-75 transition duration-500" />
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="mx-auto">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('dispenser.module') }}">
                    <div class="bg-gray-200 flex justify-center items-center">
                        <div id="" class="flex items-center">
                            <x-jet-icon.application-product class="ease-in-out transform hover:scale-75 transition duration-500" />
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
