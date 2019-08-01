<?php

require "controlleur/contr.php";
require "model/mod.php";

if (!isset($_GET['controller'])) {

        $page1 = new \App\contr\contr();
        $page1->message1();

} else {
    $page1 = new \App\contr\contr();
    $page1->message2();
}