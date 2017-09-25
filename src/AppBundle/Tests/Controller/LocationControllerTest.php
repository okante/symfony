<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LocationControllerTest extends WebTestCase
{
    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'show_location');
    }

    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'list_location');
    }

}
