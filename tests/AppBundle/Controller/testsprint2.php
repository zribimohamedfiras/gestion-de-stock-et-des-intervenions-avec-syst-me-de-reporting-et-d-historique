<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 21/04/2017
 * Time: 13:34
 */

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class testsprint2 extends WebTestCase
{
    public function testAdddiffusion()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/intervention/diffusion/ajoutdiffusion');


        // Select based on button value, or id or name for buttons
        $form = $crawler->selectButton('Submit')->form();

        $crawler = $client->submit($form, array(
            'diffusion[name]'          => 'binzart',
            'diffusion[fax]'       => 78987562,
        ));

        // Il faut suivre la redirection
        $crawler = $client->followRedirect();

        $diffusionCrawler = $crawler->filter('span');
        $this->assertEquals(' binzart ', $diffusionCrawler->last()->text());
    }

}