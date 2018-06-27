<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 31/03/2017
 * Time: 14:42
 */

namespace AppBundle\Form;

use AppBundle\Entity\vehicule;
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
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

    class Vehiculetype extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder



            ->add('numvehicule', TextType::class,array('label' => 'Matricule Vehicule *'))
            ->add('UT', TextType::class,array('label' => 'UT  *'))
            ->add('marque', TextType::class,array('label' => 'Marque  *'))
            ->add('genre', TextType::class,array('label' => 'Genre *'))
            ->add('puissance', TextType::class,array('label' => 'Puissance *'))
            ->add('carburant', TextType::class,array('label' => 'Carburant  *'))
        ->add('dateEntre', TextType::class,array('label' => 'Date Entre  *'))
            ->add('disponibilite', ChoiceType::class,array('label' => 'Disponibilite *','choices'=>array(''=>0,'Non Disponible'=>0,'Disponible'=>1)))
        ->add('etat', ChoiceType::class,array('label' => 'Etat *','choices'=>array(''=>'fonctionnel','Fonctionnel'=>'fonctionnel','En Panne'=>'en panne')))
        ->add('indexkm', IntegerType::class,array('label' => 'Index km *'))




        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => vehicule::class,
        ));
    }


}