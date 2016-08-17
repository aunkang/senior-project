<?php


    $ffmpeg = 'C:/xampp/htdocs/dashboard/myProject/ffmpeg/ffmpeg'; 
    $video = 'C:/xampp/htdocs/dashboard/myProject/uploads/video1.mp4';
    $image = 'C:/xampp/htdocs/dashboard/myProject/uploads/thumbs/video1.jpg';
    $second = 1;
    $size = '300x200';

    $cmd2 = "$ffmpeg -i $video -vframes $second -ss 00:00:03.0000 -s $size $image";


    shell_exec($cmd2);