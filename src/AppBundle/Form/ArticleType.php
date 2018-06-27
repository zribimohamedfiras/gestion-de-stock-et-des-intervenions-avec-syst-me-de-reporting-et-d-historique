<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 14/03/2017
 * Time: 12:38
 */

namespace AppBundle\Form;

use AppBundle\Entity\Article;
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

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('designation', TextType::class,array('label' => 'Designation *'))
            ->add('marque', TextType::class,array('label' => 'Marque *'))
            ->add('qteInitial', IntegerType::class,array('label' => 'Quantité initial *'))
            ->add('qteActuel', HiddenType::class,array('label' => 'Quantité Actuel *'))
            ->add('emplacement', TextType::class,array('label' => 'Emplacement *'))
            ->add('unite', TextType::class,array('label' => 'Unité *'))


        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Article::class,
        ));
    }

}