<?php
declare(strict_types=1);

namespace Readdle\AppStoreServerAPI\Request;

final class RequestTestNotificationRequest extends AbstractRequest
{
    public function getHTTPMethod(): string
    {
        return self::HTTP_METHOD_POST;
    }

    protected function getURLPattern(): string
    {
        return '{baseUrl}/v1/notifications/test';
    }
}
