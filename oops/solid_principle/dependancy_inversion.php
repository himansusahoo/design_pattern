<?php
/*
    Dependency inversion principle:
    Entities must depend on abstractions, not on concretions. It states that the high-level module 
    must not depend on the low-level module, but they should depend on abstractions.
*/
class MySQLConnection{
    public function connect(){
        echo "MySQL Database connected";
    }
}

class User{
    private $dbConnection;
    public function __construct(MySQLConnection $conn){
        $this->dbConnection=$conn;
    }
}

/*
    Problem in above example:

    First, the MySQLConnection is the low-level module while the User is high level, but according to the definition 
    of D in SOLID, which states to Depend on abstraction, not on concretions. This snippet above violates this 
    principle as the User class is being forced to depend on the MySQLConnection class.

    Later, if you were to change the database engine, you would also have to edit the User class, and this would 
    violate the open-close principle.

    The User class should not care what database your application uses. To address these issues, you can code to an 
    interface since high-level and low-level modules should depend on abstraction:
*/

interface DBConnectionInterface{
    public function connect();
}

class OracleConnection implements DBConnectionInterface{
    public function connect(){
        echo "Oracle Database connected";
    }
}

class User2{
    private $dbConnection;
    public function __construct(DBConnectionInterface $conn){
        $this->dbConnection=$conn;
    }
}
/*
    The interface has a connect method and the OracleConnection class implements this interface. Also, instead of 
    directly type-hinting OracleConnection class in the constructor of the User2, you instead type-hint 
    the DBConnectionInterface and no matter the type of database your application uses, the User2 class 
    can connect to the database without any problems and open-close principle is not violated.
*/
?>