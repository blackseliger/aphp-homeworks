<?php
declare(strict_types=1);

class User
{
    private string $login;
    private string $password;
    private array $data = [];
    /**
     * @var mixed|string|null
     */
    private mixed $name;

    public function __construct(string $login, string $password) {
        $this->login = $login;
        $this->password = $password;
    }

    public function __set(string $name, $value) : void
    {
        var_dump($name);
        var_dump($value);
        $this->data[$name] = $value;
    }

    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    public function __unset(string $name) : void
    {
        unset($this->data[$name]);
    }

    public function  __isset(string $name) : bool
    {
        return !empty($this->data[$name]);
    }

    public function __sleep(){
        echo 'Перевод объекта в строку' . PHP_EOL;
        return ['login', 'password'];
    }

    public function __wakeup() {
        echo 'Перевод строки в объект' . PHP_EOL;
    }
}






$user = new User('admin', '1234');

$user->name = 'Andrey';
//сработала set
var_dump($user->name);
//сработал get




$userAsString = serialize($user);
echo $userAsString ."  before  ".PHP_EOL;
$userAsString = str_replace("admin", "NotAdmin", $userAsString);
echo $userAsString ."  after  ".PHP_EOL;

$newUser = unserialize($userAsString);



class PeopleList implements \Iterator
{
    public string $Programmer = 'Andrey.';
    public string $Director = 'Nikita.';
    public string $Tester = 'John.';
    private  int $position;
    private  array $array = [];

    public function __construct(array $array)
    {
        $this->array = $array;
        $this->position = 0;
    }

    public function  __toString(): string
    {
        // TODO: Implement __toString() method.
        return "Employees: $this->Director $this->Programmer $this->Tester " .PHP_EOL;
    }

    public function current()
    {
        return $this->array[$this->position];
    }

    public function next()
    {
        ++$this->position;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        return isset($this->array[$this->position]);
    }

    public function rewind()
    {
        $this->position = 0;
    }
}

$person = new PeopleList(['Ivan' , 'Andrey', 'Nikita']);
//echo $person;

foreach ($person as $key => $value) {
    print "$key : $value" .PHP_EOL;
}