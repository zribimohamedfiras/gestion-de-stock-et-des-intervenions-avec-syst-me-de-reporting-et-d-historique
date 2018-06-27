<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 08/05/2017
 * Time: 10:27
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
     * @Route("/Reporting",name="stat_intervention_intervenant")
     */
    public function stat_intervention_intervenantAction(Request $request)
    {
        // partie intervention par intervenant
        $post=$this->getDoctrine()->getRepository("AppBundle:utilisateur");
        $res_utilisateur=$post->findAll();
        $i=0;
        foreach ($res_utilisateur as $user)
        {
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT COUNT(u.idinterventionutilisateur) AS num FROM AppBundle:intervention_utilisateur u WHERE u.idutilisateur= :utilis');
            $query->setParameters(array(
                'utilis' => $user,
            ));
            $nbr = $query->getSingleResult();
            $nbrinterv[$i]=$nbr['num'];
            $interv[$i] = $user->getPrenom().' '.$user->getNom();
            $i++;

        }

        //partie intervention par station
        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiLocations");
        $res_location=$post->findAll();

        $post=$this->getDoctrine()->getRepository("AppBundle:intervention_ticket");
        $res_intertick=$post->findAll();



        $i=0;
        foreach ($res_location as $loc)
        {
            $locationid[$i]=$loc->getId();
            $locationname[$i]=$loc->getName();
            $locationnbr[$i]=0;
            $i++;
        }

        foreach ($res_intertick as $intertic)
        {
            $em = $this->getDoctrine()->getManager();
            $ticket = $em->getRepository('AppBundle:GlpiTickets')->find($intertic->getTicket());
            for ($j=0;$j<$i;$j++)
            {
                if ($locationid[$j]==$ticket->getLocationsId())
                {
                    $locationnbr[$j]+=1;
                }
            }
        }

        //bon d'article par demandeur

        $k=0;
        foreach ($res_utilisateur as $user)
        {
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT COUNT(u.idBon) AS numentree FROM AppBundle:Bon u WHERE u.demandeur= :utilis AND u.typeBon= :entree');
            $query->setParameters(array(
                'utilis' => $user,
                'entree' => 'entree',
            ));
            $nbrentree = $query->getSingleResult();
            $nbrinterventree[$k]=$nbrentree['numentree'];

            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT COUNT(u.idBon) AS numsortie FROM AppBundle:Bon u WHERE u.demandeur= :utilis AND u.typeBon= :sortie');
            $query->setParameters(array(
                'utilis' => $user,
                'sortie' =>'sortie',
            ));
            $nbrsortie = $query->getSingleResult();
            $nbrintervsortie[$k]=$nbrsortie['numsortie'];

            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT COUNT(u.idBon) AS numretour FROM AppBundle:Bon u WHERE u.demandeur= :utilis AND u.typeBon= :retour');
            $query->setParameters(array(
                'utilis' => $user,
                'retour' => 'retour',
            ));
            $nbrretour = $query->getSingleResult();
            $nbrintervretour[$k]=$nbrretour['numretour'];

            $k++;

        }


        // bon d'article par station

        $a=0;
        foreach ($res_location as $locati)
        {
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT COUNT(u.idBonarticle) AS numbonentree FROM AppBundle:BonArticle u JOIN u.idBon a WHERE u.idStation= :stat AND a.typeBon= :entree');
            $query->setParameters(array(
                'stat' => $locati->getName(),
                'entree' => 'entree',
            ));
            $nbrbonentree = $query->getSingleResult();
            $nbrstatentree[$a]=$nbrbonentree['numbonentree'];

            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT COUNT(u.idBonarticle) AS numbonsortie FROM AppBundle:BonArticle u JOIN u.idBon a WHERE u.idStation= :stat AND a.typeBon= :entree');
            $query->setParameters(array(
                'stat' => $locati->getName(),
                'entree' => 'sortie',
            ));
            $nbrbonsortie = $query->getSingleResult();
            $nbrstatsortie[$a]=$nbrbonsortie['numbonsortie'];

            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT COUNT(u.idBonarticle) AS numbonretour FROM AppBundle:BonArticle u JOIN u.idBon a WHERE u.idStation= :stat AND a.typeBon= :entree');
            $query->setParameters(array(
                'stat' => $locati->getName(),
                'entree' => 'retour',
            ));
            $nbrbonretour = $query->getSingleResult();
            $nbrstatretour[$a]=$nbrbonretour['numbonretour'];


            $a++;
        }

        //partie voiture par demandeur
        $post=$this->getDoctrine()->getRepository("AppBundle:mission");
        $res_mission=$post->findAll();

        $l=0;
        foreach ($res_mission as $miss)
        {
            $datedebut = str_replace('/', '-', $miss->getDatedepart());
            $datefin = str_replace('/', '-', $miss->getDatearriver());
            $datedebut = date('Y-m-d', strtotime($datedebut));
            $datefin = date('Y-m-d', strtotime($datefin));

            $jourdepart = date('d', strtotime($datedebut));
            $moisdepart = date('m', strtotime($datedebut));
            $aneedepart = date('Y', strtotime($datedebut));

            $jourarriv = date('d', strtotime($datefin));
            $moisarriv = date('m', strtotime($datefin));
            $aneearriv = date('Y', strtotime($datefin));
            $tab[$l] = [$jourdepart,$moisdepart,$aneedepart,$jourarriv,$moisarriv,$aneearriv];
            $l++;

        }

        // intervention par marge de date
        $post=$this->getDoctrine()->getRepository("AppBundle:intervention");
        $res_intervention=$post->findAll();
        $tdeb=null;
        $tfin=null;
        $p=0;
        foreach ($res_intervention as $inter)
        {
            $tdeb[$p]=$inter->getDateDebut();
            $tfin[$p]=$inter->getDateFin();
            $p++;
        }


        $fin= date("d/m/Y");
        $datefin = str_replace('/', '-', $fin);
        $datedebut = date(date("Y-m-d", mktime(0, 0, 0,date('m', strtotime($datefin))-1,date('d', strtotime($datefin)),date('Y', strtotime($datefin)))));
        $datefin = date('Y-m-d', strtotime($datefin));

        $lenght=0;
        $counttab[$lenght] = $this->comparedate($datedebut,$tdeb,$tfin,$p);
        $datetab[$lenght] = $datedebut ;
        $lenght++;

        while($datefin>$datedebut)
        {
            $datedebut= date("Y-m-d", mktime(0, 0, 0,date('m', strtotime($datedebut)),date('d', strtotime($datedebut))+1,date('Y', strtotime($datedebut))));
            $counttab[$lenght] = $this->comparedate($datedebut,$tdeb,$tfin,$p);
            $datetab[$lenght] = $datedebut ;
            $lenght++;

        }


        $access=$request->getSession()->get('access');

        //return
        return $this->render("reporting/rapport.html.twig",
            array(
                "intervenant"=>$interv,
                "nbrinterv"=>$nbrinterv,
                "locationname"=>$locationname,
                "locationnbr"=>$locationnbr,
                "totallocation"=>$i-1,
                "nbrentree"=>$nbrinterventree,
                "nbrsortie"=>$nbrintervsortie,
                "nbrretour"=>$nbrintervretour,
                "nbrstatentree"=>$nbrstatentree,
                "nbrstatsortie"=>$nbrstatsortie,
                "nbrstatretour"=>$nbrstatretour,
                "mission"=>$res_mission,
                "tab"=>$tab,
                "count"=>$counttab,
                "datee"=>$datetab,
                "access"=>$access,
            ));

    }

    /**
     * @Route("/reporting/voiture",name="confirmvoiture")
     */
    public function confirmvoitureAction(Request $request)
    {

        $access=$request->getSession()->get('access');

        $debut=$request->request->get("debut");
        $fin=$request->request->get("fin");
        $datedebut = str_replace('/', '-', $debut);
        $datefin = str_replace('/', '-', $fin);
        $datedebut = date('Y-m-d', strtotime($datedebut));
        $datefin = date('Y-m-d', strtotime($datefin));
        if ($datedebut>$datefin)
        {
            return $this->render("reporting/resultatvoiture.html.twig",
                array(
                    "mission"=>null,
                    "tab"=>null,
                    "error"=>"La Date De Debut doit étre inferieur à la date de fin",
                    "access"=>$access,
                ));
        }

        $post =$this->getDoctrine()->getRepository("AppBundle:mission");
        $res_mission=$post->findAll();

        $i=0;
        foreach ($res_mission as $miss)
        {
            $datedeb = str_replace('/', '-', $miss->getDatedepart());
            $datef = str_replace('/', '-', $miss->getDatearriver());
            $datedeb = date('Y-m-d', strtotime($datedeb));
            $datef = date('Y-m-d', strtotime($datef));
            if (($datedeb>= $datedebut) && ($datef<=$datefin))
            {
                $jourdepart = date('d', strtotime($datedeb));
                $moisdepart = date('m', strtotime($datedeb));
                $aneedepart = date('Y', strtotime($datedeb));

                $jourarriv = date('d', strtotime($datef));
                $moisarriv = date('m', strtotime($datef));
                $aneearriv = date('Y', strtotime($datef));
                $tab[$i] = [$jourdepart,$moisdepart,$aneedepart,$jourarriv,$moisarriv,$aneearriv];
                $finalmiss[$i]=$miss;
                $i++;

            }elseif(($datedeb>=$datedebut)&&($datedeb<=$datefin)){
                $finalmiss[$i]=$miss;
                $jourdepart = date('d', strtotime($datedeb));
                $moisdepart = date('m', strtotime($datedeb));
                $aneedepart = date('Y', strtotime($datedeb));

                $jourarriv = date('d', strtotime($datefin));
                $moisarriv = date('m', strtotime($datefin));
                $aneearriv = date('Y', strtotime($datefin));
                $tab[$i] = [$jourdepart,$moisdepart,$aneedepart,$jourarriv,$moisarriv,$aneearriv];
                $i++;
            }
            elseif(($datef>=$datedebut)&&($datef<=$datefin)){
                $finalmiss[$i]=$miss;
                $jourdepart = date('d', strtotime($datedebut));
                $moisdepart = date('m', strtotime($datedebut));
                $aneedepart = date('Y', strtotime($datedebut));

                $jourarriv = date('d', strtotime($datef));
                $moisarriv = date('m', strtotime($datef));
                $aneearriv = date('Y', strtotime($datef));
                $tab[$i] = [$jourdepart,$moisdepart,$aneedepart,$jourarriv,$moisarriv,$aneearriv];
                $i++;
            }
            elseif (($datedeb<=$datedebut)&&($datef>=$datefin)){
                $finalmiss[$i]=$miss;
                $jourdepart = date('d', strtotime($datedebut));
                $moisdepart = date('m', strtotime($datedebut));
                $aneedepart = date('Y', strtotime($datedebut));

                $jourarriv = date('d', strtotime($datefin));
                $moisarriv = date('m', strtotime($datefin));
                $aneearriv = date('Y', strtotime($datefin));
                $tab[$i] = [$jourdepart,$moisdepart,$aneedepart,$jourarriv,$moisarriv,$aneearriv];
                $i++;
            }


        }
        return $this->render('reporting/resultatvoiture.html.twig',
            array(
                "mission"=>$finalmiss,
                "tab"=>$tab,
                "error"=>"",
                "access"=>$access,
            ));

    }

    public function comparedate($x,$deb,$fin,$i)
    {
        $count =0 ;

        for($j=0;$j<$i;$j++){
            $datedebut = str_replace('/', '-', $deb[$j]);
            $datefin = str_replace('/', '-', $fin[$j]);
            $datedebut = date('Y-m-d', strtotime($datedebut));
            $datefin = date('Y-m-d', strtotime($datefin));

            if(($x>=$datedebut)&& ($x<=$datefin)){

                $count++;

            }

        }
        return $count;
    }

    /**
     * @Route("/reporting/intervention_par_marge_date",name="confirmtestali")
     */
    public function confirmtestaliAction(Request $request)
    {

        $access=$request->getSession()->get('access');

        $post=$this->getDoctrine()->getRepository("AppBundle:intervention");
        $res_intervention=$post->findAll();
        $tdeb=null;
        $tfin=null;
        $i=0;
        foreach ($res_intervention as $inter)
        {
            $tdeb[$i]=$inter->getDateDebut();
            $tfin[$i]=$inter->getDateFin();
            $i++;
        }


        $debut=$request->request->get("debut");
        $fin=$request->request->get("fin");
        $datedebut = str_replace('/', '-', $debut);
        $datefin = str_replace('/', '-', $fin);
        $datedebut = date('Y-m-d', strtotime($datedebut));
        $datefin = date('Y-m-d', strtotime($datefin));
        if ($datedebut>$datefin)
        {
            return $this->render("reporting/resultatali.html.twig",
                array(
                    "count"=>null,
                    "datee"=>null,
                    "error"=>"La Date De Debut doit étre inferieur à la date de fin",
                    "access"=>$access,
                ));

        }

        $lenght=0;
        $counttab[$lenght] = $this->comparedate($datedebut,$tdeb,$tfin,$i);
        $datetab[$lenght] = $datedebut ;
        $lenght++;

        while($datefin>$datedebut)
        {
            $datedebut= date("Y-m-d", mktime(0, 0, 0,date('m', strtotime($datedebut)),date('d', strtotime($datedebut))+1,date('Y', strtotime($datedebut))));
            $counttab[$lenght] = $this->comparedate($datedebut,$tdeb,$tfin,$i);
            $datetab[$lenght] = $datedebut ;
            $lenght++;

        }
        return $this->render("reporting/resultatali.html.twig",
            array(
                "count"=>$counttab,
                "datee"=>$datetab,
                "error"=>"",
                "access"=>$access,
            ));

    }



}