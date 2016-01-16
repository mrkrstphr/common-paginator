<?php

namespace mrkrstphr\CommonPaginator;

use Iterator;

/**
 * Interface PaginatorInterface
 * @package mrkrstphr\CommonPaginator
 */
interface PaginatorInterface
{
    /**
     * Returns the total number of rows in the collection, not just the rows in the paginator.
     *
     * @return int
     */
    public function total() : int;

    /**
     * Returns the offset of the start of the rows in the paginator.
     *
     * @return int
     */
    public function offset() : int;

    /**
     * Returns the collection of items in this paginator as an instance of Iterator.
     *
     * @return Iterator
     */
    public function items() : Iterator;
}
