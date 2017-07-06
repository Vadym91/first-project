<?php
/**
 * Bondarenko Vadim
 */

class CabinetController
{

    public function actionIndex()
    {
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();
        
        require_once(ROOT . '/config/db.php');
                
        require_once(ROOT . '/views/cabinet/index.php');

        return true;
    }  
    
    

}