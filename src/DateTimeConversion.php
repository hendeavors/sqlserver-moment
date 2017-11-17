<?php

namespace Endeavors\SqlServer\Moment;

use DateTimeInterface;

/**
 * Convert a DateTime to a storable string.
 * SQL Server will not accept 6 digit second fragment (PHP default: see getDateFormat Y-m-d H:i:s.u)
 * trim three digits off the value returned from the parent.
 * 
 **/
trait DateTimeConversion
{
    /**
	 * Get the format for database stored dates.
	 *
	 * @return string
	 */
	public function getDateFormat()
	{
	    return 'Y-m-d H:i:s.u';
    }
    
    public function fromDateTime(DateTimeInterface $value)
    {
        return substr($value->format($this->getDateFormat()), 0, -3);
    }
}