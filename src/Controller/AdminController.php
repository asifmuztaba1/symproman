<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('front/admin/my_profile.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    
    #[Route('/my-profile', name: 'my_profile')]
    public function myProfile(): Response
    {
        return $this->render('front/admin/my_profile.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    
    #[Route('/edit-category', name: 'edit_category')]
    public function editCategory(): Response
    {
        return $this->render('front/admin/edit_category.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    
    #[Route('/category', name: 'category')]
    public function category(): Response
    {
        return $this->render('front/admin/categories.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    
    #[Route('/videos', name: 'videos')]
    public function videos(): Response
    {
        return $this->render('front/admin/videos.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    
    #[Route('/users', name: 'users')]
    public function users(): Response
    {
        return $this->render('front/admin/users.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    
    #[Route('/upload-videos', name: 'upload_videos')]
    public function uploadVideos(): Response
    {
        return $this->render('front/admin/upload_video.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
