<div>
    <div>

        <!-- Verifica si la variable $locationWare está definida y luego... -->
        @if (isset($locationWare))

            <p class="text-gray-500 text-sm ">Localizacion:</p> <span class="text-gray-700 font-bold">
                {{ $locationWare->name }}</span>
            <hr>
            @if (!is_null($locationWare->sector))
                <p class="text-gray-500 text-sm ">Estante:</p><span class="text-gray-700 font-bold">
                    {{ $locationWare->sector->name }}</span>
            @endif
        @else
        @endif



    </div>

</div>
