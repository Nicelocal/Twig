<?php

namespace Twig\Tests\Node\Expression\Binary;

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Twig\Node\Expression\Binary\DivBinary;
use Twig\Node\Expression\ConstantExpression;
use Twig\Test\NodeTestCase;

class DivTest extends NodeTestCase
{
    public function testConstructor()
    {
        $left = new ConstantExpression(1, 1);
        $right = new ConstantExpression(2, 1);
        $node = new DivBinary($left, $right, 1);

        $this->assertEquals($left, $node->getNode('left'));
        $this->assertEquals($right, $node->getNode('right'));
    }

    public static function provideTests(): iterable
    {
        $left = new ConstantExpression(1, 1);
        $right = new ConstantExpression(2, 1);
        $node = new DivBinary($left, $right, 1);

        return [
            [$node, '(1 / 2)'],
        ];
    }
}
