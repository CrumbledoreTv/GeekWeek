<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use AppBundle\Entity\Tache;

class TacheAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                ->tab('Informations')
                    ->with('Informations :', array('class' => 'col-md-12'))
                      ->add('libelle_tache', 'text')
                      ->add('projet', 'sonata_type_model', array(
                            'class' => 'AppBundle\Entity\Projet',
                            'multiple' => false,
                            'property' => 'libelle_projet',))
                      ->add('description_tache', 'textarea')
                      ->add('status_tache', 'text')
                    ->end()
                ->end()

                ->tab('Détails')
                    ->with('Détails :', array('class' => 'col-md-12'))
                      ->add('date_debut_tache', 'date')
                      ->add('date_fin_tache', 'date')
                      ->add('date_creation_tache', 'date')
                      ->add('commentaire_tache', 'textarea')
                    ->end()
                ->end()
                  ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        // $datagridMapper->add('libelle_tache');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                  ->addIdentifier('libelle_tache', 'text', array('label' => 'Taches'))
                  ->add('projet.libelle_projet', null, array('label' => 'Projets'))
                  ->add('description_tache', 'text', array('label' => 'Descriptions'))
                  ->add('status_tache', 'text', array('label' => 'Status'))
                  ->add('commentaire_tache', 'text', array('label' => 'Commentaires'))
                  ;
    }

    public function toString($object)
    {
      return $object instanceof Tache
        ? $object->getLibelleTache()
        : 'Taches';
    }
}
