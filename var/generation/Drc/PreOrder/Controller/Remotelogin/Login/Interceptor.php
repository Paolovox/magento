<?php
namespace Drc\PreOrder\Controller\Remotelogin\Login;

/**
 * Interceptor class for @see \Drc\PreOrder\Controller\Remotelogin\Login
 */
class Interceptor extends \Drc\PreOrder\Controller\Remotelogin\Login implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\AccountManagement $acm, \Magento\Customer\Model\Session $ses, \Magento\Framework\App\ResponseFactory $responseFactory, \Magento\Framework\UrlInterface $url)
    {
        $this->___init();
        parent::__construct($context, $acm, $ses, $responseFactory, $url);
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
