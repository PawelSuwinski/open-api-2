<?php

namespace Docker\Api\Validator;

class SwarmSpecCAConfigExternalCAsItemValidator implements \Docker\Api\Validator\ValidatorInterface
{
    public function validate($data) : void
    {
        $constraints = array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('Protocol' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\Choice(array('choices' => array('cfssl'), 'message' => '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".')))), 'URL' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Options' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'CACert' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string'))))), 'allowExtraFields' => true)));
        $validator = \Symfony\Component\Validator\Validation::createValidator();
        $violations = $validator->validate($data, $constraints);
        if ($violations->count() > 0) {
            throw new \Docker\Api\Validator\ValidationException($violations);
        }
    }
}