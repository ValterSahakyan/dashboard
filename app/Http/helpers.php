<?php

use App\Models\DataRequest;
use App\Models\Message;

/**
 * get count of messages
 *
 */

function getMessagesCount()
{
    return Message::where('status', '0')->get()->count();
}

/**
 * get count of data requests
 *
 */

function getDataRequestsCount()
{
    return DataRequest::where('status', '0')->get()->count();
}
