<?php namespace IonAuth\IonAuth;

function prepareIp($ipAddress)
{
    $driver = $this->config->get('database')['driver'];

    return (in_array($driver, ['postgres', 'sqlsrv', 'mssql'])) ? $ipAddress : inet_pton($ipAddress);
}