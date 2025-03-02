<?php

declare(strict_types=1);

namespace Doctrine\Bundle\FixturesBundle\Purger;

use Doctrine\Common\DataFixtures\Purger\PurgerInterface;
use Doctrine\ORM\EntityManagerInterface;

/** @template T of PurgerInterface */
interface PurgerFactory
{
    /**
     * @phpstan-param list<string> $excluded
     *
     * @return T
     */
    public function createForEntityManager(
        string|null $emName,
        EntityManagerInterface $em,
        array $excluded = [],
        bool $purgeWithTruncate = false,
    ): PurgerInterface;
}
