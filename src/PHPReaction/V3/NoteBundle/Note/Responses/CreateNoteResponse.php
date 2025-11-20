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

    public function getChildren(): array
    {
        return $this->children;
    }

    public function setChildren(array $children): void
    {
        $this->children = $children;
    }

    public function getRoot(): int
    {
        return $this->root;
    }

    public function setRoot(int $root): void
    {
        $this->root = $root;
    }

    public function getLvl(): int
    {
        return $this->lvl;
    }

    public function setLvl(int $lvl): void
    {
        $this->lvl = $lvl;
    }

    public function getLft(): int
    {
        return $this->lft;
    }

    public function setLft(int $lft): void
    {
        $this->lft = $lft;
    }

    public function getRgt(): int
    {
        return $this->rgt;
    }

    public function setRgt(int $rgt): void
    {
        $this->rgt = $rgt;
    }

    public function getToString(): string
    {
        return $this->toString;
    }

    public function setToString(string $toString): void
    {
        $this->toString = $toString;
    }

    public function getTranslationDescriptionPropertyName(): string
    {
        return $this->translationDescriptionPropertyName;
    }

    public function setTranslationDescriptionPropertyName(string $translationDescriptionPropertyName): void
    {
        $this->translationDescriptionPropertyName = $translationDescriptionPropertyName;
    }

    public function getTranslationsListing(): string
    {
        return $this->translationsListing;
    }

    public function setTranslationsListing(string $translationsListing): void
    {
        $this->translationsListing = $translationsListing;
    }

    public function getChildrenListing(): string
    {
        return $this->childrenListing;
    }

    public function setChildrenListing(string $childrenListing): void
    {
        $this->childrenListing = $childrenListing;
    }

    public function getCommentsListing(): string
    {
        return $this->commentsListing;
    }

    public function setCommentsListing(string $commentsListing): void
    {
        $this->commentsListing = $commentsListing;
    }

    public function getParticipantsListing(): string
    {
        return $this->participantsListing;
    }

    public function setParticipantsListing(string $participantsListing): void
    {
        $this->participantsListing = $participantsListing;
    }

    public function getConnectionsListing(): string
    {
        return $this->connectionsListing;
    }

    public function setConnectionsListing(string $connectionsListing): void
    {
        $this->connectionsListing = $connectionsListing;
    }

    public function getCustomPropertiesListing(): string
    {
        return $this->customPropertiesListing;
    }

    public function setCustomPropertiesListing(string $customPropertiesListing): void
    {
        $this->customPropertiesListing = $customPropertiesListing;
    }

    public function isLeaf(): bool
    {
        return $this->leaf;
    }

    public function setLeaf(bool $leaf): void
    {
        $this->leaf = $leaf;
    }

    public function isLeafApi(): bool
    {
        return $this->leafApi;
    }

    public function setLeafApi(bool $leafApi): void
    {
        $this->leafApi = $leafApi;
    }

    public function getLevelApi(): int
    {
        return $this->levelApi;
    }

    public function setLevelApi(int $levelApi): void
    {
        $this->levelApi = $levelApi;
    }

    public function getTranslationTitlePropertyName(): string
    {
        return $this->translationTitlePropertyName;
    }

    public function setTranslationTitlePropertyName(string $translationTitlePropertyName): void
    {
        $this->translationTitlePropertyName = $translationTitlePropertyName;
    }

    public function isVirtualRelation(): bool
    {
        return $this->virtualRelation;
    }

    public function setVirtualRelation(bool $virtualRelation): void
    {
        $this->virtualRelation = $virtualRelation;
    }

    public function getAnonymousToken(): string
    {
        return $this->anonymousToken;
    }

    public function setAnonymousToken(string $anonymousToken): void
    {
        $this->anonymousToken = $anonymousToken;
    }

    public function getFilesListing(): string
    {
        return $this->filesListing;
    }

    public function setFilesListing(string $filesListing): void
    {
        $this->filesListing = $filesListing;
    }

    public function getModificationHistoryListing(): string
    {
        return $this->modificationHistoryListing;
    }

    public function setModificationHistoryListing(string $modificationHistoryListing): void
    {
        $this->modificationHistoryListing = $modificationHistoryListing;
    }

    public function getNotesListing(): string
    {
        return $this->notesListing;
    }

    public function setNotesListing(string $notesListing): void
    {
        $this->notesListing = $notesListing;
    }

    public function getOwnershipsListing(): string
    {
        return $this->ownershipsListing;
    }

    public function setOwnershipsListing(string $ownershipsListing): void
    {
        $this->ownershipsListing = $ownershipsListing;
    }

    public function getApprovalsListing(): string
    {
        return $this->approvalsListing;
    }

    public function setApprovalsListing(string $approvalsListing): void
    {
        $this->approvalsListing = $approvalsListing;
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function setUniqueId(string $uniqueId): void
    {
        $this->uniqueId = $uniqueId;
    }

    public function getTaggingListing(): string
    {
        return $this->taggingListing;
    }

    public function setTaggingListing(string $taggingListing): void
    {
        $this->taggingListing = $taggingListing;
    }

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    public function isDisabled(): bool
    {
        return $this->disabled;
    }

    public function setDisabled(bool $disabled): void
    {
        $this->disabled = $disabled;
    }
}
