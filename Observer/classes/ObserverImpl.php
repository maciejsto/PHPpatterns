<?php
class Observer implements ObserverInterface
{
    function update($arguments){}
    function reportError($errorCode, $errorMsg, Subject $subject){}
}