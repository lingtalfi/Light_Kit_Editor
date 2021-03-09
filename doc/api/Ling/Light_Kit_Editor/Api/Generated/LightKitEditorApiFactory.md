[Back to the Ling/Light_Kit_Editor api](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor.md)



The LightKitEditorApiFactory class
================
2021-03-01 --> 2021-03-09






Introduction
============

The LightKitEditorApiFactory class.



Class synopsis
==============


class <span class="pl-k">LightKitEditorApiFactory</span>  {

- Properties
    - protected [Ling\SimplePdoWrapper\SimplePdoWrapperInterface](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/SimplePdoWrapperInterface.md) [$pdoWrapper](#property-pdoWrapper) ;
    - protected [Ling\Light\ServiceContainer\LightServiceContainerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerInterface.md) [$container](#property-container) ;

- Methods
    - public [__construct](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/__construct.md)() : void
    - public [getWidgetApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/getWidgetApi.md)() : [CustomWidgetApiInterface](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/Interfaces/CustomWidgetApiInterface.md)
    - public [getZoneApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/getZoneApi.md)() : [CustomZoneApiInterface](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/Interfaces/CustomZoneApiInterface.md)
    - public [getZoneHasWidgetApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/getZoneHasWidgetApi.md)() : [CustomZoneHasWidgetApiInterface](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/Interfaces/CustomZoneHasWidgetApiInterface.md)
    - public [getPageApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/getPageApi.md)() : [CustomPageApiInterface](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/Interfaces/CustomPageApiInterface.md)
    - public [getPageHasZoneApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/getPageHasZoneApi.md)() : [CustomPageHasZoneApiInterface](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/Interfaces/CustomPageHasZoneApiInterface.md)
    - public [setPdoWrapper](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/setPdoWrapper.md)([Ling\SimplePdoWrapper\SimplePdoWrapperInterface](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/SimplePdoWrapperInterface.md) $pdoWrapper) : void
    - public [setContainer](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/setContainer.md)([Ling\Light\ServiceContainer\LightServiceContainerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerInterface.md) $container) : void

}




Properties
=============

- <span id="property-pdoWrapper"><b>pdoWrapper</b></span>

    This property holds the pdoWrapper for this instance.
    
    

- <span id="property-container"><b>container</b></span>

    This property holds the container for this instance.
    
    



Methods
==============

- [LightKitEditorApiFactory::__construct](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/__construct.md) &ndash; Builds the LightKitEditorApiFactoryObjectFactory instance.
- [LightKitEditorApiFactory::getWidgetApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/getWidgetApi.md) &ndash; Returns a CustomWidgetApiInterface.
- [LightKitEditorApiFactory::getZoneApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/getZoneApi.md) &ndash; Returns a CustomZoneApiInterface.
- [LightKitEditorApiFactory::getZoneHasWidgetApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/getZoneHasWidgetApi.md) &ndash; Returns a CustomZoneHasWidgetApiInterface.
- [LightKitEditorApiFactory::getPageApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/getPageApi.md) &ndash; Returns a CustomPageApiInterface.
- [LightKitEditorApiFactory::getPageHasZoneApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/getPageHasZoneApi.md) &ndash; Returns a CustomPageHasZoneApiInterface.
- [LightKitEditorApiFactory::setPdoWrapper](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/setPdoWrapper.md) &ndash; Sets the pdoWrapper.
- [LightKitEditorApiFactory::setContainer](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/LightKitEditorApiFactory/setContainer.md) &ndash; Sets the container.





Location
=============
Ling\Light_Kit_Editor\Api\Generated\LightKitEditorApiFactory<br>
See the source code of [Ling\Light_Kit_Editor\Api\Generated\LightKitEditorApiFactory](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/Api/Generated/LightKitEditorApiFactory.php)



SeeAlso
==============
Previous class: [ZoneHasWidgetApiInterface](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/ZoneHasWidgetApiInterface.md)<br>Next class: [LightKitEditorEngine](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Engine/LightKitEditorEngine.md)<br>
