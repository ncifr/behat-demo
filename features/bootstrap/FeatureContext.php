<?php
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use NCI\BehatDemo\Business\Task;
use PHPUnit\Framework\TestCase;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends TestCase implements Context
{

    private $task;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

}
