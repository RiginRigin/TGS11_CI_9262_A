<?php
class AUTHORIZATION
{
    public static function validateTimestamp($token)
    {
<<<<<<< HEAD
        $CI = &get_instance();
=======
        $CI =& get_instance();
>>>>>>> 6ef11477a39bb04e397ece7315a6666b33fdd46e
        $token = self::validateToken($token);
        if ($token != false && (now() - $token->timestamp < ($CI->config->item('token_timeout') * 60))) {
            return $token;
        }
        return false;
    }
    public static function validateToken($token)
    {
<<<<<<< HEAD
        $CI = &get_instance();
=======
        $CI =& get_instance();
>>>>>>> 6ef11477a39bb04e397ece7315a6666b33fdd46e
        return JWT::decode($token, $CI->config->item('jwt_key'));
    }
    public static function generateToken($data)
    {
<<<<<<< HEAD
        $CI = &get_instance();
        return JWT::encode($data, $CI->config->item('jwt_key'));
    }
}
=======
        $CI =& get_instance();
        return JWT::encode($data, $CI->config->item('jwt_key'));
    }
}
>>>>>>> 6ef11477a39bb04e397ece7315a6666b33fdd46e
