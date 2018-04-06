<?php 

$getXacf = array(
    'acconciatura' => 'Acconciatura',
    'meccanica' => 'Meccanica',
    'sociosanitario' => 'Socio Sanitario',
    'termoidraulica' => 'Termoidraulica',
    'giovaniobbligoformativo' => 'Giovani in obbligo formativo (14-18 anni)',
    'sistemaduale' => 'Sistema Duale / Alternanza scuola-lavoro',
    'ifts' => 'IFTS - Diplomati e Laureati',
    'disoccupati' => 'Disoccupati',
    'inoccupati' => 'Inoccupati',
    'occupati' => 'Occupati',
    'cassaintegrati' => 'Cassa Integrati',
    'diurno' => 'Diurno',
    'diurnomattino' => 'Diurno (solo mattino)',
    'diurnopomeriggio' => 'Diurno (solo pomeriggio)',
    'serale' => 'Serale',
    'gratis' => 'Corso GRATUITO',
    'cofinanziato' => 'Corso GRATUITO - Progetto cofinanziato dal Fondo Sociale Europeo, nell’ambito del Programma Operativo FSE Piemonte 2014-2020',
    'apagamento' => 'Corso a PAGAMENTO',
    'novara' => 'Novara - Via Negri 2',
    'torino' => 'Torino - C.so Grosseto 194'
);



$args = array(
    'numberposts' => -1,
    'post_type' => 'corso',
    'meta_query' => array(
        'relation' => 'OR',
        array(
            'key' => 'categoria_del_corso',
            'value' => $getXacf[$corso],
            'compare' => '=',
        ),
        array(
            'key' => 'rivolto_a',
            'value' => $getXacf[$rivolto_a],
            'compare' => '=',
        ),
        array(
            'key' => 'orario',
            'value' => $getXacf[$orario],
            'compare' => '=',
        ),
        array(
            'key' => 'costo',
            'value' => $getXacf[$costo],
            'compare' => '=',
        ),
        array(
            'key' => 'sede_operativa',
            'value' => $getXacf[$sede],
            'compare' => '=',
        ),
    ),
);

$the_query = new WP_Query($args);