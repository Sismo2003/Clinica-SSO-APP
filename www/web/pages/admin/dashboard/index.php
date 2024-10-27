<div>
    <div class="overflow-hidden max-w-full">
        <div class="bg-gray-300 p-2 overflow-x-auto flex flex-row space-x-2 ">

            <div class="bg-white rounded p-3 basis-1/3 grid grid-cols-2">
                    <div class="flex border-b-2 border-gray-200  pb-2">
                        <svg width="25px" style="color: #0d6efd" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 19V16H7C5.34315 16 4 17.3431 4 19M8.8 22H16.8C17.9201 22 18.4802 22 18.908 21.782C19.2843 21.5903 19.5903 21.2843 19.782 20.908C20 20.4802 20 19.9201 20 18.8V5.2C20 4.07989 20 3.51984 19.782 3.09202C19.5903 2.71569 19.2843 2.40973 18.908 2.21799C18.4802 2 17.9201 2 16.8 2H8.8C7.11984 2 6.27976 2 5.63803 2.32698C5.07354 2.6146 4.6146 3.07354 4.32698 3.63803C4 4.27976 4 5.11984 4 6.8V17.2C4 18.8802 4 19.7202 4.32698 20.362C4.6146 20.9265 5.07354 21.3854 5.63803 21.673C6.27976 22 7.11984 22 8.8 22Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p class="font-bold text-xl subpixel-antialiased">Consultas</p>
                    </div>
                    <div class="flex justify-end">
                        <svg width="25px" style="color: #c3a8a9" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12H20M20 12L14 6M20 12L14 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>

                <div>
                    <p class="text-2xl font-medium mt-3 ">80</p>
                    <p class="text-gray-400 text-md  text-nowrap">Consultas a lo largo del día</p>
                </div>
<!--                <canvas id="appointments-chart-dashboard" class="relative mt-3 -mb-5 max-w-fit w-[100px]" >-->

<!--                </canvas>-->
            </div>

            <div class="bg-white rounded p-3 basis-1/3">
                <div>Pacientes</div>
            </div>

            <div class="bg-white rounded p-3 basis-1/3">
                <div>Pacientes</div>
            </div>

        </div>
    </div>
</div>





<script>
    $(document).ready(function() {

        // $('#pacientsTableDs').DataTable({
        //     "order": [[0, "asc"]],
        //     "paging": true,
        //     "pageLength" : 10,
        //     "lengthChange": false,
        //     "language": { // Personalizar el texto de la interfaz
        //         "search": "",
        //         "lengthMenu": "Mostrar _MENU_ filas",
        //         "infoEmpty": "No hay entradas disponibles",
        //         // "paginate": {
        //         //     "first": "Primero",
        //         //     "last": "Último",
        //         //     "next": "Siguiente",
        //         //     "previous": "Anterior"
        //         // }
        //     },
        // });
        // $('.dt-search').addClass("flex justify-end m-3 p-3 ");
        // $('#dt-search-3').addClass("rounded-xl rounded-principal w-72");
        // $('#dt-search-20').attr('placeholder', 'Buscar...');
        // $('.dataTables_filter label').contents().filter(function() {
        //     return this.nodeType === 3;
        // }).remove();
        //
        // $('#dt-search-2').addClass("rounded-xl rounded-principal"); // input de datatables

        //
        // const dataTable = new simpleDatatables.DataTable("#pacientsTableDs", {
        //     searchable: true,
        //     perPageSelect: false
        // });
        createChart();
    });
    var chartDashboardAppointment;
    var chartDashboardPacient;//
    var chartDashboardTool;

    function createChart() {
        var ctx = document.getElementById('appointments-chart-dashboard');
        var ctxPacients = document.getElementById('pacients-chart-dashboard');
        var ctxTools = document.getElementById('tools-chart-dashboard');

        // Si ya existe una instancia previa, la destruimos
        if (chartDashboardAppointment || chartDashboardPacient || chartDashboardTool) {
            chartDashboardAppointment.destroy();
            chartDashboardPacient.destroy();
            chartDashboardTool.destroy();
        }
        chartDashboardAppointment = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['', '', '', '', '', ''],
                datasets: [{
                    data: [50, 100, 95, 83,40 , 80],
                    backgroundColor: [
                        '#9966FF',
                        '#0d6efd',
                        '#0d6efd',
                        '#0d6efd',
                        '#0d6efd',
                        '#FF0000'
                    ]
                }]
            },options: {
                scales: {
                    y: { // Configuración para el eje y (vertical)
                        ticks: {
                            display: false, // Ocultar números
                        },
                        grid: {
                            display: false, // Ocultar líneas de la cuadrícula
                        }
                    },
                    x: { // Configuración para el eje x (horizontal)
                        grid: {
                            display: false, // Opcional: Ocultar líneas de la cuadrícula del eje x si también lo necesitas
                        }
                    }

                },
                plugins: {
                    legend: {
                        display: false, // Ocultar la leyenda
                    }
                },
                responsive: false,
                maintainAspectRatio: false
            }
        });

        chartDashboardPacient = new Chart(ctxPacients, {
            type: 'line',
            data: {
                labels: ['', '', '', ''],
                datasets: [{
                    data: [4000,1500,3330,448],
                    backgroundColor: [
                        '#9966FF',
                        '#0d6efd',
                        '#0d6efd',
                        '#FF0000'
                    ]
                }]
            },options: {
                scales: {
                    y: { // Configuración para el eje y (vertical)
                        ticks: {
                            display: false, // Ocultar números
                        },
                        grid: {
                            display: false, // Ocultar líneas de la cuadrícula
                        }
                    },
                    x: { // Configuración para el eje x (horizontal)
                        grid: {
                            display: false, // Opcional: Ocultar líneas de la cuadrícula del eje x si también lo necesitas
                        }
                    }

                },
                plugins: {
                    legend: {
                        display: false, // Ocultar la leyenda
                    }
                },
                responsive: false,
                maintainAspectRatio: false
            }
        });

        chartDashboardTool = new Chart(ctxTools, {
            type: 'line',
            data: {
                labels: ['', '', '', ''],
                datasets: [{
                    data: [231,34,830,1528],
                    backgroundColor: [
                        '#9966FF',
                        '#0d6efd',
                        '#0d6efd',
                        '#FF0000'
                    ]
                }]
            },options: {
                scales: {
                    y: { // Configuración para el eje y (vertical)
                        ticks: {
                            display: false, // Ocultar números
                        },
                        grid: {
                            display: false, // Ocultar líneas de la cuadrícula
                        }
                    },
                    x: { // Configuración para el eje x (horizontal)
                        grid: {
                            display: false, // Opcional: Ocultar líneas de la cuadrícula del eje x si también lo necesitas
                        }
                    }

                },
                plugins: {
                    legend: {
                        display: false, // Ocultar la leyenda
                    }
                },
                responsive: false,
                maintainAspectRatio: false
            }
        });
    }

</script>
