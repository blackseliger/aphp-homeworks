<?php
declare(strict_types=1);

trait AppUserAuthentication {
    private string $loginApp = "Ivan";
    private int $passwordApp = 7777;

    public function authenticate(): void{
        if (($this->login === $this->loginApp) && ($this->passwordApp === $this->password)) {
            echo $this->loginApp ." пользователь приложения". PHP_EOL;
        }
    }

}

trait MobileUserAuthentication {
    private string $loginMobile = "Andrey";
    private int $passwordMobile = 8888;

    public function authenticate(): void{
        if (($this->login === $this->loginMobile) && ($this->passwordMobile === $this->password)) {
            echo $this->loginMobile ." пользователь мобильного приложения". PHP_EOL;
        }
    }

}

class CheckUser
{
    public string $login;
    public int $password;

    public function __construct(string $login, int $password){
        $this->login = $login;
        $this->password = $password;
    }

    use AppUserAuthentication,  MobileUserAuthentication {
        AppUserAuthentication::authenticate insteadof MobileUserAuthentication;
        MobileUserAuthentication::authenticate as MobileAuthenticate;
    }
}

$checkUser = new CheckUser("Andrey", 8888);
$checkUser->authenticate();
$checkUser->MobileAuthenticate();

