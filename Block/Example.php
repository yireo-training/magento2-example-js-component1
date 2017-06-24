<?php
namespace Yireo\ExampleJsComponent1\Block;

class Example extends \Magento\Framework\View\Element\Template
{
    /**
     * @return string
     */
    public function getMessage() : string
    {
        return 'Output of PHP method getMessage()';
    }
}
