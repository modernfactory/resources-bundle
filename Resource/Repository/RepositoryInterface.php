<?php

namespace ModernFactory\ResourcesBundle\Resource\Repository;

use Doctrine\Common\Persistence\ObjectRepository;
use ModernFactory\ResourcesBundle\Resource\Model\ResourceInterface;

/**
 * @author Saša Stamenković <umpirsky@gmail.com>
 * @author Jan Góralski <jan.goralski@lakion.com>
 */
interface RepositoryInterface extends ObjectRepository
{
    const ORDER_ASCENDING = 'ASC';
    const ORDER_DESCENDING = 'DESC';

    /**
     * @param array $criteria
     * @param array $orderBy
     *
     * @return mixed
     */
    public function createPaginator(array $criteria = null, array $orderBy = null);

    /**
     * @param ResourceInterface $resource
     */
    public function add(ResourceInterface $resource);

    /**
     * @param ResourceInterface $resource
     */
    public function remove(ResourceInterface $resource);
}
