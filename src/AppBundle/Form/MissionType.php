<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 08/04/2017
 * Time: 00:37
 */

namespace AppBundle\Form;

use AppBundle\Entity\Article;
use AppBundle\Entity\mission;
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


class MissionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nummission', IntegerType::class,array('label' => 'Numero Mission *'))
            ->add('cause', TextType::class,array('label' => 'Cause Mission(en Arabe) *'))
            ->add('lieudepart', ChoiceType::class,array('label' => 'Lieu Depart *','choices'=>array(''=>'تونس','تونس'=>'تونس','زغوان'=>'زغوان','توزر'=>'توزر','تطاوين'=>'تطاوين','سوسة'=>'سوسة','سليانة'=>'سليانة','سيدي بوزيد'=>'سيدي بوزيد','صفاقس'=>'صفاقس','نابل'=>'نابل','المنستير'=>'المنستير','مدنين'=>'مدنين','منوبة'=>'منوبة','المهدية'=>'المهدية','الكاف'=>'الكاف','قبلي'=>'قبلي','القصرين'=>'القصرين','القيروان'=>'القيروان','جندوبة'=>'جندوبة','قفصة'=>'قفصة','قابس'=>'قابس','بنزرت'=>'بنزرت','بن عروس'=>'بن عروس','باجة'=>'باجة','أريانة'=>'أريانة' )))
            ->add('lieuarriver', ChoiceType::class,array('label' => 'Lieu Arriver *','choices'=>array(''=>'تونس','تونس'=>'تونس','زغوان'=>'زغوان','توزر'=>'توزر','تطاوين'=>'تطاوين','سوسة'=>'سوسة','سليانة'=>'سليانة','سيدي بوزيد'=>'سيدي بوزيد','صفاقس'=>'صفاقس','نابل'=>'نابل','المنستير'=>'المنستير','مدنين'=>'مدنين','منوبة'=>'منوبة','المهدية'=>'المهدية','الكاف'=>'الكاف','قبلي'=>'قبلي','القصرين'=>'القصرين','القيروان'=>'القيروان','جندوبة'=>'جندوبة','قفصة'=>'قفصة','قابس'=>'قابس','بنزرت'=>'بنزرت','بن عروس'=>'بن عروس','باجة'=>'باجة','أريانة'=>'أريانة' )))
            ->add('datedepart', TextType::class,array('label' => 'Date Depart *'))
            ->add('datearriver', TextType::class,array('label' => 'Date Arriver *'))
            ->add('heuredepart',TextType::class,array('label' => 'Heure Depart *'))
            ->add('heurearriver',TextType::class,array('label' => 'Heure Arriver *'))
            ->add('charge',TextType::class,array('label' => 'Charge *'))



        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => mission::class,
        ));
    }

}