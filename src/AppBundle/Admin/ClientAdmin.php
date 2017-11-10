<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use AppBundle\Entity\Client;

class ClientAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
              ->tab('Informations')
                  ->with('Informations :', array('class' => 'col-md-12'))
                    ->add('societe_client', 'text')
                    ->add('civilite_client', 'text')
                    ->add('nom_client', 'text')
                    ->add('prenom_client', 'text')
                  ->end()
              ->end()

              ->tab('Adresse / Contact')
                  ->with('Adresse :', array('class' => 'col-md-6'))
                    ->add('rue_societe_client', 'text')
                    ->add('ville_societe_client', 'text')
                    ->add('cp_societe_client', 'text')
                  ->end()

                  ->with('Contacts :', array('class' => 'col-md-6'))
                    ->add('telephone_contact_societe_client', 'text')
                    ->add('mobile_contact_societe_client', 'text')
                    ->add('mail_contact_societe_client', 'text')
                  ->end()
              ->end()

              ->tab('Détails')
                  ->with('Détails :', array('class' => 'col-md-12'))
                    ->add('date_creation_client', 'date')
                    ->add('commentaire_client', 'textarea')
                  ->end()
              ->end()
                  ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        // $datagridMapper->add('societe_client');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                  ->addIdentifier('societe_client', null, array('label' => 'Societes'))
                  ->add('nom_client', 'text', array('label' => 'Noms'))
                  ->add('telephone_contact_societe_client', 'text', array('label' => 'Telephones'))
                  ->add('mail_contact_societe_client', 'text', array('label' => 'Mails'))
                  ->add('commentaire_client', 'text', array('label' => 'Commentaires'))
                  ;
    }

    public function toString($object)
    {
      return $object instanceof Client
        ? $object->getSocieteClient()
        : 'Client';
    }
}
