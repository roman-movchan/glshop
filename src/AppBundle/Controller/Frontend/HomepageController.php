<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Controller\Frontend;

use Sylius\Bundle\WebBundle\Controller\Frontend\HomepageController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Frontend homepage controller.
 *
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 */
class HomepageController extends BaseController
{
    /**
     * Store front page.
     *
     * @return Response
     */
    public function mainAction()
    {
        return $this->render('AppBundle:Frontend/Homepage:main.html.twig');
    }
}
