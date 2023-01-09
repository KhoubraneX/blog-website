<?php
    function avatarGenerate(string $name) {
        $avatar_name = substr($name, 0, 1) . substr($name, strlen($name) - 1, 1);
        return $avatar_name;
    }
?>