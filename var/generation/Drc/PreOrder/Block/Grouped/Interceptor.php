<?php
namespace Drc\PreOrder\Block\Grouped;

/**
 * Interceptor class for @see \Drc\PreOrder\Block\Grouped
 */
class Interceptor extends \Drc\PreOrder\Block\Grouped implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\CatalogInventory\Model\Stock\StockItemRepository $stockItemRepository, \Magento\Framework\Stdlib\ArrayUtils $arrayUtils, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $stockItemRepository, $arrayUtils, $data);
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
