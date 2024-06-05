<x-admin-layout>








    <div class="container py-12">
        @livewire('admin.edit-config')

    </div>

    <div class="bg-gray-200">

        <h1>Importar tabla catalogo</h1>

        <form action="{{ route('admin.importar.datos') }}" method="POST">
            @csrf
            <button type="submit">Importar Datos</button>
        </form>


    </div>








    <div class="bg-gray-200 mt-4">

        <h1>Importar marcas </h1>

        <form action="{{ route('admin.import_proveedors') }}" method="POST">
            @csrf
            <button type="submit">Importar marcas</button>
        </form>


    </div>









    <div class="bg-gray-200 mt-4">

        <h1>relacionar marcas </h1>

        <form action="{{ route('admin.relation_proveedors') }}" method="POST">
            @csrf
            <button type="submit">Relacionar marcas</button>
        </form>


    </div>


    <div class="bg-gray-200 mt-4">

        <h1>asignar categoria id </h1>

        <form action="{{ route('admin.asign_category_id') }}" method="POST">
            @csrf
            <button type="submit">asigna el id de categoria-otros, segun al departamento al que pertenece </button>
        </form>


    </div>



    <div class="bg-gray-200 mt-4">

        <h1>copia imagenes segun su ID de almacen central</h1>

        <form action="{{ route('admin.copy_images') }}" method="POST">
            @csrf
            <button type="submit"> Asignar imagen a articulos de la carpeta imagesCatalog  </button>
        </form>


    </div>



    






</x-admin-layout>
