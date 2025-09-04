<?php
class db
{
    public static function connect()
    {
        return new mysqli('localhost', 'root', '', 'e-commerce');
    }
}