<?php

namespace ZbTg\StatsBundle\DataCollector;
// Symfony\Component\HttpKernel\DataCollector\DataCollectorInterface,

class CustomRequest
{
    public function collect(Request $request, Response $response, \Exception $exception = null)
    {
        $this->data = array(
            'cusRequest' => 'Hello Paul'
        );
    }

    public function getMemory()
    {
        return $this->data['cusRequest'];
    }

    public function getName()
    {
        return 'cusRequest';
    }
}
