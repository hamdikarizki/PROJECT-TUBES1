<?php

/*
**title (String)
**link (String)
**description (String)
**enclosure (array)
**pubDate (String)
**guid (String)
*/

$xml = new SimpleXMLElement('http://simamaung.com/feed/',NULL,TRUE);

/* deklarasi untuk menangkap parsing data dari situs detik.com */
$detik_baca = $xml[0]->channel[0]->item;

/* Menata Berita */
$data = "<div align ='left' width='200px'>";
echo "========================================================================";
for($i = 0; $i < count($detik_baca);$i++){
$data .= "<h4><a href='". $detik_baca[$i]->guid."'>".$detik_baca[$i]->title."</a></h4>";
$data .= "<p align='justify'>".strip_tags($detik_baca[$i]->description)."</p>";
$data .= "<p size='5'>".$detik_baca[$i]->pubDate."</p>";
$data .= "======================================================================== \n";
}
$data .= "</div>";
echo $data;
?>
