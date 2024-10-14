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
        <table  id="miTabla" class="display">
            <thead>
                <tr>
                    <th class="border border-black px-5 py-2">Nombre</th>
                    <th class="border border-black px-5 py-2" >Especialidad</th>
                    <th class="border border-black px-5 py-2" >Detalles</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-black px-5 py-2" >Alan Ortiz</td>
                    <td class="border border-black px-5 py-2" >Sexologó</td>
                    <td class="border border-black px-5 py-2" >muchas</td>
                </tr>
                <tr>
                    <td class="border border-black px-5 py-2" >Iker famosa</td>
                    <td class="border border-black px-5 py-2" >ingeniera</td>
                    <td class="border border-black px-5 py-2" >no hace nada</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<div id="modal" class="fixed  inset-0 bg-slate-100 bg-opacity-75 z-50 hidden">
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white p-8 rounded shadow-md w-1/2 h-5/6">
            <h2 id="modalTitle" class="text-2xl font-bold mb-4">CREAR NUEVO MEDICO</h2>
            <div class="w-full" >
                <div class="border-b-2 w-full mt-2">
                    <div class="flex">
                        <nav class="flex w-full" aria-label="Global ">
                            <div class="flex w-full  space-x-1 justify-start my-3">
                                <div id="contenedor_pacient_load_content" class="shadow p-2 hover:bg-gray-30 ">
                                    <button id="pacient_load_content" class="" >Paciente</button>
                                </div>
                                <div id="contenedor_address_load_content" class="shadow p-2 hover:bg-gray-300">
                                    <button id="address_load_content"  >Domicilio</button>
                                </div>
                                <div id="contenedor_appointment_load_content" class="shadow p-2 hover:bg-gray-300  ">
                                    <button id="appointment_load_content">Consulta</button>
                                </div>
                            </div>
                            <div class="flex w-full  space-x-1 justify-end my-3">
                                <a onClick="closeModal()" class="cursor-pointer shadow p-2 hover:bg-red-500 hover:text-white">
                                    Salir
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
                <div id="load_content" class="w-full">
                    <div  id="pacient_content" class="w-full">
                        <div class="w-full flex items-stretch flex-col  sm:flex-row  mb-2 space-y-1">
                            <div class=" self-center w-auto space-y-10 grid justify-items-center  ">
                                <div >
                                    <!-- Contenedor para la cámara -->
                                    <div id="my_camera" class="w-80 h-80 rounded-full overflow-hidden" style="display:none;">
                                    </div>
                                </div>
                                <img class="rounded-full w-60 h-67" id="img-test"  src="sources/profile/img/empty.avif" >
                                <button onclick="abrirCamara();return false" class="border-2 border-[#74c8cc] text-gray-700 font-medium p-2 font-bold hover:bg-[#74c8cc] hover:text-white rounded-md" id="openCamera" >Abrir Camara</button>
                                <button onclick="preview_snapshot();return false" class="border-2 bg-red-500  hover:bg-red-400  font-medium px-4 py-2 text-white font-semibold  hidden rounded-md"  id="snapshot" >Capturar</button>
                                <button onclick="retake_snapchot();return false" class="border-2  hover:bg-[#74c8cc]  bg-red-400 text-white font-medium px-4 py-2 text-white font-semibold  hidden rounded-md" id="retakeBtn" >Capturar de Nuevo</button>
                            </div>

                            <div class=" grid content-center">
                                <div class="grid justify-items-center ">
                                    <form class="space-y-3 p-3 w-full " id="clientDataForm" name="clientDataForm" >
                                        <div class="grid grid-cols-4 w-full  md:space-x-4">
                                            <label for="firstName" class="col-span-1 p-2 w-auto text-end ">Nombre</label>
                                            <input name="firstName" id="firstName" class="col-span-3 p-2 border-b-2 " required placeholder="Santiago ">
                                        </div>
                                        <div class="grid grid-cols-4 w-auto md:space-x-4">
                                            <label for="lastName"  class="col-span-1 p-2 w-auto text-end ">Apellido</label>
                                            <input name="lastName" id="lastName" placeholder="Justo" required class="col-span-3 p-2 border-b-2">
                                        </div>
                                        <div class="grid grid-cols-4 w-full md:space-x-4">
                                            <label for="phoneNumber" class="col-span-1 p-2 w-auto text-end ">Num. Telefono</label>
                                            <input id="phoneNumber" name="phoneNumber" required  type="number" class="col-span-3 p-2 border-b-2" placeholder="(33)-0000-000">
                                        </div>
                                        <div class="grid grid-cols-4 w-full md:space-x-4">
                                            <label for="celular-medico" class=" col-span-1 p-2 w-auto text-end ">Num. Celular</label>
                                            <input id="celular-medico" name="celular-medico" required type="number"  class="col-span-3 p-2 border-b-2" placeholder="(33)-0000-000">
                                        </div>
                                        <div class="grid grid-cols-4 md:space-x-4">
                                            <label for="email"  class="col-span-1 p-2 w-auto text-end ">Correo</label>
                                            <input name="email" id="email" required class="col-span-3 p-2 border-b-2" type="email" placeholder="santi@sportphysical.com">
                                        </div>
                                        <div class="grid grid-cols-4 md:space-x-4">
                                            <label for="userCode"  class="col-span-1 p-2 w-auto text-end ">Codigo</label>
                                            <input name="userCode" id="userCode" required class="col-span-3 p-2 border-b-2" type="TEXT" placeholder="SPT-M">
                                        </div>
                                        <div class="grid justify-items-end w-full mt-10">
                                            <button type="button" onclick="getValues('clientDataForm');return false;" class="bg-[#74c8cc] w-7/12 px-5 rounded-md p-2 text-white font-semibold place-item-center">Siguiente</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div  id="address_content" class="hidden">
                        <div>
                            <div class="p-2">
                                <form class="space-y-3 p-1 w-full grid grid-cols-2 gap-x-3" name="addressDataForm" id="addressDataForm">
                                    <div class="grid grid-cols-4 w-full  md:space-x-4">
                                        <label for="address" class="col-span-1 p-2 w-auto text-end ">Dirreción</label>
                                        <input name="address" id="address" class="col-span-3 p-2 border-b-2 " placeholder="Av. López Mateos 677">
                                    </div>
                                    <div class="grid grid-cols-4 w-auto md:space-x-4">
                                        <label for="neighborhood"  class="col-span-1 p-2 w-auto text-end ">Colonia</label>
                                        <input name="neighborhood" id="neighborhood" placeholder="Colonia Centro" class="col-span-3 p-2 border-b-2">
                                    </div>
                                    <div class="grid grid-cols-4 w-full md:space-x-4">
                                        <label for="city" class="col-span-1 p-2 w-auto text-end ">Ciudad</label>
                                        <input id="city" name="city" class="col-span-3 p-2 border-b-2" placeholder="Guadalajara">
                                    </div>
                                    <div class="grid grid-cols-4 md:space-x-4">
                                        <label for="zipcode" class="col-span-1 p-2 w-auto text-end ">Código Postal</label>
                                        <input id="zipcode" name="zipcode" class="col-span-3 p-2 border-b-2" type="number" placeholder="451500" >
                                    </div>
                                    <div class="grid grid-cols-4  md:space-x-4 ">
                                        <label for="state"  class="col-span-1 p-2 w-auto text-end  ">Estado</label>
                                        <input name="state" id="state" class="col-span-3 p-2 border-b-2" type="email" placeholder="Jalisco">
                                    </div>
                                </form>
                                <div class=" p-3 w-full  grid grid-col w-full gap-3 grid justify-items-end " >
                                    <button class="bg-[#1f2430] w-5/12  rounded-md p-2 text-white font-semibold place-item-center" onclick="getValues('addressDataForm');return false;">Siguiente</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div  id="appointment_content" class="hidden">
                        <div>
                            <form class="space-y-3 p-3 w-full gap-y-4 " id="appointmentForm" name="appointmentForm">
                                <div class="grid grid-cols-4 w-full  md:space-x-4">
                                    <label for="major" class="col-span-1 p-2 w-auto text-end ">Especialidad</label>
                                    <input name="major" id="major" class="col-span-3 p-2 border-b-2 " placeholder="TRAUMATOLOGIA">
                                </div>
                            </form>
                            <div class=" p-3 w-full  grid grid-col w-full gap-3 grid justify-items-end " >
                                <button class="bg-[#74c8cc] w-5/12  rounded-md p-2 text-white font-semibold place-item-center" onclick="getValues('appointmentForm');return false;">Registrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>


