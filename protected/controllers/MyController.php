<?php

class MyController extends Controller
{
    public function actionWeb()
    {
        echo $this->web();
    }

    private function web()
    {
        echo 'вызов функции web';
    }




}