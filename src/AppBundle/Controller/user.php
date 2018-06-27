<?php
/**
 * Created by PhpStorm.
 * User: abdel
 * Date: 15/03/2017
 * Time: 21:36
 */

namespace AppBundle\Controller;

use AppBundle\Entity\profile;
use AppBundle\Entity\profile_role;
use AppBundle\Entity\profile_utilisateur;
use AppBundle\Entity\role;
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
use AppBundle\Entity\vol;
use AppBundle\Entity\bonvol;
use AppBundle\Form\VolType;
use Symfony\Component\Validator\Constraints\IsNull;
use AppBundle\Entity\historique;


class user extends Controller
{

//*********************************************************************************************************************


//                              partie vol
    //*******************************************************************************************

    //                              partie demande vol
    //*******************************************************************************************





    /**
     * @Route("/intervention/bon_vol",name="vol")
     */
    public function volAction(Request $request)
    {

        // lenna l'envoi par mail ken i7ebou

        //generation PDF

        $snappy = $this->get('knp_snappy.pdf');
        $html = $this->renderView('pdf/vol.html.twig');

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
     * @Route("/intervention/bon_vol/afficherbonvol",name="afficherbonvol")
     */
    public function afficherbonvolAction(Request $request)
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:vol");
        $res_bon=$post->findAll();

        $access=$request->getSession()->get('access');



        $bon_vol_super=$request->request->get("bo_vol_affichage");
        $session= $request->getSession();
        $session->set("bon_vol_super",$bon_vol_super);


        if(!$bon_vol_super){$bon_vol_super="";}

        $post=$this->getDoctrine()->getRepository("AppBundle:bonvol");
        $bon_vol=$post->findAll();
        return $this->render("vol/afficherBonvol.html.twig"

            ,array(
                "bon"=>$bon_vol,
                "vol"=>$res_bon,
                "$bon_vol_super"=>$bon_vol_super,
                "access"=>$access,

            ));


    }

    /**
     * @Route("/intervention/bon_vol/Demandevol",name="confirmebonvol")
     */
    public function confirmebonvollAction(Request $request)
    {



        $station= $request->request->get("station");
        $diffusion= $request->request->get("diffusion");
        $post=$this->getDoctrine()->getRepository("AppBundle:utilisateur");
        $res_demandeur=$post->findAll();
        $nbrsupp= $request->request->get("nbrintervenant");
        $inter=$request->request->get("intervention");
        $demandeur=$request->request->get("demandeur");


        $LieuDepart=$request->request->get("LieuDepart");
        $vol=$request->request->get("vol");
        $DateDepart=$request->request->get("DateDepart");
        $HeureDepart=$request->request->get("HeureDepart");
        $LieuArrive=$request->request->get("LieuArrive");
        $DateArrive=$request->request->get("DateArrive");
        $HeureArrive=$request->request->get("HeureArrive");

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
            $vol = $em->getRepository('AppBundle:vol')->findOneByidvol($vol);

            $em = $this->getDoctrine()->getManager();
            $intervention = $em->getRepository('AppBundle:intervention')->find($inter);



            $bonvol= new bonvol();
            $bonvol->setDemandeur($demand);
            $bonvol->setIntervention($intervention);
            $bonvol->setVol($vol);


            $em = $this->getDoctrine()->getManager();
            $em->persist($bonvol);
            $em->flush();

            #aprtie historique
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='intervention';
            $champ='Bon de vol';
            $encien='-';
            $type='Ajout';
            $nouveau=$bonvol->getIdBonvol();
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

            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT u FROM AppBundle:intervention_utilisateur u WHERE u.idintervention= :inter AND u.type= :typea');
            $query->setParameters(array(
                'inter' => $intervention,
                'typea' => 'intervenant',
            ));
            $intervenants=$query->getResult(); // array of intervention_utilisateur objects


            // lenna l'envoi par mail ken i7ebou

            //generation PDF




            $snappy = $this->get('knp_snappy.pdf');
            $html = $this->renderView('pdf/volvisible.html.twig',
                array("DateDepart"=>$DateDepart,
                    "DateArrive"=>$DateArrive,
                    "demandeur"=>$demand,
                    "intervenant"=>$intervenants,
                    "station"=>$station,"diffusion"=>$diffusion,



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
     * @Route("/intervention/bon_vol/demandeVol",name="changeintervol")
     */
    public function changeintervolAction(Request $request)
    {  $post=$this->getDoctrine()->getRepository("AppBundle:GlpiLocations");//name mil glpi
        $res_station=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiTickets");
        //bech nist7a9ha hiya wa GlpiLocations wa interven wa intervention_ticket bech ne5ou location mta3 intervention interven

        $res_ticket=$post->findAll();

        $post=$this->getDoctrine()->getRepository("AppBundle:diffusion");//fax
        $res_diffusion=$post->findAll();


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
        $post=$this->getDoctrine()->getRepository("AppBundle:vol");
        $res_vol=$post->findAll();

        $access=$request->getSession()->get('access');

        $inter=$request->request->get("interven");//num intervention

        if ($inter != null)
        {


            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT u FROM AppBundle:intervention_ticket u WHERE u.idintervention= :inter');
            $query->setParameters(array(
                'inter' => $inter,

            ));
            $ticket = $query->getResult(); // array of intervention_ticket objects


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




            return $this->render("vol/Confdemandebonvol.html.twig"
                ,array("diffusion"=>$res_diffusion,
                    "allticket"=>$res_ticket,
                    "ticket"=>$ticket,
                    "station"=>$res_station,
                    "demandeur"=>$demandeur,
                    "intervention"=>$res_intervention,//tout les intervention
                    "users"=>$res_users,
                    "ticketusers"=>$res_ticketusers,
                    "interticket"=>$res_interventionticket,
                    "inter"=>$inter,//num intervention
                    "intervenant"=>$intervenant,
                    "vol"=>$res_vol,"res_vol_affichage"=>"",
                    "access"=>$access,
                ));



        }
        return $this->render("vol/demandebovol.html.twig"
            ,array(
                "demandeur"=>$res_demandeur,
                "intervention"=>$res_intervention,
                "users"=>$res_users,
                "ticketusers"=>$res_ticketusers,
                "interticket"=>$res_interventionticket,
                "vol"=>$res_vol,
                "access"=>$access,
            ));
    }

    /**
     * @Route("/intervention/bon_vol/demandevol",name="demandevol")
     */
    public function demandevolAction(Request $request)
    {


        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiLocations");//name mil glpi
        $res_station=$post->findAll();

        $post=$this->getDoctrine()->getRepository("AppBundle:diffusion");//fax
        $res_diffusion=$post->findAll();

        $post=$this->getDoctrine()->getRepository("AppBundle:utilisateur");
        $res_demandeur=$post->findAll();

        $post=$this->getDoctrine()->getRepository("AppBundle:intervention");
        $res_intervention=$post->findAll();

        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiUsers");
        $res_users=$post->findAll();

        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiTicketsUsers");    /*tickets_id/users_id*/
        $res_ticketusers=$post->findAll();

        $post=$this->getDoctrine()->getRepository("AppBundle:intervention_ticket"); /*id_intervention/ticket*/
        $res_interventionticket=$post->findAll();

        $post=$this->getDoctrine()->getRepository("AppBundle:vol");
        $res_vol=$post->findAll();

        $access=$request->getSession()->get('access');

        /* return new Response("rr");*/
        return $this->render("vol/demandebovol.html.twig"
            ,array("intervention"=>$res_intervention,"diffusion"=>$res_diffusion,
                "station"=>$res_station,
                "demandeur"=>$res_demandeur,
                "users"=>$res_users,
                "ticketusers"=>$res_ticketusers,
                "interticket"=>$res_interventionticket,
                "vol"=>$res_vol,
                "access"=>$access,
            ));
    }

    /**
     * @Route("/intervention/bon_vol/supprimerbonvol",name="supprimerbonvol")
     */
    public function supprimerbonvolAction(Request $request)
    {
        $bon=$request->request->get("idbon");
        $em = $this->getDoctrine()->getManager();
        $bonvol = $em->getRepository('AppBundle:bonvol')->find($bon);
        $em->remove($bonvol);
        $em->flush();

        #partie historique
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $datehist= date('d/m/Y');
        $module='intervention';
        $type='Suppression';

        $champ='Bon de vol '.$bon;
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

        return $this->redirectToRoute('afficherbonvol');
    }



    /**
     * @Route("/intervention/bon_vol/choisirvol",name="choisirvol")
     */
    public function choisirvolAction(Request $request)
    { $post=$this->getDoctrine()->getRepository("AppBundle:GlpiLocations");//name mil glpi
        $res_station=$post->findAll();

        $post=$this->getDoctrine()->getRepository("AppBundle:diffusion");//fax
        $res_diffusion=$post->findAll();


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
        $post=$this->getDoctrine()->getRepository("AppBundle:vol");
        $res_vol=$post->findAll();


        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiLocations");//name mil glpi
        $res_station=$post->findAll();
        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiTickets");
        $res_ticket=$post->findAll();

        $access=$request->getSession()->get('access');


        //bech nist7a9ha hiya wa GlpiLocations wa interven wa intervention_ticket bech ne5ou location mta3 intervention interven

        $inter=$request->request->get("inter");
        $vol_affichage=$request->request->get("vol");

        if ($inter != null)
        {
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT u FROM AppBundle:intervention_ticket u WHERE u.idintervention= :inter');
            $query->setParameters(array(
                'inter' => $inter,

            ));
            $ticket = $query->getResult(); // array of intervention_ticket objects



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


            if ($vol_affichage!=null)
            {


                $post=$this->getDoctrine()->getRepository("AppBundle:vol");
                $res_vol_affichage=$post->findOneByidvol($vol_affichage);


                return $this->render("vol/Confdemandebonvol.html.twig"
                    ,array("diffusion"=>$res_diffusion,
                        "station"=>$res_station,
                        "demandeur"=>$demandeur,
                        "intervention"=>$res_intervention,
                        "users"=>$res_users,
                        "ticketusers"=>$res_ticketusers,
                        "interticket"=>$res_interventionticket,
                        "inter"=>$inter,
                        "intervenant"=>$intervenant,
                        "vol"=>$res_vol,"res_vol_affichage"=>$res_vol_affichage,
                        "allticket"=>$res_ticket,
                        "ticket"=>$ticket,
                        "access"=>$access,
                    ));}

            else
            {return $this->render("vol/Confdemandebonvol.html.twig"
                ,array("diffusion"=>$res_diffusion,
                    "station"=>$res_station,
                    "demandeur"=>$demandeur,
                    "intervention"=>$res_intervention,
                    "users"=>$res_users,
                    "ticketusers"=>$res_ticketusers,
                    "interticket"=>$res_interventionticket,
                    "inter"=>$inter,
                    "intervenant"=>$intervenant,
                    "vol"=>$res_vol,"res_vol_affichage"=>"",
                    "allticket"=>$res_ticket,
                    "ticket"=>$ticket,
                    "access"=>$access,

                ));
            }



        }


        return $this->render("vol/demandebovol.html.twig"
            ,array("diffusion"=>$res_diffusion,
                "station"=>$res_station,
                "demandeur"=>$res_demandeur,
                "intervention"=>$res_intervention,
                "users"=>$res_users,
                "ticketusers"=>$res_ticketusers,
                "interticket"=>$res_interventionticket,
                "vol"=>$res_vol,
                "access"=>$access,
            ));



    }


    //*******************************************************************************************
    /**
     * @Route("/intervention/vol/supprimervol",name="supprimervol")
     */
    public function supprimervolAction(Request $request)
    {
        $idvol=$request->request->get("idvol");
        $em = $this->getDoctrine()->getManager();
        $vol = $em->getRepository('AppBundle:vol')->findOneByidvol($idvol);
        $em->remove($vol);
        $em->flush();

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $datehist= date('d/m/Y');
        $module='intervention';
        $champ='Vol '.$idvol;
        $encien=$idvol;
        $nouveau='-';
        $historique= new historique();
        $historique->setUtilisateur($user);
        $historique->setDatehistorique($datehist);
        $historique->setModule($module);
        $historique->setChamp($champ);
        $historique->setEncienvaleur($encien);
        $historique->setNouveauvaleur($nouveau);
        $historique->setType("Suppression");
        $em->persist($historique);
        $em->flush();

        return $this->redirectToRoute('affichervol');
    }


    /**
     * @Route("/intervention/vol/modifier_vol",name="modifier_vol")
     */
    public function modifier_volAction(Request $request)
    {
        if ($request->request->get("idvol")!= null)
        {
            $idvol=$request->request->get("idvol");
            $DateDepart=$request->request->get("DateDepart");
            $LieuDepart=$request->request->get("LieuDepart");
            $HeureDepart=$request->request->get("HeureDepart");

            $DateArrive=$request->request->get("DateArrive");
            $LieuArrive=$request->request->get("LieuArrive");
            $HeureArrive=$request->request->get("HeureArrive");

            $em = $this->getDoctrine()->getManager();
            $vol = $em->getRepository('AppBundle:vol')->findOneByidvol($idvol);

            #partie historique
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='intervention';
            $type='Modification';
            if ($vol->getDateDepart() != $DateDepart)
            {

                $champ='Date depart de vol '.$idvol;
                $encien= $vol->getDateDepart() ;
                $nouveau=$DateDepart;
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
            if ($vol->getDateArrive() != $DateArrive)
            {

                $champ='Date depart de vol '.$idvol;
                $encien= $vol->getDateArrive() ;
                $nouveau=$DateArrive;
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
            if ($vol->getHeureDepart() != $HeureDepart)
            {

                $champ='Date depart de vol '.$idvol;
                $encien= $vol->getHeureDepart() ;
                $nouveau=$HeureDepart;
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
            if ($vol->getHeureArrive() != $HeureArrive)
            {

                $champ='Date depart de vol '.$idvol;
                $encien= $vol->getHeureArrive() ;
                $nouveau=$HeureArrive;
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
            if ($vol->getLieuDepart() != $LieuDepart)
            {

                $champ='Date depart de vol '.$idvol;
                $encien= $vol->getLieuDepart() ;
                $nouveau=$LieuDepart;
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
            if ($vol->getLieuArrive() != $LieuArrive)
            {

                $champ='Date depart de vol '.$idvol;
                $encien= $vol->getLieuArrive() ;
                $nouveau=$LieuArrive;
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

            $vol->setDateDepart($DateDepart);
            $vol->setLieuDepart($LieuDepart);
            $vol->setHeureDepart($HeureDepart);
            $vol->setDateArrive($DateArrive);
            $vol->setLieuArrive($LieuArrive);
            $vol->setHeureArrive($HeureArrive);


            $em->flush();
        }

        return $this->redirectToRoute('affichervol');

    }

    /**
     * @Route("/intervention/vol/modifiervol",name="modifiervol")
     */
    public function modifiervolAction(Request $request)
    {
        $idvol=$request->request->get("idvol");
        $em = $this->getDoctrine()->getManager();
        $vol = $em->getRepository('AppBundle:vol')->findOneByidvol($idvol);

        $access=$request->getSession()->get('access');

        return $this->render("vol/modifiervol.html.twig",
            array(
                "res"=>$vol,
                "access"=>$access,
            ));

    }

    /**
     * @Route("/intervention/vol/affichervol",name="affichervol")
     */
    public function affichervolAction(Request $request)
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:vol");
        $res=$post->findAll();

        $access=$request->getSession()->get('access');

        return $this->render("vol/afficher_all_vol.html.twig",
            array(
                "res"=>$res,
                "access"=>$access,
            ));
    }



    /**
     * @Route("/intervention/vol/ajoutvol",name="ajoutvol")
     */
    public function ajoutvolAction(Request $request)
    {
        $vol= new vol();
        $form = $this->createForm(VolType::class, $vol);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            // 4) save the article!
            $em = $this->getDoctrine()->getManager();
            $em->persist($vol);
            $em->flush();

            $user = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='intervention';
            $champ='Vol';
            $encien='-';
            $nouveau=$vol->getIdvol();
            $historique= new historique();
            $historique->setUtilisateur($user);
            $historique->setDatehistorique($datehist);
            $historique->setModule($module);
            $historique->setChamp($champ);
            $historique->setEncienvaleur($encien);
            $historique->setNouveauvaleur($nouveau);
            $historique->setType("Ajout");
            $em->persist($historique);
            $em->flush();
            return $this->redirectToRoute('affichervol');
        }


        $access=$request->getSession()->get('access');

        return $this->render(
            'vol/ajout.html.twig',
            array(
                'form' => $form->createView(),
                'access'=>$access,
            ));

    }



//                                          partie   utilisateur
//***************************************************************************************************************

    /**
     * @Route("/administration/utilisateur/afficheralluser", name="afficheralluser")
     */
    public function afficheralluserAction(Request $request)
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:utilisateur");
        $res=$post->findAll();

        $session = $request->getSession();

        $session = $request->getSession();
        $Username=$session->get("Username");
        $Usernamep=$session->get("Usernamep");
        $Profile_click=$session->get("Profile_click");
        $UsernameR=$session->get("UsernameR");
        $profile='';
        $path='';

        $Username=$request->request->get("Username");//usernam

        if (!$Usernamep)//username n'a pas de profile
        {  $Username=$Username;
            $Usernamep='';
            $Profile_click='';
            $UsernameR='';
            $profile='';
            $path='afficheprofile';
        }

        if ((!$UsernameR) and ($Usernamep))
        {$Username=$Username;
            $Usernamep=$Usernamep;
            $Profile_click=$Profile_click;
            $UsernameR='';


            $Username=$request->request->get("Username");//usernam

            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('AppBundle:utilisateur')->findOneByusername($Username);
            $idusername= $user->getId();
            $em = $this->getDoctrine()->getManager();//liste profile pour username
            $profile = $em->getRepository('AppBundle:profile_utilisateur')->findby(array('idutilisateur'=>$idusername));

            $path='afficherole';

        }

        $access=$request->getSession()->get('access');

        return $this->render(
            'utilisateur/afficheralluser.html.twig',
            array("res"=>$res  ,'Username'=>$Username,'Usernamep'=>$Usernamep,'profile_click'=>$Profile_click,'role'=>'','Profile_click'=>$Profile_click
            ,'UsernameR'=>$UsernameR,'profile'=>$profile,'path'=>$path,'access'=>$access,)
        );


    }



    /**
     * @Route("/administration/utilisateur/afficheralluser/Profile",name="Profile")//pour voire liste  profil pou un  user
     */
    public function ProfileAction(Request $request)
    {
        $Username=$request->request->get("Username");//user
        $UsernameP=$request->request->get("UsernameP");//vide

//recuperation de l'id user
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:utilisateur')->findOneByusername($Username);
        $idusername= $user->getId();

        $session= $request->getSession();
        $session->set("Username",$Username);
        $session->set("UsernameP",$UsernameP);

        /*//verifier idusername mawjoud fi profile_utilisateur */
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT COUNT (u.idutilisateur) AS num FROM AppBundle:profile_utilisateur u WHERE u.idutilisateur= :usernam');
        $query->setParameters(array(
            'usernam' => $idusername

        ));
        $nbr = $query->getSingleResult();

        if ($nbr['num']==0)
        {


            $this->addFlash(
                'notice',
                'Ce Utilisateur'.$Username.' ne dispose aucun Profile pour ce moment'.
                'Si vous ous pouver affecter a  '.$Username.'un Profile par un clique'
            );$profile='';

            return $this->redirectToRoute('afficheralluser');
        }


        if ($nbr['num']!=0)
        {$UsernameP=$Username;


            /*  for ($i=1;$i<=$nbr['num'];$i++)
              {tableau ili fih liste mta3 profile mta3 user Username
                  $em = $this->getDoctrine()->getManager();
                  $profile = $em->getRepository('AppBundle:profile_utilisateur')->findOneByIdutilisateur($idusername);
                  $idname[$i]= $profile->getIdprofile()->getName();
             }*/

            $em = $this->getDoctrine()->getManager();//liste profile pour username
            $profile = $em->getRepository('AppBundle:profile_utilisateur')->findby(array('idutilisateur'=>$idusername));

        }

        /* var_dump($idname);
         return new Response($idname[1].'=======>'.$idname[1].'////'.$name.'////'.$nbr['num']);*/


        $post=$this->getDoctrine()->getRepository("AppBundle:utilisateur");
        $res=$post->findAll();

        $access=$request->getSession()->get('access');

        return $this->render(
            'utilisateur/afficheralluser.html.twig',
            array('Usernamep'=>$UsernameP,"res"=>$res,"profile"=>$profile,'role'=>'','Profile_click'=>'','UsernameR'=>'','access'=>$access,));


    }

    /**
     * @Route("/administration/utilisateur/afficheralluser/Profile/Role",name="Role")//pour voire profil ROLE
     */
    public function RoleAction(Request $request)
    {


        $Profile_click=$request->request->get("Profile");//ili cliquer plein
        $Usernamep=$request->request->get("Usernamep");//utilsateur bil profile mte3ou plein


        $UsernameR=$request->request->get("UsernameR");//vide

        $session= $request->getSession();
        $session->set("Usernamep",$Usernamep);
        $session->set("Profile_click",$Profile_click);
        $session->set("Usernamep",$Usernamep);
        $session->set("UsernameR",$UsernameR);

//recuperation de l'id name profile
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:profile')->findOneByName($Profile_click);
        $idProfile_click= $user->getIdProfile();


        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT COUNT( (u.idprofile)) AS num FROM AppBundle:profile_role u WHERE u.idprofile= :nam');
        $query->setParameters(array(
            'nam' => $idProfile_click

        ));
        $nbr = $query->getSingleResult();

        if ($nbr['num']==0)
        {



            $this->addFlash(
                'notice',
                'Ce profile :'.$Profile_click.' ne dispose aucun Role pour ce moment'.
                'Si vous ous pouver affecter a  '.$Profile_click.'un Role par un clique'
            );
            $role="";

            return $this->redirectToRoute('afficheralluser');
        }


        if ($nbr['num']!=0)
        {

            /*  for ($i=1;$i<=$nbr['num'];$i++)
              {tableau ili fih liste mta3 profile mta3 user Username
                  $em = $this->getDoctrine()->getManager();
                  $profile = $em->getRepository('AppBundle:profile_utilisateur')->findOneByIdutilisateur($idusername);
                  $idname[$i]= $profile->getIdprofile()->getName();
             }*/

            $em = $this->getDoctrine()->getManager();
            $role = $em->getRepository('AppBundle:profile_role')->findby(array('idprofile'=>$idProfile_click));

        }

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:utilisateur')->findOneByusername($Usernamep);
        $idusername= $user->getId();

        $em = $this->getDoctrine()->getManager();
        $profile = $em->getRepository('AppBundle:profile_utilisateur')->findby(array('idutilisateur'=>$idusername));
        $Profile_click=$request->request->get("Profile");
        /* var_dump($idname);
         return new Response($idname[1].'=======>'.$idname[1].'////'.$name.'////'.$nbr['num']);*/


        $em = $this->getDoctrine()->getManager();
        $res = $em->getRepository('AppBundle:utilisateur')->findAll();

        $access=$request->getSession()->get('access');

        return $this->render(
            'utilisateur/afficheralluser.html.twig',
            array('Usernamep'=>$Usernamep,"res"=>$res,"profile"=>$profile,'role'=>$role,'Profile_click'=>$Profile_click
            ,'UsernameR'=>$Usernamep,'access'=>$access,));


    }




    /**
     * @Route("/administration/utilisateur/register2",name="register2")
     */
    public function register2Action(Request $request)

    {
        $access=$request->getSession()->get('access');

        return $this->render(
            'utilisateur/document.html.twig',array("option" => 2,"access"=>$access,));
    }





    /**
     * @Route("/administration/utilisateur/register",name="register")
     */
    public function registerAction(Request $request)

    {
        $post=$this->getDoctrine()->getRepository("AppBundle:GlpiUsers");
        $glpi=$post->findAll();

        $access=$request->getSession()->get('access');


        // 1) build the form
        $user= new utilisateur();
        $form = $this->createForm(UserType::class, $user);
        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);




        if ($request->isMethod('POST')) {
            /*   $p=$form->get('nom')->getData();*/

            $username = $request->request->get("username");
            $email = $request->request->get("email");
            $Password = $request->request->get("Password");



            /*//verifier username(base)=username(glpi)*/
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT COUNT(g.name) AS num FROM AppBundle:GlpiUsers g WHERE g.name= :usernam');
            $query->setParameters(array(
                'usernam' => $username

            ));
            $nbr = $query->getSingleResult();

//verifier username(base)=username(glpi)
            if ($nbr['num'] == 0) {
                return $this->render(
                    'utilisateur/ajout1.html.twig',
                    array('form' => $form->createView(), "res" => $glpi, "msg" => "Utilisateur non existant dans glpi",'color'=>'red','access'=>$access,));

            }


            /*===> c bon mawjoud*/

            /*//verifier username mawjoud fi(base) */
            $em1 = $this->getDoctrine()->getManager();
            $query1 = $em1->createQuery('SELECT COUNT(u.username) AS num FROM AppBundle:utilisateur u WHERE u.username= :usernam');
            $query1->setParameters(array(
                'usernam' => $username

            ));
            $nbr1 = $query1->getSingleResult();

//verifier username(base)=username(glpi)
            if ($nbr1['num'] != 0) {
                return $this->render(
                    'utilisateur/ajout1.html.twig',
                    array('form' => $form->createView(), "res" => $glpi, "msg" => "Utilisateur deja existant ",'color'=>'red','access'=>$access,));

            }


            /*===> c bon mahouch mawjoud*/

            /*//verifier username mawjoud fi(base) */
            $em2 = $this->getDoctrine()->getManager();
            $query2 = $em2->createQuery('SELECT COUNT(u.username) AS num FROM AppBundle:utilisateur u WHERE u.email= :emai');
            $query2->setParameters(array(
                'emai' => $email

            ));
            $nbr2 = $query2->getSingleResult();

//verifier username(base)=username(glpi)
            if ($nbr2['num'] != 0) {
                return $this->render(
                    'utilisateur/ajout1.html.twig',
                    array('form' => $form->createView(), "res" => $glpi, "msg" => "Email déja  existant",'color'=>'red','access'=>$access,));

            }


            if ($form->isSubmitted() ) {
                // 3) Encode the password (you could also do this via Doctrine listener)
//                $psw = $request->request->get("password");
//                 new Response($psw);


                $password = $this->get('security.password_encoder')
                    ->encodePassword($user, $Password);
                $user->setPassword($password);
                $user->setUsername($username);
                $user->setEmail($email);
                // 4) save the User!


                $em = $this->getDoctrine()->getManager();




                $em->persist($user);
                $em->flush();

                #aprtie historique
                $userh = $this->get('security.token_storage')->getToken()->getUser();
                $datehist= date('d/m/Y');
                $module='administration';
                $champ='Utilisateur';
                $encien='-';
                $type='Ajout';
                $nouveau=$user->getUsername();
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();

                $message = \Swift_Message::newInstance()
                    ->setSubject('New user')
                    ->setFrom('dptg.steg@gmail.com')
                    ->setTo($email)
                    ->setBody(
                        $this->renderView(
                        // app/Resources/views/Emails/registration.html.twig
                            'Emails/new_user.html.twig',
                            array('username' => $username, 'bonjour' => 'Bonjour, vous avez un nouveau compte dans notre site.'
                            )
                        ),
                        'text/html'
                    );


                $m = $message->toString();
                $this->get('mailer')->send($message);
                // ... do any other work - like sending them an email, etc
                // maybe set a "flash" success message for the user

                $session= $request->getSession();
                $session->set("$username",$username);


                $this->addFlash(
                    'user',
                    'Ce Utilisateur :'.$username.''.'est ajouter avec succes'
                );



                return $this->redirectToRoute('afficheralluser');
            }
        }


        return $this->render(
            'utilisateur/ajout1.html.twig',
            array('form' => $form->createView(),"res" => $glpi,"msg" => "Remplir ton formulaire","color"=>'','access'=>$access,)
        );


    }

//ajout1.twig
//registre.php

//afficher_all_article1.twig
//afficher_all_user.php


    /**************************************************************/


    /**
     * @Route("/administration/utilisateur/supprimeuser",name="supprimeuser")
     */
    public function supprimeuserAction(Request $request)
    {
        $Username=$request->request->get("Username");
        $em = $this->getDoctrine()->getManager();
        $User = $em->getRepository('AppBundle:utilisateur')->findOneByUsername($Username);
        $em->remove($User);
        $em->flush();

        #partie historique
        $userh = $this->get('security.token_storage')->getToken()->getUser();
        $datehist= date('d/m/Y');
        $module='administration';
        $type='Suppression';

        $champ='Utilisateur '.$Username;
        $encien= $Username ;
        $nouveau='-';
        $historique= new historique();
        $historique->setUtilisateur($userh);
        $historique->setDatehistorique($datehist);
        $historique->setModule($module);
        $historique->setChamp($champ);
        $historique->setEncienvaleur($encien);
        $historique->setNouveauvaleur($nouveau);
        $historique->setType($type);
        $em->persist($historique);
        $em->flush();
        #end historique

        $Email=$User->getEmail();
        $message = \Swift_Message::newInstance()
            ->setSubject('Utilisateur')
            ->setFrom('dptg.steg@gmail.com')
            ->setTo($Email)
            ->setBody(
                $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                    'Emails/delete_user.html.twig',
                    array('bonjour'=>'Bonjour Votre compte est desactive'
                    )
                ),
                'text/html'
            );


        $m=$message->toString();
        $this->get('mailer')->send($message);

        $session= $request->getSession();
        $session->set('username',$Username);


        $this->addFlash(
            'user',
            'Ce Utilisateur :'.$Username.''.'est supprimer avec succes'
        );

        return $this->redirectToRoute('afficheralluser');
    }



    /**
     * @Route("/administration/utilisateur/modifuser",name="modifuser")
     */
    public function modifuserAction(Request $request)
    {
        if ($request->request->get("Username")!= null)
        {

            $id=$request->request->get("id");
            $Username=$request->request->get("Username");
            $Email=$request->request->get("Email");
            $Nom=$request->request->get("Nom");
            $NomAr=$request->request->get("NomAr");
            $Prenom=$request->request->get("Prenom");
            $PrenomAr=$request->request->get("PrenomAr");
            $Ncin=$request->request->get("Ncin");
            $Matricule=$request->request->get("Matricule");
            $Societe=$request->request->get("Societe");
            $FonctionAr=$request->request->get("FonctionAr");
            $CategorieAr=$request->request->get("CategorieAr");


            $FonctionFr=$request->request->get("FonctionFr");
            $Direction=$request->request->get("Direction");
            $Unite=$request->request->get("Unite");

            $Astreint=$request->request->get("Astreint");
            $Role=$request->request->get("Role");





            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('AppBundle:utilisateur')->find($id);

            #partie historique
            $userh = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='administration';
            $type='Modification';
            if ($user->getNcin()!= $Ncin)
            {

                $champ='NCIN de l\'utilisateur '.$Username;
                $encien= $user->getNcin() ;
                $nouveau=$Ncin;
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($user->getNom()!= $Nom)
            {

                $champ='Nom de l\'utilisateur '.$Username;
                $encien= $user->getNom() ;
                $nouveau=$Nom;
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($user->getPrenom()!= $Prenom)
            {

                $champ='Prenom de l\'utilisateur '.$Username;
                $encien= $user->getPrenom() ;
                $nouveau=$Prenom;
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($user->getMatricule()!= $Matricule)
            {

                $champ='Matricule de l\'utilisateur '.$Username;
                $encien= $user->getMatricule() ;
                $nouveau=$Matricule;
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($user->getSociete()!= $Societe)
            {

                $champ='Societe de l\'utilisateur '.$Username;
                $encien= $user->getSociete() ;
                $nouveau=$Societe;
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($user->getRole()!= $Role)
            {

                $champ='Role de l\'utilisateur '.$Username;
                $encien= $user->getRole() ;
                $nouveau=$Role;
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($user->getNomAr()!= $NomAr)
            {

                $champ='Nom Ar de l\'utilisateur '.$Username;
                $encien= $user->getNomAr() ;
                $nouveau=$NomAr;
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($user->getPrenomAr()!= $PrenomAr)
            {

                $champ='Prenom Ar de l\'utilisateur '.$Username;
                $encien= $user->getPrenomAr() ;
                $nouveau=$PrenomAr;
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($user->getFonctionAr()!= $FonctionAr)
            {

                $champ='Fonction Ar de l\'utilisateur '.$Username;
                $encien= $user->getFonctionAr() ;
                $nouveau=$FonctionAr;
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($user->getCategorieAr()!= $CategorieAr)
            {

                $champ='Categorie Ar de l\'utilisateur '.$Username;
                $encien= $user->getCategorieAr() ;
                $nouveau=$CategorieAr;
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($user->getDirection()!= $Direction)
            {

                $champ='Direction de l\'utilisateur '.$Username;
                $encien= $user->getDirection() ;
                $nouveau=$Direction;
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($user->getFonctionFr()!= $FonctionFr)
            {

                $champ='Fonction de l\'utilisateur '.$Username;
                $encien= $user->getFonctionFr() ;
                $nouveau=$FonctionFr;
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }
            if ($user->getUnite()!= $Unite)
            {

                $champ='Unité de l\'utilisateur '.$Username;
                $encien= $user->getUnite() ;
                $nouveau=$Unite;
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }

            $user->setNom($Nom);
            $user->setNomAr($NomAr);
            $user->setPrenom($Prenom);
            $user->setPrenomAr($PrenomAr);
            $user->setNcin($Ncin);
            $user->setSociete($Societe);
            $user->setFonctionAr($FonctionAr);
            $user->setCategorieAr($CategorieAr);
            $user->setIsAstreint($Astreint);
            $user->setRole($Role);

            $user->setFonctionFr($FonctionFr);
            $user->setDirection($Direction);
            $user->setUnite($Unite);




            $em->flush();

            $session= $request->getSession();
            $session->set('username',$Username);


            $this->addFlash(
                'user',
                'Ce Utilisateur : '.$Username.'*'.'  est modifier avec succes'
            );


        }
        return $this->redirectToRoute('afficheralluser');
    }

    /**
     * @Route("/administration/utilisateur/modifieruser",name="modifieruser")
     */
    public function modifieruserAction(Request $request)
    {

        $usename=$request->request->get("Username");
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:utilisateur')->findOneByusername($usename);

        $access=$request->getSession()->get('access');

        return $this->render("utilisateur/modifier1.html.twig",array("res"=>$user,'access'=>$access,));
    }


//*******************************************************************************************



//                              partie Profile
//*******************************************************************************************

    /**
     * @Route("/administration/profil/affecterprofilrole",name="affecterprofilerole")//afecter affecterprofilerole
     */
    public function affecterroleAction(Request $request)
    {$nameR=$request->request->get("nameR");
        $name=$request->request->get("name");


        $session= $request->getSession();
        $session->set("nameR",$nameR);
        $session->set("name",$name);

        $em = $this->getDoctrine()->getManager();
        $role = $em->getRepository('AppBundle:role')->findOneByName($nameR);
        $idnameR= $role->getIdRole();//role mte3na

        $em1 = $this->getDoctrine()->getManager();
        $profile = $em1->getRepository('AppBundle:profile')->findOneByName($name);
        $idname= $profile->getIdProfile();//profil mte3na


        $em10 = $this->getDoctrine()->getManager();
        $table10 = $em10->getRepository('AppBundle:profile_role')->findAll();

        if (!$table10) {
            $profilerole= new profile_role();

            $profilerole->setIdrole($role);
            $profilerole->setIdprofile($profile);



            // 4) save the $profilerole!
            $em = $this->getDoctrine()->getManager();
            $em->persist($profilerole);
            $em->flush();

            #aprtie historique
            $userh = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='administration';
            $champ='Role au profile';
            $encien=$nameR;
            $type='Affectation';
            $nouveau=$name;
            $historique= new historique();
            $historique->setUtilisateur($userh);
            $historique->setDatehistorique($datehist);
            $historique->setModule($module);
            $historique->setChamp($champ);
            $historique->setEncienvaleur($encien);
            $historique->setNouveauvaleur($nouveau);
            $historique->setType($type);
            $em->persist($historique);
            $em->flush();


            /*     $e = $this->getDoctrine()->getManager();
                 $use = $e->getRepository('AppBundle:profile_role')->findOneByIdrole($idnameR);

                 array("use"=>$use)*/
            $this->addFlash(
                'msg',
                'Your changes were saved!
                [Profile='.$name.']' .'affecter pour ce [role :'.$idnameR.']'


            );

            return $this->redirectToRoute('GereRole');





        }

        if($table10){


            /*//verifier idusername mawjoud fi profile_role */
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT COUNT( (u.idrole)) AS num FROM AppBundle:profile_role u WHERE u.idrole= :nam');
            $query->setParameters(array(
                'nam' => $idnameR

            ));
            $nbr = $query->getSingleResult();


            /*//verifier $idname mawjoud fi profile_utilisateur */
            $em1 = $this->getDoctrine()->getManager();
            $query1 = $em1->createQuery('SELECT COUNT(  (u.idprofile)) AS num1 FROM AppBundle:profile_utilisateur u WHERE u.idprofile= :usernam');
            $query1->setParameters(array(
                'usernam' => $idname

            ));
            $nbr1 = $query1->getSingleResult();






            if (($nbr1['num1'] !=0 and $nbr['num']!=0))


            {

                //bech inchoufhoum mawjoudin wala le izouz fi nafs ligne
                $e = $this->getDoctrine()->getManager();
                $ro = $e->getRepository('AppBundle:profile_role')->findBy(array('idrole'=>$idnameR,'idprofile'=>$idname));





                $e1 = $this->getDoctrine()->getManager();
                $prof = $e1->getRepository('AppBundle:profile_role')->findBy(array('idrole'=>$idnameR,'idprofile'=>$idname));

                //tableau mta3 getIdprofilerole ili tebi3 role

                $x=0;
                $y=0;
                foreach ($ro as $p) {
                    $x++;
                    // $advert est une instance de Advert
                    $tab_role[$x]= $p->getIdprofilerole();
                }


                //tableau mta3 getIdprofilerole ili tebi3 profile

                foreach ($prof as $p) {
                    $y++;
                    // $advert est une instance de Advert
                    $tab_pro[$y]= $p->getIdprofilerole();
                }

                $v=false;$i1=1;
                while($v==false and $i1<=$x )
                {

                    if($tab_role[$i1]==$tab_pro[$i1])
                    {
                        $v=true;
                    }


                    $i1++;
                }



                if ($v==false) {

                    $profilerole= new profile_role();

                    $profilerole->setIdrole($role);
                    $profilerole->setIdprofile($profile);



                    // 4) save the $profilerole!
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($profilerole);
                    $em->flush();

                    #aprtie historique
                    $userh = $this->get('security.token_storage')->getToken()->getUser();
                    $datehist= date('d/m/Y');
                    $module='administration';
                    $champ='Role au profile';
                    $encien=$nameR;
                    $type='Affectation';
                    $nouveau=$name;
                    $historique= new historique();
                    $historique->setUtilisateur($userh);
                    $historique->setDatehistorique($datehist);
                    $historique->setModule($module);
                    $historique->setChamp($champ);
                    $historique->setEncienvaleur($encien);
                    $historique->setNouveauvaleur($nouveau);
                    $historique->setType($type);
                    $em->persist($historique);
                    $em->flush();



                    $this->addFlash(
                        'msg',
                        'Your changes were saved![Profile    :'.$name .']affecter pour [role    :'.$nameR.']'



                    );
                    return $this->redirectToRoute('GereRole');
                }


                if ($v==true)
                {   $this->addFlash(
                    'msg',
                    'Your changes were saved! deja Ce [role   :'.$nameR.'] a affecter deja ce [profile   :'.$name.']'

                );

                    return $this->redirectToRoute('GereRole');


                }




            }


            else{


                $profilerole= new profile_role();

                $profilerole->setIdrole($role);
                $profilerole->setIdprofile($profile);



                // 4) save the $profilerole!
                $em = $this->getDoctrine()->getManager();
                $em->persist($profilerole);
                $em->flush();

                #aprtie historique
                $userh = $this->get('security.token_storage')->getToken()->getUser();
                $datehist= date('d/m/Y');
                $module='administration';
                $champ='Role au profile';
                $encien=$nameR;
                $type='Affectation';
                $nouveau=$name;
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();

                $this->addFlash(
                    'msg',
                    'Your changes were saved![Profile   :'.$name .']affecter pour [role   :'.$nameR.']'
                );

                return $this->redirectToRoute('GereRole');

            }
        }

    }


    /**
     * @Route("/administration/profil/GereRole/Profil_role",name="Profile_role")//pour voire liste profil  pour un ROLE
     */
    public function Profile_roleAction(Request $request)
    {$nameR=$request->request->get("nameR");
        $name=$request->request->get("name");
        $session= $request->getSession();
        $session->set("nameR",$nameR);
        $session->set("name",$name);

        $nameR=$request->request->get("nameR");

//recuperation de l'id nameR
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:role')->findOneByName($nameR);
        $idnameR= $user->getIdRole();


        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT COUNT( (u.idrole)) AS num FROM AppBundle:profile_role u WHERE u.idrole= :nam');
        $query->setParameters(array(
            'nam' => $idnameR

        ));
        $nbr = $query->getSingleResult();

        if ($nbr['num']==0)
        {


            $this->addFlash(
                'notice',
                'Ce [ROLE :'.$nameR.'] ne dispose aucun Profile ');
            $profile="";
        }


        if ($nbr['num']!=0)
        {


            /*  for ($i=1;$i<=$nbr['num'];$i++)
              {tableau ili fih liste mta3 profile mta3 user Username
                  $em = $this->getDoctrine()->getManager();
                  $profile = $em->getRepository('AppBundle:profile_utilisateur')->findOneByIdutilisateur($idusername);
                  $idname[$i]= $profile->getIdprofile()->getName();
             }*/

            $em = $this->getDoctrine()->getManager();
            $profile = $em->getRepository('AppBundle:profile_role')->findby(array('idrole'=>$idnameR));

        }
        $name=$request->request->get("name");
        /* var_dump($idname);
         return new Response($idname[1].'=======>'.$idname[1].'////'.$name.'////'.$nbr['num']);*/
        $post=$this->getDoctrine()->getRepository("AppBundle:role");
        $res=$post->findAll();

        $access=$request->getSession()->get('access');

        return $this->render(
            'Profile/afficher_role_profile.html.twig',
            array('input'=>$nameR,"nbr"=>$nbr['num'],"profile"=>$profile,"res"=>$res,"name_profile"=>$name,'message'=>'Affecter ce Profile pour ce role','access'=>$access,));


    }




    /**
     * @Route("/administration/profil/detacherprofilerole",name="detacherprofilerole")
     */
    public function detacherprofileroleAction(Request $request)
    {$nameR=$request->request->get("nameR");
        $name=$request->request->get("name");


        $session= $request->getSession();
        $session->set("nameR",$nameR);
        $session->set("name",$name);



        $em = $this->getDoctrine()->getManager();
        $role = $em->getRepository('AppBundle:role')->findOneByName($nameR);
        $idnameR= $role->getIdRole();//role mte3na

        $em1 = $this->getDoctrine()->getManager();
        $profile = $em1->getRepository('AppBundle:profile')->findOneByName($name);
        $idname= $profile->getIdProfile();//profil mte3na



        $em10 = $this->getDoctrine()->getManager();
        $table10 = $em10->getRepository('AppBundle:profile_role')->findAll();




        if (!$table10) {//vide
            $this->addFlash(
                'msg',
                'Table vide aucun profile pour aucun role'
            );
            return $this->redirectToRoute('GereRole');  }
        if($table10){

            /*//verifier idusername mawjoud fi profile_role */
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT COUNT( (u.idrole)) AS num FROM AppBundle:profile_role u WHERE u.idrole= :nam');
            $query->setParameters(array(
                'nam' => $idnameR

            ));
            $nbr = $query->getSingleResult();




            /*//verifier $idname mawjoud fi profile_role */
            $em1 = $this->getDoctrine()->getManager();
            $query1 = $em1->createQuery('SELECT COUNT(  (u.idprofile)) AS num1 FROM AppBundle:profile_role u WHERE u.idprofile= :usernam');
            $query1->setParameters(array(
                'usernam' => $idname

            ));
            $nbr1 = $query1->getSingleResult();



            if (($nbr1['num1'] !=0 and $nbr['num']!=0))

            {

                //bech inchoufhoum mawjoudin wala le izouz fi nafs ligne
                $e = $this->getDoctrine()->getManager();
                $ro = $e->getRepository('AppBundle:profile_role')->findBy(array('idprofile'=>$idname,'idrole'=>$idnameR));


                $e1 = $this->getDoctrine()->getManager();
                $prof = $e1->getRepository('AppBundle:profile_role')->findBy(array('idprofile'=>$idname,'idrole'=>$idnameR));

//tableau mta3 Idprofilerole ili tebi3 role

                $x=0;
                $y=0;
                foreach ($ro as $p) {
                    $x++;
                    // $advert est une instance de Advert
                    $tab_ro[$x]= $p->getIdprofilerole();
                }


                //tableau mta3 Idprofileutilisateur ili tebi3 profile

                foreach ($prof as $p) {
                    $y++;
                    // $advert est une instance de Advert
                    $tab_pro[$y]= $p->getIdprofilerole();
                }

                $v=false;$i1=1;
                while($v==false and $i1<=$x )
                {

                    if($tab_ro[$i1]==$tab_pro[$i1])
                    {
                        $v=true;
                    }


                    $i1++;
                }



                if ($v!=true) {



                    $this->addFlash(
                        'msg',
                        'Your changes were saved!verification terminer aucun profile pour ce [role  :'.$nameR.']'

                    );
                    return $this->redirectToRoute('GereRole');
                }


                if ($v==true)
                { $em = $this->getDoctrine()->getManager();
                    $profile_role = $em->getRepository('AppBundle:profile_role')->findOneBy(
                        array('idrole' => $idnameR, 'idprofile' => $idname));
                    $em->remove($profile_role);
                    $em->flush();

                    #aprtie historique
                    $userh = $this->get('security.token_storage')->getToken()->getUser();
                    $datehist= date('d/m/Y');
                    $module='administration';
                    $champ='Role au profile';
                    $encien=$nameR;
                    $type='Detachement';
                    $nouveau=$name;
                    $historique= new historique();
                    $historique->setUtilisateur($userh);
                    $historique->setDatehistorique($datehist);
                    $historique->setModule($module);
                    $historique->setChamp($champ);
                    $historique->setEncienvaleur($encien);
                    $historique->setNouveauvaleur($nouveau);
                    $historique->setType($type);
                    $em->persist($historique);
                    $em->flush();

                    $this->addFlash(
                        'msg',
                        'Your changes were saved!verification ce [profile'.$name. ']detacher pour [role   :'.$nameR.'] donc delete'

                    );
                    return $this->redirectToRoute('Gererole');



                }




            }


            else{




                $this->addFlash(
                    'msg',
                    'Your changes were saved! c bon verifier si aucun profile et role trouver'
                );

                return $this->redirectToRoute('GereRole');

            }
        }


        return new Response($nameR);
    }



    /**
     * @Route("/administration/profil/ajouterprofil_role",name="ajouterprofilerole")
     */
    public function ajouterprofileroleAction(Request $request)
    {  $em=$this->getDoctrine()->getRepository("AppBundle:profile");
        $profile=$em->findAll();

        $em=$this->getDoctrine()->getRepository("AppBundle:role");
        $role=$em->findAll();
        $access=$request->getSession()->get('access');


        return $this->render("profile/confirmationaffectationprofilrole.html.twig",array('nbr'=>0, 'role' => $role,'profile'=>$profile,'nbrole'=>0,'access'=>$access,));
    }



    /**
     * @Route("/administration/profil/ajouterprofil_role/confirmationaffectationprofilrole/sauvgarder_pro_role",name="sauvgarder_pro_role")//ajouter pur liste role
     */
    public function sauvgarder_pro_roleAction(Request $request)
    {

        $name=$request->request->get("name");
        $session= $request->getSession();
        $session->set("name",$name);

        $name=$request->request->get("name");
        $nbrole=$request->request->get("nbrole");


        for ($i=1;$i<=$nbrole;$i++)
        {
            $nameR[$i]=$request->request->get("role".$i);
            /*tableau ili fih id mta3 role*/
            $em = $this->getDoctrine()->getManager();
            $role[$i] = $em->getRepository('AppBundle:role')->findOneByName($nameR[$i]);
            $idnameR[$i]= $role[$i]->getIdRole();
        }

        $em1 = $this->getDoctrine()->getManager();
        $profile = $em1->getRepository('AppBundle:profile')->findOneByName($name);
        $idname= $profile->getIdProfile();



        for ($j=1;$j<=$nbrole;$j++)
        {
            $em10 = $this->getDoctrine()->getManager();
            $table10 = $em10->getRepository('AppBundle:profile_role')->findAll();

            if (!$table10) {
                $profilerole[$j]= new profile_role();

                $profilerole[$j]->setIdrole($role[$j]);
                $profilerole[$j]->setIdprofile($profile);



                // 4) save the $profilerole!
                $em = $this->getDoctrine()->getManager();
                $em->persist($profilerole[$j]);
                $em->flush();

                #aprtie historique
                $userh = $this->get('security.token_storage')->getToken()->getUser();
                $datehist= date('d/m/Y');
                $module='administration';
                $champ='Role au profile';
                $encien=$nameR[$j];
                $type='Affectation';
                $nouveau=$name;
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();



                /*     $e = $this->getDoctrine()->getManager();
                     $use = $e->getRepository('AppBundle:profile_role')->findOneByIdprofile($idnameR);

                     array("use"=>$use)*/
                $this->addFlash(
                    'msg',
                    'Your changes were saved![Profile  :'.$name .']affecter pour [Role   :'.$nameR[$j].']'


                );

                /*return $this->redirectToRoute('GereRole');*/





            }

            if($table10){


                /*//verifier idusername mawjoud fi profile_role */
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery('SELECT COUNT( (u.idrole)) AS num FROM AppBundle:profile_role u WHERE u.idrole= :nam');
                $query->setParameters(array(
                    'nam' => $idnameR[$j]

                ));
                $nbr = $query->getSingleResult();


                /*//verifier $idname mawjoud fi profile_utilisateur */
                $em1 = $this->getDoctrine()->getManager();
                $query1 = $em1->createQuery('SELECT COUNT(  (u.idprofile)) AS num1 FROM AppBundle:profile_role u WHERE u.idprofile= :usernam');
                $query1->setParameters(array(
                    'usernam' => $idname

                ));
                $nbr1 = $query1->getSingleResult();






                if (($nbr1['num1'] !=0 and $nbr['num']!=0))

                {
                    //bech inchoufhoum mawjoudin wala le izouz fi nafs ligne
                    $e = $this->getDoctrine()->getManager();
                    $ro = $e->getRepository('AppBundle:profile_role')->findBy(array('idprofile'=>$idname,'idrole'=>$idnameR[$j]));


                    $e1 = $this->getDoctrine()->getManager();
                    $prof = $e1->getRepository('AppBundle:profile_role')->findBy(array('idprofile'=>$idname,'idrole'=>$idnameR[$j]));

//tableau mta3 Idprofilerole ili tebi3 role

                    $x=0;
                    $y=0;
                    foreach ($ro as $p) {
                        $x++;
                        // $advert est une instance de Advert
                        $tab_role[$x]= $p->getIdprofilerole();
                    }


                    //tableau mta3 Idprofileutilisateur ili tebi3 profile

                    foreach ($prof as $p) {
                        $y++;
                        // $advert est une instance de Advert
                        $tab_pro[$y]= $p->getIdprofilerole();
                    }

                    $v=false;$i1=1;
                    while($v==false and $i1<=$x )
                    {

                        if($tab_role[$i1]==$tab_pro[$i1])
                        {
                            $v=true;
                        }


                        $i1++;
                    }



                    if ($v==false) {

                        $profilerole = new profile_role();

                        $profilerole->setIdrole($role[$j]);
                        $profilerole->setIdprofile($profile);


                        // 4) save the $profilrole!
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($profilerole);
                        $em->flush();

                        #aprtie historique
                        $userh = $this->get('security.token_storage')->getToken()->getUser();
                        $datehist= date('d/m/Y');
                        $module='administration';
                        $champ='Role au profile';
                        $encien=$nameR[$j];
                        $type='Affectation';
                        $nouveau=$name;
                        $historique= new historique();
                        $historique->setUtilisateur($userh);
                        $historique->setDatehistorique($datehist);
                        $historique->setModule($module);
                        $historique->setChamp($champ);
                        $historique->setEncienvaleur($encien);
                        $historique->setNouveauvaleur($nouveau);
                        $historique->setType($type);
                        $em->persist($historique);
                        $em->flush();


                        $this->addFlash(
                            'msg',
                            'Your changes were saved ![Profile   :'.$name .']affecter pour [role     :'.$nameR[$j].']'



                        );
                        /* return $this->redirectToRoute('GereRole');*/
                    }


                    if ($v==true)
                    {   $this->addFlash(
                        'msg',
                        'Your changes were saved! deja Ce [role    :'.$nameR[$j].'] a affeccter deja ce [profile :'.$name.']'

                    );

                        /* return $this->redirectToRoute('GereRole');*/


                    }




                }


                else{


                    $profilerole = new profile_role();

                    $profilerole->setIdrole($role[$j]);
                    $profilerole->setIdprofile($profile);


                    // 4) save the $profilrole!
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($profilerole);
                    $em->flush();

                    #aprtie historique
                    $userh = $this->get('security.token_storage')->getToken()->getUser();
                    $datehist= date('d/m/Y');
                    $module='administration';
                    $champ='Role au profile';
                    $encien=$nameR[$j];
                    $type='Affectation';
                    $nouveau=$name;
                    $historique= new historique();
                    $historique->setUtilisateur($userh);
                    $historique->setDatehistorique($datehist);
                    $historique->setModule($module);
                    $historique->setChamp($champ);
                    $historique->setEncienvaleur($encien);
                    $historique->setNouveauvaleur($nouveau);
                    $historique->setType($type);
                    $em->persist($historique);
                    $em->flush();

                    $this->addFlash(
                        'msg',
                        'Your changes were saved![Profile    :'.$name .']affecter pour [role   :'.$nameR[$j].']'
                    );

                    /* return $this->redirectToRoute('GereRole');*/

                }
            }


        }
        return $this->redirectToRoute('GereRole');
    }





    /**
     * @Route("/administration/profil/GereRole",name="GereRole")
     */
    public function GereRoleAction(Request $request)
    {

        $name=$request->request->get("name");//name profile

        $nameR=$request->request->get("nameR");//role name


        if (!$name)
        {
            $session = $request->getSession();
            $name=$session->get("name");
            $nameR=$session->get("nameR");


        }

        $role=$this->getDoctrine()->getRepository("AppBundle:role");
        $res=$role->findAll();

        $access=$request->getSession()->get('access');

        return $this->render(
            'Profile/afficher_role_profile.html.twig',
            array('profile'=>'','input'=>'','idname'=>0,'nbr'=>0,"res"=>$res,"name_profile"=>$name,
                'message'=>'Affecter ce Profile pour un Role ','access'=>$access, ));
    }



    /**
     * @Route("/administration/profil/GereUtlisateur",name="GereUtlisateur")
     */
    public function GereUtlisateurAction(Request $request)
    { $name=$request->request->get("name");//profil name
        $Username=$request->request->get("Username");//usernam


        if (!$name)
        {
            $session = $request->getSession();
            $name=$session->get("name");
            $Username=$request->request->get("Username");//profil name


        }



        $post=$this->getDoctrine()->getRepository("AppBundle:utilisateur");
        $res=$post->findAll();

        $access=$request->getSession()->get('access');

        return $this->render(
            'profile/afficher_all_user.html.twig',
            array('profile'=>'','input'=>'','idname'=>0,'nbr'=>0,"res"=>$res,"name_profile"=>$name,
                'message'=>'Affecter ce Profile pour un utilisateur ou un groupe d"utlisateur',
                'access'=>$access,));
    }






    /**
     * @Route("/administration/profil/GereUtlisateur/Profil_utilisateur",name="Profile_utilisateur")//pour voire profil user
     */
    public function Profile_utilisateurAction(Request $request)
    {


        $Username=$request->request->get("Username");

//recuperation de l'id user
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:utilisateur')->findOneByusername($Username);
        $idusername= $user->getId();



        /*//verifier idusername mawjoud fi profile_utilisateur */
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT COUNT (u.idutilisateur) AS num FROM AppBundle:profile_utilisateur u WHERE u.idutilisateur= :usernam');
        $query->setParameters(array(
            'usernam' => $idusername

        ));
        $nbr = $query->getSingleResult();

        if ($nbr['num']==0)
        {

            $this->addFlash(
                'notice',
                'Ce [Utilisateur :'.$Username.'] ne dispose aucun Profile ');

            $profile="";

            /*        return new Response('bara 3ad'.'====='.$idusername. '=====>'.$Username.'---------->ma3andouch wa haw ch3andou'.$nbr['num']);*/
        }


        if ($nbr['num']!=0)
        {


            /*  for ($i=1;$i<=$nbr['num'];$i++)
              {tableau ili fih liste mta3 profile mta3 user Username
                  $em = $this->getDoctrine()->getManager();
                  $profile = $em->getRepository('AppBundle:profile_utilisateur')->findOneByIdutilisateur($idusername);
                  $idname[$i]= $profile->getIdprofile()->getName();
             }*/

            $em = $this->getDoctrine()->getManager();
            $profile = $em->getRepository('AppBundle:profile_utilisateur')->findby(array('idutilisateur'=>$idusername));

        }
        $name=$request->request->get("name");
        /* var_dump($idname);
         return new Response($idname[1].'=======>'.$idname[1].'////'.$name.'////'.$nbr['num']);*/
        $post=$this->getDoctrine()->getRepository("AppBundle:utilisateur");
        $res=$post->findAll();

        $access=$request->getSession()->get('access');

        return $this->render(
            'Profile/afficher_all_user.html.twig',
            array('input'=>$Username,"nbr"=>$nbr['num'],"profile"=>$profile,"res"=>$res,"name_profile"=>$name,'message'=>'Affecter ce Profile pour un utilisateur ou un groupe d"utlisateur','access'=>$access,));


    }




    /**
     * @Route("/administration/profil/affecterprofil",name="affecterprofile")//afecter profile user
     */
    public function affecterprofileAction(Request $request)
    {$Username=$request->request->get("Username");
        $name=$request->request->get("name");


        $session= $request->getSession();
        $session->set("Username",$Username);
        $session->set("name",$name);

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:utilisateur')->findOneByUsername($Username);
        $idusername= $user->getId();//user mte3na

        $em1 = $this->getDoctrine()->getManager();
        $profile = $em1->getRepository('AppBundle:profile')->findOneByName($name);
        $idname= $profile->getIdProfile();//profil mte3na


        $em10 = $this->getDoctrine()->getManager();
        $table10 = $em10->getRepository('AppBundle:profile_utilisateur')->findAll();

        if (!$table10) {
            $profileutilisateur= new profile_utilisateur();

            $profileutilisateur->setIdutilisateur($user);
            $profileutilisateur->setIdprofile($profile);



            // 4) save the $profileutilisateur!
            $em = $this->getDoctrine()->getManager();
            $em->persist($profileutilisateur);
            $em->flush();

            #aprtie historique
            $userh = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='administration';
            $champ='Utilisateur au profile';
            $encien=$Username;
            $type='Affectation';
            $nouveau=$name;
            $historique= new historique();
            $historique->setUtilisateur($userh);
            $historique->setDatehistorique($datehist);
            $historique->setModule($module);
            $historique->setChamp($champ);
            $historique->setEncienvaleur($encien);
            $historique->setNouveauvaleur($nouveau);
            $historique->setType($type);
            $em->persist($historique);
            $em->flush();



            $Email=$user->getEmail();
            $message = \Swift_Message::newInstance()
                ->setSubject('Utilisateur')
                ->setFrom('dptg.steg@gmail.com')
                ->setTo($Email)
                ->setBody(
                    $this->renderView(
                    // app/Resources/views/Emails/registration.html.twig
                        'Emails/delete_user.html.twig',
                        array('bonjour'=>'Bonjour vous avez un nouveau Profile qui est:'.$name
                        )
                    ),
                    'text/html'
                );


            $m=$message->toString();
            $this->get('mailer')->send($message);


            /*     $e = $this->getDoctrine()->getManager();
                 $use = $e->getRepository('AppBundle:profile_utilisateur')->findOneByIdutilisateur($idusername);

                 array("use"=>$use)*/
            $this->addFlash(
                'msg',
                'Your changes were saved![Profile'.$name .']affecter pour [utilisateur :'.$Username.']'


            );

            return $this->redirectToRoute('GereUtlisateur');





        }

        if($table10){


            /*//verifier idusername mawjoud fi profile_utilisateur */
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT COUNT( (u.idutilisateur)) AS num FROM AppBundle:profile_utilisateur u WHERE u.idutilisateur= :usernam');
            $query->setParameters(array(
                'usernam' => $idusername

            ));
            $nbr = $query->getSingleResult();


            /*//verifier $idname mawjoud fi profile_utilisateur */
            $em1 = $this->getDoctrine()->getManager();
            $query1 = $em1->createQuery('SELECT COUNT(  (u.idprofile)) AS num1 FROM AppBundle:profile_utilisateur u WHERE u.idprofile= :usernam');
            $query1->setParameters(array(
                'usernam' => $idname

            ));
            $nbr1 = $query1->getSingleResult();






            if (($nbr1['num1'] !=0 or $nbr['num']!=0))

            {
//bech inchoufhoum mawjoudin wala le izouz fi nafs ligne
                $e = $this->getDoctrine()->getManager();
                $us = $e->getRepository('AppBundle:profile_utilisateur')->findBy(array('idutilisateur'=>$idusername,'idprofile'=>$idname));


                $e1 = $this->getDoctrine()->getManager();
                $prof = $e1->getRepository('AppBundle:profile_utilisateur')->findBy(array('idutilisateur'=>$idusername,'idprofile'=>$idname));

//tableau mta3 Idprofileutilisateur ili tebi3 user

                $x=0;
                $y=0;
                foreach ($us as $p) {
                    $x++;
                    // $advert est une instance de Advert
                    $tab_user[$x]= $p->getIdprofileutilisateur();
                }


                //tableau mta3 Idprofileutilisateur ili tebi3 profile

                foreach ($prof as $p) {
                    $y++;
                    // $advert est une instance de Advert
                    $tab_pro[$y]= $p->getIdprofileutilisateur();
                }

                $v=false;$i1=1;
                while($v==false and $i1<=$x )
                {

                    if($tab_user[$i1]==$tab_pro[$i1])
                    {
                        $v=true;
                    }


                    $i1++;
                }



                if ($v!=true) {

                    $profileutilisateur = new profile_utilisateur();

                    $profileutilisateur->setIdutilisateur($user);
                    $profileutilisateur->setIdprofile($profile);


                    // 4) save the $profileutilisateur!
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($profileutilisateur);
                    $em->flush();

                    #aprtie historique
                    $userh = $this->get('security.token_storage')->getToken()->getUser();
                    $datehist= date('d/m/Y');
                    $module='administration';
                    $champ='Utilisateur au profile';
                    $encien=$Username;
                    $type='Affectation';
                    $nouveau=$name;
                    $historique= new historique();
                    $historique->setUtilisateur($userh);
                    $historique->setDatehistorique($datehist);
                    $historique->setModule($module);
                    $historique->setChamp($champ);
                    $historique->setEncienvaleur($encien);
                    $historique->setNouveauvaleur($nouveau);
                    $historique->setType($type);
                    $em->persist($historique);
                    $em->flush();


                    $Email=$user->getEmail();
                    $message = \Swift_Message::newInstance()
                        ->setSubject('Utilisateur')
                        ->setFrom('dptg.steg@gmail.com')
                        ->setTo($Email)
                        ->setBody(
                            $this->renderView(
                            // app/Resources/views/Emails/registration.html.twig
                                'Emails/delete_user.html.twig',
                                array('bonjour'=>'Bonjour vous avez un nouveau Profile qui est:'.$name
                                )
                            ),
                            'text/html'
                        );


                    $m=$message->toString();
                    $this->get('mailer')->send($message);



                    $this->addFlash(
                        'msg',
                        'Your changes were saved #ligne![Profile   :'.$name .']   affecter pour [utilisateur   :'.$Username.']'



                    );
                    return $this->redirectToRoute('GereUtlisateur');
                }


                if ($v==true)
                {   $this->addFlash(
                    'msg',
                    'Your changes were saved!Ce [utilisateur    :'.$Username.'] a affeccter deja ce  [profile   :'.$name.']'

                );

                    return $this->redirectToRoute('GereUtlisateur');


                }




            }


            else{


                $profileutilisateur= new profile_utilisateur();

                $profileutilisateur->setIdutilisateur($user);
                $profileutilisateur->setIdprofile($profile);



                // 4) save the $profileutilisateur!
                $em = $this->getDoctrine()->getManager();
                $em->persist($profileutilisateur);
                $em->flush();

                #aprtie historique
                $userh = $this->get('security.token_storage')->getToken()->getUser();
                $datehist= date('d/m/Y');
                $module='administration';
                $champ='Utilisateur au profile';
                $encien=$Username;
                $type='Affectation';
                $nouveau=$name;
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();


                $Email=$user->getEmail();
                $message = \Swift_Message::newInstance()
                    ->setSubject('Utilisateur')
                    ->setFrom('dptg.steg@gmail.com')
                    ->setTo($Email)
                    ->setBody(
                        $this->renderView(
                        // app/Resources/views/Emails/registration.html.twig
                            'Emails/delete_user.html.twig',
                            array('bonjour'=>'Bonjour vous avez un nouveau Profile qui est:'.$name
                            )
                        ),
                        'text/html'
                    );


                $m=$message->toString();
                $this->get('mailer')->send($message);

                $this->addFlash(
                    'msg',
                    'Your changes were saved! [Profile'.$name .']affecter pour [utilisateur   : '.$Username.']'
                );

                return $this->redirectToRoute('GereUtlisateur');

            }
        }





    }



    /**
     * @Route("/administration/profil/ajouterprofil_utilisateur/confirmationaffectation/sauvgarder_pro_user",name="sauvgarder_pro_user")//ajouter pur liste user
     */
    public function sauvgarder_pro_userAction(Request $request)
    {

        $name=$request->request->get("name");
        $session= $request->getSession();
        $session->set("name",$name);

        $name=$request->request->get("name");
        $nbutilisateur=$request->request->get("nbutilisateur");


        for ($i=1;$i<=$nbutilisateur;$i++)
        {
            $Username[$i]=$request->request->get("user".$i);
            /*tableau ili fih id mta3 user*/
            $em = $this->getDoctrine()->getManager();
            $user[$i] = $em->getRepository('AppBundle:utilisateur')->findOneByUsername($Username[$i]);
            $idusername[$i]= $user[$i]->getId();
        }

        $em1 = $this->getDoctrine()->getManager();
        $profile = $em1->getRepository('AppBundle:profile')->findOneByName($name);
        $idname= $profile->getIdProfile();



        for ($j=1;$j<=$nbutilisateur;$j++)
        {
            $em10 = $this->getDoctrine()->getManager();
            $table10 = $em10->getRepository('AppBundle:profile_utilisateur')->findAll();

            if (!$table10) {
                $profileutilisateur[$j]= new profile_utilisateur();

                $profileutilisateur[$j]->setIdutilisateur($user[$j]);
                $profileutilisateur[$j]->setIdprofile($profile);



                // 4) save the $profileutilisateur!
                $em = $this->getDoctrine()->getManager();
                $em->persist($profileutilisateur[$j]);
                $em->flush();

                #aprtie historique
                $userh = $this->get('security.token_storage')->getToken()->getUser();
                $datehist= date('d/m/Y');
                $module='administration';
                $champ='Utilisateur au profile';
                $encien=$Username[$j];
                $type='Affectation';
                $nouveau=$name;
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();


                $Email=$user[$j]->getEmail();
                $message = \Swift_Message::newInstance()
                    ->setSubject('Utilisateur')
                    ->setFrom('dptg.steg@gmail.com')
                    ->setTo($Email)
                    ->setBody(
                        $this->renderView(
                        // app/Resources/views/Emails/registration.html.twig
                            'Emails/delete_user.html.twig',
                            array('bonjour'=>'Bonjour vous avez un nouveau Profile qui est:'.$name
                            )
                        ),
                        'text/html'
                    );


                $m=$message->toString();
                $this->get('mailer')->send($message);


                /*     $e = $this->getDoctrine()->getManager();
                     $use = $e->getRepository('AppBundle:profile_utilisateur')->findOneByIdutilisateur($idusername);

                     array("use"=>$use)*/
                $this->addFlash(
                    'msg',
                    'Your changes were saved![Profile   :'.$name .']affecter pour [utilisateur   :'.$Username[$j].']'


                );

                /*return $this->redirectToRoute('GereUtlisateur');*/





            }

            if($table10){


                /*//verifier idusername mawjoud fi profile_utilisateur */
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery('SELECT COUNT( (u.idutilisateur)) AS num FROM AppBundle:profile_utilisateur u WHERE u.idutilisateur= :usernam');
                $query->setParameters(array(
                    'usernam' => $idusername[$j]

                ));
                $nbr = $query->getSingleResult();


                /*//verifier $idname mawjoud fi profile_utilisateur */
                $em1 = $this->getDoctrine()->getManager();
                $query1 = $em1->createQuery('SELECT COUNT(  (u.idprofile)) AS num1 FROM AppBundle:profile_utilisateur u WHERE u.idprofile= :usernam');
                $query1->setParameters(array(
                    'usernam' => $idname

                ));
                $nbr1 = $query1->getSingleResult();






                if (($nbr1['num1'] !=0 and $nbr['num']!=0))

                {

                    //bech inchoufhoum mawjoudin wala le izouz fi nafs ligne
                    $e = $this->getDoctrine()->getManager();
                    $us = $e->getRepository('AppBundle:profile_utilisateur')->findBy(array('idprofile'=>$idname,'idutilisateur'=>$idusername[$j]));


                    $e1 = $this->getDoctrine()->getManager();
                    $prof = $e1->getRepository('AppBundle:profile_utilisateur')->findBy(array('idprofile'=>$idname,'idutilisateur'=>$idusername[$j]));

//tableau mta3 Idprofileutilisateur ili tebi3 user

                    $x=0;
                    $y=0;
                    foreach ($us as $p) {
                        $x++;
                        // $advert est une instance de Advert
                        $tab_user[$x]= $p->getIdprofileutilisateur();
                    }


                    //tableau mta3 Idprofileutilisateur ili tebi3 profile

                    foreach ($prof as $p) {
                        $y++;
                        // $advert est une instance de Advert
                        $tab_pro[$y]= $p->getIdprofileutilisateur();
                    }

                    $v=false;$i1=1;
                    while($v==false and $i1<=$x )
                    {

                        if($tab_user[$i1]==$tab_pro[$i1])
                        {
                            $v=true;
                        }


                        $i1++;
                    }



                    if ($v!=true) {

                        $profileutilisateur = new profile_utilisateur();

                        $profileutilisateur->setIdutilisateur($user[$j]);
                        $profileutilisateur->setIdprofile($profile);


                        // 4) save the $profileutilisateur!
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($profileutilisateur);
                        $em->flush();

                        #aprtie historique
                        $userh = $this->get('security.token_storage')->getToken()->getUser();
                        $datehist= date('d/m/Y');
                        $module='administration';
                        $champ='Utilisateur au profile';
                        $encien=$Username[$j];
                        $type='Affectation';
                        $nouveau=$name;
                        $historique= new historique();
                        $historique->setUtilisateur($userh);
                        $historique->setDatehistorique($datehist);
                        $historique->setModule($module);
                        $historique->setChamp($champ);
                        $historique->setEncienvaleur($encien);
                        $historique->setNouveauvaleur($nouveau);
                        $historique->setType($type);
                        $em->persist($historique);
                        $em->flush();

                        $Email=$user[$j]->getEmail();
                        $message = \Swift_Message::newInstance()
                            ->setSubject('Utilisateur')
                            ->setFrom('dptg.steg@gmail.com')
                            ->setTo($Email)
                            ->setBody(
                                $this->renderView(
                                // app/Resources/views/Emails/registration.html.twig
                                    'Emails/delete_user.html.twig',
                                    array('bonjour'=>'Bonjour vous avez un nouveau Profile qui est:'.$name
                                    )
                                ),
                                'text/html'
                            );


                        $m=$message->toString();
                        $this->get('mailer')->send($message);

                        $this->addFlash(
                            'msg',
                            'Your changes were saved ligne![Profile   :'.$name .']affecter pour [utilisateur   :'.$Username[$j].']'



                        );
                        /*return $this->redirectToRoute('GereUtlisateur');*/
                    }


                    if ($v==true)
                    {   $this->addFlash(
                        'msg',
                        'Your changes were saved! deja Ce [utilisateur   :'.$Username[$j].'] a affeccter deja ce [profile   :'.$name.']'

                    );

                        /*       return $this->redirectToRoute('GereUtlisateur');*/


                    }




                }


                else{


                    $profileutilisateur = new profile_utilisateur();

                    $profileutilisateur->setIdutilisateur($user[$j]);
                    $profileutilisateur->setIdprofile($profile);


                    // 4) save the $profileutilisateur!
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($profileutilisateur);
                    $em->flush();

                    #aprtie historique
                    $userh = $this->get('security.token_storage')->getToken()->getUser();
                    $datehist= date('d/m/Y');
                    $module='administration';
                    $champ='Utilisateur au profile';
                    $encien=$Username[$j];
                    $type='Affectation';
                    $nouveau=$name;
                    $historique= new historique();
                    $historique->setUtilisateur($userh);
                    $historique->setDatehistorique($datehist);
                    $historique->setModule($module);
                    $historique->setChamp($champ);
                    $historique->setEncienvaleur($encien);
                    $historique->setNouveauvaleur($nouveau);
                    $historique->setType($type);
                    $em->persist($historique);
                    $em->flush();


                    $Email=$user[$j]->getEmail();
                    $message = \Swift_Message::newInstance()
                        ->setSubject('Utilisateur')
                        ->setFrom('dptg.steg@gmail.com')
                        ->setTo($Email)
                        ->setBody(
                            $this->renderView(
                            // app/Resources/views/Emails/registration.html.twig
                                'Emails/delete_user.html.twig',
                                array('bonjour'=>'Bonjour vous avez un nouveau Profile qui est:'.$name
                                )
                            ),
                            'text/html'
                        );


                    $m=$message->toString();
                    $this->get('mailer')->send($message);



                    $this->addFlash(
                        'msg',
                        'Your changes were saved![Profile  '.$name .']affecter pour [utilisateur  :'.$Username[$j].']'
                    );

                    /*  return $this->redirectToRoute('GereUtlisateur');*/

                }
            }


        }
        return $this->redirectToRoute('GereUtlisateur');
    }


    /**
     * @Route("/administration/profil/ajouterprofil_utilisateur",name="ajouterprofileutilisateur")
     */
    public function ajouterprofileutilisateurAction(Request $request)
    {  $em=$this->getDoctrine()->getRepository("AppBundle:profile");
        $profile=$em->findAll();

        $em=$this->getDoctrine()->getRepository("AppBundle:utilisateur");
        $user=$em->findAll();


        $access=$request->getSession()->get('access');


        return $this->render("profile/confirmationaffectaation.html.twig",array('nbr'=>0,'user' => $user, "nbutilisateur"=>0,'profile'=>$profile,'access'=>$access,/*,'name'=>$name,'nbutilisateur'=>$nbutilisateur*/));
    }




    /**
     * @Route("/administration/profil/detacherprofil",name="detacherprofile")
     */
    public function detacherprofileAction(Request $request)
    {$Username=$request->request->get("Username");
        $name=$request->request->get("name");


        $session= $request->getSession();
        $session->set("Username",$Username);
        $session->set("name",$name);




        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:utilisateur')->findOneByUsername($Username);
        $idusername= $user->getId();//user mte3na

        $em1 = $this->getDoctrine()->getManager();
        $profile = $em1->getRepository('AppBundle:profile')->findOneByName($name);
        $idname= $profile->getIdProfile();//profil mte3na




        $em10 = $this->getDoctrine()->getManager();
        $table10 = $em10->getRepository('AppBundle:profile_utilisateur')->findAll();




        if (!$table10) {//vide
            $this->addFlash(
                'msg',
                'Table vide aucun profile pour aucun Utilisateur'
            );
            return $this->redirectToRoute('GereUtlisateur');  }
        if($table10){


            /*//verifier idusername mawjoud fi profile_utilisateur */
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT COUNT( (u.idutilisateur)) AS num FROM AppBundle:profile_utilisateur u WHERE u.idutilisateur= :usernam');
            $query->setParameters(array(
                'usernam' => $idusername

            ));
            $nbr = $query->getSingleResult();


            /*//verifier $idname mawjoud fi profile_utilisateur */
            $em1 = $this->getDoctrine()->getManager();
            $query1 = $em1->createQuery('SELECT COUNT(  (u.idprofile)) AS num1 FROM AppBundle:profile_utilisateur u WHERE u.idprofile= :usernam');
            $query1->setParameters(array(
                'usernam' => $idname

            ));
            $nbr1 = $query1->getSingleResult();






            if (($nbr1['num1'] !=0 and $nbr['num']!=0))

            {

                $e = $this->getDoctrine()->getManager();
                $us = $e->getRepository('AppBundle:profile_utilisateur')->findBy(array('idprofile'=>$idname,'idutilisateur'=>$idusername));


                $e1 = $this->getDoctrine()->getManager();
                $prof = $e1->getRepository('AppBundle:profile_utilisateur')->findBy(array('idprofile'=>$idname,'idutilisateur'=>$idusername));


//tableau mta3 Idprofileutilisateur ili tebi3 user

                $x=0;
                $y=0;
                foreach ($us as $p) {
                    $x++;
                    // $advert est une instance de Advert
                    $tab_user[$x]= $p->getIdprofileutilisateur();
                }


                //tableau mta3 Idprofileutilisateur ili tebi3 profile

                foreach ($prof as $p) {
                    $y++;
                    // $advert est une instance de Advert
                    $tab_pro[$y]= $p->getIdprofileutilisateur();
                }

                $v=false;$i1=1;
                while($v==false and $i1<=$x )
                {

                    if($tab_user[$i1]==$tab_pro[$i1])
                    {
                        $v=true;
                    }


                    $i1++;
                }




                if ($v!=true) {



                    $this->addFlash(
                        'msg',
                        'Your changes were saved !Verification terminer aucun profile pour ce [Utilisateur   :'.$Username.']'

                    );
                    return $this->redirectToRoute('GereUtlisateur');
                }


                if ($v==true)
                { $em = $this->getDoctrine()->getManager();
                    $profile_utilisateur = $em->getRepository('AppBundle:profile_utilisateur')->findOneBy(
                        array('idutilisateur' => $idusername, 'idprofile' => $idname));
                    $em->remove($profile_utilisateur);
                    $em->flush();

                    #aprtie historique
                    $userh = $this->get('security.token_storage')->getToken()->getUser();
                    $datehist= date('d/m/Y');
                    $module='administration';
                    $champ='Role au profile';
                    $encien=$Username;
                    $type='Detachement';
                    $nouveau=$name;
                    $historique= new historique();
                    $historique->setUtilisateur($userh);
                    $historique->setDatehistorique($datehist);
                    $historique->setModule($module);
                    $historique->setChamp($champ);
                    $historique->setEncienvaleur($encien);
                    $historique->setNouveauvaleur($nouveau);
                    $historique->setType($type);
                    $em->persist($historique);
                    $em->flush();


                    $this->addFlash(
                        'msg',
                        'Your changes were saved!verification ce [profile'.$name. ']detacher pour [utilisateur   :'.$Username.']'

                    );
                    return $this->redirectToRoute('GereUtlisateur');



                }




            }


            else{




                $this->addFlash(
                    'msg',
                    'Your changes were saved! verifier si user a aucun profile '
                );

                return $this->redirectToRoute('GereUtlisateur');

            }
        }


        return new Response($Username);
    }




    /**
     * @Route("/administration/profil/supprimeprofil",name="supprimeprofile")
     */
    public function supprimeprofileAction(Request $request)
    {
        $name=$request->request->get("name");
        $em = $this->getDoctrine()->getManager();
        $profile = $em->getRepository('AppBundle:profile')->findOneByname($name);


        $em->remove($profile);
        $em->flush();

        #partie historique
        $userh = $this->get('security.token_storage')->getToken()->getUser();
        $datehist= date('d/m/Y');
        $module='administration';
        $type='Suppression';

        $champ='Profile '.$name;
        $encien= $name ;
        $nouveau='-';
        $historique= new historique();
        $historique->setUtilisateur($userh);
        $historique->setDatehistorique($datehist);
        $historique->setModule($module);
        $historique->setChamp($champ);
        $historique->setEncienvaleur($encien);
        $historique->setNouveauvaleur($nouveau);
        $historique->setType($type);
        $em->persist($historique);
        $em->flush();
        #end historique

        $session = $request->getSession();
        $session->set("name",$name);
        $this->addFlash(
            'notice',
            'Ce profile :'.$name.'est supprimer avec succeés '

        );


        $descriptionancien=$request->request->get("descriptionancien");
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $datehist= date('d/m/Y');
        $module='profile';
        $champ='Description';
        $encien=$descriptionancien;
        $nouveau=$profile->getDescription();
        $historique= new historique();
        $historique->setUtilisateur($user);
        $historique->setDatehistorique($datehist);
        $historique->setModule($module);
        $historique->setChamp($champ);
        $historique->setEncienvaleur($encien);
        $historique->setNouveauvaleur($nouveau);
        $historique->setType("Supprission");
        $em->persist($historique);
        $em->flush();





        return $this->redirectToRoute('afficheprofile');
    }






    /**
     * @Route("/administration/profil/modifier_profil",name="modifier_profile")
     */
    public function modifier_profileAction(Request $request)
    {
        if ($request->request->get("name")!= null)
        {
            $name=$request->request->get("name");
            $description=$request->request->get("description");


            $em = $this->getDoctrine()->getManager();
            $profile = $em->getRepository('AppBundle:profile')->findOneByname($name);

            #partie historique
            $userh = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='administration';
            $type='Modification';
            if ($profile->getDescription() != $description)
            {

                $champ='Descrition de profile '.$name;
                $encien= $profile->getDescription() ;
                $nouveau=$description;
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }

            $profile->setName($name);
            $profile->setDescription($description);

            $em->flush();
        }

        $this->addFlash(
            'notice',
            'Ce profile :'.$name.'est modifier avec succeés '

        );

        $descriptionancien=$request->request->get("descriptionancien");


        return $this->redirectToRoute('afficheprofile');

    }


    /**
     * @Route("/administration/profil/modifierprofil",name="modifierprofile")
     */
    public function modifierprofileAction(Request $request)
    {
        $name=$request->request->get("name");

        $em = $this->getDoctrine()->getManager();
        $profile = $em->getRepository('AppBundle:profile')->findOneByname($name);

        $access=$request->getSession()->get('access');

        return $this->render("profile/modifierprofile.html.twig",array("res"=>$profile,'access'=>$access,));
    }



    /**
     * @Route("/administration/profil/afficheprofil",name="afficheprofile")
     */
    public function afficheprofileAction(Request $request)
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:profile");
        $res=$post->findAll();

        $access=$request->getSession()->get('access');


        return $this->render("profile/afficher_all_profile.html.twig",
            array("res"=>$res,"access"=>$access,));
    }


    /**
     * @Route("/administration/profil/ajoutprofil",name="ajoutprofile")
     */
    public function ajoutprofileAction(Request $request)
    {
        $profile= new profile();
        $form = $this->createForm(ProfileType::class, $profile);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {



            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($profile);
            $em->flush();

            $user = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='administration';
            $champ='Profile';
            $encien='-';
            $nouveau=$profile->getName();
            $historique= new historique();
            $historique->setUtilisateur($user);
            $historique->setDatehistorique($datehist);
            $historique->setModule($module);
            $historique->setChamp($champ);
            $historique->setEncienvaleur($encien);
            $historique->setNouveauvaleur($nouveau);
            $historique->setType("Ajout");
            $em->persist($historique);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            $name=$request->request->get("name");

            $session = $request->getSession();
            $session->set("name",$name);

            $this->addFlash(
                'notice',
                'Ce Profil :'.$name.'est ajouter avec succeés '

            );




            return $this->redirectToRoute('afficheprofile');

        }
        $access=$request->getSession()->get('access');
        return $this->render(
            'profile/ajoutprofile.html.twig',
            array('form' => $form->createView(),'access'=>$access,)
        );
    }



    //*******************************************************************************************


//                              partie Role
//*******************************************************************************************



    /**
     * @Route("/administration/role/GereProfil",name="GereProfile")
     */
    public function GereProfileAction(Request $request)
    {

        $name=$request->request->get("name");//name profile

        $nameR=$request->request->get("nameR");//role name

        if (!$nameR)
        {
            $session = $request->getSession();
            $name=$session->get("name");
            $nameR=$session->get("nameR");


        }




        $profile=$this->getDoctrine()->getRepository("AppBundle:profile");
        $res=$profile->findAll();

        $access=$request->getSession()->get('access');

        return $this->render(
            'role/afficher_profile_role.html.twig',
            array('profile'=>'','input'=>'','idname'=>0,'nbr'=>0,"res"=>$res,"name_role"=>$nameR,
                'message'=>'Affecter ce Role pour un Profile ','access'=>$access, ));
    }





    /**
     * @Route("/administration/role/GereProfil/Role_profil",name="Role_profile")////pour voire liste role  pour un profile
     */
    public function Role_profileAction(Request $request)
    {$nameR=$request->request->get("nameR");
        $name=$request->request->get("name");

        $session= $request->getSession();
        $session->set("nameR",$nameR);
        $session->set("name",$name);

        $nameR=$request->request->get("nameR");
        $name=$request->request->get("name");


//recuperation de l'id name
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:profile')->findOneByName($name);
        $idname= $user->getIdProfile();



        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT COUNT( (u.idprofile)) AS num FROM AppBundle:profile_role u WHERE u.idprofile= :nam');
        $query->setParameters(array(
            'nam' => $idname

        ));
        $nbr = $query->getSingleResult();

        if ($nbr['num']==0)
        {
            $this->addFlash(
                'notice',
                'Ce Profile'.$name.' ne dispose aucun Role pour ce moment '
            );



            /*            return new Response('bara 3ad profile hetha'.'====='.$idname. '=====>'.$name.'---------->ma3andouch wa haw ch3andou'.$nbr['num']);*/
        }
        $profile='';

        if ($nbr['num']!=0)
        {


            /*  for ($i=1;$i<=$nbr['num'];$i++)
              {tableau ili fih liste mta3 profile mta3 user Username
                  $em = $this->getDoctrine()->getManager();
                  $profile = $em->getRepository('AppBundle:profile_utilisateur')->findOneByIdutilisateur($idusername);
                  $idname[$i]= $profile->getIdprofile()->getName();
             }*/

            $em = $this->getDoctrine()->getManager();
            $profile = $em->getRepository('AppBundle:profile_role')->findby(array('idprofile'=>$idname));

        }



        $nameR=$request->request->get("nameR");
        /* var_dump($idname);
         return new Response($idname[1].'=======>'.$idname[1].'////'.$name.'////'.$nbr['num']);*/


        $post=$this->getDoctrine()->getRepository("AppBundle:profile");
        $res=$post->findAll();

        $access=$request->getSession()->get('access');

        return $this->render(
            'role/afficher_profile_role.html.twig',
            array('input'=>$name,"nbr"=>$nbr['num'],"profile"=>$profile,"res"=>$res,
                "name_role"=>$nameR,'message'=>'Affecter ce Role pour ce Profile','access'=>$access,));


    }//input -->profile




    /**
     * @Route("/administration/role/affecterroleprofil",name="affecterroleprofile")//afecter affecterroleprofile
     */
    public function affecterroleprofileAction(Request $request)
    {$nameR=$request->request->get("nameR");
        $name=$request->request->get("name");


        $session= $request->getSession();
        $session->set("nameR",$nameR);
        $session->set("name",$name);

        $em = $this->getDoctrine()->getManager();
        $role = $em->getRepository('AppBundle:role')->findOneByName($nameR);
        $idnameR= $role->getIdRole();//role mte3na

        $em1 = $this->getDoctrine()->getManager();
        $profile = $em1->getRepository('AppBundle:profile')->findOneByName($name);
        $idname= $profile->getIdProfile();//profil mte3na


        $em10 = $this->getDoctrine()->getManager();
        $table10 = $em10->getRepository('AppBundle:profile_role')->findAll();

        if (!$table10) {
            $roleprofile= new profile_role();

            $roleprofile->setIdrole($role);
            $roleprofile->setIdprofile($profile);



            // 4) save the $profilerole!
            $em = $this->getDoctrine()->getManager();

            $em->persist($roleprofile);

            $em->flush();

            #aprtie historique
            $userh = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='administration';
            $champ='Role au profile';
            $encien=$nameR;
            $type='Affectation';
            $nouveau=$name;
            $historique= new historique();
            $historique->setUtilisateur($userh);
            $historique->setDatehistorique($datehist);
            $historique->setModule($module);
            $historique->setChamp($champ);
            $historique->setEncienvaleur($encien);
            $historique->setNouveauvaleur($nouveau);
            $historique->setType($type);
            $em->persist($historique);
            $em->flush();



            /*     $e = $this->getDoctrine()->getManager();
                 $use = $e->getRepository('AppBundle:profile_role')->findOneByIdrole($idnameR);

                 array("use"=>$use)*/
            $this->addFlash(
                'msg',
                'Your changes were saved!
                [Role  :'.$nameR.']' .'  affecter pour ce [Profile :'.$name.']'


            );

            return $this->redirectToRoute('GereProfile');





        }

        if($table10){


            /*//verifier idusername mawjoud fi profile_role */
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT COUNT( (u.idrole)) AS num FROM AppBundle:profile_role u WHERE u.idrole= :nam');
            $query->setParameters(array(
                'nam' => $idnameR

            ));
            $nbr = $query->getSingleResult();


            /*//verifier $idname mawjoud fi profile_utilisateur */
            $em1 = $this->getDoctrine()->getManager();
            $query1 = $em1->createQuery('SELECT COUNT(  (u.idprofile)) AS num1 FROM AppBundle:profile_utilisateur u WHERE u.idprofile= :usernam');
            $query1->setParameters(array(
                'usernam' => $idname

            ));
            $nbr1 = $query1->getSingleResult();






            if (($nbr1['num1'] !=0 and $nbr['num']!=0))


            {

                //bech inchoufhoum mawjoudin wala le izouz fi nafs ligne
                $e = $this->getDoctrine()->getManager();
                $ro = $e->getRepository('AppBundle:profile_role')->findBy(array('idrole'=>$idnameR,'idprofile'=>$idname));


                $e1 = $this->getDoctrine()->getManager();
                $prof = $e->getRepository('AppBundle:profile_role')->findBy(array('idrole'=>$idnameR,'idprofile'=>$idname));

                //tableau mta3 getIdprofilerole ili tebi3 role

                $x=0;
                $y=0;
                foreach ($ro as $p) {
                    $x++;
                    // $advert est une instance de Advert
                    $tab_role[$x]= $p->getIdprofilerole();
                }


                //tableau mta3 getIdprofilerole ili tebi3 profile

                foreach ($prof as $p) {
                    $y++;
                    // $advert est une instance de Advert
                    $tab_pro[$y]= $p->getIdprofilerole();
                }

                $v=false;$i1=1;
                while($v==false and $i1<=$x )
                {

                    if($tab_role[$i1]==$tab_pro[$i1])
                    {
                        $v=true;
                    }


                    $i1++;
                }



                if ($v==false) {

                    $roleprofile= new profile_role();

                    $roleprofile->setIdrole($role);
                    $roleprofile->setIdprofile($profile);



                    // 4) save the $profilerole!
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($roleprofile);
                    $em->flush();

                    #aprtie historique
                    $userh = $this->get('security.token_storage')->getToken()->getUser();
                    $datehist= date('d/m/Y');
                    $module='administration';
                    $champ='Role au profile';
                    $encien=$nameR;
                    $type='Affectation';
                    $nouveau=$name;
                    $historique= new historique();
                    $historique->setUtilisateur($userh);
                    $historique->setDatehistorique($datehist);
                    $historique->setModule($module);
                    $historique->setChamp($champ);
                    $historique->setEncienvaleur($encien);
                    $historique->setNouveauvaleur($nouveau);
                    $historique->setType($type);
                    $em->persist($historique);
                    $em->flush();




                    $this->addFlash(
                        'msg',
                        'Your changes were saved [Role  :'.$nameR .']'.' [affecter pour Profile  '.$name.']'




                    );
                    return $this->redirectToRoute('GereProfile');
                }


                if ($v==true)
                {   $this->addFlash(
                    'msg',
                    'Your changes were saved! [Ce Profile  :'.$name.'] a affeccter deja ce [Role  : '.$nameR.']'

                );

                    return $this->redirectToRoute('GereProfile');


                }




            }


            else{


                $roleprofile= new profile_role();

                $roleprofile->setIdrole($role);
                $roleprofile->setIdprofile($profile);



                // 4) save the $profilerole!
                $em = $this->getDoctrine()->getManager();
                $em->persist($roleprofile);
                $em->flush();

                #aprtie historique
                $userh = $this->get('security.token_storage')->getToken()->getUser();
                $datehist= date('d/m/Y');
                $module='administration';
                $champ='Role au profile';
                $encien=$nameR;
                $type='Affectation';
                $nouveau=$name;
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();


                $this->addFlash(
                    'msg',
                    'Your changes were saved![Role  :'.$nameR .']  affecter pour ce [Profile :'.$name.']'
                );

                return $this->redirectToRoute('GereProfile');

            }
        }





    }




    /**
     * @Route("/administration/role/detacherroleprofil",name="detacherroleprofile")
     */
    public function detacherroleprofileAction(Request $request)
    {$nameR=$request->request->get("nameR");
        $name=$request->request->get("name");


        $session= $request->getSession();
        $session->set("nameR",$nameR);
        $session->set("name",$name);



        $em = $this->getDoctrine()->getManager();
        $role = $em->getRepository('AppBundle:role')->findOneByName($nameR);
        $idnameR= $role->getIdRole();//role mte3na

        $em1 = $this->getDoctrine()->getManager();
        $profile = $em1->getRepository('AppBundle:profile')->findOneByName($name);
        $idname= $profile->getIdProfile();//profil mte3na



        $em10 = $this->getDoctrine()->getManager();
        $table10 = $em10->getRepository('AppBundle:profile_role')->findAll();




        if (!$table10) {//vide
            $this->addFlash(
                'msg',
                'Table vide aucun role pour aucun Profile'
            );
            return $this->redirectToRoute('GereProfile');  }
        if($table10){

            /*//verifier $idnameR mawjoud fi profile_role */
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT COUNT( (u.idrole)) AS num FROM AppBundle:profile_role u WHERE u.idrole= :nam');
            $query->setParameters(array(
                'nam' => $idnameR

            ));
            $nbr = $query->getSingleResult();




            /*//verifier $idname mawjoud fi profile_role */
            $em1 = $this->getDoctrine()->getManager();
            $query1 = $em1->createQuery('SELECT COUNT(  (u.idprofile)) AS num1 FROM AppBundle:profile_role u WHERE u.idprofile= :usernam');
            $query1->setParameters(array(
                'usernam' => $idname

            ));
            $nbr1 = $query1->getSingleResult();






            if (($nbr1['num1'] !=0 and $nbr['num']!=0))

            {

                //bech inchoufhoum mawjoudin wala le izouz fi nafs ligne
                $e = $this->getDoctrine()->getManager();
                $ro = $e->getRepository('AppBundle:profile_role')->findBy(array('idprofile'=>$idname,'idrole'=>$idnameR));


                $e1 = $this->getDoctrine()->getManager();
                $prof = $e1->getRepository('AppBundle:profile_role')->findBy(array('idprofile'=>$idname,'idrole'=>$idnameR));

//tableau mta3 Idprofilerole ili tebi3 role

                $x=0;
                $y=0;
                foreach ($ro as $p) {
                    $x++;
                    // $advert est une instance de Advert
                    $tab_ro[$x]= $p->getIdprofilerole();
                }


                //tableau mta3 Idprofileutilisateur ili tebi3 profile

                foreach ($prof as $p) {
                    $y++;
                    // $advert est une instance de Advert
                    $tab_pro[$y]= $p->getIdprofilerole();
                }

                $v=false;$i1=1;
                while($v==false and $i1<=$x )
                {

                    if($tab_ro[$i1]==$tab_pro[$i1])
                    {
                        $v=true;
                    }


                    $i1++;
                }



                if ($v!=true) {



                    $this->addFlash(
                        'msg',
                        'Your changes were saved aucun Role pour ce [Profile  :'.$name.']'

                    );
                    return $this->redirectToRoute('GereProfile');
                }


                if ($v==true)
                { $em = $this->getDoctrine()->getManager();
                    $profile_role = $em->getRepository('AppBundle:profile_role')->findOneBy(
                        array('idrole' => $idnameR, 'idprofile' => $idname));
                    $em->remove($profile_role);
                    $em->flush();

                    #aprtie historique
                    $userh = $this->get('security.token_storage')->getToken()->getUser();
                    $datehist= date('d/m/Y');
                    $module='administration';
                    $champ='Role au profile';
                    $encien=$nameR;
                    $type='Detachement';
                    $nouveau=$name;
                    $historique= new historique();
                    $historique->setUtilisateur($userh);
                    $historique->setDatehistorique($datehist);
                    $historique->setModule($module);
                    $historique->setChamp($champ);
                    $historique->setEncienvaleur($encien);
                    $historique->setNouveauvaleur($nouveau);
                    $historique->setType($type);
                    $em->persist($historique);
                    $em->flush();


                    $this->addFlash(
                        'msg',
                        'Your changes were saved! ce [role    :'.$nameR. '] est  detacher pour ce [Profile  :'.$name.']'

                    );
                    return $this->redirectToRoute('GereProfile');



                }




            }


            else{




                $this->addFlash(
                    'msg',
                    'Your changes were saved! aucun Role et Profile trouver'
                );

                return $this->redirectToRoute('GereProfile');

            }
        }



    }







    /**
     * @Route("/administration/role/ajouterroleprofil",name="ajouterroleprofile")
     */
    public function ajouterroleprofileAction(Request $request)
    {



        $em=$this->getDoctrine()->getRepository("AppBundle:role");
        $role=$em->findAll();

        $em=$this->getDoctrine()->getRepository("AppBundle:profile");
        $profile=$em->findAll();

        $access=$request->getSession()->get('access');


        return $this->render("role/confirmationaffectationroleprofil.html.twig",array('nbr'=>0,'profile' => $profile,'role'=>$role,'access'=>$access,));
    }





    /**
     * @Route("/administration/role/ajouterroleprofil/confirmationaffectationroleprofil/sauvgarder_role_pro",name="sauvgarder_role_pro")//ajouter pur liste profile
     */
    public function sauvgarder_role_proAction(Request $request)
    {

        $nameR=$request->request->get("nameR");
        $session= $request->getSession();
        $session->set("name",$nameR);

        $nameR=$request->request->get("nameR");
        $nbprofile=$request->request->get("nbprofile");


        for ($i=1;$i<=$nbprofile;$i++)
        {
            $name[$i]=$request->request->get("profile".$i);
            /*tableau ili fih id mta3 profile*/
            $em = $this->getDoctrine()->getManager();
            $profile[$i] = $em->getRepository('AppBundle:profile')->findOneByName($name[$i]);
            $idname[$i]= $profile[$i]->getIdProfile();
        }


        //recuperation de role
        $em1 = $this->getDoctrine()->getManager();
        $role = $em1->getRepository('AppBundle:role')->findOneByName($nameR);
        $idnameR= $role->getIdRole();


        //debut d'affecter profile par profile
        for ($j=1;$j<=$nbprofile;$j++)
        {
            $em10 = $this->getDoctrine()->getManager();
            $table10 = $em10->getRepository('AppBundle:profile_role')->findAll();

            if (!$table10) {
                $roleprofile[$j]= new profile_role();

                $roleprofile[$j]->setIdprofile($profile[$j]);
                $roleprofile[$j]->setIdrole($role);



                // 4) save the $roleprofile!
                $em = $this->getDoctrine()->getManager();
                $em->persist($roleprofile[$j]);
                $em->flush();

                #aprtie historique
                $userh = $this->get('security.token_storage')->getToken()->getUser();
                $datehist= date('d/m/Y');
                $module='administration';
                $champ='Role au profile';
                $encien=$nameR;
                $type='Affectation';
                $nouveau=$name[$j];
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();



                /*     $e = $this->getDoctrine()->getManager();
                     $use = $e->getRepository('AppBundle:profile_role')->findOneByIdprofile($idnameR);

                     array("use"=>$use)*/
                $this->addFlash(
                    'msg',
                    'Your changes were saved![Role  :'.$nameR .']affecter pour [profile   :'.$name[$j].']'


                );

                /*return $this->redirectToRoute('GereProfile');*/


            }

            if($table10){


                /*//verifier idusername mawjoud fi profile_role */
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery('SELECT COUNT( (u.idprofile)) AS num FROM AppBundle:profile_role u WHERE u.idprofile= :nam');
                $query->setParameters(array(
                    'nam' => $idname[$j]

                ));
                $nbr = $query->getSingleResult();


                /*//verifier $idnameR mawjoud fi profile_utilisateur */
                $em1 = $this->getDoctrine()->getManager();
                $query1 = $em1->createQuery('SELECT COUNT(  (u.idrole)) AS num1 FROM AppBundle:profile_role u WHERE u.idrole= :usernam');
                $query1->setParameters(array(
                    'usernam' => $idnameR

                ));
                $nbr1 = $query1->getSingleResult();



                if (($nbr1['num1'] !=0 and $nbr['num']!=0))

                {

                    /*  bech inchoufhoum mawjoudin wala le izouz fi nafs ligne*/
                    $e = $this->getDoctrine()->getManager();
                    $prof = $e->getRepository('AppBundle:profile_role')->findBy(array('idrole'=>$idnameR,'idprofile'=>$idname[$j]));


                    $e1 = $this->getDoctrine()->getManager();
                    $ro = $e1->getRepository('AppBundle:profile_role')->findBy(array('idrole'=>$idnameR,'idprofile'=>$idname[$j]));

//tableau mta3 Idprofilerole ili tebi3 role

                    $x=0;
                    $y=0;
                    foreach ($ro as $p) {
                        $x++;
                        // $advert est une instance de Advert
                        $tab_role[$x]= $p->getIdprofilerole();
                    }


                    //tableau mta3 getIdprofilerole ili tebi3 profile

                    foreach ($prof as $p) {
                        $y++;
                        // $advert est une instance de Advert
                        $tab_pro[$y]= $p->getIdprofilerole();
                    }

                    $v=false;$i1=1;
                    while($v==false and $i1<=$x )
                    {

                        if($tab_role[$i1]==$tab_pro[$i1])
                        {
                            $v=true;
                        }


                        $i1++;
                    }



                    if ($v==false) {

                        $roleprofile = new profile_role();

                        $roleprofile->setIdprofile($profile[$j]);
                        $roleprofile->setIdrole($role);


                        // 4) save the $profilrole!
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($roleprofile);
                        $em->flush();

                        #aprtie historique
                        $userh = $this->get('security.token_storage')->getToken()->getUser();
                        $datehist= date('d/m/Y');
                        $module='administration';
                        $champ='Role au profile';
                        $encien=$nameR;
                        $type='Affectation';
                        $nouveau=$name[$j];
                        $historique= new historique();
                        $historique->setUtilisateur($userh);
                        $historique->setDatehistorique($datehist);
                        $historique->setModule($module);
                        $historique->setChamp($champ);
                        $historique->setEncienvaleur($encien);
                        $historique->setNouveauvaleur($nouveau);
                        $historique->setType($type);
                        $em->persist($historique);
                        $em->flush();


                        $this->addFlash(
                            'msg',
                            'Your changes were saved  ![Role '.$nameR .']affecter pour [Profile  :'.$name[$j].']'



                        );
                        /* return $this->redirectToRoute('GereProfile');*/
                    }


                    if ($v==true)
                    {   $this->addFlash(
                        'msg',
                        'Your changes were saved! deja Ce [Profile '.$name[$j].'] a affeccter deja ce [Role '.$nameR.']'

                    );

                        /* return $this->redirectToRoute('GereProfile');*/


                    }




                }


                else{


                    $roleprofile= new profile_role();

                    $roleprofile->setIdprofile($profile[$j]);
                    $roleprofile->setIdrole($role);


                    // 4) save the $profilrole!
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($roleprofile);
                    $em->flush();

                    #aprtie historique
                    $userh = $this->get('security.token_storage')->getToken()->getUser();
                    $datehist= date('d/m/Y');
                    $module='administration';
                    $champ='Role au profile';
                    $encien=$nameR;
                    $type='Affectation';
                    $nouveau=$name[$j];
                    $historique= new historique();
                    $historique->setUtilisateur($userh);
                    $historique->setDatehistorique($datehist);
                    $historique->setModule($module);
                    $historique->setChamp($champ);
                    $historique->setEncienvaleur($encien);
                    $historique->setNouveauvaleur($nouveau);
                    $historique->setType($type);
                    $em->persist($historique);
                    $em->flush();

                    $this->addFlash(
                        'msg',
                        'Your changes were saved![Role   :'.$nameR .']affecter pour Profile :'.$name[$j].']'
                    );

                    /*return $this->redirectToRoute('GereProfile');*/

                }
            }


        }return $this->redirectToRoute('GereProfile');
    }



    /**
     * @Route("/administration/role/supprimerole",name="supprimerole")
     */
    public function supprimeroleAction(Request $request)
    {
        $name=$request->request->get("name");

        $em = $this->getDoctrine()->getManager();
        $role = $em->getRepository('AppBundle:role')->findOneByname($name);

        $em->remove($role);
        $em->flush();

        #partie historique
        $userh = $this->get('security.token_storage')->getToken()->getUser();
        $datehist= date('d/m/Y');
        $module='administration';
        $type='Suppression';

        $champ='Role '.$name;
        $encien= $name ;
        $nouveau='-';
        $historique= new historique();
        $historique->setUtilisateur($userh);
        $historique->setDatehistorique($datehist);
        $historique->setModule($module);
        $historique->setChamp($champ);
        $historique->setEncienvaleur($encien);
        $historique->setNouveauvaleur($nouveau);
        $historique->setType($type);
        $em->persist($historique);
        $em->flush();
        #end historique

        $session = $request->getSession();
        $session->set("name",$name);


        $this->addFlash(
            'notice',
            'Ce role :'.$name.'est supprimer avec succeés '

        );

        $descriptionancien=$request->request->get("descriptionancien");

        return $this->redirectToRoute('afficherole');
    }



    /**
     * @Route("/administration/role/modifier_role",name="modifier_role")
     */
    public function modifier_roleAction(Request $request)
    {
        if ($request->request->get("name")!= null)
        {
            $name=$request->request->get("name");
            $description=$request->request->get("description");

            $em = $this->getDoctrine()->getManager();
            $role = $em->getRepository('AppBundle:role')->findOneByname($name);

            #partie historique
            $userh = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='administration';
            $type='Modification';
            if ($role->getDescription() != $description)
            {

                $champ='Description de role '.$name;
                $encien= $role->getDescription() ;
                $nouveau=$description;
                $historique= new historique();
                $historique->setUtilisateur($userh);
                $historique->setDatehistorique($datehist);
                $historique->setModule($module);
                $historique->setChamp($champ);
                $historique->setEncienvaleur($encien);
                $historique->setNouveauvaleur($nouveau);
                $historique->setType($type);
                $em->persist($historique);
                $em->flush();
            }

            $role->setName($name);
            $role->setDescription($description);

            $em->flush();
        }

        $session = $request->getSession();
        $session->set("name",$name);

        $this->addFlash(
            'notice',
            'Ce role :'.$name.'est modifier avec succeés '

        );

        $descriptionancien=$request->request->get("descriptionancien");


        return $this->redirectToRoute('afficherole');

    }



    /**
     * @Route("/administration/role/modifierrole",name="modifierrole")
     */
    public function modifierroleAction(Request $request)
    {
        $name=$request->request->get("name");
        $em = $this->getDoctrine()->getManager();
        $role = $em->getRepository('AppBundle:role')->findOneByname($name);

        $access=$request->getSession()->get('access');

        return $this->render("role/modifierrole.html.twig",array("res"=>$role,'access'=>$access,));
    }



    /**
     * @Route("/administration/role/afficherole",name="afficherole")
     */
    public function afficheroleAction(Request $request)
    {
        $post=$this->getDoctrine()->getRepository("AppBundle:role");
        $res=$post->findAll();

        $access=$request->getSession()->get('access');

        return $this->render("role/afficher_all_role.html.twig",
            array("res"=>$res,'access'=>$access,));
    }



    /**
     * @Route("/administration/role/ajoutrole",name="ajoutrole")
     */
    public function ajoutroleAction(Request $request)
    {
        $role= new role();
        $form = $this->createForm(RoleType::class, $role);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {



            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($role);
            $em->flush();

            $user = $this->get('security.token_storage')->getToken()->getUser();
            $datehist= date('d/m/Y');
            $module='administration';
            $champ='Role';
            $encien='-';
            $nouveau=$role->getName();
            $historique= new historique();
            $historique->setUtilisateur($user);
            $historique->setDatehistorique($datehist);
            $historique->setModule($module);
            $historique->setChamp($champ);
            $historique->setEncienvaleur($encien);
            $historique->setNouveauvaleur($nouveau);
            $historique->setType("Ajout");
            $em->persist($historique);
            $em->flush();

            $name=$request->request->get("name");

            $session = $request->getSession();
            $session->set("name",$name);
            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            $this->addFlash(
                'notice',
                'Ce role :'.$name.'est ajouter avec succeés '

            );



            return $this->redirectToRoute('afficherole');

        }


        $access=$request->getSession()->get('access');


        return $this->render(
            'role/ajoutrole.html.twig',
            array('form' => $form->createView(),'access'=>$access)
        );
    }

}