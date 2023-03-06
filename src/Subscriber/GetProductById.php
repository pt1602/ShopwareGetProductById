<?php declare(strict_types=1);

namespace ShopwareGetProductById\Subscriber;

use Shopware\Core\System\SalesChannel\Entity\SalesChannelRepositoryInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;

class GetProductById extends AbstractExtension
{
    /**
     * @var SalesChannelRepositoryInterface
     */
    private SalesChannelRepositoryInterface $salesChannelProductRepository;

    /**
     *   Construct
     */
    public function __construct(SalesChannelRepositoryInterface $salesChannelProductRepository)
    {
        $this->salesChannelProductRepository = $salesChannelProductRepository;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('getProductByID', [$this, 'GetProductById']),
        ];
    }

    public function GetProductById($productID, $context)
    {
        return
            $this->salesChannelProductRepository->search(new Criteria([$productID]), $context)->first();
    }
}
