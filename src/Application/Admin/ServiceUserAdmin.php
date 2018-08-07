<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Sonata\AdminBundle\Form\Type\ModelType;

//Other entities
use Inshore\CareQualityBundle\Entity\Home;
use Inshore\CareQualityBundle\Entity\Disability;



class ServiceUserAdmin extends AbstractAdmin
{


    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Personnal Informations', ['class' => 'col-md-9'])
                ->add('firstName', TextType::class)
                ->add('lastName', TextType::class)
                ->add('dateOfBirth', BirthdayType::class, [
                    'format' => 'dd MMMM yyyy',
                    'widget' => 'choice',
                ])
                ->add('gender', 'choice', [
                    'choices' => [
                        'Male' => 'Male',
                        'Female' => 'Female',
                        'Other' => 'Other',
                    ],
                ])
            ->end()

            ->with('Inshore\'s related Informations', ['class' => 'col-md-3'])
                ->add('Home', ModelType::class, [
                    'class' => Home::class,
                    'property' => 'name',
                ])
                ->add('Disability', ModelType::class, [
                    'class' => Disability::class,
                    'property' => 'name',
                ])
                ->add('currentClient', CheckboxType::class, [
                    'label'    => 'Is the service user currently a client?',
                    'data' => true,
                ])
            ->end()
        ;
    }
    
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('gender')
            ->add('firstName')
            ->add('lastName')
            ->add('dateOfBirth')
            ->add('currentClient')
            ->add('Home', null, [], EntityType::class, [
                'class'    => Home::class,
                'choice_label' => 'name',
            ])
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('gender')
            ->addIdentifier('firstName')
            ->addIdentifier('lastName')
            ->add('dateOfBirth')
            ->add('Disability.name')
            ->add('Home.name')
            ->add('currentClient')
            
        ;
    }
}