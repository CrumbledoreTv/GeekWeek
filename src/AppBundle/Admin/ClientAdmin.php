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
                  ->add('societe_client', 'text')
                  ->add('civilite_client', 'text')
                  ->add('nom_client', 'text')
                  ->add('prenom_client', 'text')
                  ->add('rue_societe_client', 'text')
                  ->add('ville_societe_client', 'text')
                  ->add('cp_societe_client', 'text')
                  ->add('telephone_contact_societe_client', 'text')
                  ->add('mobile_contact_societe_client', 'text')
                  ->add('mail_contact_societe_client', 'text')
                  ->add('date_creation_client', 'date')
                  ->add('commentaire_client', 'text')
                  ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        // $datagridMapper->add('libelle_projet');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                  ->addIdentifier('societe_client')
                  ->add('nom_client', 'text')
                  ->add('telephone_contact_societe_client', 'text')
                  ->add('mail_contact_societe_client', 'text')
                  ->add('commentaire_client', 'text')
                  ;
    }

    public function toString($object)
    {
      return $object instanceof Client
        ? $object->getSocieteClient()
        : 'Client';
    }
}
