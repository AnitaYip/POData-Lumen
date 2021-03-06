<?php

namespace RealPage\OData\Enums;

use MyCLabs\Enum\Enum;

class ActionVerb extends Enum
{
    const CREATE = 'create';
    const READ = 'read';
    const UPDATE = 'update';
    const DELETE = 'delete';
}
