<?php

class BookController extends Controller
{
    public function actionIndex()
    {
        $b = new Book;

        /*$b->id = 1;
        $b->title = 'Анна Каренина';
        $b->year = '1914';
        $b->author = 'Л.Н. Толстой';

        $b->save(false);
        */

        $b->id = false;
        $b->isNewRecord = true;

        $b->id = 3;
        $b->title = 'Это бало под Ровно';
        $b->year = '1960';
        $b->author = 'Медведев';

        $b->save(false);





        /*$arr[] = 0;
        $arr[] = 1;
        $arr[] = 2;
        $num = 'Анна каренина';

        //$a = Book::model()->findByPk(2);
        //$a = Book::model()->findAllByPk($arr);
        //$a = Book::model()->findAll('id<:num', array(':num' => $num));
        //$a = Book::model()->findAllByAttributes(array('id' => array(0,1,2), 'title' => array('Анна Каренина','Тихий Дон')));
        //$a = Book::model()->findBySql('SELECT title FROM book WHERE id = :num', array(':num' => $num));
        //$a = Book::model()->findAllBySql('SELECT title FROM book WHERE year = :num', array(':num' => $num));
        //$a = Book::model()->count('year = :num', array(':num' => $num));
        //$a = Book::model()->countBySql('SELECT count(title) From book WHERE year <= :num', array(':num' => $num));
        //$a = Book::model()->exists('year > :num', array(':num' => $num));
        //$a = Book::model()->updateByPk($arr, array('author' => 'М. Шолохов'));
        //$a = Book::model()->updateAll(array('author' => 'М. Шолохов'), 'author = "Шолохов"');
        //$a = Book::model()->updateAll(array('author' => 'Шолохов новый'), 'author =:author', array(':author' => "Шолохов"));
        //$a = Book::model()->deleteByPk(1);
        $a = Book::model()->deleteAll('title = :title', array(':title' => $num));



        if($a){
            echo 'Есть';
        } else {
            echo 'Нет';
        }
        */

        /*
        foreach ($a as $ar){
            echo $ar->title . "<hr />";
        }
        */

        //echo $a->title;

    }



}