<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use AppBundle\Entity\Projet;

class ProjetAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                  ->add('libelle_projet', 'text')
                  ->add('description_projet', 'text')
                  ->add('date_debut_projet', 'date')
                  ->add('date_fin_prevue_projet', 'date')
                  ->add('date_creation_projet', 'date')
                  ->add('commentaire_projet', 'text')
                  ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        // $datagridMapper->add('libelle_projet');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                  ->addIdentifier('libelle_projet')
                  ->add('description_projet', 'text')
                  ->add('date_debut_projet', 'date')
                  ->add('date_fin_prevue_projet', 'date')
                  ->add('date_creation_projet', 'date')
                  ->add('commentaire_projet', 'text')
                  ;
    }

    public function toString($object)
    {
      return $object instanceof Projet
        ? $object->getLibelleProjet()
        : 'Projets';
    }
}
