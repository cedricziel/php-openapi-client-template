<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Endpoint;

class GetInitImageById extends \CedricZiel\LeonardoAI\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\LeonardoAI\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\LeonardoAI\Generated\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * This endpoint will return a single init image.
     *
     * @param string $id _"id" is required_
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/init-image/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \CedricZiel\LeonardoAI\Generated\Model\InitImageIdGetResponse200|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'CedricZiel\LeonardoAI\Generated\Model\InitImageIdGetResponse200', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
