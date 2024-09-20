<?php

namespace Chandro\Entity;

use  DateTimeImmutable;
class Question
{
    private ?int $id ;
    private  int $level;

    private  ?string $contentTexte = null;
    private  ?string $contentimage = null ;
    private bool  $isToBeResived = false;

    private DateTimeImmutable $createAt ;

    private ?DateTimeImmutable $revisedAt = null ;

    public function __construct()
    {
        $this->createAt = new DateTimeImmutable();
    }

    public function getId():?int{
        return  $this->id;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): void
    {
        $this->level = $level;
    }

    public function getContentTexte(): ?string
    {
        return $this->contentTexte;
    }

    public function setContentTexte(?string $contentTexte): void
    {
        $this->contentTexte = $contentTexte;
    }

    public function getContentimage(): ?string
    {
        return $this->contentimage;
    }

    public function setContentimage(?string $contentimage): void
    {
        $this->contentimage = $contentimage;
    }

    public function isToBeResived(): bool
    {
        return $this->isToBeResived;
    }

    public function setIsToBeResived(bool $isToBeResived): void
    {
        $this->isToBeResived = $isToBeResived;
    }

    public function getCreateAt(): DateTimeImmutable
    {
        return $this->createAt;
    }

    public function setCreateAt(DateTimeImmutable $createAt): void
    {
        $this->createAt = $createAt;
    }

    public function getRevisedAt(): ?DateTimeImmutable
    {
        return $this->revisedAt;
    }

    public function setRevisedAt(?DateTimeImmutable $revisedAt): void
    {
        $this->revisedAt = $revisedAt;
    }
    public function __toString(): string
    {
        return "ID: " . ($this->id ?? 'null') . "<br>\n" .
            "Level: " . $this->level . "\n" .
            "Content Text: " . $this->contentTexte . "<br>\n" .
            "Content Code: " . ($this->contentCode ?? 'null') ."<br>\n" .
            "Content Image: " . ($this->contentImage ?? 'null') ."<br>\n" .
            "Is To Be Revised: " . ($this->isToBeResived ? 'true' : 'false') .
            "\n" .
            "Created At: " . $this->createAt->format('Y-m-d H:i:s') . "<br>\n" .
            "Revised At: " . ($this->revisedAt ? $this->revisedAt->format('Y-m-d
             H:i:s') : 'null') ."\n";

    }

}
