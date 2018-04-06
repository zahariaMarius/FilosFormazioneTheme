<?php

$path_comune_immagini = get_template_directory_uri() . "/dati-comuni/img-sedi/";


// Array con info sedi:

$sedi_filos = array ();

$sedi_filos['torino']['nome'] = 'Filos Torino';
$sedi_filos['torino']['sedeoperativa'] = 'Corso Grosseto 194 - 10148 TORINO';
$sedi_filos['torino']['sedelegale'] = 'Piazza Carlo Felice, 18 – 10121 TORINO';
$sedi_filos['torino']['ufficiamministrativi'] = 'Via XX Settembre, 22 – 10121 TORINO';
$sedi_filos['torino']['telefono'] = '+39 011 5620017';
$sedi_filos['torino']['fax'] = '+39 011 5623033';
$sedi_filos['torino']['foto'] = $path_comune_immagini."sedetorino.jpg";
$sedi_filos['torino']['email'] = 'indirizzofaketorino@filos.it';
$sedi_filos['torino']['linkaltrasede'] = './sedi-e-contatti/?citta=novara';
$sedi_filos['torino']['altracitta'] = 'Novara';
//serve altro ?

$sedi_filos['novara']['nome'] = 'Filos Novara';
$sedi_filos['novara']['sedeoperativa'] = 'Via Negri 2 - 28100 NOVARA';
$sedi_filos['novara']['sedelegale'] = 'Piazza Carlo Felice, 18 – 10121 TORINO';
$sedi_filos['novara']['ufficiamministrativi'] = 'Via XX Settembre, 22 – 10121 TORINO';
$sedi_filos['novara']['telefono'] = '+39 0321 391777';
$sedi_filos['novara']['fax'] = '+39 0321 623058';
$sedi_filos['novara']['foto'] = $path_comune_immagini . "sedenovara.jpg";
$sedi_filos['novara']['email'] = 'indirizzofakenovara@filos.it';
$sedi_filos['novara']['linkaltrasede'] = './sedi-e-contatti/?citta=torino';
$sedi_filos['novara']['altracitta'] = 'Torino';

$citta = isset($_GET['citta']) ? $_GET['citta'] : 'torino';

