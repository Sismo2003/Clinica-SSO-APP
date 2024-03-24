function getData(){
    var name = $('#inputName').val();
    var dateofStudies = $('#dateOfStudiesEntry').val();
    var folio = $('#FolioEntry').val();
    var medicto = $('#MedicToStudies').val();
    var age = $('#ageinput').val();
    var pregnancies = $('#pregnanciesEntry').val();
    var births = $('#birthsEntry').val();
    var abortions = $('#abortionsEntry').val();
    var cSection = $('#cSectionEntry').val();
    var fum = $('#fumEntry').val();
    var cervix = $('#cervixEntry option:selected').val();
    var patronVascular = $('#patronVascularEntry option:selected').val();
    var zonaDeTransformacion = $('#ZonaDeTransformacionEntry option:selected').val();
    var unionEscamocilindrica = $('#UnionEscamocilindricaEntry option:selected').val();
    var epitelioEscamoso = $('#epitelioEscamosoEntry option:selected').val();
    var epitelioCilindrico = $('#epitelioCilindricoEntry option:selected').val();
    var testHinselman = $('#testDeHinselmanEntry option:selected').val();
    var testSchiller = $('#testdeSchillerEntry option:selected').val();
    var colscopia = $('#colposcopiaEntry option:selected').val();
    var diagnosticoCols = $('#diagnostiCocolsEntry option:selected').val();
    var vulvaYvagina = $('#vulvaYvaginaEntry').val();
    var hallazgosColsp = $('#hallazgosColposcopicosEntry').val();
    var comyplan = $('#comyplanEntry').val();
    var dr = $('#drEntry').val();
    var cedProf = $('#cedProfEntry').val();
    var image1 = $('#formFile1').val();
    var image2 = $('#formFile2').val();
    var image3 = $('#formFile3').val();
    var image4 = $('#formFile4').val();
    if(name.length <= 1 || dateofStudies.length <= 1 || medicto.length <= 1 || age.length == 0 || pregnancies.length == 0 ||
        births.length == 0 || abortions.length == 0 || cSection.length == 0 || fum.length == 0 || cervix == "SELECCIONA" ||
        patronVascular == "SELECCIONA" || zonaDeTransformacion == "SELECCIONA" || unionEscamocilindrica == "SELECCIONA" ||
        epitelioCilindrico == "SELECCIONA" || testHinselman == "SELECCIONA" ||testSchiller== "SELECCIONA" || colscopia== "SELECCIONA"
        || diagnosticoCocols== "SELECCIONA" || valvulaVagina.length <= 1 || hallazgosColsp.length <= 1 || comyplan.length <= 1 ||
        dr.length <=1 || cedProf.length <=1){
        alert("Faltan campos en el documento");
    }
    else{
        alert('3ntrp');
        document.mainForm.method = 'POST';
        document.mainForm.action = 'mpdfCreator.php';
        document.mainForm.submit();
    }
}


