<?php

interface Phone {
  function makeCall($number);
  function sendMassage($number, $message);
}

class IOS implements Phone {
  function makeCall($number) {
    echo "Number: $number";
  }
  function sendMassage($number, $message) {
    echo "Number: $number";
    echo "Message: $message";
  }
}

$iPhone = new IOS();

$iPhone->makeCall(911);
$iPhone->sendMassage(911, "Help me!");
