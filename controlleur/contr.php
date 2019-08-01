<?php

namespace App\contr;

use App\mod\mod;

class contr
{
    private $model;

    public function __construct()
    {
        $this->model = new mod();
    }

    public function message1()
    {
        $message1 = $this->model->message1();
        include "vue/page1.php";
    }

    public function message2()
    {
        $message2 = $this->model->message2();
        include "vue/page2.php";
    }
}