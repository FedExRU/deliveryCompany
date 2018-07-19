<?php 

namespace App\Traits;

trait DataLoader
{
	public function loadAttributes($attributes)
	{
        foreach($attributes as $attribute => $value)
        {   
            if(property_exists(self::class, $attribute) || \Schema::hasColumn(app(self::class)->getTable(), $attribute))
                $this->$attribute = $value;
        }

        return true;
	}
}

?>