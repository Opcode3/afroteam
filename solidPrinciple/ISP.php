<?php
// The interface segregation principle talks about building up contracts that will be used and not just present withou been used.

// we use interface to ensure that certain parameter is in place for every object that will intend to extend or implement that interface. So what this principle is saying is that only use methods that are relevant..

// A typical example will be:

// let say CBN intend to build in an endpoint that will accept payment.


interface Payments{
    public function payByCard();
    public function payByUSSD();
    public function payByCrypto();
    // You can also implement other features here
}

// this violate the Interface Segregation

// a better implementation of this would have been seperating the all the payment channel. Reason been that, not every system or bank would want to implement all the available payment method. But with what we have here; we are forced to implement the other feature if the interface Payment is to be used on how application end... 

// to better implement this we do..

interface Payment{
    public function makePayment();
}

class CardPayment implements Payment{

    public function makePayment(){

    }
}

interface USSDPayment extends Payment{

}

class CryptoPayment{

    function pay(){

    }
}


/// Done

function collectInterest(Payment $payment){
    $payment->makePayment();
}


collectInterest(new CryptoPayment())



?>