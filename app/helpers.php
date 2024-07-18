<?php

use App\Models\section;
use App\Models\setting;

function get_setting_value($key){
    $data=setting::where('key',$key)->first();
    if(isset($data->value)){
        return $data->value;
    }else{
        return 'tidak tersedia';
    }
}

function get_setting_data($key){
    $data=setting::where('key',$key)->first();
    if(isset($data->value)){
        return $data->value;
    }else{
        return 'tidak tersedia';
    }
}

function get_setting_dataG($key){
    $data=setting::where('key',$key)->first();
    if(isset($data->value)){
        return $data->value;
    }else{
        return 'tidak tersedia';
    }
}

function get_setting_dataL($key){
    $data=setting::where('key',$key)->first();
    if(isset($data->value)){
        return $data->value;
    }else{
        return 'tidak tersedia';
    }
}