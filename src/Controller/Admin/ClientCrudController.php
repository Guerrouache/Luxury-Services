<?php

namespace App\Controller\Admin;

use App\Entity\Client;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ClientCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Client::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('societyName'),
            TextEditorField::new('activityType'),
            TextField::new('contractName'),
            TextField::new('positionHeld'),
            TextField::new('contactNumber'),
            TextField::new('contactEmail'),
            TextField::new('notes'),
            DateField::new('createdAt')
        ];
    }
    
}
