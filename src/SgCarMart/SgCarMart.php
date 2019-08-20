<?php

/**
 * SgCarMart
 *
 * @package SwiftDevLabs\SgCarMart
 * @author Kong Jin Jie <jinjie@swiftdev.sg>
 */

namespace SwiftDevLabs\SgCarMart;

use SwiftDevLabs\SgCarMart\Listings;

class SgCarMart
{
    /**
     * sgCarMart API Endpoint
     * @var string
     */
    protected $endpoint = 'https://data.sgcarmart.com/';

    /**
     * Guzzle client
     * @var GuzzleHttp\Client
     */
    protected $client = null;

    /**
     * Username of the dealer.
     * @var string
     */
    protected $dealer = false;

    public function __construct($dealer)
    {
        $this->dealer = $dealer;

        $this->client = new \GuzzleHttp\Client([
            'base_uri' => $this->endpoint . $this->dealer . '/',
        ]);

        return $this;
    }

    /**
     * Get Listings
     *
     * @return array Array of cars object
     */
    public function getListings()
    {
        $response = $this->client->get('listing.xml');

        return new Listings($response);
    }

    public function getCarDetail($car_id)
    {
        if (is_object($car_id)) {
            $car_id = $car_id->id;
        }

        $response = $this->client->get('info.xml?ID=' . $car_id);

        $car = new CarDetail($response);
        $car->setId($car_id);

        return $car;
    }
}
