<?php


namespace Ling\Light_Kit_Editor\Light_Kit\Page_Renderer;


use Ling\Light_Kit\ConfigurationTransformer\ThemeTransformer;
use Ling\Light_Kit\PageRenderer\LightKitPageRenderer;
use Ling\Light_Kit_Editor\Light_Kit\ConfigurationTransformer\WebsiteRootTransformer;

/**
 * The LightKitEditorPageRenderer class.
 *
 * To use this class properly,
 * call the init method after instantiation.
 *
 */
class LightKitEditorPageRenderer extends LightKitPageRenderer
{


    /**
     * This property holds the _isInitialized for this instance.
     * @var bool
     */
    private bool $_isInitialized;


    /**
     * Builds the LightKitEditorPageRenderer instance.
     */
    public function __construct()
    {
        parent::__construct();
        $this->_isInitialized = false;
    }


    /**
     * Initializes this instance.
     * Available options are:
     * - theme: string, the theme name
     * - root: string, the relative path to the website root
     *
     * See the @page(Light_Kit conception notes) and
     * the @page(Light_Kit_Editor conception notes) for more details.
     *
     *
     *
     * This method can only be called once.
     *
     *
     *
     * @param array $options
     */
    public function init(array $options = [])
    {
        if (true === $this->_isInitialized) {
            return;
        }

        if (true === array_key_exists("theme", $options)) {
            $theme = $options['theme'];
            $themeTransformer = new ThemeTransformer();
            $themeTransformer->setTheme($theme);
            $this->addPageConfigurationTransformer($themeTransformer);
        }


        if (true === array_key_exists("root", $options)) {
            $root = $options['root'];
            $rootTransformer = new WebsiteRootTransformer();
            $rootTransformer->setRoot($root);
            $this->addPageConfigurationTransformer($rootTransformer);
        }


        $this->_isInitialized = true;
    }


}