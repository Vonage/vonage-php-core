<?php

namespace Vonage\User;

use Vonage\Client\Factory\FactoryInterface;

class ClientFactory
{
    public function __invoke(FactoryInterface $factory) {
        return new Collection();
    }
}