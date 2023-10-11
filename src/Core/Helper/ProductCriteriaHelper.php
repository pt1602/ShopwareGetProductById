<?php

declare(strict_types=1);

namespace ShopwareGetProductById\Core\Helper;

use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;

class ProductCriteriaHelper
{
    private Criteria $criteria;

    public function __construct(Criteria $criteria)
    {
        $this->criteria = $criteria;
    }

    public function addAssociations(): void
    {
        $this->criteria->addAssociation('media');
    }
}
