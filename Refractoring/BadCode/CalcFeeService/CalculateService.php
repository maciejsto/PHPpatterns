<?php
require 'Account.php';

class Main
{

    public function run()
    {
        //earlier in code theres service provided;
        $service = new ServiceFree();

        //earlier in code get Account from service
        $account = new Account();
        $account->setNumberOfUsers(2);
        $account->addService($service);

        //you met this
        echo $this->calcMonthlyCostsBalanceForAccount($account);
    }

    //quite often when u see if/switches they canna give you the signal
    //that this parto of code should be somewhere else
    //quite often also give you the polymorphic structure
    public  function calcMonthlyCostsBalanceForAccount(Account $theAccount)
    {
        $totalFee = 0;
        foreach ($theAccount->getServices() as $service) {
            //var_dump(get_class($service));
            switch (get_class($service)) {
                case 'ServiceFree':
                    $totalFee += $theAccount->getNumberOfUsers()*10;
                    break;
                case 'ServicePaid':
                    $totalFee += $theAccount->getNumberOfUsers()*20;
                    break;
                default:
                    echo "No service provided!!";
                    break;
            }
        }
        return $totalFee;
    }


}

$main = new Main();
$main->run();    //prints 20 because 2 users * 10
