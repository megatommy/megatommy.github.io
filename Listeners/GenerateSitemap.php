<?php namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;
use samdark\sitemap\Sitemap;

class GenerateSitemap
{
    public $ignoreArray = [
        '/404.html',
        '/CNAME'
    ];

    public function handle(Jigsaw $jigsaw)
    {
        //$baseUrl = $jigsaw->getConfig('baseUrl');
        $baseUrl = $jigsaw->getConfig('website_url');
        $sitemap = new Sitemap($jigsaw->getDestinationPath() . '/sitemap.xml');

        collect($jigsaw->getOutputPaths())->each(function ($path) use ($baseUrl, $sitemap) {
            if (! $this->isAsset($path) && !$this->isInIgnoreArray($path)) {
                //$sitemap->addItem($baseUrl . $path, time(), Sitemap::DAILY);
                $sitemap->addItem($baseUrl . $path);
            }
        });

        $sitemap->write();
    }

    public function isAsset($path)
    {
        //return starts_with($path, '/assets');
        return substr($path, 0, strlen('/assets')) === '/assets';
    }

    public function isInIgnoreArray($path){
        return in_array($path, $this->ignoreArray);
    }
}