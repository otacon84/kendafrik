<?php

class CategoryTable extends Doctrine_Table
{
  public function getCategoriesList($culture = 'en')
  {
    $q = $this->createQuery('a')
    ->leftJoin('a.Translation t')
    ->andWhere('t.lang = ?', $culture);
 
    return $q->execute(array(), Doctrine::HYDRATE_ARRAY);
  }
}
