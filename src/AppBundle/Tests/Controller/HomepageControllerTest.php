<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomepageControllerTest extends WebTestCase
{
    public function testGetallrides()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getAllRides');
    }

}
