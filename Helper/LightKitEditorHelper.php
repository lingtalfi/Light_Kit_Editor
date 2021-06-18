<?php


namespace Ling\Light_Kit_Editor\Helper;

use Ling\Light\ServiceContainer\LightServiceContainerInterface;
use Ling\Light_Kit\ConfigurationTransformer\ThemeTransformer;
use Ling\Light_Kit\PageRenderer\LightKitPageRenderer;
use Ling\Light_Kit\Service\LightKitService;
use Ling\Light_Kit_Editor\Engine\LightKitEditorEngine;
use Ling\Light_Kit_Editor\Exception\LightKitEditorException;
use Ling\Light_Kit_Editor\Light_Kit\ConfigurationTransformer\WebsiteRootTransformer;
use Ling\Light_Kit_Editor\Storage\LightKitEditorBabyYamlStorage;
use Ling\Light_Kit_Editor\Storage\LightKitEditorDatabaseStorage;

/**
 * The LightKitEditorHelper class.
 */
class LightKitEditorHelper
{


    /**
     * Returns a basic kit editor page renderer, based on the given options.
     *
     * By basic, we mean an instance which has the conf storage set.
     *
     *
     * Which type of conf storage is set depends on the given options.
     *
     * Available options are:
     *
     * - type: string=babyYaml. The type of storage to use. It can be one of the following:
     *      - babyYaml
     *      - db
     *
     * - theme: string, the theme name. If set, the ThemeTransformer will be added to the instance. See the source code for more info.
     * - root: string, the relative path to the website root. If set, the WebsiteRootTransformer will be added to the instance. See the source code for more info.
     *
     *
     *
     * @param LightServiceContainerInterface $container
     * @param array $options
     * @return LightKitPageRenderer
     * @throws \Exception
     */
    public static function getBasicPageRenderer(LightServiceContainerInterface $container, array $options = []): LightKitPageRenderer
    {

        /**
         * @var $_kit LightKitService
         */
        $_kit = $container->get("kit");
        $pageRenderer = clone($_kit);


        $appDir = $container->getApplicationDir();


        $theme = $options['theme'] ?? null;
        $root = $options['root'] ?? null;
        $type = $options['type'] ?? "babyYaml";


        if (null !== $theme) {
            $themeTransformer = new ThemeTransformer();
            $themeTransformer->setTheme($theme);
            $pageRenderer->addPageConfigurationTransformer($themeTransformer);
        }


        if (null !== $root) {
            $rootTransformer = new WebsiteRootTransformer();
            $rootTransformer->setRoot($root);
            $pageRenderer->addPageConfigurationTransformer($rootTransformer);
        }
        $engine = new LightKitEditorEngine();


        if ('babyYaml' === $type) {
            $storage = new LightKitEditorBabyYamlStorage();
            $storage->setRootDir($appDir . "/" . $root);
        } elseif ("database" === $type) {
            $storage = new LightKitEditorDatabaseStorage();
        } else {
            throw new LightKitEditorException("Unknown storage type: $type.");
        }
        $storage->setContainer($container);
        $engine->setStorage($storage);
        $pageRenderer->setConfStorage($engine);

        return $pageRenderer;
    }
}