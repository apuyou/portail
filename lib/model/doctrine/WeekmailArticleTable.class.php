<?php

/**
 * WeekmailArticleTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class WeekmailArticleTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object WeekmailArticleTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('WeekmailArticle');
    }

    public function getArticlesForWeekmail($weekmail_id) {
      $q = $this->createQuery('q')
                ->where('q.weekmail_id = ?',$weekmail_id)
                ->andWhere('q.article_id IS NOT NULL');
      return $q;
    }

    public function getEventsForWeekmail($weekmail_id) {
      $q = $this->createQuery('q')
                ->where('q.weekmail_id = ?',$weekmail_id)
                ->andWhere('q.event_id IS NOT NULL');
      return $q;
    }
}

