<?php
/**
 * Created by PhpStorm.
 * User: dangnv
 * Date: 2/16/17
 * Time: 18:13
 */

define('DIR_UPLOAD_FILE', '/userfiles');

abstract class UserRole
{
    const ROLE_ADMIN = 'admin';
    const ROLE_EDITOR = 'editor';
    const ROLE_SUBSCRIBER = 'subscriber';
    const ROLE_MARKETING = 'marketing';
    const ROLE_GUEST = 'guest';

    public static function getConstants()
    {
        $oClass = new ReflectionClass(__CLASS__);
        return $oClass->getConstants();
    }
}