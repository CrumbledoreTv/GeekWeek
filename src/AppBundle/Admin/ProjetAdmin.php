<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Show\ShowMapper;
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
                    ->add('responsable', 'sonata_type_model', array(
                          'class' => 'AppBundle\Entity\Salarie',
                          'multiple' => false,
                          'label' => 'Responsable projet',
                          'property' => 'nom_salarie',))
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
                  ->addIdentifier('libelle_projet', null, array('label' => 'Projets'))
                  ->add('client.societe_client', null, array('label' => 'Clients'))
                  ->add('date_debut_projet', 'date', array('label' => 'Date debut'))
                  ->add('date_fin_prevue_projet', 'date', array('label' => 'Date fin prevue'))
                  ->add('responsable.nom_salarie', null, array('label' => 'Responsables'))
                  ->add('description_projet', 'text', array('label' => 'Descriptions'))
                  ;
    }

    public function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->tab('General')
                ->with('Informations :', array(
                    'class'       => 'col-md-8',
                    'box_class'   => 'box box-solid box-danger',
                ))
                    ->add('libelle_projet')
                    ->add('responsable.nom_salarie', null, array('label' => 'Responsable'))
                    ->add('date_fin_prevue_projet', 'date')
                ->end()
            ->end()
        ;
    }

    public function toString($object)
    {
      return $object instanceof Projet
        ? $object->getLibelleProjet()
        : 'Projets';
    }
}
