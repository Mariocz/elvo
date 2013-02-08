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
        
        if (md5($password) === '3522b4efad257bee52e3d4efc6553261') {

            return new \Nette\Security\Identity('10');
            
        } elseif (md5($password) === '4821dda7ee96222c494bd923c2c0279d') {
            
            return new \Nette\Security\Identity('20');
            
    }

        throw new \Nette\Security\AuthenticationException('Špatně zadané heslo!');
    }

}
