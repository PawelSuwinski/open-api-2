<?php

namespace Jane\OpenApi2\Tests\Expected\Endpoint;

class RetrieveCompany extends \Jane\OpenApi2\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\OpenApi2\Tests\Expected\Runtime\Client\Endpoint
{
    use \Jane\OpenApi2\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/company';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\OpenApi2\Tests\Expected\Model\Company|\Jane\OpenApi2\Tests\Expected\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Company', 'json');
        }
        return $serializer->deserialize($body, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}