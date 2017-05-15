<?php
/**
 * Created by IntelliJ IDEA.
 * User: anael
 * Date: 15/05/2017
 * Time: 14:38
 */

namespace AppBundle\DataProvider;

use ApiPlatform\Core\DataProvider\ItemDataProviderInterface;
use ApiPlatform\Core\Exception\ResourceClassNotSupportedException;
use AppBundle\Entity\Bourse;

final class BlogPostItemDataProvider implements ItemDataProviderInterface
{
    public function getItem(string $resourceClass, $id, string $operationName = null, array $context = [])    {
        if (Bourse::class !== $resourceClass) {
            throw new ResourceClassNotSupportedException();
        }

        // Retrieve the blog post item from somewhere
        return null;
    }
}
