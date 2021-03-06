<?php
namespace woojos\kontomierz;

/**
 * Class TransactionQuery
 * @package woojos\Kontomierz
 */
class TransactionQuery
{
    /** @var int */
    private $page;
    /** @var int */
    private $perPage;
    /** @var int */
    private $userAccountId;
    /** @var string */
    private $query;
    /** @var \DateTimeInterface */
    private $startOn;
    /** @var \DateTimeInterface */
    private $endOn;
    /** @var string */
    private $direction;
    /** @var string */
    private $tagName;
    /** @var int */
    private $categoryGroupId;
    /** @var int */
    private $categoryId;
    /** @var bool */
    private $import_hidden=false;
    /** @var bool */
    private $import_interest=false;

    /**
     * @return string
     */
    public function buildQuery()
    {
        $query = [];

        if (!empty($this->page)) {
            $query['page'] = $this->page;
        }

        if (!empty($this->perPage)) {
            $query['per_page'] = $this->perPage;
        }

        if (!empty($this->userAccountId)) {
            $query['user_account_id'] = $this->userAccountId;
        }

        if (!empty($this->query)) {
            $query['q'] = $this->query;
        }

        if (!empty($this->startOn)) {
            $query['start_on'] = $this->startOn->format('Y-m-d');
        }

        if (!empty($this->endOn)) {
            $query['end_on'] = $this->endOn->format('Y-m-d');
        }

        if (!empty($this->direction)) {
            $query['direction'] = $this->direction;
        }

        if (!empty($this->categoryGroupId)) {
            $query['category_group_id'] = $this->categoryGroupId;
        }

        if (!empty($this->categoryId)) {
            $query['category_id'] = $this->categoryId;
        }

        if($this->isImportHidden())
            $query['show_hidden_transactions'] = 'true';

        if($this->isImportInterest())
            $query['show_interest_income_transactions'] = 'true';

        return http_build_query($query);
    }

    /**
     * @return boolean
     */
    public function isImportHidden()
    {
        return $this->import_hidden;
    }

    /**
     * @param boolean $import_hidden
     */
    public function setImportHidden($import_hidden)
    {
        $this->import_hidden = $import_hidden;
    }

    /**
     * @return boolean
     */
    public function isImportInterest()
    {
        return $this->import_interest;
    }

    /**
     * @param boolean $import_interest
     */
    public function setImportInterest($import_interest)
    {
        $this->import_interest = $import_interest;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @return int
     */
    public function getPerPage()
    {
        return $this->perPage;
    }

    /**
     * @param int $perPage
     */
    public function setPerPage($perPage)
    {
        $this->perPage = $perPage;
    }

    /**
     * @return int
     */
    public function getUserAccountId()
    {
        return $this->userAccountId;
    }

    /**
     * @param int $userAccountId
     */
    public function setUserAccountId($userAccountId)
    {
        $this->userAccountId = $userAccountId;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param string $query
     */
    public function setQuery($query)
    {
        $this->query = $query;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartOn()
    {
        return $this->startOn;
    }

    /**
     * @param \DateTimeInterface $startOn
     */
    public function setStartOn($startOn)
    {
        $this->startOn = $startOn;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndOn()
    {
        return $this->endOn;
    }

    /**
     * @param \DateTimeInterface $endOn
     */
    public function setEndOn($endOn)
    {
        $this->endOn = $endOn;
    }

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @param string $direction
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
    }

    /**
     * @return string
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * @param string $tagName
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;
    }

    /**
     * @return int
     */
    public function getCategoryGroupId()
    {
        return $this->categoryGroupId;
    }

    /**
     * @param int $categoryGroupId
     */
    public function setCategoryGroupId($categoryGroupId)
    {
        $this->categoryGroupId = $categoryGroupId;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }
}