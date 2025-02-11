<?php

declare(strict_types=1);

namespace ConstructPay\Api\Functions\Public;

use GuzzleHttp\Exception\GuzzleException;
use ConstructPay\Api\Core\BaseClient;

/**
 * 购买人(顾客)渠道补贴余额查询接口
 */
class SubsidyBalance extends BaseClient
{
    protected function setParams(): void
    {
        $this->app->baseParams['head']['bizCode'] = "A0008";
    }

    /**
     * 购买人(顾客)渠道补贴余额查询接口
     * @param array $params
     * @return array
     * @throws GuzzleException
     */
    public function subsidyBalanceInquiry(array $params): array
    {
        $this->setParams();
        return $this->curlRequest($params, 'post');
    }
}
