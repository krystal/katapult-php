<?php

namespace Krystal\Katapult\KatapultAPI\Model\Enum;

enum VirtualMachineStateEnum: string
{
    case Stopped = 'stopped';
    case Failed = 'failed';
    case Started = 'started';
    case Starting = 'starting';
    case Resetting = 'resetting';
    case Migrating = 'migrating';
    case Stopping = 'stopping';
    case ShuttingDown = 'shutting_down';
    case Transferring = 'transferring';
    case Orphaned = 'orphaned';
}
