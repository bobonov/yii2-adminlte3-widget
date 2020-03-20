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

namespace bobonov\adminlte3\widgets;

use yii\bootstrap4\Widget;
use yii\base\InvalidConfigException;

/**
 * Class InfoBox
 * @package bobonov\adminlte3\widgets
 * @since 1.0.0
 */
class InfoBox extends Widget
{

    /**
     * @var string $icon the icon to apply, if empty no icon is shown
     */
    public $icon='';

    /**
     * @var string icon background color
     */
    public $icon_bgcolor;

    /**
     * @var integer icon shadow level between 1 and 8, empty value no shadow is shown
     */
    public $shadow=1;

    /**
     * @var string box background color
     */
    public $box_bgcolor;

    /**
     * @var string box title
     */
    public $title='';

    /**
     * @var string box text
     */
    public $text='';

    /**
     * {@inheritdoc}
     * @throws InvalidConfigException
     */
    public function run()
    {
        parent::run();
        $this->validateConfig();
        return $this->renderWidget();
    }

    /**
     * Render the widget.
     * @return string the rendered widget
     */
    protected function renderWidget(): string
    {
        $iconSpan='';
        if(!empty($this->icon)){
            $iconSpan="<span id='$this->id-icon' class=\"info-box-icon $this->icon_bgcolor elevation-$this->shadow\">$this->icon</span>";
        }
        return <<<HTML
<div id='$this->id' class="info-box $this->box_bgcolor">
    $iconSpan
    <div id='$this->id-content' class="info-box-content">
        <span id='$this->id-title' class="info-box-text">$this->title</span>
        <span id='$this->id-text' class="info-box-number">
            $this->text
        </span>
    </div>
</div>
HTML;
    }

    /**
     * Raise an invalid configuration exception.
     * @param string $msg the exception message
     * @throws InvalidConfigException
     */
    protected static function err($msg = '')
    {
        throw new InvalidConfigException($msg);
    }

    /**
     * Validates widget configuration.
     * @throws InvalidConfigException
     */
    protected function validateConfig()
    {
        if ($this->shadow < 0 || $this->shadow > 8 || !is_int($this->shadow)) {
            static::err("Invalid value for the property 'shadow'. Must be an integer between 1 and 8.");
        }
    }
}
