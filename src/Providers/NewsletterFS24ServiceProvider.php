<?php
namespace NewsletterFS24\Providers;
use Plenty\Plugin\ServiceProvider;
/**
 * Class HelloWorldServiceProvider
 * @package HelloWorld\Providers
 */
class NewsletterFS24ServiceProvider extends ServiceProvider
{
	/**
	 * Register the service provider.
	 */
	public function register()
	{
		$this->getApplication()->register(NewsletterFS24RouteServiceProvider::class);
	}
}