<?php
namespace NCI\BehatDemo\Business;

class Task
{
  private $id;
  private $label;
  private $done;

  public function __construct(string $label, string $id = "")
  {
    $this->label = $label;
    $this->id    = $id;
    $this->done  = false;
  }

  public function setDone(bool $isDone = true) : void
  {
    $this->done = $isDone;
  }

  public function isDone() : bool
  {
    return $this->done;
  }

  public function getId() : string
  {
    return $this->id;
  }

  public function getLabel() : string
  {
    return $this->label;
  }

  public function setLabel($label) : void
  {
    $this->label = $label;
  }
}