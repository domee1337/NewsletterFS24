<?php
namespace NewsletterFS24\Controllers;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;
use Plenty\Plugin\ConfigRepository;
class ContentController extends Controller
{
	
	public function sendRequest(Request $request)
	{
        $config = pluginApp(ConfigRepository::class);
        
		$rs = $request->all();
		$curl = curl_init();
		$url = $config->get("NewsletterFS24.newsletter_url");
        $url = sprintf("%s?%s", $url, http_build_query($rs));
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }
    
    public function acceptRequest(Request $request)
    {
        $rs = $request->all();
		$curl = curl_init();
		$url = $config->get("NewsletterFS24.newsletter_url");
        $url = sprintf("%s?%s", $url, http_build_query($rs));
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }
}