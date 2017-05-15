<?php

namespace AppBundle\DataProvider;

use ApiPlatform\Core\DataProvider\CollectionDataProviderInterface;
use ApiPlatform\Core\Exception\ResourceClassNotSupportedException;

use AppBundle\Entity\Bourse;

final class BourseCollectionDataProvider implements CollectionDataProviderInterface
{
    public function getCollection(string $resourceClass, string $operationName = null)
    {
        if (Bourse::class !== $resourceClass) {
            throw new ResourceClassNotSupportedException();
        }

        // Retrieve the blog post collection from somewhere
        return [];
    }
}
