<?php
    $UserName = $_POST['UserName'];
    $UserLastName = $_POST['UserLastName'];
    $UserFatherName = $_POST['UserFatherName'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Login = $_POST['Login'];
    
    // foreach ($_POST as $key => $value) {
    //     if (!empty($value) ){
    //         require 'index.php';
    //         echo '<p style = "color: red; text-align: center; "> Все поля должны быть заполнены!</p>';
    //         die();
    //     }  
    // }

    if (!preg_match("/[A-Za-zА-Яа-яЁё]{2,16}/", $UserName)){
        require 'index.php';
        echo '<p style = "color: red; text-align: center; ">Имя должно содержать от 2 до 16 символов</p>';
    }
    elseif (!preg_match("/[A-Za-zА-Яа-яЁё]{2,16}/", $UserLastName)){
        require 'index.php';
        echo '<p style = "color: red; text-align: center; ">Фамилия должна содержать от 2 до 16 символов</p>';
    }
    elseif(!preg_match("/[A-Za-zА-Яа-яЁё]{4,16}/", $UserFatherName)){
        require 'index.php';
        echo '<p style = "color: red; text-align: center; "> Отчество должно содержать от 4 до 16 символов</p>';
    }  
    elseif(!preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9]+.+.[A-Z]{2,4}$/i", $Email)){
        require 'index.php';
        echo '<p style = "color: red; text-align: center; "> Введите Email согласно модели: xxxx@xxx.xxx</p>';

    }
    elseif(!preg_match("/(?=.*\d)(?=(.*[!@#$%^&*]){3,})(?=(.*[A-Z]){2,}).{6,12}/", $Password)){
        require 'index.php';
        echo '<p style = "color: red; text-align: center; "> Пароль должен содержать 2 буквы A-Z, 3 спецсимвола, 1 цифру</p>';
    } 
    elseif(!preg_match("/.{4,}/", $Login)){
        require 'index.php';
        echo '<p style = "color: red; text-align: center; "> Логин должен быть больше 4 символов</p>';
    }     
 