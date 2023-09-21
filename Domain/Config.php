<?php

namespace Domain;

class Config
{
//    const DB_CONNECTION='mysql';
//    const DB_HOST='db';
//    const DB_PORT='3306';
//    const DB_DATABASE='forge';
//    const DB_USERNAME='forge';
//    const DB_PASSWORD='forge';
//    const CHARSET = 'utf8';
//    const DB_PREFIX = '';

    const DB_CONNECTION='pgsql';
    const DB_HOST='db';
//    const DB_HOST='127.0.0.1';
    const DB_PORT='5432';
    const DB_DATABASE='service_diagnostics';
    const DB_USERNAME='postgres';
    const DB_PASSWORD='12345678';
    const CHARSET = 'utf8';
    const DB_PREFIX = '';
}

