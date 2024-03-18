<?php

namespace App\Controller\Admin;

use App\Entity\JobOffer;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class JobOfferCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return JobOffer::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
          
            TextField::new('reference'),
            AssociationField::new('client'),
            TextField::new('description'),
            TextField::new('notes'),
            TextField::new('jobTitle'),
            TextField::new('jobType'),
            TextField::new('location'),
            AssociationField::new('jobCategory'),
            TextField::new('salary'),
            TextField::new('createdAt'),
            TextField::new('closingDate'),
            TextField::new('activated')
        ];
    }
    
}
