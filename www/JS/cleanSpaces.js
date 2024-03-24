function cleanInputs(){
    var answer = confirm('Estas seguro que deseas limpiar los campos? ');
    if(answer){
        $('#inputName').val('');
        $('#dateOfStudiesEntry').val('');
        $('#FolioEntry').val('');
        $('#MedicToStudies').val('');
        $('#ageinput').val('');
        $('#pregnanciesEntry').val('');
        $('#birthsEntry').val('');
        $('#abortionsEntry').val('');
        $('#cSectionEntry').val('');
        $('#fumEntry').val('');
        $('#cervixEntry option:selected').val('');
        $('#patronVascularEntry option:selected').val('');
        $('#ZonaDeTransformacionEntry option:selected').val('');
        $('#UnionEscamocilindricaEntry option:selected').val('');
        $('#epitelioEscamosoEntry option:selected').val('');
        $('#epitelioCilindricoEntry option:selected').val();
        $('#testDeHinselmanEntry option:selected').val('');
        $('#testdeSchillerEntry option:selected').val('');
        $('#colposcopiaEntry option:selected').val('');
        $('#diagnostiCocolsEntry option:selected').val('');
        $('#vulvaYvaginaEntry').val('');
        $('#hallazgosColposcopicosEntry').val('');
        $('#comyplanEntry').val('');
        $('#formFile1').val('');
        $('#formFile2').val('');
        $('#formFile3').val('');
        $('#formFile4').val('');
    }
}