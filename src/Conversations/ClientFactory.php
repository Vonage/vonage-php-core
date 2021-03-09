<?php

namespace Vonage\Conversations;

use Vonage\Client\Factory\FactoryInterface;

class ClientFactory
{
    public function __invoke(FactoryInterface $factory) {
        return new Collection();
    }
}