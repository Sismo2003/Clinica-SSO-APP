<?php
include_once 'db/con.php';
$conn = connection();


function gineco_obstetricos($conn){
    // getting the values from the endpoint
    $pregnancies = $_REQUEST['pregnancies'];
    $births = $_REQUEST['births'];
    $abortions = $_REQUEST['abortions'];
    $cSection = $_REQUEST['cSection'];
    $fum = $_REQUEST['fum'];

    // sql insertion
    try{
        $query = "INSERT INTO gineco_obstetricos(EMBARAZOS,PARTOS,ABORTOS,CESARIAS,FUM) 
        VALUES ('$pregnancies','$births', '$abortions', '$cSection', '$fum')";
        $res = $conn->query($query);

        // get table id
        $query = "SELECT ID FROM gineco_obstetricos WHERE ID = LAST_INSERT_ID();";
        $res = $conn->query($query);
        $row = $res->fetch_assoc();
        return array("status"=>"1","gineco_id"=>$row['ID']);
    }
    catch(mysqli_sql_exception){
        return array("status"=>"0","error"=>"Error during the gineco_obstetricos function ".$conn->error);
    }
}

function comentarios($conn){ // Insertion to the table comentarios!
    // getting the values from the endpoint

    $vulvaYvagina = $_REQUEST['vulvaYvagina'];
    $hallazgosCols = $_REQUEST['hallazgosColsp'];
    $comYplan = $_REQUEST['comyplan'];
    // sql insertion
    try{
        $query = "INSERT INTO comentarios(VULVA_Y_VAGINA,HALLAZGOS_COLPOSCOPICOS_ANORMALES,PLAN_TERAPEUTICO) 
        VALUES ('$vulvaYvagina','$hallazgosCols','$comYplan')";
        $res = $conn->query($query);

        $query = "SELECT ID FROM comentarios WHERE ID = LAST_INSERT_ID();";
        $res = $conn->query($query);
        $row = $res->fetch_assoc();
        return array("status"=>"1","comentarios"=>$row['ID']);

    }
    catch(mysqli_sql_exception){
        return array("status"=>"0","error"=>"Error during the gineco_obstetricos function ".$conn->error);
    }
}

function responsable($conn){ // Insertion to the table responsable
    // getting the values from the endpoint
    $dr = $_REQUEST['dr'];
    $cedProf = $_REQUEST['cedProf'];
    // sql insertion
    try{
        $query = "INSERT INTO responsable(NOMBRE,CED_PROFESIONAL) 
        VALUES ('$dr','$cedProf')";
        $res = $conn->query($query);

        $query = "SELECT ID FROM responsable WHERE ID = LAST_INSERT_ID();";
        $res = $conn->query($query);
        $row = $res->fetch_assoc();
        return array("status"=>"1","responsable"=>$row['ID']);
    }
    catch(mysqli_sql_exception){
        return array("status"=>"0","error"=>"Error during the gineco_obstetricos function ".$conn->error);
    }
}

function colposcopicos($conn){ // Insertion to the table responsable
    // getting the values from the endpoint
    $cervix = $_REQUEST['cervix'];
    $patronVascular = $_REQUEST['patronVascular'];
    $zonaDeTransformacion = $_REQUEST['zonaDeTransformacion'];
    $unionEscamocilindrica = $_REQUEST['unionEscamocilindrica'];
    $epitelioCilindrico = $_REQUEST['epitelioCilindrico'];
    $epitelioEscamoso = $_REQUEST['epitelioEscamoso'];
    $testHinselman = $_REQUEST['testHinselman'];
    $testSchiller = $_REQUEST['testSchiller'];
    $colscopia = $_REQUEST['colscopia'];
    $diagnosticoCols = $_REQUEST['diagnosticoCols'];

    // sql insertion
    try{
        $query = "INSERT INTO colposcopicos(CERVIX, PATRON_VASCULAR, ZONA_DE_TRANSFORMACION,
        UNION_ESCAMOCILINDRICA, EPITELIO_ESCAMOSO, EPITELIO_CILINDRICO, TEST_DE_HINSELMAN,
        TEST_DE_SCHILLER, COLPOSCOPIA, DIAGNOSTICO_COLPOSCOPICO) 
        VALUES ('$cervix','$patronVascular','$zonaDeTransformacion', '$unionEscamocilindrica','$epitelioEscamoso',
        '$epitelioCilindrico','$testHinselman','$testSchiller','$colscopia','$diagnosticoCols')";
        $res = $conn->query($query);

        $query = "SELECT ID FROM colposcopicos WHERE ID = LAST_INSERT_ID();";
        $res = $conn->query($query);
        $row = $res->fetch_assoc();
        return array("status"=>"1","colposcopicos"=>$row['ID']);
    }
    catch(mysqli_sql_exception){
        return array("status"=>"0","error"=>"Error during the gineco_obstetricos function ".$conn->error);
    }
}
function insert_pacient($conn){
    $flag = true;
    $gine = gineco_obstetricos($conn);
    if($gine['status'] == 1) $g = $gine['gineco_id'];
    else $flag = false;

    $come = comentarios($conn);
    if($come['status'] == 1) $cm = $come['comentarios'];
    else $flag = false;

    $respo = responsable($conn);
    if($respo['status'] == 1) $r = $respo['responsable'];
    else $flag = false;

    $cols = colposcopicos($conn);
    if($cols['status'] == 1 ) $c =$cols['colposcopicos'];
    else $flag = false;
    if($flag){
        try {
           $name = $_REQUEST['name'];
            $age = $_REQUEST['age'];
            $dateStudies = $_REQUEST['dateofStudies'];
            $query = "INSERT INTO paciente (NOMBRE,EDAD,FECHA_DE_ESTUDIOS, RESPONSABLE_ID, 
        COMENTARIOS_ID,COLPOS_ID,DGO_ID) values ('$name','$age','$dateStudies','$r','$cm','$c','$g')";
            $res = $conn->query($query);
            $rows = $conn->affected_rows;
            return array("status"=>"1","affected rows"=> $rows);

        }catch (mysqli_sql_exception){
            array("status"=>"0","error"=>"Error during the gineco_obstetricos function ".$conn->error);
        }
    }else{
        array("status"=>"0","error"=>"Error ik. ".$conn->error);
    }



}
$ans = insert_pacient($conn);
echo $ans['status'];







