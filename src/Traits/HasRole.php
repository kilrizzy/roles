<?php

namespace KilroyWeb\Roles\Traits;

trait HasRole{

    public function roleIs($roleName){
        if($this->role == $roleName){
            return true;
        }
        return false;
    }

    public function roleIn($roles){
        foreach($roles as $role){
            if($this->roleIs($role)){
                return true;
            }
        }
        return false;
    }

}