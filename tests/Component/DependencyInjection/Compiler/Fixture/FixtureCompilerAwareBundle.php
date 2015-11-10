<?php

/*
 * This file is part of the Scribe Wonka Bundle.
 *
 * (c) Scribe Inc. <oss@scr.be>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Scribe\WonkaBundle\Tests\Component\DependencyInjection\Compiler\Fixture;

use Scribe\WonkaBundle\DependencyInjection\Compiler\Bundle\AbstractCompilerAwareBundle;

/**
 * Class FixtureCompilerAwareBundle.
 */
class FixtureCompilerAwareBundle extends AbstractCompilerAwareBundle
{
    /**
     * Return the name of the service that handles the collection of tagged items found (the chain manager).
     *
     * @return string
     */
    public function getRegistrarSrvName()
    {
        return 'srv.name';
    }

    /**
     * Return the name of the search tag to find services to be attached to the chain (the chain subscribers).
     *
     * @return string
     */
    public function getAttendantTagName()
    {
        return 'tag.name';
    }
}

/* EOF */