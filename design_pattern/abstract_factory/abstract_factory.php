<?php
    abstract class AbstractBookFactory{
        abstract function makePHPBook();
        abstract function makeMysqlBook();
    }

    class OReillyBookFactory extends AbstractBookFActory{

        public function makePHPBook(){
            return new OReillyPHPBook;
        }
        public function makeMysqlBook(){
            return new OReillyMySQLBook;
        }
    }

    abstract class AbstractBook {
        abstract function getAuthor();
        abstract function getTitle();
    }
    abstract class AbstractPHPBook extends AbstractBook {
        protected $subject = "PHP";
    }

    class OReillyPHPBook extends AbstractPHPBook{
        private $author = 'Rasmus Lerdorf and Kevin Tatroe';
        private $title = 'Programming PHP';

        public function getAuthor(){
            return $this->author;
        }
        public function getTitle(){
            return $this->title;
        }
    }

    abstract class AbstractMysqlBook extends AbstractBook {
        protected $subject = "MySQL";
    }

    class OReillyMySQLBook extends AbstractMysqlBook{
        private  $author = 'Kevin Tatroe';
        private  $title = 'MySQL Database';

        public function getAuthor(){
            return $this->author;
        }
        public function getTitle(){
            return $this->title;
        }
    }
    function writeln($line_in) {
        echo $line_in."<br/>";
    } 
    $bookFactoryInstance = new OReillyBookFactory();
    $phpBookOne=$bookFactoryInstance->makePHPBook();
    writeln($phpBookOne->getAuthor());
    writeln($phpBookOne->getTitle());

    $mysqlBookOne=$bookFactoryInstance->makeMysqlBook();
    writeln($mysqlBookOne->getAuthor());
    writeln($mysqlBookOne->getTitle());

?>