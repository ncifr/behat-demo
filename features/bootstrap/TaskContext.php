<?php
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use NCI\BehatDemo\Business\Task;
use PHPUnit\Framework\TestCase;

/**
 * Defines application features from the specific context.
 */
class TaskContext extends TestCase implements Context
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

    /**
     * @Given une nouvelle tâche créée avec le label :arg1
     */
    public function uneNouvelleTacheCreeeAvecLeLabel($arg1)
    {
      $this->task = new Task($arg1);
    }

    /**
     * @Then son statut terminé devrait être :arg1
     */
    public function sonStatutTermineDevraitEtre($arg1)
    {
        $isDone = (strtolower(trim($arg1)) === 'vrai');
        $this->assertEquals($isDone, $this->task->isDone());
    }

    /**
     * @When je marque la tâche comme étant terminée
     */
    public function jeMarqueLaTacheCommeEtantTerminee()
    {
        $this->task->setDone();
    }

    /**
     * @When je change sont label par :arg1
     */
    public function jeChangeSontLabelPar($arg1)
    {
        $this->task->setLabel($arg1);
    }

    /**
     * @Then son label devrait être :arg1
     */
    public function sonLabelDevraitEtre($arg1)
    {
        $this->assertEquals($arg1, $this->task->getLabel());
    }

    /**
     * @Then son idenfiant doit exister
     */
    public function sonIdenfiantDoitExister()
    {
        $this->assertNotEmpty($this->task->getId());
    }
}
