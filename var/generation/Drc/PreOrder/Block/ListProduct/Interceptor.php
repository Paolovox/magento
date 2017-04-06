<?php
namespace Drc\PreOrder\Block\ListProduct;

/**
 * Interceptor class for @see \Drc\PreOrder\Block\ListProduct
 */
class Interceptor extends \Drc\PreOrder\Block\ListProduct implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogInventory\Model\Stock\StockItemRepository $stockItemRepository, \Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Data\Helper\PostHelper $postDataHelper, \Magento\Catalog\Model\Layer\Resolver $layerResolver, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, \Magento\Framework\Url\Helper\Data $urlHelper, \Magento\Bundle\Model\Product\Type $bundleProduct, array $data = array())
    {
        $this->___init();
        parent::__construct($stockItemRepository, $context, $postDataHelper, $layerResolver, $categoryRepository, $urlHelper, $bundleProduct, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        if (!$pluginInfo) {
            return parent::getImage($product, $imageId, $attributes);
        } else {
            return $this->___callPlugins('getImage', func_get_args(), $pluginInfo);
        }
    }
}
