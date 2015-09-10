<?php

/**
 * Class UeditorWidget
 * Example:
 *
 * <code>
 *  <?php $this->widget('application.widgets.Ueditor.UeditorWidget'); ?>
 *  <textarea class="tff_ueditor" id="content" name="content"  style="width:800px;height:300px;">value</textarea>
 *  <textarea class="tff_ueditor" id="content2" name="content2"  style="width:800px;height:300px;">value2</textarea>
 * </code>
 */
class UeditorWidget extends CInputWidget {

    /**
     * 资源地址，也是UE的UEDITOR_HOME_URL，自动生成，一般情况不要修改。
     * @var string
     */
    private $_assetUrl;

    /**
     * 需要引入的JS文件列表。
     * @var array js列表
     */
    public $jsFiles = array (
        '/umeditor.config.js',
        '/umeditor.min.js',
        '/lang/zh-cn/zh-cn.js'
    );

    public $serverUrl = null;

    public $ueditorSelector = '.tff_ueditor';
    public $initialFrameHeight = '450';
    public $options = array();

    public function init()
    {
        //发布资源文件
        $assetManager = Yii::app()->assetManager;
        $this->_assetUrl = $assetManager->publish( __DIR__ . DIRECTORY_SEPARATOR . 'resource' );
        $this->options = array(
            'UEDITOR_HOME_URL' => $this->_assetUrl . '/',
            'initialFrameHeight' => $this->initialFrameHeight
        );

    }

    public function run()
    {
        //注册资源文件
        Yii::app()->clientScript->registerCssFile($this->_assetUrl . '/themes/default/css/umeditor.css');
        $clientScript = Yii::app()->clientScript;
        foreach( $this->jsFiles as $jsFile) {
            $clientScript->registerScriptFile($this->_assetUrl . $jsFile, CClientScript::POS_END );
        }

        $options = CJSON::encode($this->options);

        $js = <<<UEDITOR
        $('{$this->ueditorSelector}').each(function(index, item) {
            var name = $(item).attr('name');
            var id = $(item).attr('id');
            if (!id) {
                console.log('UEditor Missing ID');
                return;
            }
            UM.getEditor(id, {$options});
        });
UEDITOR;
        $clientScript->registerScript('ueditor', $js, CClientScript::POS_END);
    }

}