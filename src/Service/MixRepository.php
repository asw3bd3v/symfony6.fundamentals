<?php

namespace App\Service;

use Psr\Cache\CacheItemInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\Cache\CacheInterface;

class MixRepository
{
    public function __construct(
        //private HttpClientInterface $httpClient,
        private HttpClientInterface $githubContentClient,
        private CacheInterface $cache,
        private bool $isDebug,
    ) {}

    public function findAll(): array
    {
        return $this->cache->get('mixes_data', function (CacheItemInterface $cacheItem) {
            $cacheItem->expiresAfter($this->isDebug ? 5 : 60);
            //$response = $this->httpClient->request('GET', 'https://raw.githubusercontent.com/SymfonyCasts/vinyl-mixes/main/mixes.json');
            $response = $this->githubContentClient->request('GET', '/SymfonyCasts/vinyl-mixes/main/mixes.json');
            return $response->toArray();
        });
    }
}
