<div>
    <!-- Siempre asigne el id de la etiqueta para la tabla -->
    <table {{ $attributes }} class="max-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <!-- Asigne el encabezado para la tabla -->
            {{ $thead ?? '' }}
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <!-- Asigne el body para la tabla -->
            {{ $tbody ?? '' }}
        </tbody>
    </table>
</div>