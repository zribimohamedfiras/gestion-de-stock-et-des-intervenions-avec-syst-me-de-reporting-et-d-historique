<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 07/05/2017
 * Time: 12:41
 */

namespace AppBundle\Controller;

use AppBundle\Entity\bonvol;
use AppBundle\Entity\bonhotel;
use AppBundle\Entity\intervention;
use AppBundle\Entity\profile;
use AppBundle\Entity\profile_role;
use AppBundle\Entity\profile_utilisateur;
use AppBundle\Entity\role;
use AppBundle\Entity\vol;
use AppBundle\Form\VolType;
use AppBundle\Entity\vehicule;
use AppBundle\Form\Vehiculetype;
use Ob\HighchartsBundle\Highcharts\ChartOption;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Validator\Constraints\IsTrue;
use AppBundle\Entity\Article;
use AppBundle\Form\ArticleType;
use AppBundle\Form\RoleType;
use AppBundle\Form\ProfileType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Security\Core\Authentication\AuthenticationManagerInterface;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManager;
use AppBundle\Entity\utilisateur;
use AppBundle\Form\UserType;
use Symfony\Component\Validator\Constraints\IsNull;

use Zend\Json\Expr;


class chart extends Controller
{

    /**
     * @Route("/profitsHistori_station",name="profitsHistori_station")
     */



    public function profitsHistori_stationAction()
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiLocations");
        $res_station=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiTickets");
        $res_ticket=$post->findAll();

        $post=$this->getDoctrine()->getRepository("AppBundle:intervention_ticket");
        $intervention_ticket=$post->findAll();
        $nbt=0;
        foreach ($intervention_ticket as $r)
        {   $em = $this->getDoctrine()->getManager();
            $ticket[$nbt] = $r->getTicket();
            $nbt++;
        }
        $ticket=array_unique($ticket);

        $nbs = 0;
        foreach ($res_station as $r)
        {
            $res_location_id[$nbs] = $r->getLocationsId();
            $res_location_name[$nbs] = $r->getName();
            $nbs++;
        }


        //loula c'est 24==>cncg

        for ($s=0;$s< count($res_location_id) ;$s++) {
            $nbr_intr=0;
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT u FROM AppBundle:GlpiTickets u WHERE u.locationsId= :usernam');
            $query->setParameters(array(
                'usernam' => $res_location_id[$s]
            ));
            $res_ticket_id = $query->getResult();//lina les ticket ilkol il mta3 station ethika ili houma  7   8   9
            foreach ($res_ticket_id as $tm) {
                for ($t=0;$t< count($ticket);$t++) {

                    if (isset($ticket[$t]))
                    {if ($tm->getId() == $ticket[$t] )
                    {$nbr_intr++;}}}

            }


            /*        return new Response($res_location_id[$s]."===>".$uti_nbr[$s]."ssss".$nbr_intr."eeee".$tm->getId()."eee".$ticket[$t-1]."vv".$nbt );*/
            $stat_nbr[$s]=$nbr_intr;
            $res_location_id[$s]=$res_location_id[$s];

            $a[$s]=array(intval($stat_nbr[$s]));

            $nbr_intr=0;
        }


        $data=$a;

        $sellsHistory = array(
            array(
                "name" => "Nombre d'intervention totale",
                "data" => $data
                /*),
                array(
                     "name" => "Bénéfices pour la France",
                     "data" => array(6.6, 8.2, 0.76, 4.6, 2.1)
                ),*/

            ));

        /*$dates = array(
            "21/06", "22/06", "23/06", "24/06", "25/06", "26/06", "27/06"
        );*/



        $ob = new Highchart();
        // ID de l'élement de DOM que vous utilisez comme conteneur
        $ob->chart->renderTo('barchart');
        $ob->title->text("Le nombre d'intervention pour un station");
        $ob->chart->type('column');

        $ob->yAxis->title(array('text' => "Le nombre d'intervention"));


        $ob->xAxis->title(array('text' => "Les stations"));
        $ob->xAxis->categories($res_location_name);




        $ob->series($sellsHistory);

        return $this->render('chart/profitsHistori.html.twig', array(
            'barchart' => $ob
        ));
    }



    /**
     * @Route("/piechart_intervenant",name="piechart_intervenant")
     */
    public function piechart_intervenanttAction()
    {    $em10 = $this->getDoctrine()->getManager();
        $res = $em10->getRepository('AppBundle:intervention_utilisateur')->findAll();
        $i = 0;
        foreach ($res as $r) {
            $uti_id[$i] = $r->getIdutilisateur()->getId();
            $i++;}



        $uti_id=array_unique($uti_id);
        for ($j=0; $j< count($uti_id);$j++) {
            if (isset($uti_id[$j]))
            {

                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery('SELECT COUNT( (u.idutilisateur)) AS num FROM AppBundle:intervention_utilisateur u WHERE u.idutilisateur= :usernam');
                $query->setParameters(array(
                    'usernam' => $uti_id[$j]
                ));
                $nbr = $query->getSingleResult();
                $uti_nbr[$j] = $nbr['num'];


                $em = $this->getDoctrine()->getManager();
                $user = $em->getRepository('AppBundle:utilisateur')->findOneById($uti_id[$j]);


                $uti_username[$j] = $user->getUsername();
                $b[$j] = array($uti_username[$j], intval($uti_nbr[$j]));
            }
        }

        sort($b);
        $data=array();
        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text("Le nombre d'intervention pour un intervenant");
        $ob->plotOptions->pie(array(
            'allowPointSelect'  => true,//evenement ili isir kif tinzil 3leha
            'cursor'    => 'pointer',
            'dataLabels'    => array('enabled' => true),//ili maktoubin 9odem kol triangle
            'showInLegend'  => true
        ));

        $data=$b;

        $ob->series(array(array('type' => 'pie','name' => 'Intervention totale', 'data' => $data)));




        return $this->render('chart/piechart2.html.twig', array(
            'chart' => $ob
        ));
    }

    /**
     * @Route("/profitsHistori_intervenant",name="profitsHistori_intervenant")
     */


    public function profitsHistori_intervenantAction()


    {     $em10 = $this->getDoctrine()->getManager();
        $res = $em10->getRepository('AppBundle:intervention_utilisateur')->findAll();
        $nbt = 0;
        foreach ($res as $r) {
            $em = $this->getDoctrine()->getManager();
            $uti_id[$nbt] = $r->getIdutilisateur()->getId();
            $nbt++;}


        $uti_id=array_unique($uti_id);

        for ($j=0;$j<$nbt;$j++)
        {
            if (isset($uti_id[$j])) {

                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery('SELECT COUNT( (u.idutilisateur)) AS num FROM AppBundle:intervention_utilisateur u WHERE u.idutilisateur= :usernam');
                $query->setParameters(array(
                    'usernam' => $uti_id[$j]
                ));


                $nbr = $query->getSingleResult();
                $uti_nbr[$j] = $nbr['num'];

                $em = $this->getDoctrine()->getManager();
                $user = $em->getRepository('AppBundle:utilisateur')->findOneById($uti_id[$j]);
                $uti_username[$j] = $user->getUsername();

                $a[$j] = intval($uti_nbr[$j]);
            }

        }





        $uti_username = array_unique($uti_username);



        $data=$a;


        $sellsHistory = array(
            array(
                "name" => "Nombre d'intervention totale",
                "data" => $data
                /*),
                array(
                "name" => "Bénéfices pour la France",
                "data" => array(6.6, 8.2, 0.76, 4.6, 2.1)
                ),*/

            ));

        /*$dates = array(
        "21/06", "22/06", "23/06", "24/06", "25/06", "26/06", "27/06"
        );*/



        $ob = new Highchart();
// ID de l'élement de DOM que vous utilisez comme conteneur
        $ob->chart->renderTo('barchart');
        $ob->title->text("Le nombre d'intervention pour un intervenant");
        $ob->chart->type('column');

        $ob->yAxis->title(array('text' => "Le nombre d'intervention"));


        $ob->xAxis->title(array('text' => "Les intervenants"));
        $ob->xAxis->categories($uti_username);




        $ob->series($sellsHistory);

        return $this->render('chart/profitsHistori.html.twig', array(
            'barchart' => $ob
        ));
    }







    /**
     * @Route("/overviewchart",name="overviewchart")
     */

    public function overviewChartAction()
    {

        $post=$this->getDoctrine()->getRepository("AppBundle:Bon");
        $res_type=$post->findAll();


        $nbt=0;
        foreach ($res_type as $r)
        {   $em = $this->getDoctrine()->getManager();
            $table_type_art[$nbt] = $r->getTypeBon();
            $nbt++;}

        $user=$this->getDoctrine()->getRepository("AppBundle:utilisateur");
        $res_user=$user->findAll();

        $nbu=0;
        foreach ($res_user as $r)
        {   $em = $this->getDoctrine()->getManager();
            $table_user[$nbu] = $r->getId();
            $table_username[$nbu]=$r->getUsername();
            $intervenant[$nbu] = array('id_user'=>$table_user[$nbu], 'sortie' => 0, 'entree' => 0,'retour' => 0);

            $nbu++;}

        $s=0;

        $tot_article_entree=0;
        $tot_article_sortie=0;
        $tot_article_retour=0;

        for ($i = 0; $i <= $nbu-1; $i++) {
            $r = 0;
            $s = 0;
            $e = 0;

            $intervenant[$i] = array('id_user' => $table_user[$i],'sortie' => 0, 'entree' => 0, 'retour' =>0);



            $em = $this->getDoctrine()->getManager();
            $bon_user = $em->getRepository('AppBundle:bon')->findBydemandeur($intervenant[$i]['id_user']);

            $j = 0;
            foreach ($bon_user as $r) {
                $em = $this->getDoctrine()->getManager();
                $tab_type[$j] = ($r->getTypeBon());


                if ($tab_type[$j] == "sortie") {
                    $s++;

                    $intervenant[$i] = array('id_user' => $table_user[$i], 'sortie' => $s, 'entree' => $e , 'retour' => $r);

                }



                if ($tab_type[$j] == "entree") {
                    $e++;

                    $intervenant[$i] = array('id_user' => $table_user[$i], 'sortie' => $s, 'entree' => $e, 'retour' => $r);

                }


                if ($tab_type[$j] == "retour") {
                    $r++;
                    $intervenant[$i] = array('id_user' => $table_user[$i], 'sortie' => $s, 'entree' => $e, 'retour' => $r);

                }


                $j++;
            }




            $entree[$i]=$intervenant[$i]['entree'];
            $sortie[$i]=$intervenant[$i]['sortie'];


            $retour[$i]= 1;/*$intervenant[$i]['retour']*/;



            if ($entree[$i] != 0 || $sortie[$i] != 0 || $retour[$i] != 0 ) {
                $s = ($entree[$i] + $sortie[$i] + $retour[$i]) / 3;
            }

            $tot_article_user[$i]=$s;
            $tot_article_retour=$tot_article_retour+$retour[$i];
            $tot_article_entree=$tot_article_entree+$entree[$i];
            $tot_article_sortie=$tot_article_sortie+$sortie[$i];





        }
        $table_username=array_unique($table_username,SORT_REGULAR);


        $series = array(
            array(
                "name" => "retour",
                "data" => $retour/*array(9.1, 10.3, 6.5, 12.2, 5.2, 9.1)*/,
                "type" => "column"
            ),
            array(
                "name" => "Entree",
                "data" => $entree/*array(6.6, 8.2, 0.76, 4.6, 2.1, 4.1)*/,
                "type" => "column"
            ),

            array(
                "name" => "sortie",
                "data" => $sortie/*array(6.6, 8.2, 0.76, 4.6, 2.1, 4.1)*/,
                "type" => "column"
            ),
            array(
                "name" => "Moyenne des article par inervenant",
                "data" => $tot_article_user /*array(683, 756, 543, 1208, 617, 990)*/,
                "type" => "spline",
                "yAxis" => 1,
            ),

            array(
                "type" => "pie",
                "name" => "Totale des Article par type",
                "data" => array(
                    array('retour', $tot_article_retour),
                    array('Entree', $tot_article_entree),
                    array('Sortir', $tot_article_sortie),
                ),
                "center" => array(50, 50),
                "size" => 100,
                "showInLegend" => true,
                "dataLabels" => array(
                    "enabled" => true
                )
            )
        );

        $yData = array(
            array(
                'title' => array(
                    'text'  => "Nombre d'article",
                    'style' => array('color' => '#AA4643')
                ),
                'opposite' => true,
            ),
            array(
                'title' => array(
                    'text'  => "Moyenne des article par inervenant",
                    "data" => $tot_article_user,
                    'style' => array('color' => '#4572A7')
                ),
            ),
        );

        /* $dates = array(
             "21/06", "22/06", "23/06", "24/06", "25/06", "26/06", "27/06"
         );*/

        $dates =$table_username;


        $ob = new Highchart();
        // ID de l'élement de DOM que vous utilisez comme conteneur
        $ob->chart->renderTo('overviewchart');
        $ob->title->text('Mouvement des articles ');

        $ob->yAxis->title(array('text'  => "Moyenne des article par inervenant"));
        $ob->yAxis($yData);

        $ob->xAxis->title(array('text'  => "Les intervenants"));
        $ob->xAxis->categories($dates);

        $ob->series($series);




        return $this->render('chart/overviewchart.html.twig', array(
            'overviewchart' => $ob
        ));
    }




    /**
     * @Route("/graphique",name="graphique")
     */
    public function graphiqueAction()
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:utilisateur");
        $res_demandeur=$post->findAll();

        $post=$this->getDoctrine()->getRepository("AppBundle:vol");
        $res_bon=$post->findAll();

        $post=$this->getDoctrine()->getRepository("AppBundle:bonvol");
        $bon_vol=$post->findAll();


        $series = array(
            array(
                'name'  => 'demandeur',
                'type'  => 'spline',
                'color' => '#003171',
                'yAxis' => 1,
                'data'  => 467, 321, 56, 698, 134, 344, 452 //first query from my repo
            ),
            array(
                'name'  => 'bon',
                'type'  => 'spline',
                'color' => '#049372',
                'yAxis' => 1,
                'data'  => 467, 321, 56, 698, 134, 344, 452 //second query from my repo
            ),
            array(
                'name'  => 'vol',
                'type'  => 'spline',
                'color' => '#FAA945',
                'data'  => 467, 321, 56, 698, 134, 344, 452 //third query from my repo
            ),
        );
        $yData = array(
            array(
                'labels' => array(
                    'style'     => array('color' => '#FAA945'),
                ),
                'title' => array(
                    'text'  => 'bon',
                    'style' => array('color' => '#FAA945')
                ),
                'opposite' => true,
            ),
            array(
                'labels' => array(
                    'style'     => array('color' => '#6C7A89')
                ),
                'gridLineWidth' => 0,
                'title' => array(
                    'text'  => 'vol',
                    'style' => array('color' => '#6C7A89')
                ),
            ),
        );
        $post=$this->getDoctrine()->getRepository("AppBundle:intervention");
        $res_intervention=$post->findAll();
        $ob = new Highchart();
        $ob->chart->renderTo('newFlo'); // The #id of the div where to render the chart
        $ob->chart->type('linechart');
        $ob->title->text('Graphique à 3 échelles');
        $ob->xAxis->title(array('text'  => "Dates"));
        //my last query which return an array of datetimes
        $ob->xAxis->type('datetime');
        $ob->yAxis($yData);
        $ob->series($series);





        return $this->render('chart/graphique.html.twig', array(
            'chart' => $ob
        ));
    }





    /**
     * @Route("/Pie_chart_with_Drilldown",name="Pie_chart_with_Drilldown")
     */
    public function Pie_chart_with_DrilldownAction()
    {$ob = new Highchart();
        $ob->chart->renderTo('container');
        $ob->chart->type('column');
        $ob->title->text('Browser market shares. November, 2013.');
        $ob->plotOptions->series(
            array(
                'dataLabels' => array(
                    'enabled' => true,

                    'format' => '{point.name}: {point.y:.1f}%'
                )
            )
        );
//kif tipointi
        $ob->tooltip->headerFormat('<span style="font-size:11px;color: red">{series.name}</span><br>');//Browser share
        $ob->tooltip->pointFormat('<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>');

        $data = array(
            array(
                'name' => 'Chrome',
                'y' => 18.73,
                'drilldown' => 'Chrome',
                'visible' => true//eka triangle
            ),
            array(
                'name' => 'Microsoft Internet Explorer',
                'y' => 53.61,
                'drilldown' => 'Microsoft Internet Explorer',
                'visible' => true
            ),
            array('Firefox', 45.0),
            array('Opera', 1.5)
        );


        $ob->series(
            array(
                array(
                    'name' => 'Browser share',
                    'colorByPoint' => true,
                    'data' => $data
                )
            )
        );


        //les valeur ili inajmou in7outouhoum wwistha
        $drilldown = array(
            array(
                'name' => 'Microsoft Internet Explorer',
                'id' => 'Microsoft Internet Explorer',
                'data' => array(
                    array("v8.0", 26.61),
                    array("v9.0", 16.96),
                    array("v6.0", 6.4),
                    array("v7.0", 3.55),
                    array("v8.0", 0.09)
                )
            ),
            array(
                'name' => 'Chrome',
                'id' => 'Chrome',
                'data' => array(
                    array("v19.0", 7.73),
                    array("v17.0", 1.13),
                    array("v16.0", 0.45),
                    array("v18.0", 0.26)
                )
            ),
        );
        $ob->drilldown->series($drilldown);





        return $this->render('chart/Pie_chart_with_Drilldown.html.twig', array(
            'chart' => $ob
        ));
    }


    /**
     * @Route("/Multi_axes_plot",name="Multi_axes_plot")
     */
    public function Multi_axes_plotAction()
    {$series = array(
        array(
            'name'  => 'Rainfall',
            'type'  => 'column',
            'color' => '#4572A7',
            'yAxis' => 1,
            'data'  => array(49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4),
        ),
        /*array(
            'name'  => 'Temperature',
            'type'  => 'spline',
            'color' => '#AA4643',
            'data'  => array(7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6),
        ),*/
    );
        $yData = array(
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " degrees C" }'),
                    'style'     => array('color' => '#AA4643')
                ),
                'title' => array(
                    'text'  => 'Temperature',
                    'style' => array('color' => '#AA4643')
                ),
                'opposite' => true,
            ),
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " mm" }'),
                    'style'     => array('color' => '#4572A7')
                ),
                'gridLineWidth' => 0,
                'title' => array(
                    'text'  => 'Rainfall',
                    'style' => array('color' => '#4572A7')
                ),
            ),
        );
        $categories = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

        $ob = new Highchart();
        $ob->chart->renderTo('container'); // The #id of the div where to render the chart
        $ob->chart->type('column');
        $ob->title->text('Average Monthly Weather Data for Tokyo');
        $ob->xAxis->categories($categories);
        $ob->yAxis($yData);
        $ob->legend->enabled(false);
        $formatter = new Expr('function () {
                 var unit = {
                     "Rainfall": "mm",
                     "Temperature": "degrees C"
                 }[this.series.name];
                 return this.x + ": <b>" + this.y + "</b> " + unit;
             }');
        $ob->tooltip->formatter($formatter);
        $ob->series($series);





        return $this->render('chart/Multi_axes_plot.html.twig', array(
            'chart' => $ob
        ));
    }



    /**
     * @Route("/piechart",name="piechart")
     */
    public function piechartAction()
    {
        // Chart
        $series = array(
            array("name" => "Data Serie Name",    "data" => array(1,2,4,5,6,3,8))
        );
        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('Browser market shares at a specific website in 2010');
        $ob->plotOptions->pie(array(
            'allowPointSelect'  => true,//evenement ili isir kif tinzil 3leha
            'cursor'    => 'pointer',
            'dataLabels'    => array('enabled' => true),//ili maktoubin 9odem kol triangle
            'showInLegend'  => true
        ));
        $data = array(
            array('Firefox', 45.0),
            array('IE', 26.8),
            array('Chrome', 12.8),
            array('Safari', 8.5),
            array('Opera', 6.2),
            array('Others', 0.7),
        );
        $ob->series(array(array('type' => 'pie','name' => 'Browser share', 'data' => $data)));




        return $this->render('chart/piechart.html.twig', array(
            'chart' => $ob
        ));
    }

    /**
     * @Route("/injarib",name="injarib")
     */
    public function injaribAction()
    {
        $series = array(
            array(
                'name' => 'Rainfall',
                'type' => 'column',
                'color' => 'red',
                'yAxis' => 1,
                'data' => array(49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4),
            ),

        );
        $yData = array(
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " degrees C" }'),
                    'style' => array('color' => 'green')
                ),


            ),
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " mm" }'),
                    'style' => array('color' => 'blue')
                ),
                'gridLineWidth' => 3,
                'title' => array(
                    'text' => 'Rainfall',
                    'style' => array('color' => 'black')
                ),
            ),
        );

        $categories = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
        $ob = new Highchart();
        $ob->chart->renderTo('container'); // The #id of the div where to render the chart
        $ob->chart->type('column');
        $ob->title->text('Average Monthly Weather Data for Tokyo');
        $ob->xAxis->categories($categories);
        $ob->yAxis($yData);
        $ob->legend->enabled(false);
        $formatter = new Expr('function () {
var unit = {
"Rainfall": "mm",
"Temperature": "degrees C"
}[this.series.name];
return this.x + ": <b>" + this.y + "</b> " + unit;
}');
        $ob->tooltip->formatter($formatter);
        $ob->series($series);

        return $this->render('chart/injarib.html.twig', array(
            'chart' => $ob
        ));
    }


    /*affichage exemple mata3 veheculeetat mte3ha */

    /**
     * @Route("/LineChart",name="LineChart")
     */
    public function chartAction()
    {
        // Chart
        $series = array(
            array("name" => "Data Serie Name",    "data" => array(1,2,4,5,6,3,8))
        );

        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  // // #id du div où afficher le graphe
        $ob->title->text('Chart Title');
        $ob->xAxis->title(array('text' => "Titre axe horizontal"));
        $ob->yAxis->title(array('text' => "Titre axe vertical "));

        $ob->series($series);

        return $this->render('chart/LineChart.html.twig', array(
            'chart' => $ob
        ));
    }


    /**
     * @Route("/column1",name="column1")
     */
    public function column1Action()
    {$data = file_get_contents('https://www.highcharts.com/samples/data/jsonp.php?filename=aapl-v.json&callback=%3F');
        $ob=new Highchart('container',
            array("chart" => array("alignTicks" => false),
                "rangeSelector" => array("selected" => 1),
                "title" => array("text" => 'Nombre intervention par date'),
                "series" => array(array("type" => 'column',
                    "name" => 'Nombre intervention par date',
                    "data" => $data,
                    "dataGrouping" => array("units" => array(array('week', array(1)),
                        array('month', array(1, 2, 3, 4, 6, 7))))))));


        return $this->render('chart/column1.html.twig', array('chart' => $ob

        ));
    }


    /*affichage ta7foun bil date na5tar ena ema lezim nab3athlou just les donne*/
    /**
     * @Route("/column",name="column")
     */
    public function columnAction()
    {


        return $this->render('chart/column.html.twig', array(

        ));
    }

}