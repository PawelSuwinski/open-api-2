<?php

namespace Jane\OpenApi2\Tests\Expected\Endpoint;

class GetTestById extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $id;
    /**
     * 
     *
     * @param int $id id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/test/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\OpenApi2\Tests\Expected\Exception\GetTestByIdBadRequestException
     * @throws \Jane\OpenApi2\Tests\Expected\Exception\GetTestByIdNotFoundException
     *
     * @return null|\Jane\OpenApi2\Tests\Expected\Model\TestIdGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TestIdGetResponse200', 'json');
        }
        if (400 === $status) {
            throw new \Jane\OpenApi2\Tests\Expected\Exception\GetTestByIdBadRequestException($serializer->deserialize($body, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Jane\OpenApi2\Tests\Expected\Exception\GetTestByIdNotFoundException($serializer->deserialize($body, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Error', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}