<?php

namespace Yansongda\LaravelPay\Facades;

use Illuminate\Support\Facades\Facade;

class Pay extends Facade
{
    /**
     * Return the facade accessor.
     *
     * @return \Yansongda\Pay\Gateways\Alipay
     */
    public static function getFacadeAccessor()
    {
        return 'pay.alipay';
    }

    /**
     * Return the facade accessor.
     *
     * @return \Yansongda\Pay\Gateways\Alipay
     */
    public static function alipay()
    {
        return app('pay.alipay');
    }

    /**
     * Return the facade accessor.
     *
     * @return \Yansongda\Pay\Gateways\Wechat
     */
    public static function wechat()
    {
        return app('pay.wechat');
    }
}
