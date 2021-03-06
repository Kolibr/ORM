<?php

namespace Colibri\Query\Expr\Func;

use Colibri\Exception\BadCallMethodException;
use Colibri\Query\Expr\Func;

class CurrentDate extends Func
{
    
    /**
     * CurrentDate constructor.
     * MySQL Function CURRENT_DATE
     *
     * @param array $parameters
     *
     * @throws BadCallMethodException
     */
    public function __construct(...$parameters)
    {
        parent::__construct('CURRENT_DATE', $parameters);
    }
    
}