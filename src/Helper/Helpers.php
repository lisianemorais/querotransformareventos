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

    public static function formatDateToBr($date)
    {
        $date = new DateTime($date);
        $date = strftime("%d/%m/%Y", strtotime($date->format('d-m-Y')));
        return $date;
    }
    public static function getHorarioEvento($date)
    {
        $objDate = DateTime::createFromFormat('Y-m-d H:i:s', $date);
        $hora = $objDate->format('H:i');
        return $hora;
    }
}