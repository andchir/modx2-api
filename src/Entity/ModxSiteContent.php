<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * ModxSiteContent
 *
 * @ORM\Table(name="modx_site_content", indexes={@ORM\Index(name="class_key", columns={"class_key"}), @ORM\Index(name="published", columns={"published"}), @ORM\Index(name="uri", columns={"uri"}), @ORM\Index(name="unpub_date", columns={"unpub_date"}), @ORM\Index(name="hide_children_in_tree", columns={"hide_children_in_tree"}), @ORM\Index(name="isfolder", columns={"isfolder"}), @ORM\Index(name="cache_refresh_idx", columns={"parent", "menuindex", "id"}), @ORM\Index(name="menuindex", columns={"menuindex"}), @ORM\Index(name="cacheable", columns={"cacheable"}), @ORM\Index(name="hidemenu", columns={"hidemenu"}), @ORM\Index(name="alias", columns={"alias"}), @ORM\Index(name="context_key", columns={"context_key"}), @ORM\Index(name="pub_date", columns={"pub_date"}), @ORM\Index(name="uri_override", columns={"uri_override"}), @ORM\Index(name="parent", columns={"parent"}), @ORM\Index(name="show_in_tree", columns={"show_in_tree"}), @ORM\Index(name="template", columns={"template"}), @ORM\Index(name="searchable", columns={"searchable"}), @ORM\Index(name="content_ft_idx", columns={"pagetitle", "longtitle", "description", "introtext", "content"})})
 * @ORM\Entity
 * @ApiResource
 * @ApiFilter(SearchFilter::class, properties={"id": "exact", "pagetitle": "partial", "longtitle": "partial", "description": "partial"})
 */
class ModxSiteContent
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false, options={"default"="document"})
     */
    private $type = 'document';

    /**
     * @var string
     *
     * @ORM\Column(name="contentType", type="string", length=50, nullable=false, options={"default"="text/html"})
     */
    private $contenttype = 'text/html';

    /**
     * @var string
     *
     * @ORM\Column(name="pagetitle", type="string", length=191, nullable=false)
     */
    private $pagetitle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="longtitle", type="string", length=191, nullable=false)
     */
    private $longtitle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alias", type="string", length=191, nullable=true)
     */
    private $alias = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="alias_visible", type="boolean", nullable=false, options={"default"="1"})
     */
    private $aliasVisible = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="link_attributes", type="string", length=191, nullable=false)
     */
    private $linkAttributes = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="published", type="boolean", nullable=false)
     */
    private $published = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pub_date", type="integer", nullable=false)
     */
    private $pubDate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="unpub_date", type="integer", nullable=false)
     */
    private $unpubDate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="parent", type="integer", nullable=false)
     */
    private $parent = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isfolder", type="boolean", nullable=false)
     */
    private $isfolder = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="introtext", type="text", length=65535, nullable=true)
     */
    private $introtext;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content", type="text", length=16777215, nullable=true)
     */
    private $content;

    /**
     * @var bool
     *
     * @ORM\Column(name="richtext", type="boolean", nullable=false, options={"default"="1"})
     */
    private $richtext = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="template", type="integer", nullable=false)
     */
    private $template = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="menuindex", type="integer", nullable=false)
     */
    private $menuindex = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="searchable", type="boolean", nullable=false, options={"default"="1"})
     */
    private $searchable = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="cacheable", type="boolean", nullable=false, options={"default"="1"})
     */
    private $cacheable = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="createdby", type="integer", nullable=false)
     */
    private $createdby = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="createdon", type="integer", nullable=false)
     */
    private $createdon = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="editedby", type="integer", nullable=false)
     */
    private $editedby = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="editedon", type="integer", nullable=false)
     */
    private $editedon = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="deletedon", type="integer", nullable=false)
     */
    private $deletedon = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="deletedby", type="integer", nullable=false)
     */
    private $deletedby = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="publishedon", type="integer", nullable=false)
     */
    private $publishedon = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="publishedby", type="integer", nullable=false)
     */
    private $publishedby = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="menutitle", type="string", length=191, nullable=false)
     */
    private $menutitle = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="donthit", type="boolean", nullable=false)
     */
    private $donthit = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="privateweb", type="boolean", nullable=false)
     */
    private $privateweb = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="privatemgr", type="boolean", nullable=false)
     */
    private $privatemgr = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="content_dispo", type="boolean", nullable=false)
     */
    private $contentDispo = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="hidemenu", type="boolean", nullable=false)
     */
    private $hidemenu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="class_key", type="string", length=100, nullable=false, options={"default"="modDocument"})
     */
    private $classKey = 'modDocument';

    /**
     * @var string
     *
     * @ORM\Column(name="context_key", type="string", length=100, nullable=false, options={"default"="web"})
     */
    private $contextKey = 'web';

    /**
     * @var int
     *
     * @ORM\Column(name="content_type", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $contentType = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="uri", type="text", length=65535, nullable=true)
     */
    private $uri;

    /**
     * @var bool
     *
     * @ORM\Column(name="uri_override", type="boolean", nullable=false)
     */
    private $uriOverride = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="hide_children_in_tree", type="boolean", nullable=false)
     */
    private $hideChildrenInTree = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="show_in_tree", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showInTree = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="properties", type="text", length=16777215, nullable=true)
     */
    private $properties;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getContenttype(): ?string
    {
        return $this->contenttype;
    }

    public function setContenttype(string $contenttype): self
    {
        $this->contenttype = $contenttype;

        return $this;
    }

    public function getPagetitle(): ?string
    {
        return $this->pagetitle;
    }

    public function setPagetitle(string $pagetitle): self
    {
        $this->pagetitle = $pagetitle;

        return $this;
    }

    public function getLongtitle(): ?string
    {
        return $this->longtitle;
    }

    public function setLongtitle(string $longtitle): self
    {
        $this->longtitle = $longtitle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAlias(): ?string
    {
        return $this->alias;
    }

    public function setAlias(?string $alias): self
    {
        $this->alias = $alias;

        return $this;
    }

    public function getAliasVisible(): ?bool
    {
        return $this->aliasVisible;
    }

    public function setAliasVisible(bool $aliasVisible): self
    {
        $this->aliasVisible = $aliasVisible;

        return $this;
    }

    public function getLinkAttributes(): ?string
    {
        return $this->linkAttributes;
    }

    public function setLinkAttributes(string $linkAttributes): self
    {
        $this->linkAttributes = $linkAttributes;

        return $this;
    }

    public function getPublished(): ?bool
    {
        return $this->published;
    }

    public function setPublished(bool $published): self
    {
        $this->published = $published;

        return $this;
    }

    public function getPubDate(): ?int
    {
        return $this->pubDate;
    }

    public function setPubDate(int $pubDate): self
    {
        $this->pubDate = $pubDate;

        return $this;
    }

    public function getUnpubDate(): ?int
    {
        return $this->unpubDate;
    }

    public function setUnpubDate(int $unpubDate): self
    {
        $this->unpubDate = $unpubDate;

        return $this;
    }

    public function getParent(): ?int
    {
        return $this->parent;
    }

    public function setParent(int $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getIsfolder(): ?bool
    {
        return $this->isfolder;
    }

    public function setIsfolder(bool $isfolder): self
    {
        $this->isfolder = $isfolder;

        return $this;
    }

    public function getIntrotext(): ?string
    {
        return $this->introtext;
    }

    public function setIntrotext(?string $introtext): self
    {
        $this->introtext = $introtext;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getRichtext(): ?bool
    {
        return $this->richtext;
    }

    public function setRichtext(bool $richtext): self
    {
        $this->richtext = $richtext;

        return $this;
    }

    public function getTemplate(): ?int
    {
        return $this->template;
    }

    public function setTemplate(int $template): self
    {
        $this->template = $template;

        return $this;
    }

    public function getMenuindex(): ?int
    {
        return $this->menuindex;
    }

    public function setMenuindex(int $menuindex): self
    {
        $this->menuindex = $menuindex;

        return $this;
    }

    public function getSearchable(): ?bool
    {
        return $this->searchable;
    }

    public function setSearchable(bool $searchable): self
    {
        $this->searchable = $searchable;

        return $this;
    }

    public function getCacheable(): ?bool
    {
        return $this->cacheable;
    }

    public function setCacheable(bool $cacheable): self
    {
        $this->cacheable = $cacheable;

        return $this;
    }

    public function getCreatedby(): ?int
    {
        return $this->createdby;
    }

    public function setCreatedby(int $createdby): self
    {
        $this->createdby = $createdby;

        return $this;
    }

    public function getCreatedon(): ?int
    {
        return $this->createdon;
    }

    public function setCreatedon(int $createdon): self
    {
        $this->createdon = $createdon;

        return $this;
    }

    public function getEditedby(): ?int
    {
        return $this->editedby;
    }

    public function setEditedby(int $editedby): self
    {
        $this->editedby = $editedby;

        return $this;
    }

    public function getEditedon(): ?int
    {
        return $this->editedon;
    }

    public function setEditedon(int $editedon): self
    {
        $this->editedon = $editedon;

        return $this;
    }

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }

    public function getDeletedon(): ?int
    {
        return $this->deletedon;
    }

    public function setDeletedon(int $deletedon): self
    {
        $this->deletedon = $deletedon;

        return $this;
    }

    public function getDeletedby(): ?int
    {
        return $this->deletedby;
    }

    public function setDeletedby(int $deletedby): self
    {
        $this->deletedby = $deletedby;

        return $this;
    }

    public function getPublishedon(): ?int
    {
        return $this->publishedon;
    }

    public function setPublishedon(int $publishedon): self
    {
        $this->publishedon = $publishedon;

        return $this;
    }

    public function getPublishedby(): ?int
    {
        return $this->publishedby;
    }

    public function setPublishedby(int $publishedby): self
    {
        $this->publishedby = $publishedby;

        return $this;
    }

    public function getMenutitle(): ?string
    {
        return $this->menutitle;
    }

    public function setMenutitle(string $menutitle): self
    {
        $this->menutitle = $menutitle;

        return $this;
    }

    public function getDonthit(): ?bool
    {
        return $this->donthit;
    }

    public function setDonthit(bool $donthit): self
    {
        $this->donthit = $donthit;

        return $this;
    }

    public function getPrivateweb(): ?bool
    {
        return $this->privateweb;
    }

    public function setPrivateweb(bool $privateweb): self
    {
        $this->privateweb = $privateweb;

        return $this;
    }

    public function getPrivatemgr(): ?bool
    {
        return $this->privatemgr;
    }

    public function setPrivatemgr(bool $privatemgr): self
    {
        $this->privatemgr = $privatemgr;

        return $this;
    }

    public function getContentDispo(): ?bool
    {
        return $this->contentDispo;
    }

    public function setContentDispo(bool $contentDispo): self
    {
        $this->contentDispo = $contentDispo;

        return $this;
    }

    public function getHidemenu(): ?bool
    {
        return $this->hidemenu;
    }

    public function setHidemenu(bool $hidemenu): self
    {
        $this->hidemenu = $hidemenu;

        return $this;
    }

    public function getClassKey(): ?string
    {
        return $this->classKey;
    }

    public function setClassKey(string $classKey): self
    {
        $this->classKey = $classKey;

        return $this;
    }

    public function getContextKey(): ?string
    {
        return $this->contextKey;
    }

    public function setContextKey(string $contextKey): self
    {
        $this->contextKey = $contextKey;

        return $this;
    }

    public function getUri(): ?string
    {
        return $this->uri;
    }

    public function setUri(?string $uri): self
    {
        $this->uri = $uri;

        return $this;
    }

    public function getUriOverride(): ?bool
    {
        return $this->uriOverride;
    }

    public function setUriOverride(bool $uriOverride): self
    {
        $this->uriOverride = $uriOverride;

        return $this;
    }

    public function getHideChildrenInTree(): ?bool
    {
        return $this->hideChildrenInTree;
    }

    public function setHideChildrenInTree(bool $hideChildrenInTree): self
    {
        $this->hideChildrenInTree = $hideChildrenInTree;

        return $this;
    }

    public function getShowInTree(): ?bool
    {
        return $this->showInTree;
    }

    public function setShowInTree(bool $showInTree): self
    {
        $this->showInTree = $showInTree;

        return $this;
    }

    public function getProperties(): ?string
    {
        return $this->properties;
    }

    public function setProperties(?string $properties): self
    {
        $this->properties = $properties;

        return $this;
    }


}
