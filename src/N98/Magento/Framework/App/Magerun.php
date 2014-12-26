<?php

namespace N98\Magento\Framework\App;

use Magento\Framework\App\Bootstrap;
use Magento\Framework\ObjectManager\ObjectManager;

class Magerun implements \Magento\Framework\AppInterface
{
    /**
     * @var ObjectManager
     */
    protected $objectManager;

    /**
     * @param ObjectManager $objectManager
     */
    public function __construct(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * Launch application
     *
     * @return \Magento\Framework\App\ResponseInterface
     */
    public function launch()
    {
        // TODO: Implement launch() method.
    }

    /**
     * @return ObjectManager
     */
    public function getObjectManager()
    {
        return $this->objectManager;
    }

    /**
     * Ability to handle exceptions that may have occurred during bootstrap and launch
     *
     * Return values:
     * - true: exception has been handled, no additional action is needed
     * - false: exception has not been handled - pass the control to Bootstrap
     *
     * @param Bootstrap $bootstrap
     * @param \Exception $exception
     * @return bool
     */
    public function catchException(Bootstrap $bootstrap, \Exception $exception)
    {
        // TODO: Implement catchException() method.
    }
}