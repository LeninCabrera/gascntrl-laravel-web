<x-app-layout>
    <!-- Breadcrumbs nav -->
    <x-jet-breadcrumbs-nav>
    </x-jet-breadcrumbs-nav>

    <div class="mx-6 overflow-hidden">
        <div class="grid place-items-center p-0 sm:p-12 w-full lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1">
          <div class="mt-4">
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
      
          <div class="mt-4">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('settings.module') }}">
                  <div class="bg-gray-200 flex justify-center items-center">
                      <div id="" class="flex items-center"> 
                        <x-jet-icon.application-arching class="ease-in-out transform hover:scale-75 transition duration-500" />
                    </div>
                  </div>
                </a>
            </div>
          </div>
      
          <div class="mt-4">
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
      
          <div class="mt-4">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('settings.module') }}">
                  <div class="bg-gray-200 flex justify-center items-center">
                      <div id="" class="flex items-center"> 
                        <x-jet-icon.application-dispenser class="ease-in-out transform hover:scale-75 transition duration-500" />
                    </div>
                  </div>
                </a>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>
