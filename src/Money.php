<?php
/**
 * Created by PhpStorm.
 * User: joseplluisgiraltdlacoste
 * Date: 11/02/14
 * Time: 20:52
 */
namespace Development;

class Money
{

    private $amount;

    function __construct($amount)
    {
         $this->amount=$amount;

    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return mixed
     */
    public function negate()
    {
        return new self(-1 * $this->amount);
    }

}