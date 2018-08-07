<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Sonata\AdminBundle\Form\Type\ModelType;

//Other entities
use Inshore\CareQualityBundle\Entity\ServiceType;



class HomeAdmin extends AbstractAdmin
{


    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', TextType::class)
            ->add('address', TextType::class)
            ->add('ServiceType', ModelType::class, [
                'class' => ServiceType::class,
                'property' => 'name',
            ])
            ->add('phone', TextType::class)
            ->add('phoneIntern', TextType::class)
        ;
    }
    
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('ServiceType.name')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('address')
            ->add('ServiceType.name')
            ->add('phone')
            ->add('phoneIntern')
        ;
    }
}