<?php
/**
 * Bondarenko Vadim
 */

class User
{

    /**
     * Проверяем существует ли пользователь с заданными $name и $password 
     */
    public static function checkUserData($name, $password)
    {
        require_once(ROOT . '/config/db.php');
        
        $usser['name'] = $name;
        $usser['password'] = $password;
        
        if($usser['name'] == $res['name'] && $usser['password'] == $res['password']) {
            return $res['id'];
        } else {              
            return false;
        }

        // ($usser as $key => $value) {
         //   if($res[$key] == $value) {
         //       return $res['id'];
         //   } else {              
          //      return false;
         //   }
       // }
  
    }

    /**
     * Запоминаем пользователя 
     * @param string $name
     * @param string $password
     */
    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }
    
    public static function checkLogged()
    {
        // Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /user/login");
    }
    /**
     * Если гость, то паказуем толко кнопку Вход, если нет, то Кабинет и Выход
     */
    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

    /**
     * Проверяет имя: не меньше, чем 2 символа 
     */
    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет имя: не меньше, чем 5 символов
     */
    public static function checkPassword($password)
    {
        if (strlen($password) >= 5) {
            return true;
        }
        return false;
    }



}
