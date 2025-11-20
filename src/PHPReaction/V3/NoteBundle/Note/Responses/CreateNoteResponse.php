<?php

namespace Phpc\PHPReaction\V3\NoteBundle\Note\Responses;

use Phpc\Core\AbstractResponse;

/**
 * CreateNoteResponse
 *
 * No setters on response objects, they are readonly.
 * Populate data using json deserialize from parent, so json response is deserialized into object.
 */
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
    private array $children = []; // Array of notes objects
    private string $status; // IRI
    private string $type; // IRI
    private ?string $author = null; // IRI
    private ?string $project = null; // ?IRI

    private int $root;
    private int $lvl;
    private int $lft;
    private int $rgt;
    private string $toString;

    private string $translationDescriptionPropertyName;
    private string $translationsListing;
    private string $childrenListing;
    private string $commentsListing;
    private string $participantsListing;
    private string $connectionsListing;
    private string $customPropertiesListing;

    private bool $leaf;
    private bool $leafApi;
    private int $levelApi;

    private string $translationTitlePropertyName;

    private bool $virtualRelation;

    private string $anonymousToken;

    private string $filesListing;
    private string $modificationHistoryListing;
    private string $notesListing;
    private string $ownershipsListing;
    private string $approvalsListing;

    private string $uniqueId;
    private string $taggingListing;

    private bool $enabled;
    private bool $disabled;

    public function getParent(): ?string
    {
        return $this->parent;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    public function getDisabledAt(): ?string
    {
        return $this->disabledAt;
    }

    /**
     * @return mixed
     */
    public function getCustomProperties()
    {
        return $this->customProperties;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function getRefTable(): string
    {
        return $this->refTable;
    }

    public function getRowId(): int
    {
        return $this->rowId;
    }

    public function getChildren(): array
    {
        return $this->children;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function getProject(): ?string
    {
        return $this->project;
    }

    public function getRoot(): int
    {
        return $this->root;
    }

    public function getLvl(): int
    {
        return $this->lvl;
    }

    public function getLft(): int
    {
        return $this->lft;
    }

    public function getRgt(): int
    {
        return $this->rgt;
    }

    public function getToString(): string
    {
        return $this->toString;
    }

    public function getTranslationDescriptionPropertyName(): string
    {
        return $this->translationDescriptionPropertyName;
    }

    public function getTranslationsListing(): string
    {
        return $this->translationsListing;
    }

    public function getChildrenListing(): string
    {
        return $this->childrenListing;
    }

    public function getCommentsListing(): string
    {
        return $this->commentsListing;
    }

    public function getParticipantsListing(): string
    {
        return $this->participantsListing;
    }

    public function getConnectionsListing(): string
    {
        return $this->connectionsListing;
    }

    public function getCustomPropertiesListing(): string
    {
        return $this->customPropertiesListing;
    }

    public function isLeaf(): bool
    {
        return $this->leaf;
    }

    public function isLeafApi(): bool
    {
        return $this->leafApi;
    }

    public function getLevelApi(): int
    {
        return $this->levelApi;
    }

    public function getTranslationTitlePropertyName(): string
    {
        return $this->translationTitlePropertyName;
    }

    public function isVirtualRelation(): bool
    {
        return $this->virtualRelation;
    }

    public function getAnonymousToken(): string
    {
        return $this->anonymousToken;
    }

    public function getFilesListing(): string
    {
        return $this->filesListing;
    }

    public function getModificationHistoryListing(): string
    {
        return $this->modificationHistoryListing;
    }

    public function getNotesListing(): string
    {
        return $this->notesListing;
    }

    public function getOwnershipsListing(): string
    {
        return $this->ownershipsListing;
    }

    public function getApprovalsListing(): string
    {
        return $this->approvalsListing;
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function getTaggingListing(): string
    {
        return $this->taggingListing;
    }

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function isDisabled(): bool
    {
        return $this->disabled;
    }
}

