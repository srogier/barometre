<?php

namespace Afup\BarometreBundle\Enums;

class JobTitleEnums extends AbstractEnums
{
    const DIRECTEUR          = 1;
    const RESPONSABLE_EQUIPE = 2;
    const CHEF_PROJET        = 3;
    const LEAD_DEVELOPPEUR   = 4;
    const ARCHITECTE         = 5;
    const CONSULTANT         = 6;
    const FORMATEUR          = 7;
    const DEVELOPPEUR        = 8;

    /**
     * @var array
     */
    protected $choices = array(
        self::DIRECTEUR          => "Directeur, cadre dirigeant",
        self::RESPONSABLE_EQUIPE => "Cadre intermédiaire, responsable d'équipe",
        self::CHEF_PROJET        => "Chef de projet",
        self::LEAD_DEVELOPPEUR   => "Lead développeur",
        self::ARCHITECTE         => "Architecte",
        self::CONSULTANT         => "Consultant",
        self::FORMATEUR          => "Formateur",
        self::DEVELOPPEUR        => "Développeur",
        self::AUTRE              => "Autre",
    );
}
