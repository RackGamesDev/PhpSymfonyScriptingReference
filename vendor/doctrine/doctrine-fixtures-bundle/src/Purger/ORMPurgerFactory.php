<?php

declare(strict_types=1);

namespace Doctrine\Bundle\FixturesBundle\Purger;

use Doctrine\Common\DataFixtures\Purger\ORMPurger;
use Doctrine\ORM\EntityManagerInterface;

/** @template-implements PurgerFactory<ORMPurger> */
final class ORMPurgerFactory implements PurgerFactory
{
    /**
     * {@inheritDoc}
     */
    public function createForEntityManager(
        string|null $emName,
        EntityManagerInterface $em,
        array $excluded = [],
        bool $purgeWithTruncate = false,
    ): ORMPurger {
        $purger = new ORMPurger($em, $excluded);
        $purger->setPurgeMode($purgeWithTruncate ? ORMPurger::PURGE_MODE_TRUNCATE : ORMPurger::PURGE_MODE_DELETE);

        return $purger;
    }
}
