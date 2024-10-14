
<body class="bg-slate-100 m-10">
<div class="flex justify-center  w-full" style="height: 80vh">
  <div class="md:w-4/5 sm:w-4/5 lg:9/12 bg-gray-100 shadow-lg p-4 rounded-lg divide-y divide-gray-500/10 overflow-y-scroll">
    <form name="mainForm" target="_blank" >
      <div CLASS="grid grid-cols-2 p-2 ">
        <h1 class="font-bold text-2xl place-self-start ">REPORTE COLPOSCOPICO</h1>
        <H3 class="text-gray-700 place-self-end" >Salud Sexual Oportuna</H3>
      </div>
      <div class="p-2 ">
        <div class="justify-center flex my-4">
          <p class="text-xl font-medium" >DATOS GENERALES</p>
        </div>
        <div class="grid-cols-3 gap-x-4 gap-y-4 grid">
          <div class="relative w-full">
            <input type="text"  id="inputName" name="name" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="inputName" class="absolute bg-gray-100  text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 z-9 top-2  z-9 origin-[0]  px-2 peer-focus:px-2 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Paciente</label>
          </div>

          <div class="relative w-full">
            <input type="number" max="120" min="1" id="ageinput" name="age" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="ageinput" class="absolute bg-gray-100  text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]   px-2 peer-focus:px-2 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Edad</label>
          </div>

          <div class="relative w-full">
            <input type="text"  id="FolioEntry" name="folio" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="FolioEntry" class="absolute bg-gray-100  text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]   px-2 peer-focus:px-2 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Folio</label>
          </div>
          <div class="relative w-full">
            <input type="text"  id="MedicToStudies" name="medicTo" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="MedicToStudies" class="absolute bg-gray-100  text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]   px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Medico Destinatario </label>
          </div>

          <div class="relative  w-full">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
              </svg>
            </div>
            <label for="dateOfStudiesEntry" class="absolute text-xs bg-gray-100 text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]   px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Fecha de estudios</label>
            <input datepicker type="text" id="dateOfStudiesEntry" name="dateStudies" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 " placeholder="mm/dd/yyyy">
          </div>
        </div>
      </div>
      <div class="p-2">
        <div class="justify-center flex my-4">
          <p class="text-xl font-medium" >DATOS GINECO OBSTÉTRICOS</p>
        </div>
        <div class="grid-cols-4 gap-x-4 gap-y-4 grid">
          <div class="relative w-full">
            <input type="number" max="100" min="0" value="0"  id="pregnanciesEntry" name="pregnancies" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="pregnanciesEntry" class="absolute bg-gray-100  text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]   px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Embarazos</label>
          </div>
          <div class="relative w-full">
            <input type="number" max="100" min="0" value="0"  id="birthsEntry" name="births" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="birthsEntry" class="absolute bg-gray-100  text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]   px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Partos</label>
          </div>
          <div class="relative w-full">
            <input type="number" max="100" min="0" value="0"  id="abortionsEntry" name="abortions" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="abortionsEntry" class="absolute bg-gray-100  text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]   px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Abortos</label>
          </div>
          <div class="relative w-full">
            <input type="number" max="100" min="0" value="0"  id="cSectionEntry" name="cSection" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="cSectionEntry" class="absolute bg-gray-100  text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]   px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Cesárias</label>
          </div>
          <div class="relative  w-full">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
              </svg>
            </div>
            <label for="fumEntry" class="absolute bg-gray-100  text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]   px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Fum</label>
            <input datepicker type="text" id="fumEntry" name="fum" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 " placeholder="mm/dd/yyyy">
          </div>
        </div>
      </div>
      <div class="p-2">
        <div class="justify-center flex my-4">
          <p class="text-xl font-medium" >DATOS COLPOSCOPICOS</p>
        </div>
        <div class="grid-cols-3 gap-x-4 gap-y-4 grid">
          <div class="relative w-full">
            <label for="cervixEntry" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cervix</label>
            <select id="cervixEntry" name="cervix" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
              <option value="SELECCIONA">Selecciona</option>
              <option value="EUTROFICO">Eutrofico</option>
              <option value="HIPERTROFICO">Hipertrofico</option>
              <option value="ATROFICO">Atrofico</option>
              <option value="CUPULIZADO">Cupulizado</option>
            </select>
          </div>
          <div class="relative w-full">
            <label for="patronVascularEntry" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Patron vascular (aragonés)</label>
            <select id="patronVascularEntry" name="patronVascular" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
              <option value="SELECCIONA">Selecciona</option>
              <option value="TIPO I NORMAL: FINA RED CAPILAR (ARBORIFORME)">Tipo I normal: fina red capilar (arboriforme)</option>
              <option value="TIPO II AUMENTADO: AUMENTO DE LA RED NORMAL IMAGEN VASCULAR DE COLPITIS">Tipo II aumentado: aumento de la red normal imagen vascular de colpitis</option>
              <option value="TIPO III ECTÁSICO: VASOS DILATADOS DISTRIBUCIÓN NORMAL">Tipo III ectásico: vasos dilatados distribución normal</option>
              <option value="TIPO IV IRREGULAR: HORQUILLAS, SACACORCHOS. CAMBIOS BRUSCOS DE DIRECCIÓN">Tipo IV irregular: horquillas, sacacorchos. cambios bruscos de dirección</option>
              <option value="TIPO V ATÍPICO: DILATACIONES Y ESTENOSIS INTERRUPCIONES BRUSCAS">Tipo V atípico: dilataciones y estenosis interrupciones bruscas</option>

            </select>
          </div>
          <div class="relative w-full">
            <label for="ZonaDeTransformacionEntry" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Zona de transformación</label>
            <select id="ZonaDeTransformacionEntry" name="zonaDeTransformacion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
              <option value="SELECCIONA">Selecciona</option>
              <option value="TIPO I EXOCERVICAL">Tipo I exocervical</option>
              <option value="TIPO II ELEMENTOS DE LA ZT QUE SE INTRODUCEN A CANAL ENDOCERVICAL">Tipo II elementos de la zt que se introducen a canal endocervical</option>
              <option value="TIPO III ELEMENTOS DE LA ZT QUE SE INTRODUCEN COMPLETAMENTE EN CANAL ENDOCERVICAL">Tipo III elementos de la zt que se introducen completamente en canal endocervical</option>
            </select>

          </div>
          <div class="relative w-full">
            <label for="UnionEscamocilindricaEntry" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unión escamocilindrica</label>
            <select id="UnionEscamocilindricaEntry" name="unionEscamocilindrica" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
              <option value="SELECCIONA">Selecciona</option>
              <option value="VISIBLE">Visible</option>
              <option value="PARCIALMENTE VISIBLE">Parcialmente visible</option>
              <option value="NO VISIBLE">No visible</option>
            </select>
          </div>
          <div class="relative w-full">
            <label for="epitelioEscamosoEntry" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Epitelio escamoso</label>
            <select id="epitelioEscamosoEntry" name="epitelioCilindrico" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
              <option value="SELECCIONA">Selecciona</option>
              <option value="MADURO">Maduro</option>
              <option value="ATRÓFICO">Atrofíco</option>
            </select>
          </div>
          <div class="relative w-full">
            <label for="epitelioCilindricoEntry" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Epitelio cilindrico</label>
            <select id="epitelioCilindricoEntry" name="epitelioEscamoso" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
              <option value="SELECCIONA">Selecciona</option>
              <option value="CON ECTOPIA">Con Ectopia</option>
              <option value="SIN ECTOPIA">Sin Ectopia</option>
            </select>
          </div>

          <div class="relative w-full">
            <label for="testDeHinselmanEntry" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Test de Hinselman (acetico)</label>
            <select id="testDeHinselmanEntry" name="testHinselman" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
              <option value="SELECCIONA">Selecciona</option>
              <option value="POSITIVO">Positivo (+)</option>
              <option value="NEGATIVO">Negativo (-)</option>
            </select>
          </div>
          <div class="relative w-full">
            <label for="testdeSchillerEntry" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Test de Schiller</label>
            <select id="testdeSchillerEntry" name="testSchiller" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
              <option value="SELECCIONA">Selecciona</option>
              <option value="POSITIVO">Positivo (+)</option>
              <option value="NEGATIVO">Negativo (-)</option>
            </select>
          </div> <div class="relative w-full">
          <label for="colposcopiaEntry" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Colposcopia</label>
          <select id="colposcopiaEntry" name="colscopia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
            <option value="SELECCIONA">Selecciona</option>
            <option value="ADECUADA">Adecuada</option>
            <option value="NO ADECUADA">No adecuada</option>
          </select>
        </div>
          <div class="relative w-full">
            <label for="diagnostiCocolsEntry" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diagnostico Colposcopico</label>
            <select id="diagnostiCocolsEntry" name="diagnosticoCols" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
              <option value="SELECCIONA">Selecciona</option>
              <option value="SIN ALTERACIONES INFLAMATORIAS">Sin alteraciones inflamatorias</option>
              <option value="SIN ALTERACIONES">Sin alteraciones</option>
              <option value="LESIÓN GRADO I">Lesión grado I</option>
              <option value="LESIÓN GRADO II">Lesión grado II</option>
              <option value="LESIÓN SUGESTIVA DE INVASIÓN">Lesión sugestiva de invasión</option>

            </select>
          </div>
        </div>
        <div class="">
          <div class="py-2">
            <label for="vulvaYvaginaEntry" class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">Vulva y vagina</label>
            <textarea id="vulvaYvaginaEntry" name="vulvaYvagina" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="• SIN ALTERACIONES
• Morfología de la lesión (por ejemplo, mácula, pápula, parche, nódulo, úlcera, tumor, placa, vesícula, bulla, pústula, quiste).
• Tamaño y forma de las lesiones individuales.
• Borde claramente demarcado o mal definido.
• Número, localización y distribución de lesiones múltiples (por ejemplo, dispersas, agrupadas, lineales, etc.).
• Color.
• Consistencia y sensación (textura, grosor, dura/suave/firme/fluctuante).
• Presencia de cambios secundarios (excoriación, liquenificación, edema, escama, costra, fisura, erosión,
• hipopigmentacSión/hiperpigmentación,atrofia,cicatriz).
• Inflamación aguda edema, eritema)."></textarea>
          </div>
          <div class="py-2">
            <label for="hallazgosColposcopicosEntry" class="block py-2 mb-2 text-sm font-medium text-gray-900 dark:text-white">Hallazgos colposcopicos anormales</label>
            <textarea id="hallazgosColposcopicosEntry" name="hallazgosCols" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "  placeholder="• Ubicación de la lesión: dentro o fuera de la zona de Transformación, ubicacion de la lesión según las agujas del reloj.
• Tamaño de la lesión Número de cuadrantes del cuello uterino que cubre la lesión, tamaño de la lesión en porcentajes del cuello uterino.
• Grado 1 (Menor) Epitelio acetoblanco delgado. Borde irregular Mosaico fino, Puntillado fino
• Grado 2 (Mayor) Epitelio acetoblanco denso, Aparición rápida de epitelio acetoblanco.
• Orificios glandulares abieros con bordes engrosados.
• Mosaico grueso, Puntillado grueso. Bordes de limitados, Signo del límite del borde interno, Signo adicionales: Vasos delgados, superficie irregular, lesión, Zona de Transformación congénita, Condiloma, Pólipo (exocervical/endocervical) inflamación,
EstenosisAnomalía congénita, Anomalías post tratamiento, Endometriosis."></textarea>
          </div>
          <div class="py-2">

            <label for="comyplanEntry" class="block py-2 mb-2  text-sm font-medium text-gray-900 dark:text-white">Comentarios y plan terapeutico</label>
            <textarea id="comyplanEntry" name="comYplan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Se otorga plan terapéutico a base de ... para cervicovaginitis, terapia de reemplazo hormonal... etc.
se toma biopsia sin complicaciones, en espera de resultados para normar conducta a seguir. recabar resultados de citología en un mes."></textarea>
          </div>
        </div>

        <div class="grid-cols-3 gap-x-4 gap-y-4 grid">
          <div class="relative w-full">
            <input type="text" value="Alan Ariel Ortiz Ceceña" id="drEntry" name="dr" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="drEntry"   class="absolute bg-gray-100  text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]   px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Dr</label>
          </div>
          <div class="relative w-full">
            <input type="text" value="12124020"  id="cedProfEntry" name="cedProf" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="cedProfEntry" class="absolute bg-gray-100  text-sm text-gray-500  duration-300 transform -translate-y-4 scale-75 top-2 z-9 origin-[0]   px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Ced. Profesional</label>
          </div>
        </div>
      </div>
      <div>
        <div class="justify-center flex my-4">
          <p class="text-xl font-medium" >EVIDENCIAS</p>
        </div>
        <div class="grid-cols-2 grid">
          <div class=" mx-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="formFile1">Evidencia 1</label>
            <input id="formFile1" name="formFile1" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none " type="file">
          </div>
          <div class="mx-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="formFile2">Evidencia 2</label>
            <input id="formFile2" name="image2"  class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none "   type="file">
          </div>
          <div class=" m-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="formFile3">Evidencia 3</label>
            <input id="formFile3" name="image3"  class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none "   type="file">
          </div>
          <div class="m-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="formFile4">Evidencia 4</label>
            <input id="formFile4" name="image4" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none "  type="file">
          </div>
        </div>
      </div>
        <div class="m-10 justify-end flex space-x-4">
            <button onclick="cleanInputs();return false" class="bg-[#212936]
            p-4 mb-2 leading-6  rounded-lg text-white font-semibold shadow-lg hover:bg-[#28A745]">Restaurar Campos</button>

            <button onclick="getData();return false;" target="_blank" class="bg-[#212936]
            p-4 mb-2 leading-6  rounded-lg text-white font-semibold shadow-lg hover:bg-[#28A745]">Generar PDF</button>


        </div>
    </form>
  </div>
</div>
</body>




