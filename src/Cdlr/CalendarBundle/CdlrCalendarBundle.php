<?php

namespace Cdlr\CalendarBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CdlrCalendarBundle extends Bundle
{
     public function getParent()
    {
        return 'BladeTesterCalendarBundle';
    }
}
