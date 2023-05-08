<?php

namespace App\components;

class Functions
{
    /**
     * Хэшируем пароль
     * @param $password
     * @return string
     */
    public static function hashPass($password){
        $salt = substr(md5($password), 0, 5);
        return hash("sha256", $password . $salt);
    }

    // Обрезаем сообщение от пользователя
    public static function crop_str($string, $limit= '50')
    {
        if(strlen($string) > 50) {
            $first = mb_substr($string, 0, $limit, 'UTF-8');
            return $first . '...';
        } else {
            return $string;
        }
    }


    public static function crop_title_news($string, $limit= '35')
    {
        if(strlen($string) > 50) {
            $first = mb_substr($string, 0, $limit, 'UTF-8');
            return $first . '...';
        }

        return $string;
    }

    // Получаем id видео lODeKZUOjpY
    public static function crop_video_url($url)
    {
        //$text = "https://www.youtube.com/watch?v=qjkd4SAAzKk";
        $text = $url;
        $str = parse_url($text);
        $url = $str["query"];
        return substr($url,2);
    }


    public static function replaceTypeDate($data)
    {
        $string = $data;
        $patterns = '/-/';
        $replacements = '.';

        return preg_replace($patterns, $replacements, $string);

    }

    public static function cropDay($month)
    {
        return $month[8] .$month[9];
    }

    public static function cropMonth($month)
    {
        return $month[5] .$month[6];
    }

    public static function replaceNameMonths($month){

        switch($month){
            case '01':
                return 'Cічня';
                break;

            case '02':
                return 'Лютого';
                break;

            case '03':
                return 'Березня';
                break;

            case '04':
                return 'Квітня';
                break;

            case '05':
                return 'Травня';
                break;

            case '06':
                return 'Червня';
                break;

            case '07':
                return 'Липня';
                break;

            case '08':
                return 'Серпня';
                break;

            case '09':
                return 'Вересня';
                break;

            case '10':
                return 'Жовтня';
                break;

            case '11':
                return 'Листопада';
                break;

            case '12':
                return 'Грудня';
                break;
        }

    }
}
