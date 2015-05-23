<?php

class Data extends BaseModel
{
    public static $rules = array(
        'firstname'=> 'required|min:3|max:128',
        'lastname'=> 'required|min:3|max:128',
        'keywords'=> 'required|min:3|max:128',
        'file' => 'required|mimes:doc,docx,pdf',
    );

}
