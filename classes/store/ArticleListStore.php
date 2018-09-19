<?php namespace Lovata\GoodNews\Classes\Store;

use Lovata\Toolbox\Classes\Store\AbstractListStore;

use Lovata\GoodNews\Classes\Store\Article\PublishedListStore;
use Lovata\GoodNews\Classes\Store\Article\SortingListStore;
use Lovata\GoodNews\Classes\Store\Article\ListByCategoryStore;

/**
 * Class ArticleListStore
 * @package Lovata\GoodNews\Classes\Store
 * @author  Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 * @property PublishedListStore  $published
 * @property SortingListStore    $sorting
 * @property ListByCategoryStore $category
 */
class ArticleListStore extends AbstractListStore
{
    const SORT_NO = 'no';
    const SORT_PUBLISH_ASC = 'publish|asc';
    const SORT_PUBLISH_DESC = 'publish|desc';
    const SORT_VIEW_COUNT_ASC = 'view|asc';
    const SORT_VIEW_COUNT_DESC = 'view|desc';

    protected static $instance;

    /**
     * Init store method
     */
    protected function init()
    {
        $this->addToStoreList('category', ListByCategoryStore::class);
        $this->addToStoreList('sorting', SortingListStore::class);
        $this->addToStoreList('published', PublishedListStore::class);
    }

    /**
     * Get available sorting value list
     *
     * @return array
     */
    public function getAvailableSorting()
    {
        return [
            self::SORT_NO,
            self::SORT_PUBLISH_ASC,
            self::SORT_PUBLISH_DESC,
            self::SORT_VIEW_COUNT_ASC,
            self::SORT_VIEW_COUNT_DESC,
        ];
    }
}
