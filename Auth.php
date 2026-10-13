<?php
class Auth {
    public function check($login, $pass) {
        return ($login === 'admin' && $pass === '12345');
    }
}
