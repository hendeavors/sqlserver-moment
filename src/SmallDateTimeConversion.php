<?php

namespace Endeavors\SqlServer\Moment;

use DateTimeInterface;

/**
 * All we need to do here is define the format we need
 * For a small datetime
 */
trait SmallDateTimeConversion {

    /**
	 * Get the format for database stored dates.
	 *
	 * @return string
	 */
	public function getDateFormat()
	{
	    return 'Y-m-d H:i:s';
    }
    
    public function fromDateTime(DateTimeInterface $value)
    {
        return $value->format($this->getDateFormat());
    }
}