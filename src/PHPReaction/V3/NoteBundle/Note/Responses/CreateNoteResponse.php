<?php

namespace Phpc\PHPReaction\V3\NoteBundle\Note\Responses;

use Phpc\Core\AbstractResponse;

final class CreateNoteResponse extends AbstractResponse
{
    /* ===== Base ===== */

    private string $slug;
    private string $createdAt; // Datetime
    private string $updatedAt; // Datetime
    private ?string $disabledAt = null; // ?Datetime
    private $customProperties; // Object ???

    /* ===== Translatable ===== */

    private string $title;
    private string $description;

    /* ===== Entity ===== */

    private int $priority;
    private string $refTable;
    private int $rowId;
    private ?string $parent = null; // ?IRI
    private string $status; // IRI
    private string $type; // IRI
    private ?string $author = null; // IRI
    private ?string $project = null; // ?IRI

    public function getParent(): ?string
    {
        return $this->parent;
    }

    public function setParent(?string $parent): void
    {
        $this->parent = $parent;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function getDisabledAt(): ?string
    {
        return $this->disabledAt;
    }

    public function setDisabledAt(?string $disabledAt): void
    {
        $this->disabledAt = $disabledAt;
    }

    /**
     * @return mixed
     */
    public function getCustomProperties()
    {
        return $this->customProperties;
    }

    /**
     * @param mixed $customProperties
     */
    public function setCustomProperties($customProperties): void
    {
        $this->customProperties = $customProperties;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    public function getRefTable(): string
    {
        return $this->refTable;
    }

    public function setRefTable(string $refTable): void
    {
        $this->refTable = $refTable;
    }

    public function getRowId(): int
    {
        return $this->rowId;
    }

    public function setRowId(int $rowId): void
    {
        $this->rowId = $rowId;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): void
    {
        $this->author = $author;
    }

    public function getProject(): ?string
    {
        return $this->project;
    }

    public function setProject(?string $project): void
    {
        $this->project = $project;
    }
}