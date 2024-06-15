function cleanInputs(){
    var answer = confirm('Estas seguro que deseas limpiar los campos? ');
    if(answer){
        $('#inputName').val('');
        $('#dateOfStudiesEntry').val('');
        $('#FolioEntry').val('');
        $('#MedicToStudies').val('');
        $('#ageinput').val('');
        $('#pregnanciesEntry').val(0);
        $('#birthsEntry').val(0);
        $('#abortionsEntry').val(0);
        $('#cSectionEntry').val(0);
        $('#fumEntry').val('');
        $('#cervixEntry').val('SELECCIONA');
        $('#patronVascularEntry').val('SELECCIONA');
        $('#ZonaDeTransformacionEntry').val('SELECCIONA');
        $('#UnionEscamocilindricaEntry').val('SELECCIONA');
        $('#epitelioEscamosoEntry').val('SELECCIONA');
        $('#epitelioCilindricoEntry').val('SELECCIONA');
        $('#testDeHinselmanEntry').val('SELECCIONA');
        $('#testdeSchillerEntry').val('SELECCIONA');
        $('#colposcopiaEntry').val('SELECCIONA');
        $('#diagnostiCocolsEntry').val('SELECCIONA');
        $('#vulvaYvaginaEntry').val('');
        $('#hallazgosColposcopicosEntry').val('');
        $('#comyplanEntry').val('');
        $('#drEntry').val('Alan Ariel Ortiz Ceceña');
        $('#cedProfEntry').val('12124020');
        $('#formFile1').val('');
        $('#formFile2').val('');
        $('#formFile3').val('');
        $('#formFile4').val('');
    }
}