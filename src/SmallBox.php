<?php
/**
 * @copyright Copyright &copy; Roberto Braga, 2020
 * @package yii2-adminlte3-widgets
 * @version 1.0.0
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */
namespace app\widgets\adminlte3;

use yii\bootstrap4\Widget;
use yii\base\InvalidConfigException;

/**
 * Class SmallBox
 * @package bobonov\adminlte3\widgets
 * @since 1.0.0
 */
class SmallBox extends Widget
{
    /**
     * @var string $icon the icon to apply, if empty no icon is shown
     */
    public $icon='';

    /**
     * @var string box text
     */
    public $text='';

    /**
     * @var string footer text, if empty no footer is shown
     */
    public $footer_text='';

    /**
     * {@inheritdoc}
     * @throws InvalidConfigException
     */
    public function init()
    {
        parent::init();
        $this->validateConfig();
    }

    /**
     * {@inheritdoc}
     * @throws InvalidConfigException
     */
    public function run()
    {
        parent::run();
        echo $this->renderWidget();
    }

    /**
     * Render the widget.
     * @return string the rendered widget
     */
    private function renderWidget()
    {
        $footer='';
        if(!empty($this->footer_text)) {
            $footer="
    <a href=\"#\" id='$this->id-footer' class=\"small-box-footer\">
        $this->footer_text
    </a>
            ";
        }
        return <<<HTML
<div id='$this->id' class="small-box bg-info">
    <div id='$this->id-text' class="inner">
        $this->text
    </div>
    <div id='$this->id-icon' class="icon">
        $this->icon
    </div>
    $footer
</div>
HTML;
    }

    /**
     * Raise an invalid configuration exception.
     *
     * @param string $msg the exception message
     *
     * @throws InvalidConfigException
     */
    protected static function err($msg = '')
    {
        throw new InvalidConfigException($msg);
    }

    /**
     * Validates widget configuration.
     *
     * @throws InvalidConfigException
     */
    protected function validateConfig()
    {
        if ($this->shadow < 0 || $this->shadow > 8 || !is_int($this->shadow)) {
            static::err("Invalid value for the property 'shadow'. Must be an integer between 1 and 8.");
        }
    }
}
