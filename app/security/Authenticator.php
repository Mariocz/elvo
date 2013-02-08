<?php

namespace Security;

class Authenticator extends \Nette\Object implements \Nette\Security\IAuthenticator {

    /**
     *
     * @param array $credentials 
     * @return \Nette\Security\Identity|FALSE
     */
    public function authenticate(array $credentials) {

        $password = $credentials[0];
       // if ($password == "test") return new \Nette\Security\Identity ('10');
        if (md5($password) == '9b20bed56a13da4b28df10b62d3dd6e1') {

            return new \Nette\Security\Identity('10');
            
    }

        throw new \Nette\Security\AuthenticationException('Špatně zadané heslo!');
    }

}
