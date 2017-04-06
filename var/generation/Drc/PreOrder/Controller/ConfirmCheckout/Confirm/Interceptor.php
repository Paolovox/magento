<?php
namespace Drc\PreOrder\Controller\ConfirmCheckout\Confirm;

/**
 * Interceptor class for @see \Drc\PreOrder\Controller\ConfirmCheckout\Confirm
 */
class Interceptor extends \Drc\PreOrder\Controller\ConfirmCheckout\Confirm implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $session, \Magento\Framework\App\ResponseFactory $responseFactory, \Magento\Catalog\Model\Product $product, \Magento\Checkout\Model\Cart $cart, \Magento\Framework\View\Result\PageFactory $pageFactory, \Drc\PreOrder\Model\PreorderPending $preModel)
    {
        $this->___init();
        parent::__construct($context, $session, $responseFactory, $product, $cart, $pageFactory, $preModel);
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
