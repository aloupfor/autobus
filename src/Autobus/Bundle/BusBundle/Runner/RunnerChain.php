<?php

namespace Autobus\Bundle\BusBundle\Runner;

/**
 * Class RunnerChain
 */
final class RunnerChain
{
    /**
     * @var RunnerInterface[]
     */
    private $runners = array();

    public function addRunner(RunnerInterface $runner, $id)
    {
        $this->runners[$id] = $runner;
    }

    /**
     * @return RunnerInterface[]
     */
    public function getRunners()
    {
        return $this->runners;
    }
}
