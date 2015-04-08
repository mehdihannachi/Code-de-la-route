<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cdlr\codeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;

/**
 * Description of GrapheController
 *
 * @author Boj
 */
class GrapheController extends Controller {

    public function chartPieAction() {
        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('Nombre d\'utilisateur');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                "SELECT count(c.id)
                 FROM CdlrUserBundle:User c where c.type='2'"
        );
        $candidat = $query->getSingleScalarResult();
        $c=(int)$candidat;

        $em1 = $this->getDoctrine()->getManager();
        $query1 = $em1->createQuery(
                "SELECT count(g.id)
                 FROM CdlrUserBundle:User g where g.type='3'"
        );
        $gerant = $query1->getSingleScalarResult();
        $g =(int)$gerant;

        $em2 = $this->getDoctrine()->getManager();
        $query2 = $em2->createQuery(
                "SELECT count(m.id)
                 FROM CdlrUserBundle:User m where m.type='4'"
        );
        $moniteur = $query2->getSingleScalarResult();
        $m=(int)$moniteur;
        
        $data = array(
            array('Candidat', $c),
            array('Gerant', $g),
            array('Moniteur', $m),
        );
        $ob->series(array(array('type' => 'pie', 'name' => 'Nombre', 'data' => $data)));
        return $this->render('CdlrcodeBundle:Graphe:pie.html.twig', array(
                    'chart' => $ob
        ));
    }

}
