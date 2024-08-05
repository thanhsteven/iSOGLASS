<?php namespace Premmerce\UrlManager\Admin;

use Premmerce\SDK\V2\FileManager\FileManager;
use Premmerce\UrlManager\Admin\Tabs\Base\TabInterface;

class AffiliateTab implements TabInterface
{

    /**
     * @var FileManager
     */
    private $fileManager;

    public function __construct(FileManager $fileManager)
    {
        $this->fileManager = $fileManager;
    }

    public function init() {

    }

    public function render()
    {
    }


    public function getLabel()
    {
        return __('Affiliate', 'premmerce-url-manager');
    }

    public function getName()
    {
        return 'affiliate';
    }

    public function valid()
    {
        return true;
    }
}