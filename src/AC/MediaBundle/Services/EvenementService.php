<?php

namespace AC\MediaBundle\Services;

/**
 * Description of evenementService
 *
 * @author inouss
 */
class EvenementService {
    public static function generateUrl(\AC\MediaBundle\Entity\Evenement $evenement) {
        $mois = array(
            "01" => "(01) Janvier",
            "02" => "(02) Janvier",
            "03" => "(03) Janvier",
            "04" => "(04) Janvier",
            "05" => "(05) Janvier",
            "06" => "(06) Janvier",
            "07" => "(07) Janvier",
            "08" => "(08) Aout",
            "09" => "(09) Septembre",
            "10" => "(10) Octobre",
            "11" => "(11) Novembre",
            "12" => "(12) Decembre"            
        );
        return $evenement->getType().'/'.
                $evenement->getDate()->format('Y').'/'.
                $mois[$evenement->getDate()->format('m')].'/';
    }
}
