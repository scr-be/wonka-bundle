<?php

/*
 * This file is part of the Wonka Bundle.
 *
 * (c) Scribe Inc.     <scr@src.run>
 * (c) Rob Frawley 2nd <rmf@src.run>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Scribe\WonkaBundle\Component\DependencyInjection\Container;

use Scribe\WonkaBundle\Component\DependencyInjection\Exception\InvalidContainerParameterException;
use Scribe\WonkaBundle\Component\DependencyInjection\Exception\InvalidContainerServiceException;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class ContainerAwareTrait.
 */
trait ContainerAwareTrait
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * Sets the container.
     *
     * @param ContainerInterface|null $container
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * Getter for container property.
     *
     * @return ContainerInterface
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * Checker for container property.
     *
     * @return bool
     */
    public function hasContainer()
    {
        return (bool) ($this->container instanceof ContainerInterface);
    }

    /**
     * Get a parameter from the container.
     *
     * @param string $parameter
     *
     * @throws InvalidContainerParameterException
     *
     * @return mixed
     */
    public function getContainerParameter($parameter)
    {
        if (false === $this->hasContainerParameter($parameter)) {
            throw new InvalidContainerParameterException(null, (string) $parameter);
        }

        return $this->container->getParameter($parameter);
    }

    /**
     * Checks if the container parameter exists.
     *
     * @param string $parameter
     *
     * @return bool
     */
    public function hasContainerParameter($parameter)
    {
        return (bool) ($this->container->hasParameter($parameter) === true ?: false);
    }

    /**
     * Get a service from the container.
     *
     * @param string $service
     *
     * @throws InvalidContainerServiceException
     *
     * @return mixed
     */
    public function getContainerService($service)
    {
        if (false === $this->hasContainerService($service)) {
            throw new InvalidContainerParameterException(null, (string) $service);
        }

        return $this->container->get($service);
    }

    /**
     * Checks if the container service exists.
     *
     * @param string $service
     *
     * @return bool
     */
    public function hasContainerService($service)
    {
        return (bool) ($this->container->has($service) === true ?: false);
    }
}

/* EOF */
