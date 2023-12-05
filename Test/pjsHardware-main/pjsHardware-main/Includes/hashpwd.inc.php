<?php

$options = [
    'cost' => 12

];

$hasedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT,$options);