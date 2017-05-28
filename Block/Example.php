<?php
namespace Yireo\ExampleJsComponent1\Block;

class Example extends \Magento\Framework\View\Element\Template
{
    /**
     * @return string
     */
    public function getMessage()
    {
        return 'Output of PHP method getMessage()';
    }
}
