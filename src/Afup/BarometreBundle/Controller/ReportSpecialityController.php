<?php

namespace Afup\BarometreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ReportSpecialityController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        $query = $this->get('afup.barometre.query_builder_factory')->getResponse();

        $results = $this->get('afup.barometre.reports.response')->getSpecialityReport($query);
        return $this->render(
            'AfupBarometreBundle:Report:speciality.html.twig',
            array(
                'results' => $results,
            )
        );
    }
}
