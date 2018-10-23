<?php
namespace AppBundle\Form;

use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\Parents;
use AppBundle\Entity\Children;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ParentsForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('surname');
        $builder->add('childrens', EntityType::class, array(
        'class' => Children::class,
        'multiple' => true,
        'choice_label' => function ($childrens) {
            return $childrens->getName();
        },
        'choice_attr' => function ($childrens, $key, $value) {
            return ['class' => 'childrens_'.strtolower($childrens->getName())];
        },
        ));
    }
    public function getName()
    {
        return 'dane';
    }
}
