<?php

declare(strict_types=1);

namespace ShopwareGetProductById\Core\Framework\Adapter\Twig\Extention;

use ShopwareGetProductById\Core\Helper\ProductCriteriaHelper;
use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\System\SalesChannel\Entity\SalesChannelRepository;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class GetProductByIdExtention extends AbstractExtension
{
    private SalesChannelRepository $salesChannelProductRepository;

    /**
     *   Construct
     */
    public function __construct(SalesChannelRepository $salesChannelProductRepository)
    {
        $this->salesChannelProductRepository = $salesChannelProductRepository;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('getProductByID', [$this, 'getProductById']),
        ];
    }

    public function getProductById(string $productID, SalesChannelContext $context): ?Entity
    {
        $criteria = new Criteria();
        $criteria->addFilter(new EqualsFilter('id', $productID));

        $productCriteriaHelper = new ProductCriteriaHelper($criteria);
        $productCriteriaHelper->addAssociations();

        return $this->salesChannelProductRepository->search($criteria, $context)->first();
    }
}
