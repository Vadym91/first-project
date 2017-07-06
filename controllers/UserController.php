<?php

class UserController
{

    public function actionLogin()
    {
        $name = '';
        $password = '';
        
               
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];
         
            $errors = false;
                        
            // Валидация полей
            if (!User::checkName($name)) {
                $errors[] = 'Неверные данные - имя';
            }            
            if (!User::checkPassword($password)) {               
                $errors[] = 'Неверные данные - пароль не должен быть короче 5-ти символов';
            }
            
            // Проверяем существует ли пользователь
            $userId = User::checkUserData($name, $password);
            
             
            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                
                $_SESSION["total"]++;//счетчик неудачных отправок формы
                
                if (isset($_SESSION["total"]) && $_SESSION["total"] < 3) {
                    $errors[] = 'Неверные данные';
                } else {     
                    $hidden = 'hidden';
                    setcookie('hidden', $hidden, time() + 25 );
                    
                }

                print_r($_SESSION["total"]);         

            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);
                
                // Перенаправляем пользователя в закрытую часть - кабинет пользователя
                header("Location: /cabinet/"); 
            }

        } else {
            
            $_SESSION["total"] = 0;
        }

        require_once(ROOT . '/views/user/login.php');

        return true;
    }
    
    /**
     * Удаляем данные о пользователе из сессии
     */
    public function actionLogout()
    {
        unset($_SESSION["user"]);
        header("Location: /user/login");
    }
}
