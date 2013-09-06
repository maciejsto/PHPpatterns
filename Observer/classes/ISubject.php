<?php
interface SubjectInt 
{
    function getName();
    function attach(Observer $observer);
    function doSomething();
    function doSomethingBad();
    function notify($argument);
}