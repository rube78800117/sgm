<div>
    <div>
     
        @if ($locationWare)
  
        <p class="text-gray-500 text-sm ">Localizacion:</p> <span class="text-gray-700 font-bold"> {{$locationWare->name}}</span> <hr>
        <p class="text-gray-500 text-sm ">Estante:</p><span class="text-gray-700 font-bold"> {{$locationWare->sector->name}}</span> 
        @else
          
        <button class=" text-white rounded-sm font-bold bg-green-500 m-2 px-2">
            Asignar ubicacion
        </button>
        @endif
       
    </div>

</div>
