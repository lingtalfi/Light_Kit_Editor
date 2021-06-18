<?php


namespace Ling\Light_Kit_Editor\Helper;

use Ling\Light\ServiceContainer\LightServiceContainerInterface;
use Ling\Light_Kit_Editor\Engine\LightKitEditorEngine;
use Ling\Light_Kit_Editor\Exception\LightKitEditorException;
use Ling\Light_Kit_Editor\Light_Kit\Page_Renderer\LightKitEditorPageRenderer;
use Ling\Light_Kit_Editor\Service\LightKitEditorService;
use Ling\Light_Kit_Editor\Storage\LightKitEditorBabyYamlStorage;
use Ling\Light_Kit_Editor\Storage\LightKitEditorDatabaseStorage;
use Ling\Light_Vars\Service\LightVarsService;

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
     * @return LightKitEditorPageRenderer
     * @throws \Exception
     */
    public static function getBasicPageRenderer(LightServiceContainerInterface $container, array $options = []): LightKitEditorPageRenderer
    {
        /**
         * @var $va LightVarsService
         */
        $va = $container->get("vars");
        $theme = $options['theme'] ?? null;
        $root = $options['root'] ?? null;
        $type = $options['type'] ?? "babyYaml";


        $appDir = $container->getApplicationDir();
        /**
         * @var $_ke LightKitEditorService
         */
        $_ke = $container->get("kit_editor");
        $pageRenderer = $_ke->getPageRenderer([
            "theme" => $theme,
            "root" => $root,
        ]);

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