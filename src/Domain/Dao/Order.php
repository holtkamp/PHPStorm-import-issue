<?php

namespace Project\Domain\Dao;

use Project\Domain\Entity\Invoice as InvoiceEntity;

class Order
{

    /**
     * @return InvoiceEntity[] | array
     */
    public function loadInvoicesFromAnotherDao()
    {
        return array();
    }

}