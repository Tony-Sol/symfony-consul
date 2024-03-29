<?php

declare(strict_types=1);

namespace Consul\Engine\TXN;

use Consul\API\Response\ConsulResponseInterface;
use Consul\Engine\AbstractEngineInterface;

interface TXNInterface extends AbstractEngineInterface
{
    /**
     * Execute Consul TXN request
     *
     * @param array<int, array<string, mixed>> $operations TXN operations.
     * @param array<string, mixed>             $options    Request options.
     *
     * @return ConsulResponseInterface
     */
    public function put(array $operations = [], array $options = []): ConsulResponseInterface;
}
