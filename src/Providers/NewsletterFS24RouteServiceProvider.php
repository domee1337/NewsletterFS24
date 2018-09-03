<?php
namespace NewsletterFS24\Providers;
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
class NewsletterFS24RouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router)
	{
        $router->get('newsletter_fs24/register', 'NewsletterFS24\Controllers\ContentController@sendRequest');
        
        $router->get('newsletter_fs24/accept', 'NewsletterFS24\Controllers\ContentController@sendRequest');
	}
}