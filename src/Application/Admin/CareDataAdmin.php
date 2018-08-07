<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Sonata\AdminBundle\Form\Type\ModelType;

//Other entities
use Inshore\CareQualityBundle\Entity\Criteria;
use Inshore\CareQualityBundle\Entity\ServiceUser;


class CareDataAdmin extends AbstractAdmin
{


    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('startDate', DateType::class, [
                'years' => range(1999,date("Y")),
                'format' => 'dd MMMM yyyy',
                'widget' => 'choice',
            ])
            ->add('Criteria', ModelType::class, [
                'class' => Criteria::class,
                'property' => 'title',
            ])
            ->add('value', NumberType::class)
            ->add('unit', TextType::class, ['required' => false])
            ->add('ServiceUser', ModelType::class, [
                'class' => ServiceUser::class,
                'property' => 'fullName',
            ])
        ;
    }
    
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('Criteria.title')
            ->add('ServiceUser.firstName')
            ->add('ServiceUser.lastName')
            ->add('ServiceUser.Home.name')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('Criteria.title')
            ->add('value')
            ->add('unit')
            ->add('startDate')
            ->add('ServiceUser.firstName')
            ->add('ServiceUser.lastName')
            ->add('ServiceUser.Home.name')
        ;
    }
}