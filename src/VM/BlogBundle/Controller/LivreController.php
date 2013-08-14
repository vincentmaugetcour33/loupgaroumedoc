<?php

namespace VM\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class LivreController extends Controller
{
    use VM\BlogBundle\Entity\Livre;
use VM\BlogBundle\Form\LivreType;
}
