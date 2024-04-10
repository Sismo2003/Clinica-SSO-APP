<?php

    require_once __DIR__ . '/../vendor/autoload.php';
    $name = $_REQUEST['name'];
    $dateStudies = $_REQUEST['dateStudies'];
    //$folio = $_REQUEST['folio'];
    $medicTo = $_REQUEST['medicTo'];
    $age = $_REQUEST['age'];
    $pregnancies = $_REQUEST['pregnancies'];
    $births = $_REQUEST['births'];
    $abortions = $_REQUEST['abortions'];
    $cSection = $_REQUEST['cSection'];
    $fum = $_REQUEST['fum'];
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
    $vulvaYvagina = $_REQUEST['vulvaYvagina'];
    $hallazgosCols = $_REQUEST['hallazgosCols'];
    $comYplan = $_REQUEST['comYplan'];
    $dr = $_REQUEST['dr'];
    $cedProf = $_REQUEST['cedProf'];
    $folio = 0;

    if(isset($_FILES['formFile1']['name'])){
        $image1_name = $_FILES['formFile1']['name'];
        $image1_tmp = $_FILES['formFile1']['tmp_name'];
        $image1_md5_finalName = md5($image1_tmp);
        $image1_type = explode('.',$image1_name);
        $image1_path = '../pacientPhotos/' . $image1_md5_finalName . '.' . $image1_type[1];
        //move_uploaded_file($image1_tmp,$image1_path);
    }
    if(isset($_FILES['image2']['name'])){
        $image2_name = $_FILES['image2']['name'];
        $image2_tmp = $_FILES['image2']['tmp_name'];
        $image2_md5_finalName = md5($image2_tmp);
        $image2_type = explode('.',$image2_name);
        $image2_path = '../pacientPhotos/' . $image2_md5_finalName . '.' . $image2_type[1];
        //move_uploaded_file($image2_tmp,$image2_path);
    
    }

    if(isset($_FILES['image3']['name'])){
        $image3_name = $_FILES['image3']['name'];
        $image3_tmp = $_FILES['image3']['tmp_name'];
        $image3_md5_finalName = md5($image3_tmp);
        $image3_type = explode('.',$image3_name);
        $image3_path = '../pacientPhotos/' . $image3_md5_finalName . '.' . $image3_type[1];
        //move_uploaded_file($image3_tmp,$image3_path);
    }

    if(isset($_FILES['image4']['name'])){
        $image4_name = $_FILES['image4']['name'];
        $image4_tmp = $_FILES['image4']['tmp_name'];
        $image4_md5_finalName = md5($image4_tmp);
        $image4_type = explode('.',$image4_name);
        $image4_path = '../pacientPhotos/' . $image4_md5_finalName . '.' . $image4_type[1];
        //move_uploaded_file($image4_tmp,$image4_path);
    }




    $logoPath = __DIR__ . '/../img/logoWhiteBG.png';
    $logoData = base64_encode(file_get_contents($logoPath));
    $logoSrc = 'data:image/png;base64,'.$logoData;

    $sublogo = __DIR__ . '/../img/logo.png';
    $subdata = base64_encode(file_get_contents($sublogo));
    $sublogosrc = 'data:image/png;base64,'.$subdata;

    $mpdf = new \Mpdf\Mpdf();
    $mpdf->SetDefaultFont('Arial');

    $mpdf->WriteHTML('
    <!DOCTYPE html>
<html lang="en">
  <head>

        <title>Reporte</title>
      <meta charset="UTF-8">
  </head>
    <style>
       
        .titles{
            display: flex;
            align-content: center;
            align-items: center;
            justify-content: center;
            padding-left: 23%;
        }
       body h3{
           display: flex;
           padding-left: 33%;
           color: #7030A0;
       }
       body h1{
        color: #7030A0;
       }
       .table{
            display: table;
            border: #1a1d20 solid 3px;
       }
       .tableHeaders{
            background-color: #DEEAF6;
       }
       body table td{
            padding-left: 10px
       }
       body h4{
            color: #7030A0;
       }
       .textG{
            font-size: 35px;
            font-family: "monospace", sans-serif;
       }
      
      
    </style>

    <body style="background-image: url('.$logoSrc.'); background-repeat: no-repeat; margin: auto; background-position: center center" >

        <h1 class="titles">REPORTE COLPOSCOPICO  <img style="width: 100px; height=150px; padding: 10px"  src="'.$sublogosrc.'"> </h1>
        <h3>SSO Salud Sexual Oportuna  </h3>
       

        
        

        <br><br><br>
        
        
        <table style="border: 3; border-collapse: collapse; width: 2000px; height: 500px ; ">
            <tr>
                <td style="border: #1a1d20 solid 3px; " class="tableHeaders"><h1>PACIENTE</h1></td>
                <td colspan="2" class="tableHeaders" style="border: #1a1d20 solid 3px; "><h1>FECHA DE ESTUDIO</h1></td>
            </tr>
             <tr>   
                <td style="border: #1a1d20 solid 3px; width: 30px;height: 80px;"> <p class="textG">'.$name.'  </p>  </td>
                <td colspan="2" style="border: #1a1d20 solid 3px; width: 30px;height: 90px;">  <p class="textG">'.$dateStudies.'</p>  </td>
            </tr> 
            <tr>   
                <td style="border: #1a1d20 solid 3px;"  class="tableHeaders"><h1>MEDICO A QUIEN VA DIRIGIDO EL ESTUDIO</h1></td>
                <td style="border: #1a1d20 solid 3px;" class="tableHeaders"><h1>EDAD</h1></td>
                <td style="border: #1a1d20 solid 3px;" class="tableHeaders"><h1>FOLIO</h1></td>
            </tr>      
            <tr>   
                <td style="border: #1a1d20 solid 3px;width: 30px;height: 80px; ">  <p class="textG">'.$medicTo.'</p> </td>
                <td style="border: #1a1d20 solid 3px;width: 30px;height: 80px;"> <p class="textG">'.$age.'</p> </td>
                <td style="border: #1a1d20 solid 3px;width: 30px;height: 80px;"> <p class="textG">'.$folio.'</p> </td>
            </tr>
        </table>
        
           
        <h4>DATOS GINECO OBSTÉTRICOS  </h4>
          <table style="border: 3; border-collapse: collapse; width: 2000px; height: 500px">
            <tr>
                <td style="border: #1a1d20 solid 3px; "  class="tableHeaders"><h1>EMBARAZOS</h1></td>
                <td style="border: #1a1d20 solid 3px;  width: 110px;height: 90px; "><p class="textG">'.$pregnancies.' </p></td>
                <td style="border: #1a1d20 solid 3px; " class="tableHeaders"><h1>PARTOS</h1></td>
                <td style="border: #1a1d20 solid 3px;  width: 110px;height: 90px;"><p class="textG">'.$births.' </p></td>
                <td style="border: #1a1d20 solid 3px; " class="tableHeaders"><h1>CESÁREAS</h1></td>
                <td style="border: #1a1d20 solid 3px; background-color: #ffffff; width: 90px;height: 90px;"><p class="textG">'.$cSection.' </p></td>
                <td style="border: #1a1d20 solid 3px; " class="tableHeaders"><h1>ABORTOS</h1></td>         
                <td style="border: #1a1d20 solid 3px;  width: 110px;height: 90px;"><p class="textG">'.$abortions.' </p></td>         
                <td style="border: #1a1d20 solid 3px; " class="tableHeaders"><h1>FUM</h1></td>         
                <td style="border: #1a1d20 solid 3px;  width: 110px;height: 90px;"><p class="textG">'.$fum.' </p></td>
            </tr>
        </table>
        <h4>DATOS COLPOSCOPICOS </h4>
        <table style="border: 3; border-collapse: collapse; width: 2000px; height: 500px">
            <tr>
                <td class="tableHeaders"  colspan="3" style="border: #1a1d20 solid 3px ;  "><h1>VULVA Y VAGINA</h1></td>
            </tr>            
            <tr>
                <td colspan="3" style="border: #1a1d20 solid 3px; height: 400px "><p class="textG">'.$vulvaYvagina.'</p></td>
            </tr>
            <tr>
                <td class="tableHeaders" style="border: #1a1d20 solid 3px; " > <h1>CERVIX</h1></td>
                <td class="tableHeaders" style="border: #1a1d20 solid 3px; " > <h1>PATRON VASCULAR (ARAGONÉS)</h1></td>
                <td class="tableHeaders" style="border: #1a1d20 solid 3px; " > <h1>ZONA DE TRANSFORMACION</h1></td>
            </tr>  
            <tr>
                <td style="border: #1a1d20 solid 3px; width: 110px;height: 250px;"><p class="textG">'.$cervix.'</p></td>
                <td style="border: #1a1d20 solid 3px; width: 110px;height: 250px;"><p class="textG">'.$patronVascular.'</p></td>
                <td style="border: #1a1d20 solid 3px; width: 110px;height: 250px;"><p class="textG">'.$zonaDeTransformacion.'</p></td>
            </tr>     
            <tr>
                <td class="tableHeaders" style="border: #1a1d20 solid 3px; "> <h1>UNION ESCAMOCILINDRICA</h1></td>
                <td class="tableHeaders" style="border: #1a1d20 solid 3px; "> <h1>EPITELIO ESCAMOSO</h1></td>
                <td class="tableHeaders" style="border: #1a1d20 solid 3px; "> <h1>EPITELIO CILINDRICO</h1></td>
            </tr>   
            <tr>
                <td style="border: #1a1d20 solid 3px; width: 110px;height: 250px;"><p class="textG">'.$unionEscamocilindrica.'</p></td>
                <td style="border: #1a1d20 solid 3px; width: 110px;height: 250px;"><p class="textG">'.$epitelioEscamoso.'</p></td>
                <td style="border: #1a1d20 solid 3px; width: 110px;height: 250px;"><p class="textG">'.$epitelioCilindrico.'</p></td>
            </tr>       
            <tr>
                <td class="tableHeaders" style="border: #1a1d20 solid 3px; "> <h1>TEST DE HINSELMAN (ACETICO)</h1></td>
                <td class="tableHeaders" style="border: #1a1d20 solid 3px; "> <h1>TEST DE SCHILLER</h1></td>
                <td class="tableHeaders" style="border: #1a1d20 solid 3px; "> <h1>COLPOSCOPIA</h1></td>
            </tr>
            <tr>
                <td style="border: #1a1d20 solid 3px; width: 110px;height: 250px;"><p class="textG">'.$testHinselman.'</p></td>
                <td style="border: #1a1d20 solid 3px; width: 110px;height: 250px;"><p class="textG">'.$testSchiller.'</p></td>
                <td style="border: #1a1d20 solid 3px; width: 110px;height: 250px;"><p class="textG">'.$colscopia.'</p></td>
            </tr>   

        </table>
                <br><br><br>
        <h1 class="titles">REPORTE COLPOSCOPICO <img style="width: 100px; height=150px; padding: 10px"  src="'.$sublogosrc.'"></h1>
        <h3>SSO Salud Sexual Oportuna</h3>
        <br><br><br>
        
       <table style="border: 3; border-collapse: collapse; width: 2000px; height: 500px">
            <tr>
                <td class="tableHeaders" style="border: #1a1d20 solid 3px;"  COLSPAN="2"><h1>HALLAZGOS COLPOSCOPICOS ANORMALES</h1></td>
            </tr>         
            <tr> 
                <td style="border: #1a1d20 solid 3px; height: 400px;" colspan="2" ><p class="textG">'.$hallazgosCols.'</p> </td>
            </tr>

             <tr>
                <td class="tableHeaders" style="border: #1a1d20 solid 3px; " colspan="1" ><h1>DIAGNOSTICO COLPOSCOPICO</h1></td>
                <td class="tableHeaders" style="border: #1a1d20 solid 3px;" colspan="1" ><h1>COMENTARIOS Y PLAN TERAPEUTICO</h1></td>
            </tr>
            <tr>
                <td style="border: #1a1d20 solid 3px; width: 50%;height: 400px; " colspan="1" ><p class="textG">'.$diagnosticoCols.'</p></td>
                <td style="border: #1a1d20 solid 3px; width: 50%;height: 250px; " colspan="1" ><p class="textG"> '.$comYplan.' </p></td>
            </tr>     
            ');
    $mpdf->WriteHTML('<tr>');
    if ($_FILES['formFile1']['name']){
        $mpdf->WriteHTML('
            <td style="border: #1a1d20 solid 3px; border-bottom: none; border-right: none" colspan="1" > 
            <img style="width: 600px; height: 500px; margin: 30px"  src="'.$image1_tmp.'">
            </td>
        ');
    }else if($_FILES['formFile1']['name'] || $_FILES['image2']['name']){
        $mpdf->WriteHTML('<td style="border: #1a1d20 solid 3px; border-bottom: none; border-right: none" colspan="1" ></td>');
    }
    if($_FILES['image2']['name']){
        $mpdf->WriteHTML('
            <td  style="border: #1a1d20 solid 3px; border-left: none;border-bottom: none" colspan="1" >
                <img style="width: 600px; height: 500px; margin: 30px"  src="'.$image2_tmp.'">
            </td>
        ');
    }else if($_FILES['formFile1']['name'] || $_FILES['image2']['name']){
        $mpdf->WriteHTML('<td  style="border: #1a1d20 solid 3px; border-left: none;border-bottom: none" colspan="1" ></td>');
    }
    $mpdf->WriteHTML('</tr>');
    $mpdf->WriteHTML('<tr>');
    if($_FILES['image3']['name']){
        $mpdf->WriteHTML('
            <td style="border: #1a1d20 solid 3px; border-top: none; border-right: none" colspan="1" > 
                <img style="width: 600px; height: 500px; margin: 30px"  src="'.$image3_tmp.'">
            </td>        
        ');
    }else if($_FILES['image4']['name'] || $_FILES['image3']['name']){
        $mpdf->WriteHTML('<td style="border: #1a1d20 solid 3px; border-top: none; border-right: none" colspan="1" ></td>');
    }

    if($_FILES['image4']['name']){
        $mpdf->WriteHTML('
            <td  style="border: #1a1d20 solid 3px; border-left: none;border-top: none" colspan="1" >
                <img style="width: 600px; height: 500px; margin: 30px"  src="'.$image4_tmp.'">
            </td>
        ');
    }else if($_FILES['image4']['name'] || $_FILES['image3']['name']){
        $mpdf->WriteHTML('<td  style="border: #1a1d20 solid 3px; border-left: none;border-top: none" colspan="1" ></td>');
    }
    
    $mpdf->WriteHTML('
            </tr>
   
            <tr>
                <td class="tableHeaders" style="border: #1a1d20 solid 3px;" colspan="1" ><h1>CEDULA PROFECISIONAL</h1></td>
                <td class="tableHeaders" style="border: #1a1d20 solid 3px;" colspan="1" ><h1>Doctor</h1></td>
            </tr>         
           
            <tr>
                <td style="border: #1a1d20 solid 3px; width: 50%;height: 90px;" colspan="1" ><p class="textG">'.$cedProf.'</p></td>
                <td style="border: #1a1d20 solid 3px; width: 50%;height: 90px; border-top: none" colspan="1" ><p class="textG">'.$dr.'</p>  </td>
            </tr>
            <tr>
                <td class="tableHeaders" style="border: #1a1d20 solid 3px;" colspan="2" ><h1>FIRMA</h1></td>
            </tr>
            <tr>
                <td style="border: #1a1d20 solid 3px; width: 50%;height: 90px;" colspan="2" ><p></p></td>
            </tr>
            
       </table>
        
    </body>
    
</html>
    ');

//$mpdf->Output("REPORTECOLPOSCOPICO.pdf", 'F');
$mpdf->Output();

// Enviar el contenido del PDF como respuesta al cliente
//$file =  "REPORTECOLPOSCOPICO.pdf"; //file which in fact exists
//echo $file;
?>



