<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi2\JsonSchema\Normalizer;

use Jane\OpenApi2\JsonSchema\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = ['Jane\\OpenApi2\\JsonSchema\\Model\\OpenApi' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\OpenApiNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\Info' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\InfoNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\Contact' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\ContactNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\License' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\LicenseNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\ExternalDocs' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\ExternalDocsNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\Operation' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\OperationNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\PathItem' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\PathItemNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\Response' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\ResponseNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\Header' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\HeaderNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\BodyParameter' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\BodyParameterNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\Schema' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\SchemaNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\JsonReference' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\JsonReferenceNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\HeaderParameterSubSchema' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\HeaderParameterSubSchemaNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\FormDataParameterSubSchema' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\FormDataParameterSubSchemaNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\QueryParameterSubSchema' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\QueryParameterSubSchemaNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\PathParameterSubSchema' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\PathParameterSubSchemaNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\FileSchema' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\FileSchemaNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\PrimitivesItems' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\PrimitivesItemsNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\Xml' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\XmlNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\Tag' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\TagNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\BasicAuthenticationSecurity' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\BasicAuthenticationSecurityNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\ApiKeySecurity' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\ApiKeySecurityNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\Oauth2ImplicitSecurity' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\Oauth2ImplicitSecurityNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\Oauth2PasswordSecurity' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\Oauth2PasswordSecurityNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\Oauth2ApplicationSecurity' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\Oauth2ApplicationSecurityNormalizer', 'Jane\\OpenApi2\\JsonSchema\\Model\\Oauth2AccessCodeSecurity' => 'Jane\\OpenApi2\\JsonSchema\\Normalizer\\Oauth2AccessCodeSecurityNormalizer', '\\Jane\\JsonSchemaRuntime\\Reference' => '\\Jane\\JsonSchemaRuntime\\Normalizer\\ReferenceNormalizer'];
    protected $normalizersCache = [];

    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($object, $format, $context);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);

        return $denormalizer->denormalize($data, $class, $format, $context);
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;

        return $normalizer;
    }
}
