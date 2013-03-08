<?php

/**
 * ArticleTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ArticleTable extends Doctrine_Table {

  /**
   * Returns an instance of this class.
   *
   * @return object ArticleTable
   */
  public static function getInstance() {
    return Doctrine_Core::getTable('Article');
  }

  /**
   * 
   * Fetch the list of all articles sorted by date.
   * 
   * @param int $asso
   */
  public function getArticlesList($asso = null) {
    $q = $this->createQuery('a')
            ->select('a.*, as.id, p.couleur')
            ->leftJoin('a.Asso as')
            ->leftJoin('as.Pole p')
            ->addOrderBy('a.created_at DESC');

    if (!is_null($asso))
      /*if ($asso->isPole())
        $q = $q->leftJoin('Asso as')->where("as.pole_id = ?", $asso->getPrimaryKey());
      else*/
        $q = $q->where("a.asso_id = ?", $asso->getPrimaryKey());

    return $q;
  }

  public function getLastArticles($count = 3) {
    $q = $this->getArticlesList()
            ->limit($count);
    return $q;
  }

}
