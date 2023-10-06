<?php

namespace App\Providers;

use App\CurrencyConvert;
use Hekmatinasser\Verta\Verta;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class MyProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        session()->regenerate();
    }

    static function get_languages()
    {
        $lang_props = array(

//            'ar' => array(
//                'title' => 'العربية' ,
//                'dir' => 'rtl' ,
//                'active' => TRUE ,
//                'theme_postfix' => '' ,
//                'flag' => 'iraq-flag.png' ,
//            ),
            'fa' => array(
                'title' => 'فارسی',
                'dir' => 'rtl',
                'active' => TRUE,
                'theme_postfix' => '',
                'flag' => 'iran-flag.png',
            ),
//            'en' => array(
//                'title' => 'English' ,
//                'dir' => 'ltr' ,
//                'active' => TRUE ,
//                'theme_postfix' => '' ,
//                'flag' => 'english--flag.png' ,
//            ),
            // 'af' => array(
            //     'title' => 'پارسی دری' ,
            //     'dir' => 'rtl' ,
            //     'active' => FALSE ,
            //     'theme_postfix' => '' ,
            //     'flag' => 'afgha-flag.png' ,

            // ) ,
            // 'ps' => array(
            //     'title' => 'پشتو' ,
            //     'dir' => 'rtl' ,
            //     'active' => FALSE ,
            //     'theme_postfix' => '' ,
            //     'flag' => 'afgha-flag.png' ,

            // ) ,
            // 'ka' => array(
            //     'title' => 'گرجی' ,
            //     'dir' => 'ltr' ,
            //     'active' => FALSE ,
            //     'theme_postfix' => '' ,
            //     'flag' => '' ,

            // ) ,
        );
        return $lang_props;
    }

    static function get_languages_array()
    {
        $result = array();
        $lang_props = self::get_languages();
        foreach ($lang_props as $key => $item) {
            $result[$key] = $key;
        }
        return $result;
    }

    static function _text($str = '', $setLang = '')
    {
        $lang = App::getLocale();
        $arr = explode('@@', $str);
        $setLang = empty($setLang) ? $lang : $setLang;
        if (!empty($arr[1])) {
            $en = '';
            foreach ($arr as $value) {
                $ar = explode('==', $value);
                if (!empty($ar[1])) {
                    if ($ar[0] == $setLang)
                        return $ar[1];
                    elseif ($ar[0] == 'en')
                        $en = $ar[1];
                }
            }
            return $en;
        }
        return $str;
    }

    static function _insert_text($env, $str = '')
    {
        $lang_props = self::get_languages();
        $return_str = '@@';
        foreach ((array)$env as $key => $value) {
            $var = explode('_', $key);
            if (isset($var[1]) && $var[0] == $str) {
                foreach ($lang_props as $k => $v) {
                    if ($var[1] == $k) {
                        $vars = $value;
                        $return_str .= "$k==$vars@@";
                        if (count($lang_props) == 1)
                            return $vars;
                    }
                }
            }
        }

        //$return_str = trim($return_str , '@@');
        return $return_str;
    }

    static function _insert_text_lang($str, $lang = 'en')
    {
        $return_str = "@@" . "$lang==$str";
        return $return_str;
    }


    //CurrencyPrice


    static function getCurrencyPrice()
    {
        return ['IRR' => 'IRR', 'EUR' => 'EUR', 'AFN' => 'AFN', 'USD' => 'USD', 'GEL' => 'GEL'];
    }

    static function exToLocal($price, $currence = "IRR")
    {
        $price = (double)$price;
        $currencyLIVE = self::currencyLIVE();
        $price = $currencyLIVE[$currence][session('Local_Currency')] * $price;
        if (session('Local_Currency') == 'IRR') {
            $price = round($price, -2);
        } else {
            $price = round($price, 2);
        }
        return $price;
    }

    static function exToLocalDiscount($price, $discount, $currence = "IRR")
    {
        $price = (double)$price;

        if ($discount > 0) {
            $price = $price - $price * ($discount / 100);
        }
        $price = self::exToLocal($price);
        if (session('Local_Currency') == "IRR") {
            $price = number_format($price);
            $price = self::convert_number_to_persian($price);
        }
        return $price;
    }

    static function currencyLIVE()
    {
        if (session('Local_Currency') == null)
            session(['Local_Currency' => 'IRR']);
        $result = CurrencyConvert::all();

        foreach ($result as $res) {
            $Curency[$res->exFrom][$res->exTo] = $res->rate;
        }
        return $Curency;
    }


    static function convert_phone_number($string)
    {
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $arabic = ['٩', '٨', '٧', '٦', '٥', '٤', '٣', '٢', '١', '٠'];

        $num = range(0, 9);
        $convertedPersianNums = str_replace($persian, $num, $string);
        $englishNumbersOnly = str_replace($arabic, $num, $convertedPersianNums);

        return $englishNumbersOnly;
    }

    static function convert_number_to_persian($string)
    {
        $en = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        $arabic = ['٩', '٨', '٧', '٦', '٥', '٤', '٣', '٢', '١', '٠'];
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $convertedPersianNums = str_replace($en, $persian, $string);
        $persianNumbersOnly = str_replace($arabic, $persian, $convertedPersianNums);
        return $persianNumbersOnly;
    }


    static function show_date($date, $format = "'Y/n/j H:i:s'")
    {
        $lang = App::getLocale();
        if ($lang == "fa") {
            $v = new Verta($date);
            $v = $v->timezone('Asia/Tehran');
            $v = $v->format($format);
            return self::convert_number_to_persian($v);

        } else {
            return $date->format($format);
        }
    }


    static function activeSidebar($routeUrl, $contain = true, $className = 'active')
    {
        if ($contain)
            return strpos(url()->current(), $routeUrl) === false ? '' : $className;
        else
            return ($routeUrl == url()->current()) ? $className : '';
    }

    static function showChangePrice($i)
    {
        $i = round($i, 2);
        return self::convert_number_to_persian($i);
    }


    public static function createSlug($string, $separator = '-')
    {

        $_transliteration = ["/ö|œ/" => "e",
            "/ü/" => "e",
            "/Ä/" => "e",
            "/Ü/" => "e",
            "/Ö/" => "e",
            "/À|Á|Â|Ã|Å|Ǻ|Ā|Ă|Ą|Ǎ/" => "",
            "/à|á|â|ã|å|ǻ|ā|ă|ą|ǎ|ª/" => "",
            "/Ç|Ć|Ĉ|Ċ|Č/" => "",
            "/ç|ć|ĉ|ċ|č/" => "",
            "/Ð|Ď|Đ/" => "",
            "/ð|ď|đ/" => "",
            "/È|É|Ê|Ë|Ē|Ĕ|Ė|Ę|Ě/" => "",
            "/è|é|ê|ë|ē|ĕ|ė|ę|ě/" => "",
            "/Ĝ|Ğ|Ġ|Ģ/" => "",
            "/ĝ|ğ|ġ|ģ/" => "",
            "/Ĥ|Ħ/" => "",
            "/ĥ|ħ/" => "",
            "/Ì|Í|Î|Ï|Ĩ|Ī| Ĭ|Ǐ|Į|İ/" => "",
            "/ì|í|î|ï|ĩ|ī|ĭ|ǐ|į|ı/" => "",
            "/Ĵ/" => "",
            "/ĵ/" => "",
            "/Ķ/" => "",
            "/ķ/" => "",
            "/Ĺ|Ļ|Ľ|Ŀ|Ł/" => "",
            "/ĺ|ļ|ľ|ŀ|ł/" => "",
            "/Ñ|Ń|Ņ|Ň/" => "",
            "/ñ|ń|ņ|ň|ŉ/" => "",
            "/Ò|Ó|Ô|Õ|Ō|Ŏ|Ǒ|Ő|Ơ|Ø|Ǿ/" => "",
            "/ò|ó|ô|õ|ō|ŏ|ǒ|ő|ơ|ø|ǿ|º/" => "",
            "/Ŕ|Ŗ|Ř/" => "",
            "/ŕ|ŗ|ř/" => "",
            "/Ś|Ŝ|Ş|Ș|Š/" => "",
            "/ś|ŝ|ş|ș|š|ſ/" => "",
            "/Ţ|Ț|Ť|Ŧ/" => "",
            "/ţ|ț|ť|ŧ/" => "",
            "/Ù|Ú|Û|Ũ|Ū|Ŭ|Ů|Ű|Ų|Ư|Ǔ|Ǖ|Ǘ|Ǚ|Ǜ/" => "",
            "/ù|ú|û|ũ|ū|ŭ|ů|ű|ų|ư|ǔ|ǖ|ǘ|ǚ|ǜ/" => "",
            "/Ý|Ÿ|Ŷ/" => "",
            "/ý|ÿ|ŷ/" => "",
            "/Ŵ/" => "",
            "/ŵ/" => "",
            "/Ź|Ż|Ž/" => "",
            "/ź|ż|ž/" => "",
            "/Æ|Ǽ/" => "E",
            "/ß/" => "s",
            "/Ĳ/" => "J",
            "/ĳ/" => "j",
            "/Œ/" => "E",
            "/ƒ/" => ""];
        $quotedReplacement = preg_quote($separator, '/');
        $merge = [
            '/[^\s\p{Zs}\p{Ll}\p{Lm}\p{Lo}\p{Lt}\p{Lu}\p{Nd}]/mu' => ' ',
            '/[\s\p{Zs}]+/mu' => $separator,
            sprintf('/^[%s]+|[%s]+$/', $quotedReplacement, $quotedReplacement) => '',
        ];
        $map = $_transliteration + $merge;
        unset($_transliteration);
        return preg_replace(array_keys($map), array_values($map), $string);

    }

}



