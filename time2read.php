<?
/*
Plugin Name: time2read -UPDATED 20/10/04-
Description: Time2read is a WP plug-in that allows you to estimate the time it will take an normal reader to read an article; auspiciaron con un fernet este plugin <a href="http://www.16-bits.com.ar" target="_blank">Rodrigo</a> y <a href="http://www.gatodegrandesbotas.com" target="_blank">Gabriel</a>. What's new: now you can choise show minutes or second
Author: eleZeta
Plugin URI: http://ele-zeta.com.ar/2004/09/01/plugin-tiempo-promedio-de-lectura-wordpress/
Author URI: http://ele-zeta.com.ar
*/

function time2read($before="", $separator="'", $after="", $mode="minutes")
{
    global $post;
    $textoLimpio = strip_tags($post->post_content);
    $cant = str_word_count($textoLimpio);
    $promedio = $cant / 250 * 60;
    $min=(int)($promedio/60); 
    $seg = fmod($promedio, 60);
    if ($seg<10){$seg = '0' . $seg;}else{$seg=$seg;}

if ($mode == "minutes")
{
    $promedio = $min.".".$seg;
    $promedio = strval($promedio);
    $array = explode(".",$promedio);
    $array[1] = substr($array[1],0,2);
    echo $before . $array[0] . $separator . $array[1] . $after;
}
else
{
    $promedio = ($min*60);
    $promedio = explode (".",$promedio);
    echo $before. ($promedio[0]+1). $after;
}
}
?>