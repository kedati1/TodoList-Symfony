<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TodoRepository")
 */
class Todo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $task;

    /**
     * @ORM\Column(type="integer")
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getTask()
    {
        return $this->task;
    }
    public function setTask($task)
    {
        if ($this->task !== $task) {
            $this->task = $task;
        }
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status)
    {
        if ($this->status !== $status) {
            $this->status = $status;
        }
    }
}
