<?php
namespace App\Http\Helpers;
class CustomAvatar{
    

    public function make_custom_avatar($avatar){
        $default_avatar='avatar.png';
        // do your operation here
        return $avatar . $default_avatar;
    }
}

?>