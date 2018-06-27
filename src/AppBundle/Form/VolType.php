<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 31/03/2017
 * Time: 14:42
 */

namespace AppBundle\Form;

use AppBundle\Entity\vol;
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

    class VolType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('DateDepart', TextType::class,array('label' => 'Date Depart *'))
            ->add('LieuDepart', ChoiceType::class,array('label' => 'Lieu Depart *','choices'=>array(''=>'تونس','تونس'=>'تونس','زغوان'=>'زغوان','توزر'=>'توزر','تطاوين'=>'تطاوين','سوسة'=>'سوسة','سليانة'=>'سليانة','سيدي بوزيد'=>'سيدي بوزيد','صفاقس'=>'صفاقس','نابل'=>'نابل','المنستير'=>'المنستير','مدنين'=>'مدنين','منوبة'=>'منوبة','المهدية'=>'المهدية','الكاف'=>'الكاف','قبلي'=>'قبلي','القصرين'=>'القصرين','القيروان'=>'القيروان','جندوبة'=>'جندوبة','قفصة'=>'قفصة','قابس'=>'قابس','بنزرت'=>'بنزرت','بن عروس'=>'بن عروس','باجة'=>'باجة','أريانة'=>'أريانة' )))
            ->add('HeureDepart', TextType::class,array('label' => 'Heure Depart *'))
            ->add('DateArrive', TextType::class,array('label' => 'Date Arrive *'))
            ->add('LieuArrive', ChoiceType::class,array('label' => 'Lieu Arrivé *','choices'=>array(''=>'تونس','تونس'=>'تونس','زغوان'=>'زغوان','توزر'=>'توزر','تطاوين'=>'تطاوين','سوسة'=>'سوسة','سليانة'=>'سليانة','سيدي بوزيد'=>'سيدي بوزيد','صفاقس'=>'صفاقس','نابل'=>'نابل','المنستير'=>'المنستير','مدنين'=>'مدنين','منوبة'=>'منوبة','المهدية'=>'المهدية','الكاف'=>'الكاف','قبلي'=>'قبلي','القصرين'=>'القصرين','القيروان'=>'القيروان','جندوبة'=>'جندوبة','قفصة'=>'قفصة','قابس'=>'قابس','بنزرت'=>'بنزرت','بن عروس'=>'بن عروس','باجة'=>'باجة','أريانة'=>'أريانة' )))
            ->add('HeureArrive', TextType::class,array('label' => 'Heure Arrive *'))



        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => vol::class,
        ));
    }


}