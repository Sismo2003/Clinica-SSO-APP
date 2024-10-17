
<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <meta charset="UTF-8">
        <title>Clinica SSO- Salud Sexual Oportuna</title>
        <link href="resources/output.css" rel="stylesheet">
        <link rel="icon" href="sources/logos/icono.ico" type="image/x-icon">
        <script src="../../node_modules/jquery/dist/jquery.js"></script>
        <script src="../../node_modules/chart.js/dist/chart.umd.js"></script>
        <script src="resources/js/datatables.min.css"></script>
        <script src="resources/js/datatables.min.js"></script>

        <script src="resources/js/dashboard.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    </head>
    <body class="bg-slate-100 ">
    <div class="flex w-full h-full">
        <header class="w-auto px-6 h-screen bg-slate-100 shadow-lg shadow-cyan-500/50 border-r-2 border-gray-200">
            <nav class="flex flex-col gap-10 h-full " aria-label="Global">
                <div class="flex w-full border-gray-200 border-b-2 ">
                    <a onclick="loadContent('pages/admin/dashboard/index.php');return false" class="m-3 cursor-pointer">
                        <span class="sr-only">SSO</span>
                        <img class="w-40 " src="sources/logos/logoSSO.svg" alt="">
                    </a>
                </div>
                <div class="grid grid-row self-center ">
                    <div class="flex inline-block space-x-2 my-4">
                        <svg width="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.4 3H4.6C4.03995 3 3.75992 3 3.54601 3.10899C3.35785 3.20487 3.20487 3.35785 3.10899 3.54601C3 3.75992 3 4.03995 3 4.6V8.4C3 8.96005 3 9.24008 3.10899 9.45399C3.20487 9.64215 3.35785 9.79513 3.54601 9.89101C3.75992 10 4.03995 10 4.6 10H8.4C8.96005 10 9.24008 10 9.45399 9.89101C9.64215 9.79513 9.79513 9.64215 9.89101 9.45399C10 9.24008 10 8.96005 10 8.4V4.6C10 4.03995 10 3.75992 9.89101 3.54601C9.79513 3.35785 9.64215 3.20487 9.45399 3.10899C9.24008 3 8.96005 3 8.4 3Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19.4 3H15.6C15.0399 3 14.7599 3 14.546 3.10899C14.3578 3.20487 14.2049 3.35785 14.109 3.54601C14 3.75992 14 4.03995 14 4.6V8.4C14 8.96005 14 9.24008 14.109 9.45399C14.2049 9.64215 14.3578 9.79513 14.546 9.89101C14.7599 10 15.0399 10 15.6 10H19.4C19.9601 10 20.2401 10 20.454 9.89101C20.6422 9.79513 20.7951 9.64215 20.891 9.45399C21 9.24008 21 8.96005 21 8.4V4.6C21 4.03995 21 3.75992 20.891 3.54601C20.7951 3.35785 20.6422 3.20487 20.454 3.10899C20.2401 3 19.9601 3 19.4 3Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19.4 14H15.6C15.0399 14 14.7599 14 14.546 14.109C14.3578 14.2049 14.2049 14.3578 14.109 14.546C14 14.7599 14 15.0399 14 15.6V19.4C14 19.9601 14 20.2401 14.109 20.454C14.2049 20.6422 14.3578 20.7951 14.546 20.891C14.7599 21 15.0399 21 15.6 21H19.4C19.9601 21 20.2401 21 20.454 20.891C20.6422 20.7951 20.7951 20.6422 20.891 20.454C21 20.2401 21 19.9601 21 19.4V15.6C21 15.0399 21 14.7599 20.891 14.546C20.7951 14.3578 20.6422 14.2049 20.454 14.109C20.2401 14 19.9601 14 19.4 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.4 14H4.6C4.03995 14 3.75992 14 3.54601 14.109C3.35785 14.2049 3.20487 14.3578 3.10899 14.546C3 14.7599 3 15.0399 3 15.6V19.4C3 19.9601 3 20.2401 3.10899 20.454C3.20487 20.6422 3.35785 20.7951 3.54601 20.891C3.75992 21 4.03995 21 4.6 21H8.4C8.96005 21 9.24008 21 9.45399 20.891C9.64215 20.7951 9.79513 20.6422 9.89101 20.454C10 20.2401 10 19.9601 10 19.4V15.6C10 15.0399 10 14.7599 9.89101 14.546C9.79513 14.3578 9.64215 14.2049 9.45399 14.109C9.24008 14 8.96005 14 8.4 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <a onclick="loadContent('pages/admin/dashboard/index.php');return false" target="_blank" class="  hover:bg-gray-100
                         hover:text-black rounded-lg text-gray-600  font-bold  cursor-pointer text-xl" >Dashboard</a>
                    </div>
                    <div class="flex inline-block space-x-2 my-4">
                        <svg width="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 11V17M12 17L9 14M12 17L15 14M16 4C16.93 4 17.395 4 17.7765 4.10222C18.8117 4.37962 19.6204 5.18827 19.8978 6.22354C20 6.60504 20 7.07003 20 8V17.2C20 18.8802 20 19.7202 19.673 20.362C19.3854 20.9265 18.9265 21.3854 18.362 21.673C17.7202 22 16.8802 22 15.2 22H8.8C7.11984 22 6.27976 22 5.63803 21.673C5.07354 21.3854 4.6146 20.9265 4.32698 20.362C4 19.7202 4 18.8802 4 17.2V8C4 7.07003 4 6.60504 4.10222 6.22354C4.37962 5.18827 5.18827 4.37962 6.22354 4.10222C6.60504 4 7.07003 4 8 4M9.6 6H14.4C14.9601 6 15.2401 6 15.454 5.89101C15.6422 5.79513 15.7951 5.64215 15.891 5.45399C16 5.24008 16 4.96005 16 4.4V3.6C16 3.03995 16 2.75992 15.891 2.54601C15.7951 2.35785 15.6422 2.20487 15.454 2.10899C15.2401 2 14.9601 2 14.4 2H9.6C9.03995 2 8.75992 2 8.54601 2.10899C8.35785 2.20487 8.20487 2.35785 8.10899 2.54601C8 2.75992 8 3.03995 8 3.6V4.4C8 4.96005 8 5.24008 8.10899 5.45399C8.20487 5.64215 8.35785 5.79513 8.54601 5.89101C8.75992 6 9.03995 6 9.6 6Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <a onclick="loadContent('pages/admin/colscopias/main.php');return false" target="_blank" class="  hover:bg-gray-100
                         hover:text-black rounded-lg text-gray-600  font-bold  cursor-pointer text-xl" >Colposcopias</a>
                    </div>
                    <div class="flex inline-block space-x-2 my-4">
                        <svg width="25px"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.5 11.5H14.5L13 14.5L11 8.5L9.5 11.5H8.5M11.9932 5.13581C9.9938 2.7984 6.65975 2.16964 4.15469 4.31001C1.64964 6.45038 1.29697 10.029 3.2642 12.5604C4.75009 14.4724 8.97129 18.311 10.948 20.0749C11.3114 20.3991 11.4931 20.5613 11.7058 20.6251C11.8905 20.6805 12.0958 20.6805 12.2805 20.6251C12.4932 20.5613 12.6749 20.3991 13.0383 20.0749C15.015 18.311 19.2362 14.4724 20.7221 12.5604C22.6893 10.029 22.3797 6.42787 19.8316 4.31001C17.2835 2.19216 13.9925 2.7984 11.9932 5.13581Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <a onclick="loadContent('pages/admin/pacient/index.php');return false"  class="hover:bg-gray-100 hover:text-black
                        rounded-lg text-gray-600  font-bold hoover:text-blue-500  cursor-pointer text-xl" >Pacientes</a>
                    </div>
                    <div class="flex inline-block space-x-2 my-4 ">
                        <svg width="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 12H18L15 21L9 3L6 12H2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <a onclick="loadContent('pages/admin/medic/index.php');return false" class=" hover:bg-gray-100 hover:text-black
                        rounded-lg text-gray-600  font-bold hoover:text-blue-500  cursor-pointer text-xl" >Medicos</a>
                    </div>
                    <div class="flex inline-block space-x-2 my-4 ">
                        <svg width="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 10H3M21 11.5V8.8C21 7.11984 21 6.27976 20.673 5.63803C20.3854 5.07354 19.9265 4.6146 19.362 4.32698C18.7202 4 17.8802 4 16.2 4H7.8C6.11984 4 5.27976 4 4.63803 4.32698C4.07354 4.6146 3.6146 5.07354 3.32698 5.63803C3 6.27976 3 7.11984 3 8.8V17.2C3 18.8802 3 19.7202 3.32698 20.362C3.6146 20.9265 4.07354 21.3854 4.63803 21.673C5.27976 22 6.11984 22 7.8 22H12.5M16 2V6M8 2V6M17.4976 15.7119C16.7978 14.9328 15.6309 14.7232 14.7541 15.4367C13.8774 16.1501 13.7539 17.343 14.4425 18.1868C15.131 19.0306 17.4976 21 17.4976 21C17.4976 21 19.8642 19.0306 20.5527 18.1868C21.2413 17.343 21.1329 16.1426 20.2411 15.4367C19.3492 14.7307 18.1974 14.9328 17.4976 15.7119Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <a onclick="loadContent('404.php');return false" class="  hover:bg-gray-100 hover:text-black
                        rounded-lg text-gray-600  font-bold hoover:text-blue-500  cursor-pointer text-xl" >Calendario</a>
                    </div>
                </div>
            </nav>
        </header>
        <!--- TITLE--->

        <div class="w-full bg-white">
            <div class="flex bg-white p-4 border-y-2 border-gray-200 mb-5 ">
                <div class="">
                    <p class="text-2xl font-extrabold">Buenos Días, Dr. Alan Ortiz</p>
                    <p class="text-md text-gray-500">Espero que tengas un bonito día porqué hoy hay 80 pacientes agendados para ti.</p>
                </div>
                <div>

                </div>
            </div>

            <div class="" id="MainContent">

            </div>
            <br>
        </div>
    </div>




    <footer class="bg-gray-800 text-white text-center py-4  bottom-0 w-full">
            <p>&copy; 2024 <strong>Clinica de Salud Sexual Oportuna. </strong> Todos los derechos reservados.</p>
        </footer>
    </body>
</html>
<script src="resources/js/app.js"></script>
<script src="resources/js/colscospia.js"></script>
<script src="resources/js/navToggle.js"></script>

