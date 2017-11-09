<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use AppBundle\Entity\Projet;
use AppBundle\Entity\Tache;
use AppBundle\Entity\Salarie;

class ProjetAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                  ->with('Informations :', array('class' => 'col-md-8'))
                    ->add('libelle_projet', 'text')
                    ->add('client', 'sonata_type_model', array(
                          'class' => 'AppBundle\Entity\Client',
                          'multiple' => false,
                          'property' => 'societe_client',))
                    ->add('salaries', 'sonata_type_model', array(
                          'class' => 'AppBundle\Entity\Salarie',
                          'multiple' => true,
                          'label' => 'Salaries',
                          'property' => 'nom_salarie',))
                    ->add('description_projet', 'textarea')
                    ->add('commentaire_projet', 'textarea')
                  ->end()

                  ->with('Dates :', array('class' => 'col-md-4'))
                    ->add('date_creation_projet', 'date')
                    ->add('date_debut_projet', 'date')
                    ->add('date_fin_prevue_projet', 'date')
                  ->end()
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
                  ->add('client.societe_client')
                  ;
    }

    public function toString($object)
    {
      return $object instanceof Projet
        ? $object->getLibelleProjet()
        : 'Projets';
    }
}
