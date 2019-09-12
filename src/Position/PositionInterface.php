<?php
/**
 * This file is part of phplrt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Phplrt\Position;

/**
 * Interface PositionInterface
 */
interface PositionInterface
{
    /**
     * @inheritdoc
     */
    public function getLine();

    /**
     * @inheritdoc
     */
    public function getColumn(): int;
}
