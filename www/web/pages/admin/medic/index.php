<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
<script src="resources/js/medic.js"></script>

<div class="m-10">
    <div class="flex justify-end">
        <a onclick="openModal()" class="rounded border border-black p-4 flex space-x-2 items-center cursor-pointer">
            <svg width="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 7L11.8845 4.76892C11.5634 4.1268 11.4029 3.80573 11.1634 3.57116C10.9516 3.36373 10.6963 3.20597 10.4161 3.10931C10.0992 3 9.74021 3 9.02229 3H5.2C4.0799 3 3.51984 3 3.09202 3.21799C2.71569 3.40973 2.40973 3.71569 2.21799 4.09202C2 4.51984 2 5.0799 2 6.2V7M2 7H17.2C18.8802 7 19.7202 7 20.362 7.32698C20.9265 7.6146 21.3854 8.07354 21.673 8.63803C22 9.27976 22 10.1198 22 11.8V16.2C22 17.8802 22 18.7202 21.673 19.362C21.3854 19.9265 20.9265 20.3854 20.362 20.673C19.7202 21 18.8802 21 17.2 21H6.8C5.11984 21 4.27976 21 3.63803 20.673C3.07354 20.3854 2.6146 19.9265 2.32698 19.362C2 18.7202 2 17.8802 2 16.2V7ZM12 17V11M9 14H15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p class="">Nuevo Medico</p>
        </a>
    </div>
    <div>
        <table  id="miTabla" class="display  ">
            <thead class="">
                    <tr class="text-gray-700">
                        <th class=" p-2  bg-custom-gray rounded-tl-md rounded-bl-md">NOMBRE</th>
                        <th class=" p-2  bg-custom-gray " >ESPECIALIDAD</th>
                        <th class=" p-2  bg-custom-gray " >TELEFONO</th>
                        <th class=" p-2  bg-custom-gray " >CORREO</th>
                        <th class=" p-2  bg-custom-gray " >CEDULA PROFESIONAL</th>
                        <th class=" p-2 bg-custom-gray  rounded-tr-md rounded-tr-md " >Detalles</th>
                    </tr>
            </thead>
            <tbody>
                <tr class="border-b-2 border-gray-200 text-center">
                    <td class="p-5" >muchas</td>
                    <td class="p-5" >Alan Ortiz</td>
                    <td class="p-5" >Sexologó</td>
                    <td class="p-5" >Sexologó</td>
                    <td class="p-5" >Sexologó</td>
                    <td class="p-5" >Sexologó</td>
                </tr>
                <tr class="border-b-2 border-gray-200 text-center">
                    <td class="p-5" >Iker famosa</td>
                    <td class="p-5" >Iker famosa</td>
                    <td class="p-5" >Iker famosa</td>
                    <td class="p-5" >Iker famosa</td>
                    <td class="p-5" >ingeniera</td>
                    <td class="p-5" >no hace nada</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<div id="modal" class="fixed  inset-0 bg-slate-100 bg-opacity-75 z-50 hidden">
    <div class="flex items-center justify-center h-screen">
        <!--- Modal -->
        <div class="bg-white p-2 rounded-xl shadow-xl shadow-cyan-500/50 w-[590px] h-[450px] mx-3">
            <!---Title -->
            <h2 id="modalTitle" class="text-2xl text-center font-bold my-2">CREAR NUEVO MEDICO</h2>
            <div class="w-full" >
                <!---Nav -->
                <div class="border-b-2 w-full mt-2">
                    <div class="flex">
                        <nav class="flex w-full" aria-label="Global ">
                            <div class="flex w-full  space-x-3 justify-start my-3">
                                <div id="contenedor_pacient_load_content" class="shadow p-2 text-white font-medium rounded-lg  ">
                                    <button id="pacient_load_content" class="" >General</button>
                                </div>
                                <div id="contenedor_address_load_content" class="shadow p-2 text-black font-medium rounded-lg">
                                    <button id="address_load_content" >Domicilio</button>
                                </div>
                            </div>
                            <div class="flex w-full  space-x-1 justify-end my-3">
                                <a onClick="closeModal()" class="cursor-pointer shadow py-2 px-4 rounded-lg bg-[#74c8cc] hover:bg-red-500 hover:text-white">
                                    Salir
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
                <!---Contenido -->
                <div id="load_content" class="w-full">
                    <div  id="pacient_content" class="w-full">
                        <div class="w-full grid grid-cols-2 ">
                            <div class=" self-center w-auto grid justify-items-center  ">
                                <div> <!-- Contenedor para la cámara -->
                                    <div id="my_camera" class="w-80 h-80 rounded-full overflow-hidden" style="display:none;"></div>
                                    <img class="rounded-full w-60 h-67" id="img-test"  src="sources/profile/img/empty.avif" >
                                </div>
                            </div>
                            <div class=" grid content-center w-full">
                                <div class="flex justify-center">
                                    <form class="gap-2 grid grid-cols-2 " id="clientDataForm" name="clientDataForm" >
                                        <div class="relative w-full">
                                            <input type="text"  id="firstName" name="firstName" placeholder=" " class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                                            <label for="firstName" class="absolute bg-white  text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]
                                            px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                                           peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75
                                           peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Nombre</label>
                                        </div>
                                        <div class="relative w-full">
                                            <input type="text"  id="lastName" name="lastName" placeholder=" " class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                                            <label for="lastName" class="absolute bg-white  text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]
                                            px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                                           peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75
                                           peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Apellido</label>
                                        </div>
                                        <div class="relative w-full">
                                            <input type="tel"  id="phoneNumber" name="phoneNumber" placeholder=" " class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                                            <label for="phoneNumber" class="absolute bg-white  text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]
                                            px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                                           peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75
                                           peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Telefono</label>
                                        </div>
                                        <div class="relative w-full">
                                            <input type="email"  id="email" name="email" placeholder=" " class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                                            <label for="email" class="absolute bg-white  text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]
                                            px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                                           peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75
                                           peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Correo</label>
                                        </div>
                                        <div class="relative w-full">
                                            <input type="text"  id="major" name="major" placeholder=" " class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                                            <label for="major" class="absolute bg-white  text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]
                                    px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                                    peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75
                                    peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Especialidad</label>
                                        </div>
                                        <div class="relative w-full">
                                            <input type="text"  id="cedProfesional" name="cedProfesional" placeholder=" " class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                                            <label for="cedProfesional" class="absolute bg-white  text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]
                                    px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                                    peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75
                                    peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Ced. Profesional</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="flex justify-center mt-1">
                                <button onclick="abrirCamara();return false" class="border-2 border-[#74c8cc] text-gray-700 font-medium p-2 font-bold hover:bg-[#74c8cc] hover:text-white rounded-md shadow" id="openCamera" >Abrir Camara</button>
                                <button onclick="preview_snapshot();return false" class="border-2 bg-red-500  hover:bg-red-400  font-medium px-4 py-2 text-white font-semibold  hidden rounded-md"  id="snapshot" >Capturar</button>
                                <button onclick="retake_snapshot();return false" class="border-2  hover:bg-[#74c8cc]  bg-red-400 text-white font-medium px-4 py-2 text-white font-semibold  hidden rounded-md" id="retakeBtn" >Capturar de Nuevo</button>
                            </div>
                            <div class="flex justify-end mt-1 mx-8">
                                    <button class=" bg-[#1f2430] rounded-md py-2 px-4 text-white font-semibold place-item-center hover:bg-white hover:shadow hover:text-gray-600 hover:border-[#74c8cc] hover:border-2 " onclick="">Siguiente</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div  id="address_content" class="hidden flex flex-col ">
                    <form class="m-2 grid grid-cols-2" name="addressDataForm" id="addressDataForm">
                        <div class="relative w-5/6 m-2">
                            <input type="text"  id="address" name="address" placeholder=" " class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                            <label for="address" class="absolute bg-white  text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]
                            px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75
                            peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Dirreción </label>
                        </div>
                        <div class="relative w-5/6 m-2">
                            <input type="text"  id="neighborhood" name="neighborhood" placeholder=" " class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                            <label for="neighborhood" class="absolute bg-white  text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]
                            px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75
                            peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Colonia</label>
                        </div>

                        <div class="relative w-5/6 m-2">
                            <input type="text"  id="city" name="city" placeholder=" " class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                            <label for="city" class="absolute bg-white  text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]
                            px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75
                            peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Ciudad</label>
                        </div>

                        <div class="relative w-5/6 m-2">
                            <input  id="zipcode" name="zipcode" type="number" placeholder="451500" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                            <label for="zipcode" class="absolute bg-white  text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]
                            px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75
                            peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Código Postal</label>
                        </div>
                        <div class="relative w-5/6 m-2">
                            <input type="text"  id="state" name="state" placeholder="Jalisco" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                            <label for="state" class="absolute bg-white  text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]
                            px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                            peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75
                            peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Estado </label>
                        </div>

                    </form>
                    <div class="flex justify-end mr-8" >
                        <button class="border-blue-500 border-2 bg-[#1f2430]  rounded-md px-6 py-2 text-white font-semibold place-item-center" onclick="getValues('addressDataForm');return false;">Siguiente</button>
                    </div>

                </div>

                <div  id="appointment_content" class="hidden flex justify-center">
                    <div class="">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            initComplete: function() {
                // Agregar clases de Tailwind al campo de búsqueda
                $('.dataTables_filter input dt-search-0')
                    .addClass('border-2 border-teal-500 rounded-md p-2 bg-gray-100 text-gray-800');
            }
        });
    });
</script>

