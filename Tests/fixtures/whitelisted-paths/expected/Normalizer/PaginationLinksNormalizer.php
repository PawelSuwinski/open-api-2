<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PaginationLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\PaginationLinks';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\PaginationLinks';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\OpenApi2\Tests\Expected\Model\PaginationLinks();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('first', $data)) {
            $object->setFirst($data['first']);
        }
        if (\array_key_exists('last', $data)) {
            $object->setLast($data['last']);
        }
        if (\array_key_exists('previous', $data)) {
            $object->setPrevious($data['previous']);
        }
        if (\array_key_exists('next', $data)) {
            $object->setNext($data['next']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFirst()) {
            $data['first'] = $object->getFirst();
        }
        if (null !== $object->getLast()) {
            $data['last'] = $object->getLast();
        }
        if (null !== $object->getPrevious()) {
            $data['previous'] = $object->getPrevious();
        }
        if (null !== $object->getNext()) {
            $data['next'] = $object->getNext();
        }
        return $data;
    }
}