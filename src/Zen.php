<?php

namespace Kovlcode\Zen;

use GuzzleHttp\Client;
use Kovlcode\Zen\API\Basis\AbstractRequest;
use Kovlcode\Zen\API\Basis\Enums\BodyParametersInterface;
use Kovlcode\Zen\API\Basis\QueryParametersInterface;
use Psr\Http\Message\ResponseInterface;

class Zen
{
    const string BASE_URI = 'https://api.zen.com';

    public function __construct(private readonly string $apiKey)
    {
    }

    public function request(AbstractRequest $request): ResponseInterface
    {
        $client = new Client(['base_uri' => self::BASE_URI]);

        $options = [
            'headers' => array_merge([
                'Authorization' => $this->apiKey,
            ], $request->headerParameters()),
        ];

        if ($request instanceof BodyParametersInterface) {
            $options['json'] = $request->bodyParameters();
        }

        if ($request instanceof QueryParametersInterface) {
            $options['query'] = $request->queryParameters();
        }

        return $client->request($request->getHttpMethod()->value, $request->getUri(), $options);
    }
}