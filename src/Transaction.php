<?php
namespace woojos\kontomierz;

/**
 * Class Transaction
 * @package woojos\Kontomierz
 */
class Transaction
{
    const DIRECTION_WITHDRAWAL = 'withdrawal';
    const DIRECTION_DEPOSIT = 'deposit';
    const DIRECTION_ALL = 'all';



    /** @var int */
    private $id;
    /** @var int */
    private $userAccountId;
    /** @var int */
    private $categoryId;
    /** @var float */
    private $currencyAmount;
    /** @var string */
    private $currencyName;
    /** @var \DateTimeInterface */
    private $transactionOn;
    /** @var string */
    private $name;
    /** @var string */
    private $tagString;
    private $contractor;
    private $iban;
    private $categoryName;
    /** @var string */
    private $kind;

    /**
     * @param int $id
     * @param int $userAccountId
     * @param int $categoryId
     * @param float $currencyAmount
     * @param string $currencyName
     * @param \DateTimeInterface $transactionOn
     * @param string $name
     * @param string $tagString
     */
    public function __construct($id, $userAccountId, $categoryId, $categoryName, $currencyAmount, $currencyName, \DateTimeInterface $transactionOn, $name, $tagString = '',$iban, $contractor,$kind)
    {
        $this->id = $id;
        $this->userAccountId = $userAccountId;
        $this->categoryId = $categoryId;
        $this->categoryName = $categoryName;
        $this->currencyAmount = $currencyAmount;
        $this->currencyName = $currencyName;
        $this->transactionOn = $transactionOn;
        $this->name = $name;
        $this->tagString = $tagString;
        $this->iban = $iban;
        $this->contractor = $contractor;
        $this->kind = $kind;
    }


    /**
     * @return mixed
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getUserAccountId()
    {
        return $this->userAccountId;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @return float
     */
    public function getCurrencyAmount()
    {
        return $this->currencyAmount;
    }

    /**
     * @return string
     */
    public function getCurrencyName()
    {
        return $this->currencyName;
    }

    /**
     * @return \DateTime
     */
    public function getTransactionOn()
    {
        return $this->transactionOn;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getTagString()
    {
        return $this->tagString;
    }

    /**
     * @return mixed
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @param mixed $categoryName
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }

    /**
     * @return mixed
     */
    public function getContractor()
    {
        return $this->contractor;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param string $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

}