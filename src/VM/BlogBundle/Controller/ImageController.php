<?php

namespace VM\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ImageController extends Controller
{
    /**
     * Index
     */
  public function listimageAction()
 {
  //$mailer = $this->container->get('vm.socialbarhelper');
  $repository = $this->getDoctrine()->getManager()->getRepository('VMBlogBundle:Image');
  $liste_images = $repository->getImagesAcceptes();
  
    return $this->render('VMBlogBundle:Image:image_list.html.twig', array('images' => $liste_images) );
 }
    
    
    
}
