<?php

function getDateTime(): string
{
    return date('d/m/Y h:i');
}
$currentdate = getDateTime();
echo getDateTime();