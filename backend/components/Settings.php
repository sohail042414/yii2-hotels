<?php
namespace app\components;

//use Yii;
use yii\helpers\Url;
use yii\base\Component;
//use yii\base\InvalidConfigException;


class Settings extends Component {
 
    public function getUploadPath() {    
        return Url::to('@backend/web/uploads/');
    }
    
    public static function getSlug($text) {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
    
}

?>
