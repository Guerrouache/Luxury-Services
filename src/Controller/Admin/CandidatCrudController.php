<?php

namespace App\Controller\Admin;

use App\Entity\Candidat;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CandidatCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Candidat::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
           
            AssociationField::new('user'),
            AssociationField::new('gender'),
            TextField::new('fistname'),
            TextField::new('lastname'),
            TextField::new('adress'),
            TextField::new('country'),
            TextField::new('nationality'),
            AssociationField::new('passport'),
            AssociationField::new('cv'),
            AssociationField::new('profilPic'),
            TextField::new('birthdate'),
            TextField::new('birthPlace'),
            TextField::new('createdAt'),
            TextField::new('updateAt'),
            TextField::new('jobCategory'),
            AssociationField::new('experience'),
            TextField::new('isAvailable')
            

        ];
    }
    
}
