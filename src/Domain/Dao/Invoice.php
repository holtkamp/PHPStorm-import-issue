<?php

namespace Project\Domain\Dao;

use Project\Domain\Entity\Invoice as InvoiceEntity;

class Invoice
{

    /**
     * @return InvoiceEntity[] | array
     */
    public function loadInvoices()
    {
        return array();
    }

    /**
     * @return InvoiceEntity
     */
    public function loadInvoice()
    {

    }
}