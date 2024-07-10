<div class="form-control">






    gggggggggggggggggggggggggggggggggggg
    <div class="container mx-auto">
        <div class="grid grid-cols-12 gap-6">
            {{-- nivel 1 --}}
            <div class="form-control col-span-5  mt-4">
                <div class="col-span-1 flex flex-col  w-full mb-1">
                    <label for="first-name" class="block text-sm font-medium ">Proveedor
                    </label>
                </div>
                <div class=" px-2 py-8 sm:p-6">
{{-- 
                    @livewire('mycomponents.selectvendor') --}}
                </div>



            </div>

            {{-- nivel 2 --}}
            <div class=" col-span-7 mt-4 gap-4">

                <div class="col-span-8 w-full mb-1">
                    <label for="first-name" class=" text-sm font-medium text-gray-700">Formulario
                    </label>
                </div>

                <div class="col-span-8 bg-white  ">

                    <form action="#" method="POST">
                        <div class="shadow  sm:rounded-md">
                            <div class=" grid grid-cols-3  px-2 py-8  sm:p-6 gap-4 ">




                                <div class=" col-span-3">
                                    <label for="a" class=" text-sm font-medium text-gray-700"></label>
                                    <input type="text" name="first-name"
                                        placeholder="Aclaración o descripcion del ingreso" id="first-name3"
                                        autocomplete="given-name"
                                        class="rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm ">
                                </div>



                                <div class="">
                                    <select id="type_voucher" name="type_voucher" autocomplete="type_voucher"
                                        class="rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm   bg-white  focus:outline-none  ">
                                        <option>Solicitud</option>
                                        <option>Factura</option>
                                        <option>Proforma</option>
                                    </select>
                                </div>

                                <div class="">

                                    <input type="text" name="first-name" placeholder="Numero o codigo de Docuemento"
                                        id="first-name1" autocomplete="given-name"
                                        class="rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full mb-1 mt-1 sm:text-sm ">
                                </div>









                                {{-- <div class="px-4 py-3 bg-white text-right sm:px-6">
                                    <button type="submit"
                                        class="mr-4 inline-flex justify-center w-24 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md ring ring-gray-500 ring-offset-4  text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2  focus:ring-indigo-500">
                                        New
                                    </button>
                                    <button type="submit"
                                        class="inline-flex justify-center w-24 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md ring  ring-indigo-500 ring-offset-4 bg-indigo-600 hover:bg-indigo-700 text-whitefocus:outline-none focus:ring-2  focus:ring-indigo-500">
                                        Save
                                    </button>
                                </div> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- nivel 2 END--}}





        </div>

    </div>
 
</div>