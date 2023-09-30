<?php

/*==========> INFO 
 * CODE     : BY TheDevil
 * SCRIPT   : CC CHECKER
 * VERSION  : DEMOV2
 * TELEGRAM : t.me/TheDevilPrince
 * BY       : DARKCODE DEVL
 */

$settings = array(
    "mode_proxy" => "off", // on or off
    "proxy_list" => "", // proxy list (ex: proxy.txt)
    "proxy_pwd" => "", // proxy password (ex: username:pass)
);

$mode_proxy = $settings["mode_proxy"];
$proxy_list = $settings["proxy_list"];
$proxy_pwd  = $settings["proxy_pwd"];
// GET SETTINGS
if (strtolower($mode_proxy) == "off") {
    $Proxies = "";
    $proxy_pass = "";
} else {
    $Proxies = GetProxies($proxy_list);
    $proxy_pass = $proxy_pwd;
}
