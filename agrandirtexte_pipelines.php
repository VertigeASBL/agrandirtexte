<?php
/**
 * Utilisations de pipelines par Agrandir le texte
 *
 * @plugin     Agrandir le texte
 * @copyright  2013
 * @author     Vertige/Didier
 * @licence    GNU/GPL
 * @package    SPIP\Agrandirtexte\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/*
 * Un fichier de pipelines permet de regrouper
 * les fonctions de branchement de votre plugin
 * sur des pipelines existants.
 */

function agrandirtexte_insert_head($flux) {
    $flux .= '
    <script src="'.produire_fond_statique('js/agrandir.js').'" type="text/javascript"></script>
    <script src="'.produire_fond_statique('js/lancer_agrandir.js').'" type="text/javascript"></script>';

    return $flux;
}

function agrandirtexte_insert_head_css($flux) {

    $flux .= '<link href="'.find_in_path('css/agrandirtexte.css').'" type="text/css" rel="stylesheet" />';

    return $flux;
}

?>