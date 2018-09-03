<?php

namespace NewsletterFS24\Containers;

use Plenty\Plugin\Templates\Twig;
    
class NewsletterFS24Container
{
    public function call(Twig $twig):string
    {
        return $twig->render('NewsletterFS24::content.NewsletterFS24');
    }
}