<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 14/05/2017
 * Time: 11:51
 */

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class testmission extends WebTestCase
{
    public function testAddmission()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'changedemmission');


        // Select based on button value, or id or name for buttons
        $form = $crawler->selectButton('Submit')->form();

        $crawler = $client->submit($form, array(
            'interven'        => 41,
            'demandeur'       => 'zribi mohamed firas',
            'vehicule'        => '01-202100',
            'nummission'      => 785200,
            'cause'           => 'إصلاح خلل في المعدات',
            'lieudepart'      => 'تونس',
            'lieuarriver'     => 'زغوان',
            'datedepart'      => '14/05/2017',
            'datearriver'     => '15/05/2017',
            'heuredepart'     => '08:00',
            'heurearriver'    => '08:30',
            'charge'          => 'معدات الشركة',
        ));

        // Il faut suivre la redirection
        $crawler = $client->request('GET', '/mission/afficherallmission');

        $missionCrawler = $crawler->filter('span');
        $this->assertEquals(785200, $missionCrawler->last()->text());
    }

}