<?php

namespace Phpc\PHPReaction\V3\NoteBundle\Note\Requests;

use Phpc\Core\AbstractRequest;

// TODO review properties types to have actual objects?
//      how to detect from spec
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

    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
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
    public function getApiTranslations()
    {
        return $this->apiTranslations;
    }

    /**
     * @param mixed $apiTranslations
     */
    public function setApiTranslations($apiTranslations): void
    {
        $this->apiTranslations = $apiTranslations;
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

    public function getParent(): ?string
    {
        return $this->parent;
    }

    public function setParent(?string $parent): void
    {
        $this->parent = $parent;
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