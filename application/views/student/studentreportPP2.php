<?php

require_once APPPATH . '../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->SetTitle($title);
$content = "";
if(!empty($myContent)){
        foreach($myContent as $c){
                $content .= $c;
        }
}
$mpdf->WriteHTML($content);
$mpdf->Output();