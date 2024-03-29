<?php

namespace App\Controller\Admin;

use App\Entity\Apply;
use App\Entity\Candidat;
use App\Entity\Client;
use App\Entity\Experience;
use App\Entity\Gender;
use App\Entity\JobCategory;
use App\Entity\JobOffer;
use App\Entity\JobType;
use App\Entity\Media;
use App\Entity\Status;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
       // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
         return $this->render('admin/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Luxury Services');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Apply', 'fas fa-list', Apply::class);
        yield MenuItem::linkToCrud('Gender', 'fas fa-list', Gender::class);
        yield MenuItem::linkToCrud('Experience', 'fas fa-list', Experience::class);
        yield MenuItem::linkToCrud('Status', 'fas fa-list', Status::class);
        yield MenuItem::linkToCrud('JobType', 'fas fa-list', JobType::class);
        yield MenuItem::linkToCrud('JobCategory', 'fas fa-list', JobCategory::class);
        yield MenuItem::linkToCrud('Media', 'fas fa-list', Media::class);
        yield MenuItem::linkToCrud('Client', 'fas fa-list', Client::class);
        yield MenuItem::linkToCrud('jobOffer', 'fas fa-list', JobOffer::class);
        yield MenuItem::linkToCrud('Candidat', 'fas fa-list', Candidat::class);
    }
}
