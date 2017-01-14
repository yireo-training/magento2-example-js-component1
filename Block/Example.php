<?php
namespace Yireo\ExampleJsComponent\Block;

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
