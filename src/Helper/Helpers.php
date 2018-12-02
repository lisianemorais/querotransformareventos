<?php
/**
 * Created by PhpStorm.
 * User: lisiane
 * Date: 02/12/18
 * Time: 01:44
 */

class Helpers
{
    public static function getDate($date)
    {
        $date = new DateTime($date);
        $date = strftime("%a,%d,%b,%Y", strtotime($date->format('d-m-Y')));
        $date = explode(',',$date);
        return $date;
    }
}