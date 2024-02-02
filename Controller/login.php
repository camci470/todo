<?php

if (route(0)=='login'){

    if (isset($_POST['submit'])){
        add_session('hata','Mesajınız Eklendi.');
        $eposta=post('eposta');
        $sifre=post('sifre');

        echo $eposta.' '.$sifre;

    }

    view('auth/login');
}