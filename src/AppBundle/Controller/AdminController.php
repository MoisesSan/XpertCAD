<?php

namespace AppBundle\Controller;

use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

class AdminController extends BaseAdminController
{
    public function createNewLxUsersEntity()
    {
        return $this->get('fos_user.user_manager')->createUser();
    }

    public function prePersistLxUsersEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }

    public function preUpdateLxUsersEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }
}
