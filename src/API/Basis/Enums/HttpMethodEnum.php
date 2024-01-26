<?php

namespace Kovlcode\Zen\API\Basis\Enums;

enum HttpMethodEnum: string
{
    case GET = 'GET';
    case POST = 'POST';
    case PATCH = 'PATCH';
    case PUT = 'PUT';
    case DELETE = 'DELETE';
}
