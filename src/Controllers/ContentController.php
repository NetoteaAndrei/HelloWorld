<?php
namespace HelloWorld\Controllers;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
/**
 * Class ContentController
 * @package HelloWorld\Controllers
 */
class ContentController extends Controller
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function sayHello(Twig $twig):string
    {
        return json_encode(["da" => "da, apiul dadaa viata mea"]);
    }
}
