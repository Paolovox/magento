<?php
namespace Drc\PreOrder\Controller\ConfigurableProduct\Product;

/**
 * Interceptor class for @see \Drc\PreOrder\Controller\ConfigurableProduct\Product
 */
class Interceptor extends \Drc\PreOrder\Controller\ConfigurableProduct\Product implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory, \Magento\Framework\App\Request\Http $request, \Magento\CatalogInventory\Model\Stock\StockItemRepository $stockItemRepository, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Catalog\Api\Data\ProductInterface $productCollection, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory)
    {
        $this->___init();
        parent::__construct($context, $pageFactory, $request, $stockItemRepository, $scopeConfig, $productCollection, $resultJsonFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
