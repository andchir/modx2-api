<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * ModxUserAttributes
 *
 * @ORM\Table(name="modx_user_attributes", uniqueConstraints={@ORM\UniqueConstraint(name="internalKey", columns={"internalKey"})})
 * @ORM\Entity
 * @ApiResource
 */
class ModxUserAttributes
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
     * @var int
     *
     * @ORM\Column(name="internalKey", type="integer", nullable=false)
     */
    private $internalkey;

    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="string", length=100, nullable=false)
     */
    private $fullname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=100, nullable=false)
     */
    private $phone = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mobilephone", type="string", length=100, nullable=false)
     */
    private $mobilephone = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="blocked", type="boolean", nullable=false)
     */
    private $blocked = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="blockeduntil", type="integer", nullable=false)
     */
    private $blockeduntil = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="blockedafter", type="integer", nullable=false)
     */
    private $blockedafter = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="logincount", type="integer", nullable=false)
     */
    private $logincount = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="lastlogin", type="integer", nullable=false)
     */
    private $lastlogin = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="thislogin", type="integer", nullable=false)
     */
    private $thislogin = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="failedlogincount", type="integer", nullable=false)
     */
    private $failedlogincount = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sessionid", type="string", length=100, nullable=false)
     */
    private $sessionid = '';

    /**
     * @var int
     *
     * @ORM\Column(name="dob", type="integer", nullable=false)
     */
    private $dob = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="gender", type="integer", nullable=false)
     */
    private $gender = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text", length=65535, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=191, nullable=false)
     */
    private $country = '';

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=191, nullable=false)
     */
    private $city = '';

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=25, nullable=false)
     */
    private $state = '';

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=25, nullable=false)
     */
    private $zip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=100, nullable=false)
     */
    private $fax = '';

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=191, nullable=false)
     */
    private $photo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=191, nullable=false)
     */
    private $website = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="extended", type="text", length=65535, nullable=true)
     */
    private $extended;

    /**
     * @var ModxUsers
     *
     * @ORM\OneToOne(targetEntity="ModxUsers", mappedBy="attributes")
     * @ORM\JoinColumn(name="internalKey", referencedColumnName="id")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInternalkey(): ?int
    {
        return $this->internalkey;
    }

    public function setInternalkey(int $internalkey): self
    {
        $this->internalkey = $internalkey;

        return $this;
    }

    public function getFullname(): ?string
    {
        return $this->fullname;
    }

    public function setFullname(string $fullname): self
    {
        $this->fullname = $fullname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getMobilephone(): ?string
    {
        return $this->mobilephone;
    }

    public function setMobilephone(string $mobilephone): self
    {
        $this->mobilephone = $mobilephone;

        return $this;
    }

    public function getBlocked(): ?bool
    {
        return $this->blocked;
    }

    public function setBlocked(bool $blocked): self
    {
        $this->blocked = $blocked;

        return $this;
    }

    public function getBlockeduntil(): ?int
    {
        return $this->blockeduntil;
    }

    public function setBlockeduntil(int $blockeduntil): self
    {
        $this->blockeduntil = $blockeduntil;

        return $this;
    }

    public function getBlockedafter(): ?int
    {
        return $this->blockedafter;
    }

    public function setBlockedafter(int $blockedafter): self
    {
        $this->blockedafter = $blockedafter;

        return $this;
    }

    public function getLogincount(): ?int
    {
        return $this->logincount;
    }

    public function setLogincount(int $logincount): self
    {
        $this->logincount = $logincount;

        return $this;
    }

    public function getLastlogin(): ?int
    {
        return $this->lastlogin;
    }

    public function setLastlogin(int $lastlogin): self
    {
        $this->lastlogin = $lastlogin;

        return $this;
    }

    public function getThislogin(): ?int
    {
        return $this->thislogin;
    }

    public function setThislogin(int $thislogin): self
    {
        $this->thislogin = $thislogin;

        return $this;
    }

    public function getFailedlogincount(): ?int
    {
        return $this->failedlogincount;
    }

    public function setFailedlogincount(int $failedlogincount): self
    {
        $this->failedlogincount = $failedlogincount;

        return $this;
    }

    public function getSessionid(): ?string
    {
        return $this->sessionid;
    }

    public function setSessionid(string $sessionid): self
    {
        $this->sessionid = $sessionid;

        return $this;
    }

    public function getDob(): ?int
    {
        return $this->dob;
    }

    public function setDob(int $dob): self
    {
        $this->dob = $dob;

        return $this;
    }

    public function getGender(): ?int
    {
        return $this->gender;
    }

    public function setGender(int $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getExtended(): ?string
    {
        return $this->extended;
    }

    public function setExtended(?string $extended): self
    {
        $this->extended = $extended;

        return $this;
    }

    public function getUser(): ?ModxUsers
    {
        return $this->user;
    }

    public function setUser(?ModxUsers $user): self
    {
        $this->user = $user;

        // set (or unset) the owning side of the relation if necessary
        $newAttributes = null === $user ? null : $this;
        if ($user->getAttributes() !== $newAttributes) {
            $user->setAttributes($newAttributes);
        }

        return $this;
    }


}
