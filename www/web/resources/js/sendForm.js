function getData(){
    const name = $('#inputName').val();
    const dateofStudies = $('#dateOfStudiesEntry').val();
    const folio = $('#FolioEntry').val();
    const medicto = $('#MedicToStudies').val();
    const age = $('#ageinput').val();
    const pregnancies = $('#pregnanciesEntry').val();
    const births = $('#birthsEntry').val();
    const abortions = $('#abortionsEntry').val();
    const cSection = $('#cSectionEntry').val();
    const fum = $('#fumEntry').val();
    const cervix = $('#cervixEntry option:selected').val();
    const patronVascular = $('#patronVascularEntry option:selected').val();
    const zonaDeTransformacion = $('#ZonaDeTransformacionEntry option:selected').val();
    const unionEscamocilindrica = $('#UnionEscamocilindricaEntry option:selected').val();
    const epitelioEscamoso = $('#epitelioEscamosoEntry option:selected').val();
    const epitelioCilindrico = $('#epitelioCilindricoEntry option:selected').val();
    const testHinselman = $('#testDeHinselmanEntry option:selected').val();
    const testSchiller = $('#testdeSchillerEntry option:selected').val();
    const colscopia = $('#colposcopiaEntry option:selected').val();
    const diagnosticoCols = $('#diagnostiCocolsEntry option:selected').val();
    const vulvaYvagina = $('#vulvaYvaginaEntry').val();
    const hallazgosColsp = $('#hallazgosColposcopicosEntry').val();
    const comyplan = $('#comyplanEntry').val();
    const dr = $('#drEntry').val();
    const cedProf = $('#cedProfEntry').val();
    const image1 = $('#formFile1').val();
    const image2 = $('#formFile2').val();
    const image3 = $('#formFile3').val();
    const image4 = $('#formFile4').val();
    const formData = {
        name, dateofStudies, folio, medicto, age, pregnancies, births, abortions, cSection, fum, cervix, patronVascular, zonaDeTransformacion, unionEscamocilindrica,
        epitelioCilindrico,epitelioEscamoso, testSchiller, testHinselman, colscopia, diagnosticoCols, vulvaYvagina, hallazgosColsp, comyplan, dr, cedProf
    }
    
    if(name.length <= 1 || dateofStudies.length <= 1|| medicto.length <= 1 || age.length == 0 || pregnancies.length == 0 ||
        births.length == 0 || abortions.length == 0 || cSection.length == 0 || fum.length == 0 || cervix == "SELECCIONA" ||
        patronVascular == "SELECCIONA" || zonaDeTransformacion == "SELECCIONA" || unionEscamocilindrica == "SELECCIONA" ||
        epitelioCilindrico == "SELECCIONA" || testHinselman == "SELECCIONA" ||testSchiller== "SELECCIONA" || colscopia== "SELECCIONA"
        || diagnosticoCols == "SELECCIONA" || dr.length <=1 || cedProf.length <=1){
        alert("Faltan campos en el documento.");
    }
    else{
    $.ajax({
        url: "services/db/pacient_insert.php",
        type: "POST",
        data: formData,
        success: function(res) {
            document.mainForm.method = 'POST';
            document.mainForm.action = 'mpdfCreator.php';
            document.mainForm.submit();
        },
        error: function() {
            alert('Error al enviar el formulario. Intente de nuevo más tarde.');
        }
    });

    }
}