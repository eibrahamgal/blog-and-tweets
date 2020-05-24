<?php

namespace App\Exceptions;

use Exception;


use App\Entry;
class InvalidEntrySlugException extends Exception
{
    private $entry;

    public function __construct(Entry $entry, $message ="", $code = 0, Trowable $previous = null){

        $this->entry = $entry;
        parent::__construct($message, $code, $previous);


    }
    
        public function render(){

            return redirect($this->entry->geturl());
        }

}
