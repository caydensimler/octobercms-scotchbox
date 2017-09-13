<?php 
use System\Classes\CombineAssets;
use CMS\Models\ThemeData;
use CMS\Controllers\Themes;
class Cms59b95e910de2c582129038_79f8616e4f7b4eca260d69bee7339a61Class extends \Cms\Classes\LayoutCode
{
public function onStart()
{
    $this['color_values'] = $colors = [
        '#49412c' => 'brown', '#c7ad88' => 'cream', '#677077' => 'grey',
        '#16174f' => 'navy', '#f0810f' => 'orange', '#ffb3b3' => 'pink',
        '#300032' => 'purple', '#6ed3cf' => 'teal', '#5e0231' => 'wine',
        '#fdc500' => 'yellow'
    ];

    if (Input::has("color") && in_array(Input::get("color"), $colors)) {

        $this['css_file_values'] = Input::get("color");
        $dirName = $this->theme->getDirName();
        $settings = ThemeData::where('theme',$dirName)->first();
        $newSettings = $settings->data;
        $newSettings['primary_color'] = array_search(Input::get("color"), $colors); //1F3F50
        ThemeData::where('theme',$dirName)->update(['data' => json_encode($newSettings)]);

    } else {
        $this['css_file_values'] =  array_key_exists($this->theme->primary_color, $colors) ? $colors[$this->theme->primary_color] : 'purple';
    }
}
}
