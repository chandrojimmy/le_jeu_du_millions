<?php

namespace Chandro\Jeu20\Entity;
Use DateTimeImmutable;
class Answer
{
    private bool $IstobeRevised = false;
    private ?int $id;

    public function getContentText(): string
    {
        return $this->contentText;
    }

    public function __construct()
    {
        //affectation de la date de création
        $this->createdAt = new DateTimeImmutable();
    }

    public function setContentText(string $contentText): void
    {
        $this->contentText = $contentText;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getContentCode(): ?string
    {
        return $this->contentCode;
    }

    public function setContentCode(?string $contentCode): void
    {
        $this->contentCode = $contentCode;
    }

    public function getContentImage(): ?string
    {
        return $this->contentImage;
    }

    public function setContentImage(?string $contentImage): void
    {
        $this->contentImage = $contentImage;
    }

    public function isTrue(): bool
    {
        return $this->isTrue;
    }

    public function setIsTrue(bool $isTrue): void
    {
        $this->isTrue = $isTrue;
    }


    public function setCreatedAt(DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getRevisedAt(): ?DateTimeImmutable
    {
        return $this->revisedAt;
    }

    public function setRevisedAt(?DateTimeImmutable $revisedAt): void
    {
        $this->revisedAt = $revisedAt;
    }

    /**
     * @var string le texte de la réponse
     */
    private string $contentText;


    private ?string $contentCode = null;
    /**
     * @var string|null fichier image pouvant compléter le texte de la réponse
     */
    private ?string $contentImage = null;
    /**
     * @var bool true si la réponse est une bonne réponse, false dans le cas
     * contraire
     */
    private bool $isTrue = false;
    /**
     * @var DateTimeImmutable date de création de la réponse
     */
    private DateTimeImmutable $createdAt;
    /**
     * @var DateTimeImmutable|null date de révision de la réponse (une mise à
     * jour fait partie d'une révision)
     */
    private ?dateTimeImmutable $revisedAt = null;

    public function isIstobeRevised(): bool
    {
        return $this->IstobeRevised;
    }

    public function setIstobeRevised(bool $IstobeRevised): void
    {
        $this->IstobeRevised = $IstobeRevised;
    }


    public function __toString(): string
    {
        return "ID: " . ($this->id ?? 'null') . "<br>\n" .
            "Content Text: " . $this->contentText . "<br>\n" .
            "Content Code: " . ($this->contentCode ?? 'null') . "<br>\n" .
            "Content Image: " . ($this->contentImage ?? 'null') . "<br>\n" .
            "Is True: " . ($this->isTrue ? 'true' : 'false') . "<br>\n" .
            "Created At: " . $this->createdAt->format('Y-m-d H:i:s') . "<br>\n" .
            "Revised At: " . ($this->revisedAt ? $this->revisedAt->format('Y-m-d
        H:i:s') : 'null') . "<br>\n";
    }

}