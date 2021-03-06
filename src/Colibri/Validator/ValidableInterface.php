<?php

namespace Colibri\Validator;

/**
 * Interface ValidableInterface
 * @package Colibri\Validator
 */
interface ValidableInterface
{
    
    /**
     * @param mixed $value
     *
     * @return ValidableInterface
     */
    public function with($value): ValidableInterface;
    
    /**
     * @return bool
     */
    public function validate(): boolean;
    
}