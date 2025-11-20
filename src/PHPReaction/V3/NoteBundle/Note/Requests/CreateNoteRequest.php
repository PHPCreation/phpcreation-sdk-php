<?php

namespace Phpc\PHPReaction\V3\NoteBundle\Note\Requests;

use Phpc\Core\AbstractRequest;

// TODO review properties types to have actual objects?
//      how to detect from spec

/**
 * CreateNoteRequest.
 *
 * Contains properties that can be used to create a note.
 */
final class CreateNoteRequest extends AbstractRequest
{
    /* ===== Base ===== */

    private string $slug;
    private ?string $disabledAt = null; // ?Datetime

    /* ===== Translatable ===== */

    private $apiTranslations; // Object???

    /* ===== Entity ===== */

    private int $priority;
    private string $refTable;
    private int $rowId;
    private ?string $parent = null; // ?IRI
    private string $status; // IRI
    private string $type; // IRI
    private ?string $author = null; // IRI
    private ?string $project = null; //?IRI

    public function __construct(
        string $slug,
        int $priority,
        string $refTable,
        int $rowId,
        string $status,
        string $type
    ) {
        $this->slug = $slug;
        $this->priority = $priority;
        $this->refTable = $refTable;
        $this->rowId = $rowId;
        $this->status = $status;
        $this->type = $type;
    }


    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;
        return $this;
    }

    public function getDisabledAt(): ?string
    {
        return $this->disabledAt;
    }

    public function setDisabledAt(?string $disabledAt): self
    {
        $this->disabledAt = $disabledAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApiTranslations()
    {
        return $this->apiTranslations;
    }

    /**
     * @param mixed $apiTranslations
     */
    public function setApiTranslations($apiTranslations): self
    {
        $this->apiTranslations = $apiTranslations;
        return $this;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): self
    {
        $this->priority = $priority;
        return $this;
    }

    public function getRefTable(): string
    {
        return $this->refTable;
    }

    public function setRefTable(string $refTable): self
    {
        $this->refTable = $refTable;
        return $this;
    }

    public function getRowId(): int
    {
        return $this->rowId;
    }

    public function setRowId(int $rowId): self
    {
        $this->rowId = $rowId;
        return $this;
    }

    public function getParent(): ?string
    {
        return $this->parent;
    }

    public function setParent(?string $parent): self
    {
        $this->parent = $parent;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): self
    {
        $this->author = $author;
        return $this;
    }

    public function getProject(): ?string
    {
        return $this->project;
    }

    public function setProject(?string $project): self
    {
        $this->project = $project;
        return $this;
    }
}
