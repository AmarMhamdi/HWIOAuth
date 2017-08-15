<?php

namespace SocialSweet\RecruitmentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SocialSweetRecruitmentBundle:Default:index.html.twig');
    }
}
