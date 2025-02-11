<?php

declare(strict_types=1);

namespace ConstructPay\Api\Functions\Public;

use GuzzleHttp\Exception\GuzzleException;
use ConstructPay\Api\Core\BaseClient;
use ConstructPay\Api\Core\Container;

/**
 * 订单模块
 */
class OrderDetail extends BaseClient
{
    protected function setParams(): void
    {
        $this->app->baseParams['head']['bizCode'] = "A0003";
    }

    /**
     * 统一查询订单
     * @param array $params
     * @return array
     * @throws GuzzleException
     */
    public function getInfo(array $params): array
    {
        return $this->curlRequest($params, 'post');
    }

    //对账单查询
    public function billReconciliation(array $params): array
    {
        return $this->curlRequest($params, 'post');
    }
}
