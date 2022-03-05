<div class="flex flex-col mt-8">
    <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
            <table class="min-w-full">
                <thead>
                    {{ $thead ?? '' }}
                </thead>
                <tbody class="bg-white">
                    {{ $tbody ?? '' }}
                </tbody>
            </table>
        </div>
    </div>
</div>