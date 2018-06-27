<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 03/02/2017
 * Time: 14:58
 */

namespace AppBundle\Form;

use AppBundle\Entity\utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
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


class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('nom', TextType::class,array())
            ->add('nom_ar', TextType::class)

            ->add('prenom', TextType::class)
            ->add('prenom_ar', TextType::class)
            ->add('ncin', IntegerType::class)
            ->add('matricule', IntegerType::class)
            ->add('societe', TextType::class)
            ->add('categorie_ar', TextType::class)
            ->add('fonction_ar', TextType::class)
            ->add('fonction_fr', TextType::class)
            ->add('direction', TextType::class)
            ->add('unite', TextType::class)

            ->add('is_astreint', ChoiceType::class,array('choices'=>array(''=>0,'non astreint'=>0,'astreint'=>1)))
            ->add('role', ChoiceType::class,array('choices' => array('' => "ROLE_USER",'utilisateur' => "ROLE_USER",'admin' => "ROLE_ADIM")))
            ->add('termsAccepted', CheckboxType::class, array(
                'mapped' => false,
                'constraints' => new IsTrue(),
            ))


        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => utilisateur::class,
        ));
    }

}