<?php

namespace Kangaroo\PackageOne;

use Karriere\JsonDecoder\JsonDecoder;

class ExamplePackageClass
{
    public function hello()
    {
        echo 'Hello from My Package';
    }

    public function decodeJson()
    {
        $jsonDecoder = new JsonDecoder();
        $jsonData = '{"id": 1, "name": "John Doe"}';

        /** @var Person $person */
        $person = $jsonDecoder->decode($jsonData, Person::class);

        echo '<pre>'; print_r($person);
    }
}