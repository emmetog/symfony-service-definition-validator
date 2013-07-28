<?php

namespace Matthias\SymfonyServiceDefinitionValidator\Exception;

class MissingRequiredArgumentException extends \RuntimeException implements DefinitionValidationExceptionInterface
{
    public function __construct($className, $parameterName)
    {
        parent::__construct(sprintf(
            'A service definition for class %s has no argument for required parameter %s',
            $className,
            $parameterName
        ));
    }
}
