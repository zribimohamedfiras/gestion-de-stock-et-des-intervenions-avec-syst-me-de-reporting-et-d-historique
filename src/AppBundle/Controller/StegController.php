<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 08/03/2017
 * Time: 13:40
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Entity\Bon;
use AppBundle\Entity\BonArticle;
use AppBundle\Entity\bonhotel;
use AppBundle\Entity\diffusion;
use AppBundle\Entity\historique;
use AppBundle\Entity\hotel;
use AppBundle\Entity\intervention;
use AppBundle\Entity\intervention_ticket;
use AppBundle\Entity\intervention_utilisateur;
use AppBundle\Entity\interventionDiffusion;
use AppBundle\Entity\mission;
use AppBundle\Entity\mission_utilisateur;
use AppBundle\Entity\NumeroSerie;
use AppBundle\Entity\Station;
use AppBundle\Entity\vehicule;
use AppBundle\Form\ArticleType;
use AppBundle\Form\diffusionType;
use AppBundle\Form\HotelType;
use AppBundle\Form\MissionType;
use AppBundle\Form\StationType;
use AppBundle\Form\Vehiculetype;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
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
use Ob\HighchartsBundle\Highcharts\Highchart;
use Zend\Json\Expr;



class StegController extends Controller
{



    //                              partie Historique
    //*******************************************************************************************

    /**
     * @Route("/historique/administration",name="historiqueadministration")
     */
    public function historiqueadministrationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $res_historique = $em->getRepository('AppBundle:historique')->findBymodule('administration');

        $access=$request->getSession()->get('access');

        return $this->render('historique/historiquestock.html.twig'
            ,array(
                "historique"=>$res_historique,
                "type"=>'administration',
                "access"=>$access,
            ));

    }


    /**
     * @Route("/historique/mission",name="historiquemission")
     */
    public function historiquemissionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $res_historique = $em->getRepository('AppBundle:historique')->findBymodule('mission');

        $access=$request->getSession()->get('access');

        return $this->render('historique/historiquestock.html.twig'
            ,array(
                "historique"=>$res_historique,
                "type"=>'mission',
                "access"=>$access,
            ));
    }

    /**
     * @Route("/historique/intervention",name="historiqueintervention")
     */
    public function historiqueinterventionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $res_historique = $em->getRepository('AppBundle:historique')->findBymodule('intervention');

        $access=$request->getSession()->get('access');

        return $this->render('historique/historiquestock.html.twig'
            ,array(
                "historique"=>$res_historique,
                "type"=>'intervention',
                "access"=>$access,
            ));
    }


    /**
     * @Route("/historique/stock",name="historiquestock")
     */
    public function historiquestockAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $res_historique = $em->getRepository('AppBundle:historique')->findBymodule('stock');

        $access=$request->getSession()->get('access');

        return $this->render('historique/historiquestock.html.twig'
            ,array(
                "historique"=>$res_historique,
                "type"=>'stock',
                "access"=>$access,
            ));
    }


    /**
     * @Route("/historique/generale",name="historiquegenerale")
     */
    public function historiquegeneraleAction(Request $request)
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:historique");
        $res_historique=$post->findAll();

        $access=$request->getSession()->get('access');

        return $this->render('historique/globalhistorique.html.twig'
            ,array(
            "historique"=>$res_historique,
            "access"=>$access,
        ));
    }

    //*******************************************************************************************


    //                              partie mission
    //*******************************************************************************************

    /**
     * @Route("/mission/supprimer",name="supprimermission")
     */
    public function supprimermissionAction(Request $request)
    {
        $mission=$request->request->get('nummission');
        if ($mission != null)
        {
            $em = $this->getDoctrine()->getManager();
            $miss = $em->getRepository('AppBundle:mission')->findOneBynummission($mission);
            $em->remove($miss);
            $em->flush();

            #partie historique
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='mission';
            $type='Suppression';

            $champ='Mission '.$mission;
            $encien= $mission ;
            $nouveau='-';
            $historique= new historique();
            $historique->setUtilisateur($user);
            $historique->setDatehistorique($datehist);
            $historique->setModule($module);
            $historique->setChamp($champ);
            $historique->setEncienvaleur($encien);
            $historique->setNouveauvaleur($nouveau);
            $historique->setType($type);
            $em->persist($historique);
            $em->flush();
            #end historique

            return $this->redirectToRoute('afficherallmission');
        }
    }

    /**
     * @Route("/mission/afficherallmission",name="afficherallmission")
     */
    public function afficherallmissionAction(Request $request)
    {

        $post=$this->getDoctrine()->getRepository("AppBundle:mission");
        $res_mission=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:vehicule");
        $res_vehicule=$post->findAll();

        $access=$request->getSession()->get('access');

        $intervenant=null;
        $i=0;
        foreach ($res_mission as $r)
        {
            $i++;

            $em = $this->getDoctrine()->getManager();
            $intervenant[$i] = $em->getRepository('AppBundle:mission_utilisateur')->findByidmission($r);

        }

        // partie tasli7 disponibilité vehicule
        foreach ($res_vehicule as $v)
        {
            if ($v->getDisponibilite()==0)
            {
                $em = $this->getDoctrine()->getManager();
                $mission = $em->getRepository('AppBundle:mission')->findByvehicule($v);

                $nb=0;
                foreach ($mission as $r)
                {
                    $nb=$nb+1;
                    $missi[$nb]=$r;
                }
                $test=false;
                if ($nb>0)
                {
                    $i = 1;

                    while (($i <= $nb) && ($test == false))
                    {


                        $datefinmiss = $missi[$i]->getDatearriver();
                        $heurefinmiss = $missi[$i]->getHeurearriver();
                        $yearmiss = substr($datefinmiss, 6, 4);
                        $monthmiss = substr($datefinmiss, 3, 2);
                        $daymiss = substr($datefinmiss, 0, 2);
                        $yearnow = date('Y');
                        $monthnow = date('m');
                        $daynow = date('d');
                        $heurenow = date('h:i');

                        if ($yearnow == $yearmiss)
                        {
                            if ($monthnow == $monthmiss)
                            {
                                if ($daynow == $daymiss)
                                {
                                    if ($heurenow <= $heurefinmiss)
                                    {
                                        $test = true;
                                    }
                                } else
                                    {
                                        if ($daynow < $daymiss)
                                        {
                                            $test = true;
                                        }

                                    }
                            }
                            else
                                {
                                    if ($monthnow < $monthmiss)
                                    {
                                        $test = true;
                                    }

                                }
                        }
                        else
                            {
                                if ($yearnow < $yearmiss)
                                {
                                    $test = true;
                                }

                            }

                            $i++;

                    }
                }
                else
                {
                    $test=true;
                }
                if ($test==false)
                {
                    $em = $this->getDoctrine()->getManager();
                    $v->setDisponibilite(1);
                    $em->flush();

                }
            }
        }
        foreach ($res_mission as $rm)
        {
            $datetawa=date('d/m/Y');
            $dateretourmiss=$rm->getDatearriver();
            if ($datetawa==$dateretourmiss)
            {
                $mail=$rm->getDemandeur()->getEmail();
                $serie=$rm->getVehicule()->getNumvehicule();
                $message = \Swift_Message::newInstance()
                    ->setSubject('Mission')
                    ->setFrom('dptg.steg@gmail.com')
                    ->setTo(array($mail))
                    ->setBody(
                        $this->renderView(
                        // app/Resources/views/Emails/registration.html.twig
                            'Emails/kilometrage.html.twig',
                            array('numserie' => $serie,
                        )),
                        'text/html'
                    );
                $this->get('mailer')->send($message);

            }
        }



        return $this->render("mission/afficher_all_mission.html.twig"
            ,array(
                "mission"=>$res_mission,
                "intervenant"=>$intervenant,
                "access"=>$access,
            ));
    }


    /**
     * @Route("/mission/DemandeMission",name="DemandeMission")
     */
    public function confDemandeMissionAction(Request $request)
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:intervention");
        $res_intervention=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:vehicule");
        $res_vehicule=$post->findAll();
        $nummission=$request->request->get('nummission');

        $access=$request->getSession()->get('access');

        if ($nummission != null)
        {
            $inter=$request->request->get('interventionn');

            $em = $this->getDoctrine()->getManager();
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT COUNT(u.idmission) AS num FROM AppBundle:mission u WHERE u.nummission= :miss');
            $query->setParameters(array(
                'miss' => $nummission,
            ));
            $nbr = $query->getSingleResult();

            if ($nbr['num']!=0)
            {
                $em = $this->getDoctrine()->getManager();
                $intervention = $em->getRepository('AppBundle:intervention')->find($inter);
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery('SELECT u FROM AppBundle:intervention_utilisateur u WHERE u.idintervention= :inter AND u.type= :typea');
                $query->setParameters(array(
                    'inter' => $intervention,
                    'typea' => 'demandeur',
                ));
                $demandeur = $query->getResult(); // array of intervention_utilisateur objects

                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery('SELECT u FROM AppBundle:intervention_utilisateur u WHERE u.idintervention= :inter AND u.type= :typea');
                $query->setParameters(array(
                    'inter' => $intervention,
                    'typea' => 'intervenant',
                ));
                $intervenant=$query->getResult(); // array of intervention_utilisateur objects


                return $this->render("mission/testconfmission.html.twig"
                    ,array(
                        "msg"=>"le Numero de Mission ".$nummission." deja existe",
                        "demandeur"=>$demandeur,
                        "intervention"=>$res_intervention,
                        "inter"=>$inter,
                        "intervenant"=>$intervenant,
                        "vehicule"=>$res_vehicule,
                        "access"=>$access,
                    ));
            }


            $nbrintervenant=$request->request->get('nbrintervenant');
            $cause=$request->request->get('cause');
            $lieudepart=$request->request->get('lieudepart');
            $lieuarriver=$request->request->get('lieuarriver');
            $datedepart=$request->request->get('datedepart');
            $datearriver=$request->request->get('datearriver');
            $heuredepart=$request->request->get('heuredepart');
            $heurearriver=$request->request->get('heurearriver');
            $charge=$request->request->get('charge');
            $demd=$request->request->get('demandeur');
            $veh=$request->request->get('vehicule');
            $interv=$request->request->get('interventionn');

            $em = $this->getDoctrine()->getManager();
            $intv = $em->getRepository('AppBundle:intervention')->find($interv);

            $em = $this->getDoctrine()->getManager();
            $demand = $em->getRepository('AppBundle:utilisateur')->findOneByusername($demd);

            $em = $this->getDoctrine()->getManager();
            $vehicule = $em->getRepository('AppBundle:vehicule')->findOneBynumvehicule($veh);

            $mission= new mission();
            $mission->setNummission($nummission);
            $mission->setCause($cause);
            $mission->setLieudepart($lieudepart);
            $mission->setLieuarriver($lieuarriver);
            $mission->setDatedepart($datedepart);
            $mission->setDatearriver($datearriver);
            $mission->setHeuredepart($heuredepart);
            $mission->setHeurearriver($heurearriver);
            $mission->setCharge($charge);
            $mission->setDemandeur($demand);
            $mission->setIntervention($intv);
            $mission->setVehicule($vehicule);
            $em = $this->getDoctrine()->getManager();
            $em->persist($mission);
            $em->flush();
            $intervenants=new ArrayCollection();

            // Save mission utilisateur pour les intervenant
            for ($j=1;$j<=$nbrintervenant;$j++)
            {
                $intervenant[$j]=$request->request->get('Intervenant'.$j);
            }
            $j=0;
            for ($i=1;$i<=$nbrintervenant;$i++)
            {
                $em = $this->getDoctrine()->getManager();
                $inter = $em->getRepository('AppBundle:utilisateur')->findOneByusername($intervenant[$i]);
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery('SELECT COUNT(u.idmissionutilisateur) AS num FROM AppBundle:mission_utilisateur u WHERE u.idutilisateur= :utilis AND u.idmission= :miss');
                $query->setParameters(array(
                    'utilis' => $inter,
                    'miss'=>$mission,
                ));
                $nbr = $query->getSingleResult();

                if ($nbr['num']==0)
                {
                    $missutilis= new mission_utilisateur();
                    $missutilis->setIdmission($mission);
                    $missutilis->setIdutilisateur($inter);


                    $em = $this->getDoctrine()->getManager();
                    $em->persist($missutilis);
                    $em->flush();
                    $j++;
                    $intervenants[$j]=$inter;

                }
            }
            $post=$this->getDoctrine()->getRepository("AppBundle:mission_utilisateur");
            $res_supprime_mission=$post->findAll();
            foreach ($res_supprime_mission as $r)
            {
                if ($r->getIdutilisateur()==null)
                {
                    $em = $this->getDoctrine()->getManager();
                    $em->remove($r);
                    $em->flush();
                }
            }

            // tasli7 disponibilté vehicule

            $em = $this->getDoctrine()->getManager();
            $vehic = $em->getRepository('AppBundle:vehicule')->findOneBynumvehicule($veh);
            $vehic->setDisponibilite(0);
            $em->flush();



            #aprtie historique
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='mission';
            $champ='Mission';
            $encien='-';
            $type='Ajout';
            $nouveau=$nummission;
            $historique= new historique();
            $historique->setUtilisateur($user);
            $historique->setDatehistorique($datehist);
            $historique->setModule($module);
            $historique->setChamp($champ);
            $historique->setEncienvaleur($encien);
            $historique->setNouveauvaleur($nouveau);
            $historique->setType($type);
            $em->persist($historique);
            $em->flush();


            //generation PDF

            $snappy = $this->get('knp_snappy.pdf');
            $html = $this->renderView('pdf/mission.html.twig',
                array(
                    'datedebut'=>'12/04/2017',
                    'datefin'=>'13/04/2017',
                    'demandeur'=>$demand,
                    'vehicule'=>$veh,
                    'cause'=>$cause,
                    'lieudepart'=>$lieudepart,
                    'lieuarrive'=>$lieuarriver,
                    'heuredepart'=>$heuredepart,
                    'heurearrive'=>$heurearriver,
                    'intervenant'=>$intervenants,
                    'nbrintervenant'=>$j,
                    'charge'=>$charge,

                ));

            $filename = 'myFirstSnappyPDF';

            return new Response(
                $snappy->getOutputFromHtml($html),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
                )
            );




        }
    }

    /**
     * @Route("/mission/Demandemission",name="changedemmission")
     */
    public function changedemmissionAction(Request $request)
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:utilisateur");
        $res_utilisateur=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:intervention");
        $res_intervention=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:vehicule");
        $res_vehicule=$post->findAll();

        $access=$request->getSession()->get('access');

        $mission= new mission();
        $form = $this->createForm(MissionType::class, $mission);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);


        $inter=$request->request->get("interven");
        if ($inter != null)
        {


            $em = $this->getDoctrine()->getManager();
            $intervention = $em->getRepository('AppBundle:intervention')->find($inter);
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT u FROM AppBundle:intervention_utilisateur u WHERE u.idintervention= :inter AND u.type= :typea');
            $query->setParameters(array(
                'inter' => $intervention,
                'typea' => 'demandeur',
            ));
            $demandeur = $query->getResult(); // array of intervention_utilisateur objects

            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT u FROM AppBundle:intervention_utilisateur u WHERE u.idintervention= :inter AND u.type= :typea');
            $query->setParameters(array(
                'inter' => $intervention,
                'typea' => 'intervenant',
            ));
            $intervenant=$query->getResult(); // array of intervention_utilisateur objects


            return $this->render("mission/testconfmission.html.twig"
                ,array(
                    "msg"=>'',
                    "demandeur"=>$demandeur,
                    "intervention"=>$res_intervention,
                    "inter"=>$inter,
                    "intervenant"=>$intervenant,
                    "vehicule"=>$res_vehicule,
                    "access"=>$access,
                ));



        }

        if ($form->isSubmitted() && $form->isValid())
        {
            // 4) save the mission!

            $nbrintervenant=$request->request->get('nbrintervenant');
            $demd=$request->request->get('demandeur');
            $veh=$request->request->get('vehicule');
            $interv=$request->request->get('interventionn');

            $em = $this->getDoctrine()->getManager();
            $intv = $em->getRepository('AppBundle:intervention')->find($interv);

            $em = $this->getDoctrine()->getManager();
            $vehicule = $em->getRepository('AppBundle:utilisateur')->findOneByusername($demd);

            $em = $this->getDoctrine()->getManager();
            $demand = $em->getRepository('AppBundle:vehicule')->findOneBynumvehicule($veh);

            $mission->setDemandeur($demand);
            $mission->setVehicule($vehicule);
            $mission->setIntervention($intv);

            $em = $this->getDoctrine()->getManager();
            $em->persist($mission);
            $em->flush();

            // Save mission utilisateur pour les intervenant
            for ($j=1;$j<=$nbrintervenant;$j++)
            {
                $intervenant[$j]=$request->request->get('Intervenant'.$j);
            }

            for ($i=1;$i<=$nbrintervenant;$i++)
            {
                $em = $this->getDoctrine()->getManager();
                $inter = $em->getRepository('AppBundle:utilisateur')->findOneByusername($intervenant[$i]);
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery('SELECT COUNT(u.idmissionutilisateur) AS num FROM AppBundle:mission_utilisateur u WHERE u.idutilisateur= :utilis');
                $query->setParameters(array(
                    'utilis' => $inter,
                ));
                $nbr = $query->getSingleResult();

                if ($nbr['num']==0)
                {
                    $missutilis= new mission_utilisateur();
                    $missutilis->setIdmission($mission);
                    $missutilis->setIdutilisateur($inter);

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($missutilis);
                    $em->flush();
                }
            }




            return $this->redirectToRoute('affichervehicule');
        }


        return $this->render(
            'mission/demandemission.html.twig',
            array(
                'form' => $form->createView(),
                'intervention'=>$res_intervention,
                'user'=>$res_utilisateur,
                "vehicule"=>$res_vehicule,
                "access"=>$access,
            ));
    }

    /**
     * @Route("/mission/demandemission",name="demandemission")
     */
    public function demandemissionAction(Request $request)
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:intervention");
        $res_intervention=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:utilisateur");
        $res_utilisateur=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:vehicule");
        $res_vehicule=$post->findAll();
        $mission= new mission();
        $form = $this->createForm(MissionType::class, $mission);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            // 4) save the mission!

            $nbrintervenant=$request->request->get('nbrintervenant');
            $demd=$request->request->get('demandeur');
            $veh=$request->request->get('vehicule');
            $interv=$request->request->get('interventionn');

            $em = $this->getDoctrine()->getManager();
            $intv = $em->getRepository('AppBundle:intervention')->find($interv);

            $em = $this->getDoctrine()->getManager();
            $vehicule = $em->getRepository('AppBundle:utilisateur')->findOneByusername($demd);

            $em = $this->getDoctrine()->getManager();
            $demand = $em->getRepository('AppBundle:vehicule')->findOneBynumvehicule($veh);

            $mission->setDemandeur($demand);
            $mission->setVehicule($vehicule);
            $mission->setIntervention($intv);

            $em = $this->getDoctrine()->getManager();
            $em->persist($mission);
            $em->flush();

            // Save mission utilisateur pour les intervenant
            for ($j=1;$j<=$nbrintervenant;$j++)
            {
                $intervenant[$j]=$request->request->get('Intervenant'.$j);
            }

            for ($i=1;$i<=$nbrintervenant;$i++)
            {
                $em = $this->getDoctrine()->getManager();
                $inter = $em->getRepository('AppBundle:utilisateur')->findOneByusername($intervenant[$i]);
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery('SELECT COUNT(u.idmissionutilisateur) AS num FROM AppBundle:mission_utilisateur u WHERE u.idutilisateur= :utilis');
                $query->setParameters(array(
                    'utilis' => $inter,
                ));
                $nbr = $query->getSingleResult();

                if ($nbr['num']==0)
                {
                    $missutilis= new mission_utilisateur();
                    $missutilis->setIdmission($mission);
                    $missutilis->setIdutilisateur($inter);

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($missutilis);
                    $em->flush();
                }
            }




            return $this->redirectToRoute('affichervehicule');
        }

        $access=$request->getSession()->get('access');

        return $this->render(
            'mission/demandemission.html.twig',
            array(
                'form' => $form->createView(),
                'intervention'=>$res_intervention,
                'user'=>$res_utilisateur,
                "vehicule"=>$res_vehicule,
                "access"=>$access,
            ));
    }


    //*******************************************************************************************




    //                              partie vehicule
    //*******************************************************************************************

    /**
     * @Route("/mission/vehicule/supprimervehicule",name="supprimervehicule")
     */
    public function supprimervehiculeAction(Request $request)
    {
        $idvehicule=$request->request->get("idvehicule");
        $em = $this->getDoctrine()->getManager();
        $vehicule = $em->getRepository('AppBundle:vehicule')->findOneByidvehicule($idvehicule);
        $em->remove($vehicule);
        $em->flush();

        #partie historique
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $datehist= date('d/m/Y');
        $module='mission';
        $type='Suppression';

        $champ='Vehicule numero '.$vehicule->getNumvehicule();
        $encien= $vehicule->getNumvehicule() ;
        $nouveau='-';
        $historique= new historique();
        $historique->setUtilisateur($user);
        $historique->setDatehistorique($datehist);
        $historique->setModule($module);
        $historique->setChamp($champ);
        $historique->setEncienvaleur($encien);
        $historique->setNouveauvaleur($nouveau);
        $historique->setType($type);
        $em->persist($historique);
        $em->flush();
        #end historique

        return $this->redirectToRoute('affichervehicule');
    }


    /**
     * @Route("/mission/vehicule/modifier_vehicule",name="modifier_vehicule")
     */
    public function modifier_vehiculeAction(Request $request)
    {
        if ($request->request->get("idvehicule")!= null)



        {
            $idvehicule=$request->request->get("idvehicule");
            $num_vehicule=$request->request->get("num_vehicule");
            $UT=$request->request->get("UT");
            $marque=$request->request->get("marque");
            $genre=$request->request->get("genre");

            $puissance=$request->request->get("puissance");
            $carburant=$request->request->get("carburant");
            $dateEntre=$request->request->get("dateEntre");
            $disponibilte=$request->request->get("disponibilte");
            $etat=$request->request->get("etat");
            $indexkm=$request->request->get("indexkm");

            $em = $this->getDoctrine()->getManager();
            $vehicule = $em->getRepository('AppBundle:vehicule')->findOneByidvehicule($idvehicule);

            #partie historique
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='mission';
            $type='Modification';
            if ($vehicule->getUT()!= $UT)
            {

                $champ='UT de vehicule '.$num_vehicule;
                $encien= $vehicule->getUT() ;
                $nouveau=$UT;
                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($vehicule->getMarque()!= $marque)
            {

                $champ='Marque de vehicule '.$num_vehicule;
                $encien= $vehicule->getMarque() ;
                $nouveau=$marque;
                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($vehicule->getGenre()!= $genre)
            {

                $champ='Genre de vehicule '.$num_vehicule;
                $encien= $vehicule->getGenre() ;
                $nouveau=$genre;
                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($vehicule->getPuissance()!= $puissance)
            {

                $champ='Puissance de vehicule '.$num_vehicule;
                $encien= $vehicule->getPuissance() ;
                $nouveau=$puissance;
                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($vehicule->getCarburant()!= $carburant)
            {

                $champ='Carburant de vehicule '.$num_vehicule;
                $encien= $vehicule->getCarburant() ;
                $nouveau=$carburant;
                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($vehicule->getDateEntre()!= $dateEntre)
            {

                $champ='Date entrée de vehicule '.$num_vehicule;
                $encien= $vehicule->getDateEntre();
                $nouveau=$dateEntre;
                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }

            if ($vehicule->getDisponibilite()!= $disponibilte)
            {


                $champ='Disponibilité de vehicule '.$num_vehicule;

                if ($vehicule->getDisponibilite()==1)
                {
                    $encien= 'disponible';
                    $nouveau='non disponible';
                }
                else
                {
                    $encien= 'non disponible';
                    $nouveau='disponible';
                }

                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($vehicule->getEtat()!= $etat)
            {

                $champ='Etat de vehicule '.$num_vehicule;
                $encien= $vehicule->getEtat();
                $nouveau=$etat;
                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($vehicule->getIndexkm()!= $indexkm)
            {

                $champ='IndexKm de vehicule '.$num_vehicule;
                $encien= $vehicule->getIndexkm();
                $nouveau=$indexkm;
                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }

            $vehicule->setUT($UT);
            $vehicule->setMarque($marque);
            $vehicule->setGenre($genre);
            $vehicule->setPuissance($puissance);
            $vehicule->setCarburant($carburant);
            $vehicule->setDateEntre($dateEntre);
            $vehicule->setDisponibilite($disponibilte);
            $vehicule->setEtat($etat);
            $vehicule->setIndexkm($indexkm);







            $em->flush();
        }

        return $this->redirectToRoute('affichervehicule');

    }

    /**
     * @Route("/mission/vehicule/modifiervehicule",name="modifiervehicule")
     */
    public function modifiervehiculeAction(Request $request)
    {
        $idvehicule=$request->request->get("idvehicule");
        $em = $this->getDoctrine()->getManager();
        $vehicule = $em->getRepository('AppBundle:vehicule')->findOneByidvehicule($idvehicule);

        $access=$request->getSession()->get('access');

        return $this->render("vehicule/modifiervehiculel.html.twig",
            array(
                "res"=>$vehicule,
                "access"=>$access,
                ));

    }

    /**
     * @Route("/mission/vehicule/affichervehicule",name="affichervehicule")
     */
    public function affichervehiculeAction(Request $request)
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:vehicule");
        $res=$post->findAll();

        $access=$request->getSession()->get('access');

        return $this->render("vehicule/afficher_all_vehicule.html.twig",
            array(
                "res"=>$res,
                "access"=>$access,
                ));
    }



    /**
     * @Route("/mission/vehicule/ajoutvehicule",name="ajoutvehicule")
     */
    public function ajoutvehiculeAction(Request $request)
    {
        $vehicule= new vehicule();
        $form = $this->createForm(Vehiculetype::class, $vehicule);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            // 4) save the article!

            $em = $this->getDoctrine()->getManager();
            $em->persist($vehicule);
            $em->flush();

            #aprtie historique
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='mission';
            $champ='Numero de vehicule';
            $encien='-';
            $type='Ajout';
            $nouveau=$vehicule->getNumvehicule();
            $historique= new historique();
            $historique->setUtilisateur($user);
            $historique->setDatehistorique($datehist);
            $historique->setModule($module);
            $historique->setChamp($champ);
            $historique->setEncienvaleur($encien);
            $historique->setNouveauvaleur($nouveau);
            $historique->setType($type);
            $em->persist($historique);
            $em->flush();

            return $this->redirectToRoute('affichervehicule');
        }

        $access=$request->getSession()->get('access');

        return $this->render(
            'vehicule/ajout.html.twig',
            array(
                'form' => $form->createView(),
                'access'=>$access,
                ));

    }



    //*******************************************************************************************

    //                              partie hotel
    //*******************************************************************************************

    //                              partie demande hotel
    //*******************************************************************************************

    /**
     * @Route("/intervention/bon_hotel/supprimerbonhotel",name="supprimerbonhotel")
     */
    public function supprimerbonhotelAction(Request $request)
    {
        $bon=$request->request->get("idbon");
        $em = $this->getDoctrine()->getManager();
        $bonhotel = $em->getRepository('AppBundle:bonhotel')->find($bon);
        $em->remove($bonhotel);
        $em->flush();

        #partie historique
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $datehist= date('d/m/Y');
        $module='intervention';
        $type='Suppression';

        $champ='Bon d\'Hotel '.$bon;
        $encien= $bon ;
        $nouveau='-';
        $historique= new historique();
        $historique->setUtilisateur($user);
        $historique->setDatehistorique($datehist);
        $historique->setModule($module);
        $historique->setChamp($champ);
        $historique->setEncienvaleur($encien);
        $historique->setNouveauvaleur($nouveau);
        $historique->setType($type);
        $em->persist($historique);
        $em->flush();
        #end historique

        return $this->redirectToRoute('afficherbonhotel');

    }

    /**
     * @Route("/intervention/bon_hotel/afficherbonhotel",name="afficherbonhotel")
     */
    public function afficherbonhotelAction(Request $request)
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:bonhotel");
        $res_bon=$post->findAll();

        $access=$request->getSession()->get('access');

        return $this->render("hotel/afficherBonHotel.html.twig"
            ,array(
                "bon"=>$res_bon,
                "access"=>$access,
            ));


    }

    /**
     * @Route("/intervention/bon_hotel/DemandeHotel",name="confirmebonhotel")
     */
    public function confirmebonhotelAction(Request $request)
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:utilisateur");
        $res_demandeur=$post->findAll();
        $nbrsupp= $request->request->get("nbrintervenant");
        $inter=$request->request->get("intervention");
        $demandeur=$request->request->get("demandeur");
        $dateentr=$request->request->get("datee");
        $datesort=$request->request->get("dates");
        $objet=$request->request->get("objet");
        $hot=$request->request->get("hotel");
        $deminter=null;
        if ($inter!=null)
        {
            if ($nbrsupp==1)
            {
                $k=1;
                $deminter[1]=$request->request->get("intervenant1");
            }
            if ($nbrsupp>1)
            {
                $deminter[1]=$request->request->get("intervenant1");
                $k=1;
                for ($i=2;$i<=$nbrsupp;$i++)
                {

                    $j=1;
                    $test=false;
                    while (($j<$k)&&($test==false) )
                    {
                        if ($request->request->get("intervenant".$i)==$deminter[$j])
                        {
                            $test=true;
                        }
                        $j++;
                    }
                    if ($test==false)
                    {
                        $k++;
                        $deminter[$k]=$request->request->get("intervenant".$i);
                    }

                }
            }

            $em = $this->getDoctrine()->getManager();
            $demand = $em->getRepository('AppBundle:utilisateur')->findOneByusername($demandeur);

            $em = $this->getDoctrine()->getManager();
            $hotel = $em->getRepository('AppBundle:hotel')->findOneBydesignation($hot);

            $em = $this->getDoctrine()->getManager();
            $intervention = $em->getRepository('AppBundle:intervention')->find($inter);

            $bonhotel= new bonhotel();
            $bonhotel->setDemandeur($demand);
            $bonhotel->setHotel($hotel);
            $bonhotel->setIntervention($intervention);
            $bonhotel->setDateEntree($dateentr);
            $bonhotel->setDateSortie($datesort);
            $bonhotel->setObjetdeplacement($objet);
            $em = $this->getDoctrine()->getManager();
            $em->persist($bonhotel);
            $em->flush();

            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT u FROM AppBundle:intervention_utilisateur u WHERE u.idintervention= :inter AND u.type= :typea');
            $query->setParameters(array(
                'inter' => $intervention,
                'typea' => 'intervenant',
            ));
            $intervenants=$query->getResult(); // array of intervention_utilisateur objects

            #aprtie historique
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='intervention';
            $champ='Bon d\'Hotel';
            $encien='-';
            $type='Ajout';
            $nouveau=$bonhotel->getIdBonhotel();
            $historique= new historique();
            $historique->setUtilisateur($user);
            $historique->setDatehistorique($datehist);
            $historique->setModule($module);
            $historique->setChamp($champ);
            $historique->setEncienvaleur($encien);
            $historique->setNouveauvaleur($nouveau);
            $historique->setType($type);
            $em->persist($historique);
            $em->flush();


            // lenna l'envoi par mail ken i7ebou

            //generation PDF

            $snappy = $this->get('knp_snappy.pdf');
            $html = $this->renderView('pdf/hotelvisible.html.twig',
                array(
                    "demandeur"=>$demand,
                    "intervenant"=>$intervenants,
                    "objet"=>$objet,
                    "dateentre"=>$dateentr,
                    "datesortie"=>$datesort,
                    "supp"=>$deminter,
                    "users"=>$res_demandeur,
                ));

            $filename = 'myFirstSnappyPDF';

            return new Response(
                $snappy->getOutputFromHtml($html),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
                )
            );


        }

    }


    /**
     * @Route("/intervention/bon_hotel/demandeHotel",name="changeinterhotel")
     */
    public function changeinterhotelAction(Request $request)
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:utilisateur");
        $res_demandeur=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:intervention");
        $res_intervention=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiUsers");
        $res_users=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiTicketsUsers");
        $res_ticketusers=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:intervention_ticket");
        $res_interventionticket=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:hotel");
        $res_hotel=$post->findAll();

        $access=$request->getSession()->get('access');

        $inter=$request->request->get("interven");
        if ($inter != null)
        {

            $em = $this->getDoctrine()->getManager();
            $intervention = $em->getRepository('AppBundle:intervention')->find($inter);
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT u FROM AppBundle:intervention_utilisateur u WHERE u.idintervention= :inter AND u.type= :typea');
            $query->setParameters(array(
                'inter' => $intervention,
                'typea' => 'demandeur',
            ));
            $demandeur = $query->getResult(); // array of intervention_utilisateur objects

            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT u FROM AppBundle:intervention_utilisateur u WHERE u.idintervention= :inter AND u.type= :typea');
            $query->setParameters(array(
                'inter' => $intervention,
                'typea' => 'intervenant',
            ));
            $intervenant=$query->getResult(); // array of intervention_utilisateur objects


            return $this->render("hotel/Confdemandebonhotel.html.twig"
                ,array(
                    "demandeur"=>$demandeur,
                    "intervention"=>$res_intervention,
                    "users"=>$res_users,
                    "ticketusers"=>$res_ticketusers,
                    "interticket"=>$res_interventionticket,
                    "inter"=>$inter,
                    "intervenant"=>$intervenant,
                    "hotel"=>$res_hotel,
                    "access"=>$access,
                ));



        }
        return $this->render("hotel/demandebohotel.html.twig"
            ,array(
                "demandeur"=>$res_demandeur,
                "intervention"=>$res_intervention,
                "users"=>$res_users,
                "ticketusers"=>$res_ticketusers,
                "interticket"=>$res_interventionticket,
                "hotel"=>$res_hotel,
                "access"=>$access,
                ));
    }

    /**
     * @Route("/intervention/bon_hotel/demandehotel",name="demandehotel")
     */
    public function demandehotelAction(Request $request)
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:utilisateur");
        $res_demandeur=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:intervention");
        $res_intervention=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiUsers");
        $res_users=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiTicketsUsers");
        $res_ticketusers=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:intervention_ticket");
        $res_interventionticket=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:hotel");
        $res_hotel=$post->findAll();

        $access=$request->getSession()->get('access');

        return $this->render("hotel/demandebohotel.html.twig"
            ,array(
                "demandeur"=>$res_demandeur,
                "intervention"=>$res_intervention,
                "users"=>$res_users,
                "ticketusers"=>$res_ticketusers,
                "interticket"=>$res_interventionticket,
                "hotel"=>$res_hotel,
                "access"=>$access,
                ));
    }



    //*******************************************************************************************
    /**
     * @Route("/intervention/hotel/supprimerhotel",name="supprimerhotel")
     */
    public function supprimerhotelAction(Request $request)
    {
        $design=$request->request->get("designation");
        $em = $this->getDoctrine()->getManager();
        $hotel = $em->getRepository('AppBundle:hotel')->findOneBydesignation($design);
        $em->remove($hotel);
        $em->flush();

        #partie historique
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $datehist= date('d/m/Y');
        $module='intervention';
        $type='Suppression';

        $champ='Hotel '.$design;
        $encien= $design ;
        $nouveau='-';
        $historique= new historique();
        $historique->setUtilisateur($user);
        $historique->setDatehistorique($datehist);
        $historique->setModule($module);
        $historique->setChamp($champ);
        $historique->setEncienvaleur($encien);
        $historique->setNouveauvaleur($nouveau);
        $historique->setType($type);
        $em->persist($historique);
        $em->flush();
        #end historique

        return $this->redirectToRoute('afficherhotel');
    }


    /**
     * @Route("/intervention/hotel/modifier_hotel",name="modifier_hotel")
     */
    public function modifier_hotelAction(Request $request)
    {
        if ($request->request->get("designation")!= null)
        {
            $design=$request->request->get("designation");
            $adress=$request->request->get("adress");
            $tel=$request->request->get("tel");
            $ville=$request->request->get("ville");

            $em = $this->getDoctrine()->getManager();
            $hotel = $em->getRepository('AppBundle:hotel')->findOneBydesignation($design);

            #partie historique
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='intervention';
            $type='Modification';
            if ($hotel->getAdress() != $adress)
            {

                $champ='Adresse de l\'hotel '.$design;
                $encien= $hotel->getAdress() ;
                $nouveau=$adress;
                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($hotel->getTel() != $tel)
            {

                $champ='Numero telephone de l\'hotel '.$design;
                $encien= $hotel->getTel() ;
                $nouveau=$tel;
                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($hotel->getVille() != $ville)
            {

                $champ='Ville de l\'hotel '.$design;
                $encien= $hotel->getVille() ;
                $nouveau=$ville;
                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }

            $hotel->setDesignation($design);
            $hotel->setAdress($adress);
            $hotel->setTel($tel);
            $hotel->setVille($ville);

            $em->flush();
        }

        return $this->redirectToRoute('afficherhotel');

    }

    /**
     * @Route("/intervention/hotel/modifierhotel",name="modifierhotel")
     */
    public function modifierhotelAction(Request $request)
    {
        $designation=$request->request->get("designation");
        $em = $this->getDoctrine()->getManager();
        $hotel = $em->getRepository('AppBundle:hotel')->findOneBydesignation($designation);

        $access=$request->getSession()->get('access');

        return $this->render("hotel/modifierhotel.html.twig",
            array(
                "res"=>$hotel,
                "access"=>$access,
                ));

    }

    /**
     * @Route("/intervention/hotel/afficherhotel",name="afficherhotel")
     */
    public function afficherhotelAction(Request $request)
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:hotel");
        $res=$post->findAll();

        $access=$request->getSession()->get('access');
        return $this->render("hotel/afficher_all_hotel.html.twig",
            array(
                "res"=>$res,
                "access"=>$access,
                ));
    }



    /**
     * @Route("/intervention/hotel/ajouthotel",name="ajouthotel")
     */
    public function ajouthotelAction(Request $request)
    {
        $hotel= new hotel();
        $form = $this->createForm(HotelType::class, $hotel);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            // 4) save the article!
            $em = $this->getDoctrine()->getManager();
            $em->persist($hotel);
            $em->flush();

            #aprtie historique
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='intervention';
            $champ='Hotel';
            $encien='-';
            $type='Ajout';
            $nouveau=$hotel->getDesignation();
            $historique= new historique();
            $historique->setUtilisateur($user);
            $historique->setDatehistorique($datehist);
            $historique->setModule($module);
            $historique->setChamp($champ);
            $historique->setEncienvaleur($encien);
            $historique->setNouveauvaleur($nouveau);
            $historique->setType($type);
            $em->persist($historique);
            $em->flush();

            return $this->redirectToRoute('afficherhotel');
        }

        $access=$request->getSession()->get('access');

        return $this->render(
            'hotel/ajout.html.twig',
            array(
                'form' => $form->createView(),
                'access'=>$access,
                ));

    }


    //*******************************************************************************************

    //                              partie Diffusion
//*******************************************************************************************

    /**
     * @Route("/intervention/diffusion/supprimerdiffusion",name="supprimerdiffusion")
     */
    public function supprimerdiffusionAction(Request $request)
    {
        $name=$request->request->get("name");
        $em = $this->getDoctrine()->getManager();
        $diffusion = $em->getRepository('AppBundle:diffusion')->findOneByname($name);
        $em->remove($diffusion);
        $em->flush();

        #partie historique
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $datehist= date('d/m/Y');
        $module='intervention';
        $type='Suppression';

        $champ='Diffusion '.$name;
        $encien= $name ;
        $nouveau='-';
        $historique= new historique();
        $historique->setUtilisateur($user);
        $historique->setDatehistorique($datehist);
        $historique->setModule($module);
        $historique->setChamp($champ);
        $historique->setEncienvaleur($encien);
        $historique->setNouveauvaleur($nouveau);
        $historique->setType($type);
        $em->persist($historique);
        $em->flush();
        #end historique

        return $this->redirectToRoute('afficherdiffusion');
    }


    /**
     * @Route("/intervention/diffusion/modifier_diffusion",name="modifier_diffusion")
     */
    public function modifier_diffusionAction(Request $request)
    {
        if ($request->request->get("name")!= null)
        {
            $name=$request->request->get("name");
            $fax=$request->request->get("fax");


            $em = $this->getDoctrine()->getManager();
            $diffusion = $em->getRepository('AppBundle:diffusion')->findOneByname($name);

            #partie historique
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='intervention';
            $type='Modification';
            if ($diffusion->getFax()!= $fax)
            {

                $champ='Fax de diffsion '.$name;
                $encien= $diffusion->getFax() ;
                $nouveau=$fax;
                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }

            $diffusion->setName($name);
            $diffusion->setFax($fax);

            $em->flush();
        }

        return $this->redirectToRoute('afficherdiffusion');

    }


    /**
     * @Route("/intervention/diffusion/modifierdiffusion",name="modifierdiffusion")
     */
    public function modifierdiffusionAction(Request $request)
    {
        $name=$request->request->get("name");
        $em = $this->getDoctrine()->getManager();
        $res = $em->getRepository('AppBundle:diffusion')->findOneByname($name);

        $access=$request->getSession()->get('access');

        return $this->render("diffusion/modifierdiffusion.html.twig",
            array(
                "res"=>$res,
                "access"=>$access,
                ));

    }

    /**
     * @Route("/intervention/diffusion/afficherdiffusion",name="afficherdiffusion")
     */
    public function afficherdiffusionAction(Request $request)
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:diffusion");
        $res=$post->findAll();

        $access=$request->getSession()->get('access');

        return $this->render("diffusion/afficher_all_diffusion.html.twig",
            array(
                "res"=>$res,
                "access"=>$access,
                ));
    }


    /**
     * @Route("/intervention/diffusion/ajoutdiffusion",name="ajoutdiffusion")
     */
    public function ajoutdiffusionAction(Request $request)
    {
        $diffusion= new diffusion();
        $form = $this->createForm(diffusionType::class, $diffusion);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            // 4) save the article!
            $em = $this->getDoctrine()->getManager();
            $em->persist($diffusion);
            $em->flush();

            #aprtie historique
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='intervention';
            $champ='Diffusion';
            $encien='-';
            $type='Ajout';
            $nouveau=$diffusion->getName();
            $historique= new historique();
            $historique->setUtilisateur($user);
            $historique->setDatehistorique($datehist);
            $historique->setModule($module);
            $historique->setChamp($champ);
            $historique->setEncienvaleur($encien);
            $historique->setNouveauvaleur($nouveau);
            $historique->setType($type);
            $em->persist($historique);
            $em->flush();

            return $this->redirectToRoute('afficherdiffusion');
        }
        $access=$request->getSession()->get('access');

        return $this->render(
            'diffusion/ajout.html.twig',
            array(
                'form' => $form->createView(),
                'access'=>$access,
                ));

    }



    //*******************************************************************************************



    //                              partie intervention
//*******************************************************************************************

    /**
     * @Route("/intervention/bon_intervention/supprimerbonintervention",name="supprimerbonintervention")
     */
    public function supprimerboninterventionAction(Request $request)
    {
        $bon=$request->request->get("idbon");
        $em = $this->getDoctrine()->getManager();
        $bonintervention = $em->getRepository('AppBundle:intervention')->find($bon);
        $em->remove($bonintervention);
        $em->flush();

        #partie historique
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $datehist= date('d/m/Y');
        $module='intervention';
        $type='Suppression';

        $champ='Bon d\'intervention '.$bon;
        $encien= $bon ;
        $nouveau='-';
        $historique= new historique();
        $historique->setUtilisateur($user);
        $historique->setDatehistorique($datehist);
        $historique->setModule($module);
        $historique->setChamp($champ);
        $historique->setEncienvaleur($encien);
        $historique->setNouveauvaleur($nouveau);
        $historique->setType($type);
        $em->persist($historique);
        $em->flush();
        #end historique

        return $this->redirectToRoute('afficher_all_intervention');

    }

    /**
     * @Route("/intervention/bon_intervention/afficher_all_intervention",name="afficher_all_intervention")
     */
    public function afficher_all_interventionAction(Request $request)
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiLocations");
        $res_station=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiTickets");
        $res_ticket=$post->findAll();

        $post=$this->getDoctrine()->getRepository("AppBundle:intervention");
        $res_intervention=$post->findAll();

        $ticket=null;
        $intervenant=null;
        $i=0;
        foreach ($res_intervention as $r)
        {
                $i++;

            $em = $this->getDoctrine()->getManager();
            $intervenant[$i] = $em->getRepository('AppBundle:intervention_utilisateur')->findByidintervention($r);
            $ticket[$i] = $em->getRepository('AppBundle:intervention_ticket')->findByidintervention($r);

        }
        $access=$request->getSession()->get('access');

        return $this->render("intervention/afficher_all_intervention.html.twig"
            ,array(
                "intervention"=>$res_intervention,
                "allticket"=>$res_ticket,
                "station"=>$res_station,
                "ticket"=>$ticket,
                "intervenant"=>$intervenant,
                "access"=>$access,
            ));


    }


    /**
     * @Route("/intervention/bon_intervention/demandeintervention",name="demandeintervention")
     */
    public function demandeinterventionAction(Request $request)
    {


        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiGroups");
        $res_group=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiTickets");
        $res_ticket=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiTicketsUsers");
        $res_demande=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:utilisateur");
        $res_intervanant=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiUsers");
        $res_users=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiLocations");
        $res_station=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:diffusion");
        $res_diffusion=$post->findAll();
        if ($request->request->get("ticket1")!= null)
        {
            $nbrticket=$request->request->get("nbrticket");
            $nbrintervenant=$request->request->get("nbrintervenant");
            $nbrdiffusion=$request->request->get("nbrdiffusion");
            $id_ticket[1]= $request->request->get("ticket1");
            $dated=$request->request->get("dated");
            $datef=$request->request->get("datef");
            $heured=$request->request->get("heured");
            $heuref=$request->request->get("heuref");
            $type=$request->request->get("type");
            for ($i=1;$i<=$nbrintervenant;$i++)
            {
                $intervenant[$i]=$request->request->get("intervenant".$i);
            }
            for ($j=1;$j<=$nbrdiffusion;$j++)
            {
                $diffusion[$j]=$request->request->get("diffusion".$j);
            }
            for ($k=1;$k<=$nbrticket;$k++)
            {
                $id_ticket[$k+1]=$request->request->get("ticket".($k+1));
            }
#lenna 5dhit el station mte3i
            $station=null;
            for ($d=1;$d<=($nbrticket+1);$d++)
            {
                foreach ($res_ticket as $ti) {
                    if ($ti->getId() == $id_ticket[$d])
                    {
                        $descrption[$d] = $ti->getName();
                        foreach ($res_station as $stat)
                        {
                            if ($stat->getId() == $ti->getLocationsId())
                            {
                                $station[$d] = $stat->getName();
                            }
                        }


                    }
                }
            }
#lenna 5dit el demandeur mte3i


            for ($d=1;$d<=($nbrticket+1);$d++)
            {
                foreach ($res_demande as $dem)
                {
                    if (($dem->getTicketsId() == $id_ticket[$d]) && ($dem->getType() == 2))
                    {
                        foreach ($res_users as $us)
                        {
                            if ($us->getId() == $dem->getUsersId())
                            {
                                foreach ($res_intervanant as $util)
                                {
                                    if ($util->getUsername() == $us->getName())
                                    {
                                        $demand[$d] = $util;
                                    }
                                }

                            }

                        }

                    }
                }
            }


            $desc=' ';
            for ($d=1;$d<=($nbrticket+1);$d++)
            {
                $desc=$desc.''.$descrption[$d].', ';
            }
            $intervention= new intervention();
            $intervention->setDateDebut($dated);
            $intervention->setDateFin($datef);
            $intervention->setHeureDebut($heured);
            $intervention->setHeureFin($heuref);
            $intervention->setType($type);
            $intervention->setDescription($desc);
            $intervention->setApprobation(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($intervention);
            $em->flush();

            for ($i=1;$i<=$nbrintervenant;$i++)
            {
                $em = $this->getDoctrine()->getManager();
                $inter = $em->getRepository('AppBundle:utilisateur')->findOneByusername($intervenant[$i]);
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery('SELECT COUNT(u.idinterventionutilisateur) AS num FROM AppBundle:intervention_utilisateur u WHERE u.idintervention= :inter AND u.idutilisateur= :utilis');
                $query->setParameters(array(
                    'inter' => $intervention,
                    'utilis' => $inter,
                ));
                $nbr = $query->getSingleResult();

                if ($nbr['num']==0)
                {
                    $interutilis= new intervention_utilisateur();
                    $interutilis->setIdintervention($intervention);
                    $interutilis->setIdutilisateur($inter);
                    $interutilis->setType("intervenant");
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($interutilis);
                    $em->flush();
                }
            }
            for ($d=1;$d<=($nbrticket+1);$d++)
            {
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery('SELECT COUNT(u.idinterventionutilisateur) AS num FROM AppBundle:intervention_utilisateur u WHERE u.idintervention= :inter AND u.idutilisateur= :utilis AND u.type= :typea');
                $query->setParameters(array(
                    'inter' => $intervention,
                    'utilis' => $demand[$d],
                    'typea' => "demandeur",
                ));
                $nbr = $query->getSingleResult();
                if ($nbr['num']==0)
                {
                    $interdemand= new intervention_utilisateur();
                    $interdemand->setIdintervention($intervention);
                    $interdemand->setIdutilisateur($demand[$d]);
                    $interdemand->setType("demandeur");
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($interdemand);
                    $em->flush();
                }
            }
            $post=$this->getDoctrine()->getRepository("AppBundle:intervention_utilisateur");
            $res_supprime_intervention=$post->findAll();
            foreach ($res_supprime_intervention as $r)
            {
                if ($r->getIdutilisateur()==null)
                {
                    $em = $this->getDoctrine()->getManager();
                    $em->remove($r);
                    $em->flush();
                }
            }


            #lenna 5edmet el intervention_ticket
            for ($p=1;$p<=($nbrticket+1);$p++)
            {
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery('SELECT COUNT(u.idintervention_ticket) AS num FROM AppBundle:intervention_ticket u WHERE u.idintervention= :inter AND u.ticket= :tick');
                $query->setParameters(array(
                    'inter' => $intervention,
                    'tick' => $id_ticket[$p],
                ));
                $nbr = $query->getSingleResult();

                if ($nbr['num']==0)
                {
                    $ticket_interv= new intervention_ticket();
                    $ticket_interv->setIdIntervention($intervention);
                    $ticket_interv->setTicket($id_ticket[$p]);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($ticket_interv);
                    $em->flush();
                }
            }
            $em = $this->getDoctrine()->getManager();
            $intervenantss = $em->getRepository('AppBundle:intervention_utilisateur')->findByidintervention($intervention);
            $nbrstattick=$nbrticket+1;

            $nbrdemand=$nbrticket+1;
            for ($p=1;$p<=($nbrdemand-1);$p++)
            {
                if (($demand[$p]->getUsername())==($demand[$p+1]->getUsername()))
                {
                    for ($o=$p;$o<=($nbrdemand-1);$o++)
                    {
                        $demand[$o]=$demand[$o+1];
                    }
                    $nbrdemand--;

                }
            }

            for ($i=1;$i<=$nbrdiffusion;$i++)
            {
                $em = $this->getDoctrine()->getManager();
                $diff = $em->getRepository('AppBundle:diffusion')->findOneByname($diffusion[$i]);
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery('SELECT COUNT(u.idinterventionDiffusion) AS num FROM AppBundle:interventionDiffusion u WHERE u.intervention= :inter AND u.diffusion= :diff');
                $query->setParameters(array(
                    'inter' => $intervention,
                    'diff' => $diff,
                ));
                $nbr = $query->getSingleResult();

                if ($nbr['num']==0)
                {
                    $interdiff= new interventionDiffusion();
                    $interdiff->setDiffusion($diff);
                    $interdiff->setIntervention($intervention);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($interdiff);
                    $em->flush();
                }
            }
            $em = $this->getDoctrine()->getManager();
            $diffusionss = $em->getRepository('AppBundle:interventionDiffusion')->findByintervention($intervention);


            #hedhy blasset el mailwet elli bech n5abrou bihom elli bech icherkou fel intervantion
            #hedhy party elli bech ne5edh menha mailwet w nabe3thelhom

            $nbrgroupe=$request->request->get('nbrgroup');

            for($i=0;$i<=$nbrgroupe;$i++)
            {
                $group=$request->request->get('group'.$i);
                $em = $this->getDoctrine()->getManager();
                $gr = $em->getRepository('AppBundle:GlpiGroupsUsers')->findBygroupsId($group);
                foreach ( $gr as $g)
                {
                    $em = $this->getDoctrine()->getManager();
                    $usermail = $em->getRepository('AppBundle:GlpiUseremails')->findByusersId($g->getUsersId());
                    foreach ($usermail as $mails)
                    {
                        if ($mails->getEmail()!=null)
                        {
                            $message = \Swift_Message::newInstance()
                                ->setSubject('Information sur Intervention')
                                ->setFrom('dptg.steg@gmail.com')
                                ->setTo(array($mails->getEmail()))
                                ->setBody(
                                    $this->renderView(

                                        'Emails/groupintervention.html.twig',
                                        array('dated' => $dated,
                                            'datef'=> $datef,
                                            'station'=>$station)
                                    ),
                                    'text/html'
                                );
                            $this->get('mailer')->send($message);
                        }
                    }
                }

            }

            #aprtie historique
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='intervention';
            $champ='Bon d\'Intervention';
            $encien='-';
            $type='Ajout';
            $nouveau=$intervention->getIdIntervention();
            $historique= new historique();
            $historique->setUtilisateur($user);
            $historique->setDatehistorique($datehist);
            $historique->setModule($module);
            $historique->setChamp($champ);
            $historique->setEncienvaleur($encien);
            $historique->setNouveauvaleur($nouveau);
            $historique->setType($type);
            $em->persist($historique);
            $em->flush();

            #partie generation pdf
            $snappy = $this->get('knp_snappy.pdf');

            $html = $this->renderView('pdf/pdf_intervention.html.twig', array(
                'intervention' => $intervention,
                'intervenant' =>$intervenantss,
                'nbr' => $nbrstattick,
                'ticket' =>$id_ticket,
                'station'=>$station,
                'diffusion'=>$diffusionss,
                'description'=>$desc,
                'appr' =>'Non'
            ));

            $filename = 'myFirstSnappyPDF';

            return new Response(
                $snappy->getOutputFromHtml($html),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
                )
            );









        }
        $access=$request->getSession()->get('access');

        return $this->render("intervention/demandeIntervention.html.twig"
            ,array("ticket" => $res_ticket,
                "demendeur"=>$res_demande,
                "intervenant"=>$res_intervanant,
                "users"=>$res_users,
                "diffusion"=>$res_diffusion,
                'groupe'=>$res_group,
                "nb"=>0,
                "access"=>$access,
                ));
    }

//*******************************************************************************************

    //                              partie bon
//*******************************************************************************************

    /**
     * @Route("/stock/bon_article/supprimerbonarticle",name="supprimerbonarticle")
     */
    public function supprimerbonarticleAction(Request $request)
    {
        $bon=$request->request->get("idbon");
        $em = $this->getDoctrine()->getManager();
        $bonarticle = $em->getRepository('AppBundle:Bon')->find($bon);
        $em->remove($bonarticle);
        $em->flush();

        #partie historique
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $datehist= date('d/m/Y');
        $module='stock';
        $type='Suppression';

        $champ='Bon d\'article '.$bon;
        $encien= $bon ;
        $nouveau='-';
        $historique= new historique();
        $historique->setUtilisateur($user);
        $historique->setDatehistorique($datehist);
        $historique->setModule($module);
        $historique->setChamp($champ);
        $historique->setEncienvaleur($encien);
        $historique->setNouveauvaleur($nouveau);
        $historique->setType($type);
        $em->persist($historique);
        $em->flush();
        #end historique

        return $this->redirectToRoute('afficherbon');

    }


    /**
     * @Route("/stock/bon_article/afficherbon",name="afficherbon")
     */
    public function afficherbonAction(Request $request)
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:Bon");
        $res=$post->findAll();
        $nb=0;
        foreach ($res as $r)
        {
            $nb++;
        }
        $ar=null;
        $i=0;
        foreach ($res as $r)
        {
            if($i<$nb)
            {
                $i++;
            }
            $em = $this->getDoctrine()->getManager();
            $ar[$i] = $em->getRepository('AppBundle:BonArticle')->findByidBon($r->getIdBon());

        }
        //$msq="";

        //foreach ($ar[1] as $a )
        //{
        //    $msq.= $a->getQte()." ";
        //}

        //return new Response($i);
        $access=$request->getSession()->get('access');

        return $this->render("bon/afficher_all_bon.html.twig",
            array("bon" => $res,
                "bonarticle" => $ar,
                "access"=>$access,
                ));
    }

    /**
     * @Route("/stock/bon_article/demandebon/confirmation",name="confirmationbon")
     */
    public function confirmationbonAction(Request $request)
    {
        $poststation=$this->getDoctrine()->getRepository("AppBundle:GlpiLocations");
        $res_station=$poststation->findAll();

        $postarticle=$this->getDoctrine()->getRepository("AppBundle:Article");
        $res_article=$postarticle->findAll();

        $postuser=$this->getDoctrine()->getRepository("AppBundle:utilisateur");
        $res_user=$postuser->findAll();

        $postserie=$this->getDoctrine()->getRepository("AppBundle:NumeroSerie");
        $res_serie=$postserie->findAll();

        $access=$request->getSession()->get('access');



        if ($request->request->get("nbrarticle")!= null)
        {
            $nbarticle=$request->request->get("nbrarticle");
            $demandeur=$request->request->get("demandeur");
            $magasinier=$request->request->get("magasinier");
            $signataire=$request->request->get("signataire");
            $type=$request->request->get("type");

            for ($i=1;$i<=$nbarticle;$i++)
            {
                $article[$i]=$request->request->get("article".$i);
                $quantite[$i]=$request->request->get("quantite".$i);
                $station[$i]=$request->request->get("station".$i);

            }

            if ($type=="sortie")
            {
                for ($i=1;$i<=$nbarticle;$i++)
                {

                    $em = $this->getDoctrine()->getManager();
                    $ar = $em->getRepository('AppBundle:Article')->findOneBydesignation($article[$i]);
                    $qte= $ar->getQteActuel();
                    if($quantite[$i]>$qte)
                    {
                        return $this->render("bon/confirmationbon.html.twig",array("nb"=>$nbarticle,
                            "stat"=>$res_station,
                            "article"=> $res_article,
                            "users"=> $res_user,
                            "msg"=> "le quantité de l'article ".$article[$i]."existe dans le stock égale à ".$qte."
                             inférieur à celle qui est demandée",
                            "access"=>$access,
                            ));
                    }
                     //********
                    $n=$quantite[$i];

                    for ($j=1;$j<=$n;$j++)
                    {

                        $serie[$j]=$request->request->get("serie".$i.".".$j);
                        //return new Response($serie[$j]);
                        if ($serie[$j]!= Null)
                        {
                            $se=$serie[$j];
                            $em = $this->getDoctrine()->getManager();
                            $query = $em->createQuery('SELECT COUNT(u.idnumeroSerie) AS num FROM AppBundle:NumeroSerie u WHERE u.name= :nam ');
                            $query->setParameters(array(
                                'nam' => $se,
                            ));
                            $nbr = $query->getSingleResult();


                            if ($nbr['num']==0)
                            {
                                return $this->render("bon/confirmationbon.html.twig",array("nb"=>$nbarticle,
                                    "stat"=>$res_station,
                                    "article"=> $res_article,
                                    "users"=> $res_user,
                                    "msg"=> "le numero de serie ".$se." de l'article ".$article[$i]." n'existe pas ",
                                    "access"=>$access,
                                    ));
                            }

                        }
                    }

                    for ($j=1;$j<=$n;$j++)
                    {
                        $serine[$j] = $request->request->get("serie".$i.".".$j);
                        if ($serine[$j] != Null)
                        {
                            $ser=$serine[$j];
                            $em = $this->getDoctrine()->getManager();
                            $numser = $em->getRepository('AppBundle:NumeroSerie')->findOneByname($ser);
                            $em->remove($numser);
                            $em->flush();

                        }
                    }
                    //*********

                }
                $em = $this->getDoctrine()->getManager();
                $dem = $em->getRepository('AppBundle:utilisateur')->findOneByusername($demandeur);

                $em = $this->getDoctrine()->getManager();
                $mag = $em->getRepository('AppBundle:utilisateur')->findOneByusername($magasinier);

                $em = $this->getDoctrine()->getManager();
                $sig = $em->getRepository('AppBundle:utilisateur')->findOneByusername($signataire);


                $date=date("d/m/20y");
                $bon=new Bon();
                $bon->setDemandeur($dem);
                $bon->setMagasinier($mag);
                $bon->setApprobateur($sig);
                $bon->setDateBon($date);
                $bon->setDateSignataire($date);
                $bon->setTypeBon($type);
                $em = $this->getDoctrine()->getManager();
                $em->persist($bon);
                $em->flush();

                for ($i=1;$i<=$nbarticle;$i++)
                {
                    $em = $this->getDoctrine()->getManager();
                    $arti = $em->getRepository('AppBundle:Article')->findOneBydesignation($article[$i]);
                    $qteactuel=$arti->getQteActuel();



                    $bon_article=new BonArticle();
                    $bon_article->setIdBon($bon);
                    $bon_article->setIdArticle($arti);
                    $bon_article->setIdStation($station[$i]);
                    $bon_article->setDateOp($date);
                    $bon_article->setQte($quantite[$i]);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($bon_article);
                    $em->flush();

                    $em = $this->getDoctrine()->getManager();
                    $arti = $em->getRepository('AppBundle:Article')->findOneBydesignation($article[$i]);
                    $qte_taw=$qteactuel-$quantite[$i];
                    $arti->setQteActuel($qte_taw);
                    $em->flush();





                }

                //hedhy blasset ls email elli bech yetba3thou lelli 3amline el bon
                $message = \Swift_Message::newInstance()
                    ->setSubject('Bon')
                    ->setFrom('dptg.steg@gmail.com')
                    ->setTo(array($dem->getEmail(),$mag->getEmail(),$sig->getEmail()))
                    ->setBody(
                        $this->renderView(
                            'Emails/bon.html.twig',
                            array('typebon' => $type,
                                'num'=>$bon->getIdBon())
                        ),
                        'text/html'
                    );


                $this->get('mailer')->send($message);
                //return $this->redirectToRoute('affichearticles');

                $demand=$dem->getNom()." ".$dem->getPrenom();
                $magasin=$mag->getNom()." ".$mag->getPrenom();
                $signat=$sig->getNom()." ".$sig->getPrenom();

                $snappy = $this->get('knp_snappy.pdf');

                $html = $this->renderView('pdf/bon.html.twig', array(
                    'num' => $bon->getIdBon(),
                    'type'  => $type,
                    'nom_demandeur' =>$demand,
                    'nom_controle' => $signat,
                    'nom_magasinier' =>$magasin,
                    'article'=>$article,
                    'qantite'=>$quantite,
                    'station'=>$station,
                    'nbr'=>$nbarticle,
                    'appr' =>'Non'
                ));

                $filename = 'myFirstSnappyPDF';

                return new Response(
                    $snappy->getOutputFromHtml($html),
                    200,
                    array(
                        'Content-Type'          => 'application/pdf',
                        'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
                    )
                );


            }


            elseif ($type=="retour")
            {
                for ($i=1;$i<=$nbarticle;$i++)
                {
                    $em = $this->getDoctrine()->getManager();
                    $ar = $em->getRepository('AppBundle:Article')->findOneBydesignation($article[$i]);
                    $qte= $ar->getQteActuel();
                    $qtei= $ar->getQteInitial();
                    $qteta=$qte+$quantite[$i];
                    if($qteta>$qtei)
                    {
                        return $this->render("bon/confirmationbon.html.twig",array("nb"=>$nbarticle,
                            "stat"=>$res_station,
                            "article"=> $res_article,
                            "users"=> $res_user,
                            "msg"=> "le quantité de l'article ".$article[$i]." 
                            entrée avec celle qui est actuellement existe dans le stock supérieur à la quantité initial
                            qui égale à ".$qtei,
                            "access"=>$access,
                            ));
                    }

                }

                $em = $this->getDoctrine()->getManager();
                $dem = $em->getRepository('AppBundle:utilisateur')->findOneByusername($demandeur);

                $em = $this->getDoctrine()->getManager();
                $mag = $em->getRepository('AppBundle:utilisateur')->findOneByusername($magasinier);

                $em = $this->getDoctrine()->getManager();
                $sig = $em->getRepository('AppBundle:utilisateur')->findOneByusername($signataire);


                $date=date("d/m/20y");
                $bon=new Bon();
                $bon->setDemandeur($dem);
                $bon->setMagasinier($mag);
                $bon->setApprobateur($sig);
                $bon->setDateBon($date);
                $bon->setDateSignataire($date);
                $bon->setTypeBon($type);
                $em = $this->getDoctrine()->getManager();
                $em->persist($bon);
                $em->flush();

                for ($i=1;$i<=$nbarticle;$i++)
                {

                    $em = $this->getDoctrine()->getManager();
                    $arti = $em->getRepository('AppBundle:Article')->findOneBydesignation($article[$i]);
                    $qteactuel = $arti->getQteActuel();


                    $bon_article = new BonArticle();
                    $bon_article->setIdBon($bon);
                    $bon_article->setIdArticle($arti);
                    $bon_article->setIdStation($station[$i]);
                    $bon_article->setDateOp($date);
                    $bon_article->setQte($quantite[$i]);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($bon_article);
                    $em->flush();

                    $em = $this->getDoctrine()->getManager();
                    $arti = $em->getRepository('AppBundle:Article')->findOneBydesignation($article[$i]);
                    $qte_taw=$qteactuel+$quantite[$i];
                    $arti->setQteActuel($qte_taw);
                    $em->flush();

                }
                $message = \Swift_Message::newInstance()
                    ->setSubject('Bon')
                    ->setFrom('dptg.steg@gmail.com')
                    ->setTo(array($dem->getEmail(),$mag->getEmail(),$sig->getEmail()))
                    ->setBody(
                        $this->renderView(

                            'Emails/bon.html.twig',
                            array('typebon' => $type,
                                'num'=>$bon->getIdBon())
                        ),
                        'text/html'
                    );
                $this->get('mailer')->send($message);

                $demand=$dem->getNom()." ".$dem->getPrenom();
                $magasin=$mag->getNom()." ".$mag->getPrenom();
                $signat=$sig->getNom()." ".$sig->getPrenom();

                $snappy = $this->get('knp_snappy.pdf');

                $html = $this->renderView('pdf/bon.html.twig', array(
                    'num' => $bon->getIdBon(),
                    'type'  => $type,
                    'nom_demandeur' =>$demand,
                    'nom_controle' => $signat,
                    'nom_magasinier' =>$magasin,
                    'article'=>$article,
                    'qantite'=>$quantite,
                    'station'=>$station,
                    'nbr'=>$nbarticle,
                    'appr' =>'Non'
                ));

                $filename = 'myFirstSnappyPDF';

                return new Response(
                    $snappy->getOutputFromHtml($html),
                    200,
                    array(
                        'Content-Type'          => 'application/pdf',
                        'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
                    )
                );




            }

            elseif ($type=="entree")
            {
                $em = $this->getDoctrine()->getManager();
                $dem = $em->getRepository('AppBundle:utilisateur')->findOneByusername($demandeur);

                $em = $this->getDoctrine()->getManager();
                $mag = $em->getRepository('AppBundle:utilisateur')->findOneByusername($magasinier);

                $em = $this->getDoctrine()->getManager();
                $sig = $em->getRepository('AppBundle:utilisateur')->findOneByusername($signataire);


                $date=date("d/m/20y");
                $bon=new Bon();
                $bon->setDemandeur($dem);
                $bon->setMagasinier($mag);
                $bon->setApprobateur($sig);
                $bon->setDateBon($date);
                $bon->setDateSignataire($date);
                $bon->setTypeBon($type);
                $em = $this->getDoctrine()->getManager();
                $em->persist($bon);
                $em->flush();

                for ($i=1;$i<=$nbarticle;$i++)
                {

                    $em = $this->getDoctrine()->getManager();
                    $arti = $em->getRepository('AppBundle:Article')->findOneBydesignation($article[$i]);
                    $qteactuel = $arti->getQteActuel();
                    $qteinitial= $arti->getQteInitial();


                    $bon_article = new BonArticle();
                    $bon_article->setIdBon($bon);
                    $bon_article->setIdArticle($arti);
                    $bon_article->setIdStation($station[$i]);
                    $bon_article->setDateOp($date);
                    $bon_article->setQte($quantite[$i]);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($bon_article);
                    $em->flush();

                    $em = $this->getDoctrine()->getManager();
                    $arti = $em->getRepository('AppBundle:Article')->findOneBydesignation($article[$i]);
                    $qte_taw=$qteactuel+$quantite[$i];
                    $qteinit=$qteinitial+$quantite[$i];
                    $arti->setQteActuel($qte_taw);
                    $arti->setQteInitial($qteinit);
                    $em->flush();

                }
                $message = \Swift_Message::newInstance()
                    ->setSubject('Bon')
                    ->setFrom('dptg.steg@gmail.com')
                    ->setTo(array($dem->getEmail(),$mag->getEmail(),$sig->getEmail()))
                    ->setBody(
                        $this->renderView(
                        // app/Resources/views/Emails/registration.html.twig
                            'Emails/bon.html.twig',
                            array('typebon' => $type,
                                'num'=>$bon->getIdBon())
                        ),
                        'text/html'
                    );
                $this->get('mailer')->send($message);

                #aprtie historique
                $user = $this->get('security.token_storage')->getToken()->getUser();
                $datehist= date('d/m/Y');
                $module='stock';
                $champ='Bon d\'Article';
                $encien='-';
                $type='Ajout';
                $nouveau=$bon->getIdBon();
                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();

                $demand=$dem->getNom()." ".$dem->getPrenom();
                $magasin=$mag->getNom()." ".$mag->getPrenom();
                $signat=$sig->getNom()." ".$sig->getPrenom();

                $snappy = $this->get('knp_snappy.pdf');

                $html = $this->renderView('pdf/bon.html.twig', array(
                    'num' => $bon->getIdBon(),
                    'type'  => 'entree',
                    'nom_demandeur' =>$demand,
                    'nom_controle' => $signat,
                    'nom_magasinier' =>$magasin,
                    'article'=>$article,
                    'qantite'=>$quantite,
                    'station'=>$station,
                    'nbr'=>$nbarticle,
                    'appr' =>'Non'
                ));

                $filename = 'myFirstSnappyPDF';

                return new Response(
                    $snappy->getOutputFromHtml($html),
                    200,
                    array(
                        'Content-Type'          => 'application/pdf',
                        'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
                    )
                );




            }






        }





        //$nbr=$request->request->get("nbarticle");



        return $this->render("bon/confirmationbon.html.twig",array("nb"=>0,
            "stat"=>$res_station,
            "article"=> $res_article,
            "users"=> $res_user,
            "msg"=>"",
            "access"=>$access,
            ));
    }


    /**
     * @Route("/stock/bon_article/demandebon",name="demandebon")
     */
    public function demandebonAction(Request $request)
    {

        $access=$request->getSession()->get('access');
        return $this->render("bon/demandebon.html.twig",
            array(
                'access'=>$access,
            ));
    }



//*******************************************************************************************


//                              partie station
//*******************************************************************************************

    /**
     * @Route("/stock/station/supprimestation",name="supprimestation")
     */
    public function supprimestationAction(Request $request)
    {
        $nam=$request->request->get("name");
        $em = $this->getDoctrine()->getManager();
        $station = $em->getRepository('AppBundle:Station')->findOneByname($nam);
        $em->remove($station);
        $em->flush();

        #partie historique
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $datehist= date('d/m/Y');
        $module='stock';
        $type='Suppression';

        $champ='Station '.$nam;
        $encien= $nam ;
        $nouveau='-';
        $historique= new historique();
        $historique->setUtilisateur($user);
        $historique->setDatehistorique($datehist);
        $historique->setModule($module);
        $historique->setChamp($champ);
        $historique->setEncienvaleur($encien);
        $historique->setNouveauvaleur($nouveau);
        $historique->setType($type);
        $em->persist($historique);
        $em->flush();
        #end historique

        return $this->redirectToRoute('affichestation');
    }


    /**
     * @Route("/stock/station/modifier_station",name="modifier_station")
     */
    public function modifier_stationAction(Request $request)
    {
        if ($request->request->get("name")!= null)
        {
            $nam=$request->request->get("name");
            $csr=$request->request->get("csr");
            $em = $this->getDoctrine()->getManager();
            $station = $em->getRepository('AppBundle:Station')->findOneByname($nam);

            #partie historique
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='stock';
            $type='Modification';
            if ($station->getCsr() != $csr)
            {

                $champ='Csr Station '.$nam;
                $encien= $station->getCsr() ;
                $nouveau=$csr;
                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }


            $station->setName($nam);
            $station->setCsr($csr);

            $em->flush();


        }

        return $this->redirectToRoute('affichestation');

    }



    /**
     * @Route("/stock/station/modifierstation",name="modifierstation")
     */
    public function modifierstationAction(Request $request)
    {
        $nam=$request->request->get("name");
        $em = $this->getDoctrine()->getManager();
        $station = $em->getRepository('AppBundle:Station')->findOneByname($nam);

        $access=$request->getSession()->get('access');

        return $this->render("station/modifierstation.html.twig",
            array(
                "res"=>$station,
                "access"=>$access,
                ));
    }



    /**
     * @Route("/stock/station/affichestation",name="affichestation")
     */
    public function affichestationAction(Request $request)
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:Station");
        $res=$post->findAll();

        $access=$request->getSession()->get('access');

        return $this->render("station/afficher_all_station.html.twig",
            array(
                "res"=>$res,
                "access"=>$access,

            ));
    }

    /**
     * @Route("/stock/station/ajoutstation",name="ajoutstation")
     */
    public function ajoutstationAction(Request $request)
    {
        $station= new Station();
        $form = $this->createForm(StationType::class, $station);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {



            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($station);
            $em->flush();

            #aprtie historique
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='stock';
            $champ='Station';
            $encien='-';
            $type='Ajout';
            $nouveau=$station->getName();
            $historique= new historique();
            $historique->setUtilisateur($user);
            $historique->setDatehistorique($datehist);
            $historique->setModule($module);
            $historique->setChamp($champ);
            $historique->setEncienvaleur($encien);
            $historique->setNouveauvaleur($nouveau);
            $historique->setType($type);
            $em->persist($historique);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('affichestation');

        }
        $access=$request->getSession()->get('access');

        return $this->render(
            'station/ajoutstation.html.twig',
            array(
                'form' => $form->createView(),
                'access'=>$access,
                ));
    }

//*******************************************************************************************


    //                              partie article
//*******************************************************************************************

//                          Numero de Serie
//**********************************************************

    /**
     * @Route("/stock/article/ajout_Numero_Serie/confirmation",name="confirmation_ajout_Numero_Serie")
     */
    public function confirmation_ajout_Numero_SerieAction(Request $request)
    {
        $nbr=$request->request->get("nbrserie");
        $art=$request->request->get("article");
        $access=$request->getSession()->get('access');
        if ($nbr != Null)
        {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('AppBundle:Article')->find($art);
        $qte=$article->getQteActuel();
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT COUNT(u.name) AS num FROM AppBundle:NumeroSerie u WHERE u.idArticle= :art ');
        $query->setParameters(array(
            'art' => $art,
        ));
        $seris = $query->getSingleResult();
        $nbrseri=$seris['num'];
        $nbrtot=$nbrseri+$nbr;
        if ($nbrtot>$qte)
        {
            return $this->render("article/ajoutNumeroSerie.html.twig",
                array("arti"=>$art,
                    "msg"=>"le nbre de numero de serie qui vous entré avec celle qui etais existant superieur à la quantité 
                    d'article existant",
                    "access"=>$access,
                ));
        }
        for ($i=1;$i<=$nbr;$i++)
        {
            $serie=$request->request->get("serie".$i);
            $query = $em->createQuery('SELECT COUNT(u.name) AS num FROM AppBundle:NumeroSerie u WHERE u.name= :nam ');
            $query->setParameters(array(
                'nam' => $serie,
            ));
            $se = $query->getSingleResult();
            if ($se['num']!=0)
            {
                return $this->render("article/ajoutNumeroSerie.html.twig",
                    array("arti"=>$art,
                        "msg"=>"Le numero de serie ".$serie." déja existe",
                        "access"=>$access,
                    ));
            }
        }
        for ($i=1;$i<=$nbr;$i++)
        {
            $serie=$request->request->get("serie".$i);
            $query = $em->createQuery('SELECT COUNT(u.name) AS num FROM AppBundle:NumeroSerie u WHERE u.name= :nam ');
            $query->setParameters(array(
                'nam' => $serie,
            ));
            $se = $query->getSingleResult();
            if ($se['num']==0)
            {
                $numserie=new NumeroSerie();
                $numserie->setName($serie);
                $numserie->setIdArticle($article);
                $em = $this->getDoctrine()->getManager();
                $em->persist($numserie);
                $em->flush();

                #aprtie historique
                $user = $this->get('security.token_storage')->getToken()->getUser();
                $datehist= date('d/m/Y');
                $module='stock';
                $champ='Numero de série d\'Article '.$article->getDesignation();
                $encien='-';
                $type='Ajout';
                $nouveau=$serie;
                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();

            }
        }


        }

        return $this->redirectToRoute('affichearticles');


    }


    /**
     * @Route("/stock/article/ajouter_Numero_Serie",name="ajouterNumeroSerie")
     */
    public function ajouterNumeroSerieAction(Request $request)
    {
        $art=$request->request->get("articlee");

        $access=$request->getSession()->get('access');

        return $this->render("article/ajoutNumeroSerie.html.twig",
            array("arti"=>$art,
                "msg"=>"",
                "access"=>$access,
            ));
    }

    /**
     * @Route("/stock/article/supprimer_Numero_Serie/confirmation",name="confirmationsuppSerie")
     */
    public function confirmationSuppSerieAction(Request $request)
    {

        $nbr=$request->request->get("nbrserie");
        $art=$request->request->get("article");
        if ($nbr != Null)
        {



            for ($i=1;$i<=$nbr;$i++)
            {
                $serie=$request->request->get("serie".$i);
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery('SELECT COUNT(u.name) AS num FROM AppBundle:NumeroSerie u WHERE u.name= :nam ');
                $query->setParameters(array(
                    'nam' => $serie,
                ));
                $nbr1 = $query->getSingleResult();

                if ($nbr1['num']!=0)
                {

                    $em = $this->getDoctrine()->getManager();
                    $numseri = $em->getRepository('AppBundle:NumeroSerie')->findOneByname($serie);
                    $em->remove($numseri);
                    $em->flush();
                    #partie historique
                    $article = $em->getRepository('AppBundle:Article')->find($art);
                    $user = $this->get('security.token_storage')->getToken()->getUser();
                    $datehist= date('d/m/Y');
                    $module='stock';
                    $type='Suppression';

                    $champ='Numero de série de l\'article '.$article->getDesignation();
                    $encien= $serie ;
                    $nouveau='-';
                    $historique= new historique();
                    $historique->setUtilisateur($user);
                    $historique->setDatehistorique($datehist);
                    $historique->setModule($module);
                    $historique->setChamp($champ);
                    $historique->setEncienvaleur($encien);
                    $historique->setNouveauvaleur($nouveau);
                    $historique->setType($type);
                    $em->persist($historique);
                    $em->flush();
                    #end historique
                }


            }

            return $this->redirectToRoute('affichearticles');
        }
        return $this->redirectToRoute('affichearticles');
    }


    /**
     * @Route("/stock/article/supprimer_Numero_Serie",name="supprimerNumeroSerie")
     */
    public function modifierNumeroSerieAction(Request $request)
    {
        $art=$request->request->get("article");

        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('AppBundle:Article')->find($art);

        $em = $this->getDoctrine()->getManager();
        $res= $em->getRepository('AppBundle:NumeroSerie')->findByidArticle($article);

        $access=$request->getSession()->get('access');

        return $this->render("article/supprimeNumeroSerie.html.twig",
            array("res"=>$res,
                "arti"=>$art,
                "access"=>$access,
            ));


    }

//**********************************************************


    /**
     * @Route("/stock/article/supprimearticle",name="supprimearticle")
     */
    public function supprimearticleAction(Request $request)
    {
        $designation=$request->request->get("designation");
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('AppBundle:Article')->findOneBydesignation($designation);
        $em->remove($article);
        $em->flush();
        #partie historique
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $datehist= date('d/m/Y');
        $module='stock';
        $type='Suppression';

            $champ='Article '.$designation;
            $encien= $designation ;
            $nouveau='-';
            $historique= new historique();
            $historique->setUtilisateur($user);
            $historique->setDatehistorique($datehist);
            $historique->setModule($module);
            $historique->setChamp($champ);
            $historique->setEncienvaleur($encien);
            $historique->setNouveauvaleur($nouveau);
            $historique->setType($type);
            $em->persist($historique);
            $em->flush();
        #end historique


        return $this->redirectToRoute('affichearticles');
    }




    /**
     * @Route("/stock/article/modifarticle",name="modifarticle")
     */
    public function modifarticleAction(Request $request)
    {
        if ($request->request->get("designation")!= null)
        {
            $id=$request->request->get("id");
            $designation=$request->request->get("designation");
            $marque=$request->request->get("marque");
            $quantiteinitial=$request->request->get("quantite_initial");
            $quantiteactuel=$request->request->get("quantite_actuel");
            $emplacement=$request->request->get("emplacement");
            $unite=$request->request->get("unite");

            $em = $this->getDoctrine()->getManager();
            $article = $em->getRepository('AppBundle:Article')->find($id);
#partie historique
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='stock';
            $type='Modification';
            if ($article->getMarque()!= $marque)
            {

                $champ='marque Article '.$designation;
                $encien= $article->getMarque() ;
                $nouveau=$marque;
                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($article->getQteInitial() != $quantiteinitial)
            {
                $champ='Quantité initial de l\'article '.$designation;
                $encien= $article->getQteInitial() ;
                $nouveau=$quantiteinitial;
                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($article->getQteActuel() != $quantiteactuel)
            {
                $champ='Quantité actuel de l\'article '.$designation;
                $encien= $article->getQteActuel() ;
                $nouveau=$quantiteactuel;
                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($article->getEmplacement() != $emplacement)
            {
                $champ='Emplacement de l\'article '.$designation;
                $encien= $article->getEmplacement() ;
                $nouveau=$emplacement;
                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($article->getUnite() != $unite)
            {
                $champ='Unité de l\'article '.$designation;
                $encien= $article->getUnite() ;
                $nouveau=$unite;
                $historique= new historique();
                $historique->setUtilisateur($user);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
#end historique

            $article->setDesignation($designation);
            $article->setMarque($marque);
            $article->setQteInitial($quantiteinitial);
            $article->setQteActuel($quantiteactuel);
            $article->setEmplacement($emplacement);
            $article->setUnite($unite);
            $em->flush();



        }
        return $this->redirectToRoute('affichearticles');
    }

    /**
     * @Route("/stock/article/modifierarticle",name="modifier_article")
     */
    public function modifierarticleAction(Request $request)
    {

        $design=$request->request->get("designation");
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('AppBundle:Article')->findOneBydesignation($design);

        $access=$request->getSession()->get('access');

        return $this->render("article/modifier.html.twig",
            array(
                "res"=>$article,
                "access"=>$access,
                ));
    }




    /**
     * @Route("/stock/article/affichearticles",name="affichearticles")
     */
    public function affichearticleAction(Request $request)
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:Article");
        $res=$post->findAll();
        $pos=$this->getDoctrine()->getRepository("AppBundle:NumeroSerie");
        $num=$pos->findAll();
        $access=$request->getSession()->get('access');
        return $this->render("article/afficher_all_article.html.twig",
            array(
                "res"=>$res,
                "num"=>$num,
                "access"=>$access,
                ));
    }

    /**
     * @Route("/stock/article/ajoutarticle",name="ajoutarticle")
     */
    public function ajoutarticleAction(Request $request)
    {
        $postuser=$this->getDoctrine()->getRepository("AppBundle:utilisateur");
        $res_user=$postuser->findAll();

        $article= new Article();
        $form = $this->createForm(ArticleType::class, $article);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $demandeur=$request->request->get("demandeur");
            $magasinier=$request->request->get("magasinier");
            $signataire=$request->request->get("signataire");

            $em = $this->getDoctrine()->getManager();
            $dem = $em->getRepository('AppBundle:utilisateur')->findOneByusername($demandeur);

            $em = $this->getDoctrine()->getManager();
            $mag = $em->getRepository('AppBundle:utilisateur')->findOneByusername($magasinier);

            $em = $this->getDoctrine()->getManager();
            $sig = $em->getRepository('AppBundle:utilisateur')->findOneByusername($signataire);


            $date=date("d/m/20y");
            $bon=new Bon();
            $bon->setDemandeur($dem);
            $bon->setMagasinier($mag);
            $bon->setApprobateur($sig);
            $bon->setDateBon($date);
            $bon->setDateSignataire($date);
            $bon->setTypeBon("entree");
            $em = $this->getDoctrine()->getManager();
            $em->persist($bon);
            $em->flush();



            // 4) save the article!
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            $quantite=$article->getQteInitial();




            $bon_article = new BonArticle();
            $bon_article->setIdBon($bon);
            $bon_article->setIdArticle($article);
            $bon_article->setDateOp($date);
            $bon_article->setQte($quantite);
            $em = $this->getDoctrine()->getManager();
            $em->persist($bon_article);
            $em->flush();

            for ($j=1;$j<=$article->getQteInitial();$j++)
            {
                $serie=$request->request->get("serie".$j);

                if($serie!=Null)
                {
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery('SELECT COUNT(u.idnumeroSerie) AS num FROM AppBundle:NumeroSerie u WHERE u.name= :nam ');
                    $query->setParameters(array(
                        'nam' => $serie,
                    ));
                    $nbr = $query->getSingleResult();

                    if ($nbr['num']==0) {
                        $numserie = new NumeroSerie();
                        $numserie->setName($serie);
                        $numserie->setIdArticle($article);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($numserie);
                        $em->flush();
                    }
                }
            }

            $demand=$dem->getNom()." ".$dem->getPrenom();
            $magasin=$mag->getNom()." ".$mag->getPrenom();
            $signat=$sig->getNom()." ".$sig->getPrenom();

            $snappy = $this->get('knp_snappy.pdf');

            $html = $this->renderView('pdf/bon1.html.twig', array(
                'num' => $bon->getIdBon(),
                'type'  => "entrée",
                'nom_demandeur' =>$demand,
                'nom_controle' => $signat,
                'nom_magasinier' =>$magasin,
                'article'=>$article,
                'qantite'=>$quantite,
                'appr' =>'Non'
            ));
            $message = \Swift_Message::newInstance()
                ->setSubject('Bon')
                ->setFrom('dptg.steg@gmail.com')
                ->setTo(array($dem->getEmail(),$mag->getEmail(),$sig->getEmail()))
                ->setBody(
                    $this->renderView(
                    // app/Resources/views/Emails/registration.html.twig
                        'Emails/bon.html.twig',
                        array('typebon' => 'entree',
                            'num'=>$bon->getIdBon())
                    ),
                    'text/html'
                );
            $this->get('mailer')->send($message);
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='stock';
            $champ='designation Article';
            $encien='-';
            $type='Ajout';
            $nouveau=$article->getDesignation();
            $historique= new historique();
            $historique->setUtilisateur($user);
            $historique->setDatehistorique($datehist);
            $historique->setModule($module);
            $historique->setChamp($champ);
            $historique->setEncienvaleur($encien);
            $historique->setNouveauvaleur($nouveau);
            $historique->setType($type);
            $em->persist($historique);
            $em->flush();

            $filename = 'myFirstSnappyPDF';

            return new Response(
                $snappy->getOutputFromHtml($html),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
                )
            );



            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            //return $this->redirectToRoute('affichearticles');
        }
        $access=$request->getSession()->get('access');

        return $this->render(
            'article/ajout.html.twig',
            array('form' => $form->createView(),
                'users'=>$res_user,
                'access'=>$access,
                ));


    }

//*********************************************************************************************************************


//                              partie generation pdf
//*******************************************************************************************

    /**
     * @Route("/hotelvisiblepdf",name="hotelvisiblepdf")
     */
    public function hotelvisiblepdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $html = $this->renderView('pdf/hotelvisible.html.twig');
        $filename = 'myFirstSnappyPDF';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );

    }

    /**
     * @Route("/hotelpdf",name="hotelpdf")
     */
    public function hotelpdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $html = $this->renderView('pdf/hotel.html.twig');
        $filename = 'myFirstSnappyPDF';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );

    }



    /**
     * @Route("/bonpdf",name="bonpdf")
     */
    public function bonpdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');

        $html = $this->renderView('pdf/bon.html.twig', array(
            'num' => '555',
            'type'  => 'Sortie',
            'nom_demandeur' =>'firas',
            'nom_controle' => 'zribi',
            'appr' =>'Non'
        ));

        $filename = 'myFirstSnappyPDF';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }

    /**
     * @Route("/pdf_intervention",name="pdf_intervention")
     */
    public function pdf_interventionAction()
    {        $snappy = $this->get('knp_snappy.pdf');

        $tab_intervenant = array(
            array('nom' => 'mohamed jbeli', 'ncin' => 00000007, 'societe' => 'orange'),
            array('nom' => 'Hounaïda AbdElkafi', 'ncin' => 05343554, 'societe' => 'steg'),
            array('nom' => 'majdi', 'ncin' => 12345678, 'societe' => 'steg')
        );

//        $tab_nom_intervenant=array('mohamed jbeli','Hounaïda AbdElkafi','','','','','');
//        $tab_ncin_intervenant=array(00000007,05343554,0,0,0,0,0);
//        $tab_societe_intervenant=array('orange','steg','','','','','');

        $tab_station = array(
            array('numero_ticket' => 34, 'CSR' => 'Sfax', 'nom_station' => 'Arriv','num_station' =>'S151A-D'),
            array('numero_ticket' => 56, 'CSR' => 'sfax', 'nom_station' =>  'PS Khazzanet','num_station' =>'S151A-D'),
            array('numero_ticket' => 6, 'CSR' => 'aaa', 'nom_station' => 'aaaa', 'num_station' => 'aaaa')
        );$Nature_inter='Essai de la commande à distance de la vanne suite à l"entretien des vannes LB';




//
//        $tab_numero_ticket=array(34,56,0,0,0,0,0);
//        $tab_CSR=array('Sfax','Sfax',0,0,0,0,0);
//        $tab_n_station=array('S151A-D','S153','','','','','');
//        $tab_nom_station=array('Arriv. PS Khazzanet','','','','','','');
//        $Nature_inter='Essai de la commande à distance de la vanne suite à l"entretien des vannes LB';



        $tab_Diffusion = array(
            array('nom' => 'Mouvement Gaz', 'Fax' => 71959495, 'etat' =>true),
            array('nom' => 'STG Tunis', 'Fax' => 71959546, 'etat' =>true),
            array('nom' => 'BTG Nabeul', 'Fax' => 72224004, 'etat' => false),
            array('nom' => 'STG Tunis', 'Fax' => 72386003, 'etat' =>false),
            array('nom' => 'TG Zriba', 'Fax' => 73312867, 'etat' =>false),
            array('nom' => 'STG Sousse', 'Fax' => 72675798, 'etat' => true)

        );

        /* $tab_Diffusion_nom = array('Mouvement Gaz','STG Tunis','BTG Nabeul',
             'STG Nabeul','TG Zriba','STG Sousse','STG Monastir');
         $tab_Diffusion_Fax=array(71959495,71959546,72224004,72386003,72675798,73312867,73413089);
         $tab_Diffusion_etat=array(0,1,0,1,0,1,0);*/





        $html = $this->renderView('pdf/pdf_intervention.html.twig', array(
            'title' => ' Bon d"intervention sur Système SCADA',
            'numero_intervention'=>'5',



            //valide
            'date_debut'=> '11/03/2017',
            'date_fin' => '11/03/2017' ,
            'heure_debut' => '08:00' ,
            'heure_fin' => '18:00' ,



            //Autorise a :


            'tab_intervenant'=>$tab_intervenant,
//            'tab_nom_intervenant'=>$tab_nom_intervenant,
//              'tab_ncin_intervenant'=> $tab_ncin_intervenant,
//        'tab_societe_intervenant'=>$tab_societe_intervenant,


            //à intervenir dans les stations :
            'tab_station'=>  $tab_station,

//            'tab_numero_ticket'=> $tab_numero_ticket,
//        'tab_CSR'=> $tab_numero_ticket,
//            'tab_n_station'=> $tab_numero_ticket,
//        'tab_nom_station'=> $tab_numero_ticket,
//        'Nature_inter'=> $tab_numero_ticket,
            'comme'=>$Nature_inter,





            //Diffuser à :

            'tab_Diffusion'=>$tab_Diffusion,

//            '$tab_Diffusion_nom' =>$tab_Diffusion_nom,
//        'tab_Diffusion_Fax'=>$tab_Diffusion_Fax,
//        'tab_Diffusion_etat'=>$tab_Diffusion_etat,


            'date_appro'=> '11/03/2013',
            'date_sig_inter'=> '11/03/2013',
            'appr' =>'Non'
        ));

        $filename = 'myFirstSnappyPDF';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }


//*********************************************************************************************************************

//                      Page d'acceuil

    /**
     * @Route("/home",name="testgentela")
     */
    public function testgentelaAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $session= $request->getSession();
        $session->set("utilisateur",$user);

        $em = $this->getDoctrine()->getManager();
        $res_profil = $em->getRepository('AppBundle:profile_utilisateur')->findByidutilisateur($user);
        $tab=null;
        $i=0;
        foreach ($res_profil as $pro)
        {
            $tab[$i]=$pro->getIdprofile();
            $i++;
        }
        $trole=null;
        $j=0;
        foreach ($tab as $t)
        {
            $em = $this->getDoctrine()->getManager();
            $res_role = $em->getRepository('AppBundle:profile_role')->findByidprofile($t);

            foreach ($res_role as $rol) {
                $trole[$j] = $rol->getIdrole()->getName();

                $j++;
            }
        }
        $trole=array_unique($trole);
        $admin=false;
        $intervention=false;
        $mission=false;
        $reporting=false;
        $historique=false;
        $stock=false;
        foreach ($trole as $tr)
        {
            if ($tr=='ROLE_ADMIN')
            {
                $admin=true;
            }
            elseif ($tr=='ROLE_MAGASINIER')
            {
                $stock=true;
            }
            elseif ($tr=='ROLE_INTERVENTION')
            {
                $intervention=true;
            }
            elseif($tr=='ROLE_MISSION')
            {
                $mission=true;
            }
            elseif($tr=='ROLE_REPORTING')
            {
                $reporting=true;
            }
            elseif ($tr=='ROLE_HISTORIQUE')
            {
                $historique=true;
            }
        }
        $acess=array($admin,$stock,$intervention,$mission,$historique,$reporting);

        $session->set("access",$acess);

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





        return $this->render("default/home.html.twig",
            array(
                'access'=>$acess,
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


//                              partie lost password
//*******************************************************************************************
    /**
     * @Route("/oubli/code", name="confiramtioncode")
     */
    public function confirmecodeAction(Request $request)
    {
        $session= $request->getSession();


        if (($request->request->get("code")!= null) and ($request->request->get("pass")!= null))
        {
            $user=$session->get("user");
            $em = $this->getDoctrine()->getManager();
            $users = $em->getRepository('AppBundle:utilisateur')->findOneByusername($user);
            $plainpass=$request->request->get("pass");

            $utilisat= new utilisateur();

            $password = $this->get('security.password_encoder')
                ->encodePassword($utilisat, $plainpass);


            $users->setPassword($password);
            $em->flush();
            return $this->redirectToRoute('login');
        }
        $number=$session->get("code");

        return $this->render("default/code.html.twig",["code" => $number]);
    }

    /**
     * @Route("/oubli",name="pass_oubli")
     */
    public function oubliAction(Request $request)
    {
        $username= $request->request->get("username");
        $email=$request->request->get("email");

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT COUNT(u.id) AS num FROM AppBundle:utilisateur u WHERE u.username= :usernam AND u.email= :mail');
        $query->setParameters(array(
            'usernam' => $username,
            'mail' => $email,
        ));
        $nbr = $query->getSingleResult();

        if ($nbr['num']==0)
        {
            return $this->render('security/login.html.twig', array('error'         => false,'msg'=>1));
        }
        else
        {
            $number = mt_rand(1000, 9999);

            $message = \Swift_Message::newInstance()
                ->setSubject('Lost your password')
                ->setFrom('dptg.steg@gmail.com')
                ->setTo($email)
                ->setBody(
                    $this->renderView(
                    // app/Resources/views/Emails/registration.html.twig
                        'Emails/lost.html.twig',
                        array('name' => $number)
                    ),
                    'text/html'
                );


            $this->get('mailer')->send($message);
            $session= $request->getSession();
            $session->set("code",$number);
            $session->set("user",$username);
            return $this->redirectToRoute('confiramtioncode');
        }


    }
//*********************************************************************************************************************








}