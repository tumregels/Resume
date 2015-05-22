<?php

class BaseModel extends Eloquent
{
    public static $errors = null;

    public static function validate($data = null)
    {
        if(is_null($data)) {
            $data = Input::all();
        }

        $v = Validator::make($data, static::$rules);

        if($v->fails())
        {
            //Input::flash();
            self::$errors = $v->messages();
            return false;
        }
        return true;
    }

    public function errors()
    {
        return self::$errors;
    }
}
