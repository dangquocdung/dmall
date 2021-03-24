<?php

namespace App\Helpers;


class AppSetting
{


    static $allLanguageCode = ['en', 'es', 'fr', 'hi', 'zh'];
    static $allLanguage = ['English', 'Spanish', 'France', 'Hindi', 'Chinese'];

    static $currencySign = "đ";
    static $currencyCode = "VNĐ";

    //--- set timezone ----------//

    //static $timezone = "UTC";
    static $timezone = "GMT+7:00";


    //-------------------------- Minimum Application Version ----------------------------//
    static $EMALL_APP_MINIMUM_VERSION        = 130;
    static $MANAGER_APP_MINIMUM_VERSION      = 130;
    static $DELIVERY_BOY_APP_MINIMUM_VERSION = 130;


    //----------------- Google Map Api Key (Set a key if you enable billing at https://developers.google.com/maps) -------------------------//
    //TODO : add your google map api key
    static $GOOGLE_MAP_API_KEY = "AIzaSyCMndlaZbR9HyVaXogmcHNLFyqlSAqYQ7c";


    //--------- Razorpay API (https://dashboard.razorpay.com/app/dashboard) ----------//
    //TODO : add your own razorpay payment keys
    static $RAZORPAY_ID = "";
    static $RAZORPAY_SECRET = "";



    //Firebase Cloud Messaging (FCM) Server key
    //TODO: add your own Firebase Cloud Messaging developer key
    static $FCM_SERVER_KEY = "AAAArvxeXFs:APA91bH0JUNXcX2tUZMDW3A7T6NpYOxx9o_-Mj_eFn-7ao3sc086eE_KZrgpkmp6yAVsej-rrrz2SWt_MQz6mNBisaOKmfy-bwixNmiJ5toCf2gWfw_t8y0cxUWHKRBwCTgpgEfem7OW";

}

