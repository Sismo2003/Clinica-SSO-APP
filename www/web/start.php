
<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <meta charset="UTF-8">
        <title>Clinica SSO- Salud Sexual Oportuna</title>
        <link href="resources/output.css" rel="stylesheet">
        <script src="resources/js/jquery-3.7.1.js"></script>
        <script src="resources/js/datatables.min.css"></script>
        <script src="resources/js/datatables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    </head>
    <body class="bg-slate-50 h-svh ">
    <header class=" w-full fixed ">
        <nav class="bg-slate-100 flex   w-full mt-1  px-5 p-1 lg:justify-between sm:place-items-center sm:gap-x-9  " aria-label="Global">
            <div class="flex">
                <a onclick="loadContent('pages/admin/index.php');return false" class="-m-1.5 p-1.5 cursor-pointer">
                    <span class="sr-only">SSO</span>
                    <img class="w-32" src="sources/logos/logoSSO.svg" alt="">
                </a>
            </div>
            <div class="hidden md:flex lg:flex lg:gap-x-5  md:gap-x-4  w-full justify-center  sm:gap-x-4 md:text-lg lg:text-lg ">

                <a onclick="loadContent('pages/admin/colscopias/main.php');return false" target="_blank" class=" py-4 p-2 mb-2 leading-6 hover:bg-gray-100
                 hover:text-black rounded-lg text-blue-500 font-bold hoover:text-blue-500 text-gray-600 cursor-pointer" >Colposcopias</a>

                <a onclick="loadContent('404.php');return false"  class="py-4 p-2 mb-2 leading-6 hover:bg-gray-100 hover:text-black
                rounded-lg text-blue-500 font-bold hoover:text-blue-500 text-gray-600 cursor-pointer" >Pacientes</a>

                <a onclick="loadContent('pages/admin/medic/index.php');return false" class=" py-4 p-2 mb-2 leading-6 hover:bg-gray-100 hover:text-black
                rounded-lg text-blue-500 font-bold hoover:text-blue-500 text-gray-600 cursor-pointer" >Medicos</a>

                <a onclick="loadContent('404.php');return false" class=" py-4 p-2 mb-2 leading-6 hover:bg-gray-100 hover:text-black
                rounded-lg text-blue-500 font-bold hoover:text-blue-500 text-gray-600 cursor-pointer" >Calendario</a>

            </div>
            <div class="hidden lg:flex md:flex flex-1 justify-end lg:gap-x-4 md:gap-x-3 sm:gap-x-4 ">
                <a href="index.html" class="text-m font-semibold leading-6 text-gray-900">
                    <svg class="h-10 w-10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Interface / Log_Out"> <path id="Vector" d="M12 15L15 12M15 12L12 9M15 12H4M9 7.24859V7.2002C9 6.08009 9 5.51962 9.21799 5.0918C9.40973 4.71547 9.71547 4.40973 10.0918 4.21799C10.5196 4 11.0801 4 12.2002 4H16.8002C17.9203 4 18.4796 4 18.9074 4.21799C19.2837 4.40973 19.5905 4.71547 19.7822 5.0918C20 5.5192 20 6.07899 20 7.19691V16.8036C20 17.9215 20 18.4805 19.7822 18.9079C19.5905 19.2842 19.2837 19.5905 18.9074 19.7822C18.48 20 17.921 20 16.8031 20H12.1969C11.079 20 10.5192 20 10.0918 19.7822C9.71547 19.5905 9.40973 19.2839 9.21799 18.9076C9 18.4798 9 17.9201 9 16.8V16.75" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                </a>
            </div>
            <div class="sm:flex lg:hidden md:hidden flex-1 justify-end lg:gap-x-4 md:gap-x-3 sm:gap-x-4 ">
                <button id="openMenuBtn" class="block lg:hidden md:hidden sm:flex p-2 text-gray-700">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div  class="lg:hidden md:hidden sm:hidden" id="openMenu"  role="dialog" aria-modal="false">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-10"></div>
            <div id="menu" class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">SSO</span>
                        <img class=" w-40" src="resources/img/logoSSO.svg" alt="">
                    </a>
                    <button id="menuBtn"  type="button" class=" rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
                <div   class="mt-6 flow-root" >
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a onclick="getData();return false;" target="_blank" class="row-cols-2 flex   p-2 mb-2 leading-6 hover:bg-gray-100 hover:text-black rounded-lg text-blue-500 font-bold hover:text-blue-500 text-gray-600">
                                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 10H10.5C11.3284 10 12 9.32843 12 8.5V4" stroke="#000000" stroke-width="1.5"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.85355 3.73223C10.3224 3.26339 10.9583 3 11.6213 3H16.5C17.8807 3 19 4.11929 19 5.5V18.5C19 19.8807 17.8807 21 16.5 21H7.5C6.11929 21 5 19.8807 5 18.5V9.62132C5 8.95828 5.26339 8.3224 5.73223 7.85355L9.85355 3.73223ZM11.6213 5C11.4887 5 11.3615 5.05268 11.2678 5.14645L7.14645 9.26777C7.05268 9.36154 7 9.48871 7 9.62132V18.5C7 18.7761 7.22386 19 7.5 19H16.5C16.7761 19 17 18.7761 17 18.5V5.5C17 5.22386 16.7761 5 16.5 5H11.6213Z" fill="#000000"></path> <path d="M10 14.5H14M12 12.5V16.5" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                <p class="mx-2">
                                    Generar PDF
                                </p>
                            </a>

                            <a  onclick="cleanInputs();return false" class="row-cols-2 flex   p-2 mb-2 leading-6 hover:bg-gray-100 hover:text-black rounded-lg text-blue-500 font-bold hover:text-blue-500 text-gray-600 ">
                                <svg width="30px" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="none" stroke="#000000" stroke-width="2" d="M10,4 C10,2.8954305 10.8954305,2 12,2 C13.1045695,2 14,2.8954305 14,4 L14,10 L20,10 L20,14 L4,14 L4,10 L10,10 L10,4 Z M4,14 L20,14 L20,22 L12,22 L4,22 L4,14 Z M16,22 L16,16.3646005 M8,22 L8,16.3646005 M12,22 L12,16.3646005"></path> </g></svg>
                                <p class="mx-2">
                                    Restaurar Campos
                                </p>
                            </a>
                            <a href="#" class="row-cols-2 flex p-2  mb-2 leading-6 hover:bg-red-500  hover:text-white rounded-lg text-blue-500 font-bold hover:text-blue-500 text-gray-600">
                                <svg width="30px"  height="30px" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve"  fill="#FFFFFF"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st1{fill:none;stroke:#000000;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;} </style> <ellipse class="st0" cx="14" cy="8" rx="10" ry="5"></ellipse> <path class="st0" d="M30.8,21.2c-1.1,0.2-2,0-2.4-0.7c-0.4-0.7-0.1-1.7,0.6-2.5c-0.9-0.9-1.9-1.5-3.1-1.8c-0.3,1-1,1.8-1.8,1.8 s-1.5-0.7-1.8-1.8c-1.2,0.3-2.3,0.9-3.1,1.8c0.7,0.8,1,1.8,0.6,2.5c-0.4,0.7-1.4,0.9-2.4,0.7C17.1,21.8,17,22.4,17,23 s0.1,1.2,0.2,1.8c1.1-0.2,2,0,2.4,0.7c0.4,0.7,0.1,1.7-0.6,2.5c0.9,0.9,1.9,1.5,3.1,1.8c0.3-1,1-1.8,1.8-1.8s1.5,0.7,1.8,1.8 c1.2-0.3,2.3-0.9,3.1-1.8c-0.7-0.8-1-1.8-0.6-2.5c0.4-0.7,1.4-0.9,2.4-0.7c0.2-0.6,0.2-1.2,0.2-1.8S30.9,21.8,30.8,21.2z"></path> <g> <path d="M24,24c-0.1,0-0.3,0-0.4-0.1c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1-0.1-0.2-0.2-0.2-0.3c0-0.1-0.1-0.3-0.1-0.4 c0-0.1,0-0.3,0.1-0.4c0.1-0.1,0.1-0.2,0.2-0.3c0.4-0.4,1-0.4,1.4,0c0.1,0.1,0.2,0.2,0.2,0.3c0,0.1,0.1,0.3,0.1,0.4 c0,0.1,0,0.3-0.1,0.4c-0.1,0.1-0.1,0.2-0.2,0.3C24.5,23.9,24.3,24,24,24z"></path> </g> <path class="st0" d="M23.3,17.8c0.4-0.6,0.7-1.2,0.7-1.8V8"></path> <path class="st0" d="M4,8v8c0,2.8,4.5,5,10,5c2.1,0,4-0.3,5.6-0.9"></path> <path class="st0" d="M4,16v8c0,2.8,4.5,5,10,5c2,0,3.8-0.3,5.3-0.8"></path> </g></svg>
                                <P CLASS="mx-2">
                                    Base de Datos
                                </P>
                            </a>
                            <a href="versiones/beta/old_version.html" class="row-cols-2 flex   p-2 mb-2 leading-6 hover:bg-gray-100 hover:text-black rounded-lg text-blue-500 font-bold hover:text-blue-500 text-gray-600">
                                <svg style="height: 30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.0002 22.7483C14.7302 22.7483 14.4802 22.5983 14.3502 22.3683C14.2202 22.1283 14.2202 21.8483 14.3602 21.6083L15.4102 19.8583C15.6202 19.4983 16.0902 19.3883 16.4402 19.5983C16.8002 19.8083 16.9102 20.2683 16.7002 20.6283L16.4302 21.0783C19.1902 20.4283 21.2602 17.9483 21.2602 14.9883C21.2602 14.5783 21.6002 14.2383 22.0102 14.2383C22.4202 14.2383 22.7602 14.5783 22.7602 14.9883C22.7502 19.2683 19.2702 22.7483 15.0002 22.7483Z" fill="#292D32"></path> <path d="M2 9.75C1.59 9.75 1.25 9.41 1.25 9C1.25 4.73 4.73 1.25 9 1.25C9.27 1.25 9.52 1.4 9.65 1.63C9.78 1.87 9.78 2.15 9.64 2.39L8.59 4.14C8.38 4.49 7.92 4.61 7.56 4.39C7.21 4.18 7.09 3.72 7.31 3.36L7.58 2.91C4.81 3.56 2.75 6.04 2.75 9C2.75 9.41 2.41 9.75 2 9.75Z" fill="#292D32"></path> <path d="M14.8 12.6292V15.5692C14.8 18.0192 13.82 18.9992 11.37 18.9992H8.43C5.98 18.9992 5 18.0192 5 15.5692V12.6292C5 10.1792 5.98 9.19922 8.43 9.19922H11.37C13.82 9.19922 14.8 10.1792 14.8 12.6292Z" fill="#292D32"></path> <path d="M15.5709 5H12.6309C10.2209 5 9.24094 5.96 9.21094 8.32H11.3709C14.3109 8.32 15.6709 9.69 15.6709 12.62V14.78C18.0409 14.75 18.9909 13.77 18.9909 11.36V8.43C19.0009 5.98 18.0209 5 15.5709 5Z" fill="#292D32" ></path> </g></svg>
                                <p class="mx-2">
                                    Version Anterior
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="">
        <br><br><br><br>

        <div class="" id="MainContent">

        </div>
        <br><br><br><br>
    </div>





    <footer class="bg-gray-800 text-white text-center py-4 fixed bottom-0 w-full">
            <p>&copy; 2024 <strong>Clinica de Salud Sexual Oportuna. </strong> Todos los derechos reservados.</p>
        </footer>
    </body>
</html>
<script src="resources/js/app.js"></script>
<script src="resources/js/colscospia.js"></script>
<script src="resources/js/navToggle.js"></script>

