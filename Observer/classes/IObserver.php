<?php
interface ObserverInterface 
{ 
    public function update($arguments);
    public function reportError($errorCode, $errorMsg, Subject $subject);
}