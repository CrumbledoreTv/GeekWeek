<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use AppBundle\Entity\Salarie;

class SalarieAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
        ->tab('Informations')
            ->with('Informations :', array('class' => 'col-md-12'))
              ->add('civilite_salarie', 'text')
              ->add('nom_salarie', 'text')
              ->add('prenom_salarie', 'text')
              ->add('date_naissance_salarie', 'date')
              ->add('lieu_naissance_salarie', 'text')
              ->add('numero_securite_sociale_salarie', 'text')
              ->add('etat_civile_salarie', 'text')
            ->end()
        ->end()

        ->tab('Adresse / Contact')
            ->with('Adresse :', array('class' => 'col-md-6'))
              ->add('rue_salarie', 'text')
              ->add('ville_salarie', 'text')
              ->add('cp_salarie', 'text')
            ->end()

            ->with('Contacts :', array('class' => 'col-md-6'))
              ->add('telephone_salarie', 'text')
              ->add('mobile_salarie', 'text')
              ->add('mail_salarie', 'text')
            ->end()
        ->end()

        ->tab('Détails')
            ->with('Détails :', array('class' => 'col-md-12'))
              ->add('date_creation_salarie', 'date')
              ->add('commentaire_salarie', 'textarea')
            ->end()
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
                  ->addIdentifier('nom_salarie')
                  ->add('date_naissance_salarie', 'date')
                  ->add('date_debut_projet', 'date')
                  ->add('date_fin_prevue_projet', 'date')
                  ->add('date_creation_projet', 'date')
                  ->add('client.societe_client')
                  ;
    }

    public function toString($object)
    {
      return $object instanceof Salarie
        ? $object->getNomSalarie()
        : 'Salaries';
    }
}
