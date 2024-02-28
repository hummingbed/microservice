<?php

namespace App\Helpers;
 class ResponseMessages
{
    public static function getSuccessMessage($entity, $action = 'created'): string
    {
        return sprintf('%s %s successfully', $entity, $action);
    }
 }