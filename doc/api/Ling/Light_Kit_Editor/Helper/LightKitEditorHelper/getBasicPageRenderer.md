[Back to the Ling/Light_Kit_Editor api](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor.md)<br>
[Back to the Ling\Light_Kit_Editor\Helper\LightKitEditorHelper class](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Helper/LightKitEditorHelper.md)


LightKitEditorHelper::getBasicPageRenderer
================



LightKitEditorHelper::getBasicPageRenderer — Returns a basic kit editor page renderer, based on the given options.




Description
================


public static [LightKitEditorHelper::getBasicPageRenderer](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Helper/LightKitEditorHelper/getBasicPageRenderer.md)([Ling\Light\ServiceContainer\LightServiceContainerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerInterface.md) $container, ?array $options = []) : [LightKitEditorPageRenderer](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Light_Kit/Page_Renderer/LightKitEditorPageRenderer.md)




Returns a basic kit editor page renderer, based on the given options.

By basic, we mean an instance which has the conf storage set.


Which type of conf storage is set depends on the given options.

Available options are:

- type: string=babyYaml. The type of storage to use. It can be one of the following:
     - babyYaml
     - db

- theme: string, the theme name. If set, the ThemeTransformer will be added to the instance. See the source code for more info.
- root: string, the relative path to the website root. If set, the WebsiteRootTransformer will be added to the instance. See the source code for more info.




Parameters
================


- container

    

- options

    


Return values
================

Returns [LightKitEditorPageRenderer](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Light_Kit/Page_Renderer/LightKitEditorPageRenderer.md).


Exceptions thrown
================

- [Exception](http://php.net/manual/en/class.exception.php).&nbsp;







Source Code
===========
See the source code for method [LightKitEditorHelper::getBasicPageRenderer](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/Helper/LightKitEditorHelper.php#L46-L82)


See Also
================

The [LightKitEditorHelper](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Helper/LightKitEditorHelper.md) class.



