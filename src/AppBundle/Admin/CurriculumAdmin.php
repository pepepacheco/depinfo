<?php

namespace AppBundle\Admin;

use AppBundle\Entity\Curriculum;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CurriculumAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('currentcourse')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('currentcourse')
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                ),
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('currentcourse')
            ->add('tituloFp', 'sonata_type_collection', array(
                'by_reference' => false,
                'required' => false), array(
                'edit' => 'inline',
                'inline' => 'table'
            ));
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('currentcourse')
            ->add('titulo_fp')
        ;
    }

    public function toString($object)
    {
        return $object instanceof Curriculum
            ? $object->getId()
            : 'Curriculum'; // shown in the breadcrumb on the create view
    }


}
