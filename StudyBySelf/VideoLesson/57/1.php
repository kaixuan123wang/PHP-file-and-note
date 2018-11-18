<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/11/16
 * Time: 14:40
 */
header("Content-Type:image/gif");
header("Content-Disposition:attachment;filename='logo.gif'");
header("Content-Length:".filesize("logo.gif"));
readfile("logo.gif");