<div>
    <!-- Siempre asigne el id de la etiqueta para la tabla -->
    <table {{ $attributes }}>
        <thead class="bg-gray-50">
            <!-- Asigne el encabezado para la tabla -->
            {{ $thead ?? '' }}
        </thead>
        <tbody>
            <!-- Asigne el body para la tabla -->
            {{ $tbody ?? '' }}
        </tbody>
    </table>
</div>