<?php

namespace Magenest\Chapter8\Controller\Index;

use Magenest\Chapter8\Api\MyInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Another extends \Magento\Framework\App\Action\Action
{
    protected $_myInterface;

    protected $_pageFactory;

    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        MyInterface $myInterface
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_myInterface = $myInterface;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        print_r($this->_myInterface->foo());
        return $this->_pageFactory->create();
    }
}