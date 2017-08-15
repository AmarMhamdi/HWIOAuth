<?php

namespace SocialSweet\RecruitmentBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SocialSweetRecruitmentBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
