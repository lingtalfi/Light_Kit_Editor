[Back to the Ling/Light_Kit_Editor api](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor.md)



The CustomLightKitEditorApiFactory class
================
2021-03-01 --> 2021-03-09






Introduction
============

The CustomLightKitEditorApiFactory class.



Class synopsis
==============


class <span class="pl-k">CustomLightKitEditorApiFactory</span> extends [LightKitEditorApiFactory](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory.md)  {

- Inherited properties
    - protected [Ling\SimplePdoWrapper\SimplePdoWrapperInterface](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/SimplePdoWrapperInterface.md) [LightKitEditorApiFactory::$pdoWrapper](#property-pdoWrapper) ;
    - protected [Ling\Light\ServiceContainer\LightServiceContainerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerInterface.md) [LightKitEditorApiFactory::$container](#property-container) ;

- Methods
    - public [__construct](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/CustomLightKitEditorApiFactory/__construct.md)() : void

- Inherited methods
    - public [LightKitEditorApiFactory::getWidgetApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/getWidgetApi.md)() : [CustomWidgetApiInterface](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/Interfaces/CustomWidgetApiInterface.md)
    - public [LightKitEditorApiFactory::getZoneApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/getZoneApi.md)() : [CustomZoneApiInterface](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/Interfaces/CustomZoneApiInterface.md)
    - public [LightKitEditorApiFactory::getZoneHasWidgetApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/getZoneHasWidgetApi.md)() : [CustomZoneHasWidgetApiInterface](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/Interfaces/CustomZoneHasWidgetApiInterface.md)
    - public [LightKitEditorApiFactory::getPageApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/getPageApi.md)() : [CustomPageApiInterface](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/Interfaces/CustomPageApiInterface.md)
    - public [LightKitEditorApiFactory::getPageHasZoneApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/getPageHasZoneApi.md)() : [CustomPageHasZoneApiInterface](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/Interfaces/CustomPageHasZoneApiInterface.md)
    - public [LightKitEditorApiFactory::setPdoWrapper](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/setPdoWrapper.md)([Ling\SimplePdoWrapper\SimplePdoWrapperInterface](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/SimplePdoWrapperInterface.md) $pdoWrapper) : void
    - public [LightKitEditorApiFactory::setContainer](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/setContainer.md)([Ling\Light\ServiceContainer\LightServiceContainerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerInterface.md) $container) : void

}






Methods
==============

- [CustomLightKitEditorApiFactory::__construct](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/CustomLightKitEditorApiFactory/__construct.md) &ndash; Builds the CustomLightKitEditorApiFactory instance.
- [LightKitEditorApiFactory::getWidgetApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/getWidgetApi.md) &ndash; Returns a CustomWidgetApiInterface.
- [LightKitEditorApiFactory::getZoneApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/getZoneApi.md) &ndash; Returns a CustomZoneApiInterface.
- [LightKitEditorApiFactory::getZoneHasWidgetApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/getZoneHasWidgetApi.md) &ndash; Returns a CustomZoneHasWidgetApiInterface.
- [LightKitEditorApiFactory::getPageApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/getPageApi.md) &ndash; Returns a CustomPageApiInterface.
- [LightKitEditorApiFactory::getPageHasZoneApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/getPageHasZoneApi.md) &ndash; Returns a CustomPageHasZoneApiInterface.
- [LightKitEditorApiFactory::setPdoWrapper](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/setPdoWrapper.md) &ndash; Sets the pdoWrapper.
- [LightKitEditorApiFactory::setContainer](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/setContainer.md) &ndash; Sets the container.





Location
=============
Ling\Light_Kit_Editor\Api\Custom\CustomLightKitEditorApiFactory<br>
See the source code of [Ling\Light_Kit_Editor\Api\Custom\CustomLightKitEditorApiFactory](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/Api/Custom/CustomLightKitEditorApiFactory.php)



SeeAlso
==============
Previous class: [CustomZoneHasWidgetApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/Classes/CustomZoneHasWidgetApi.md)<br>Next class: [CustomPageApiInterface](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/Interfaces/CustomPageApiInterface.md)<br>
