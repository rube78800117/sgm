    {{-- <div>
        <label for="colorSelector" class="block text-sm font-medium text-gray-700">Select a color</label>
        <select id="colorSelector" wire:model="selectedColor" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            @foreach($colors as $colorName => $shades)
                @foreach($shades as $shade => $hex)
                    <option value="{{ $colorName }}-{{ $shade }}">{{ $colorName }}-{{ $shade }}</option>
                @endforeach
            @endforeach
        </select>
    
        @if($selectedColor)
            <div class="mt-4 p-4 rounded-lg shadow-md" style="background-color: {{ $colors[explode('-', $selectedColor)[0]][explode('-', $selectedColor)[1]] }};">
                <p class="text-white text-center">Seleccione el Color: {{ $selectedColor }}</p>
            </div>
        @endif
    </div>
 --}}


 <div>
    <div class="grid grid-cols-4 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-10 gap-4">
        @foreach($colors as $colorName => $shades)
            @foreach($shades as $shade => $hex)
                <div 
                    class="p-4 rounded-lg shadow-md cursor-pointer" 
                    style="background-color: {{ $hex }};"
                    wire:click="selectColor('{{ $colorName }}-{{ $shade }}')"
                >
                    <div class="mt-2 text-center text-xs font-medium text-white">
                        {{ $colorName }}-{{ $shade }}
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>

    @if($selectedColor)
        <div class="mt-4 p-4 rounded-lg shadow-md" style="background-color: {{ $colors[explode('-', $selectedColor)[0]][explode('-', $selectedColor)[1]] }};">
            <p class="text-white text-center">{{ $selectedColor }}</p>
        </div>
    @endif
</div>