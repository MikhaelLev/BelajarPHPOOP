<?php
namespace Data\Traits;

trait SayGoodbye{
    function goodbye(?string $name):void{
        if(is_null($name)){
            echo "Good bye" . PHP_EOL;
        } else {
            echo "Goodbye $name" . PHP_EOL;
        }
    }
}

trait SayHello{
    function hello(?string $name):void{
        if(is_null($name)){
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }
}

trait HasName{
    public string $name;
}

trait CanRun{
    public abstract function run():void;
}

class Person{
    use SayGoodbye, SayHello, HasName, CanRUn{
        // hello as private; ->>VISIBILITY JADI PRIVATE 
        // goodbye as private; ->>VISIBILITY JADI PRIVATE
    }

    public function run():void{
        echo "Person $this->name is running" . PHP_EOL;
    }

    public function foodbye(?string $name):void{
        echo "Goodbye in Person" . PHP_EOL;
    }

    public function hello(?string $name):void{
        echo "Hello in Person" . PHP_EOL;
    }

}
?>