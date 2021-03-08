[Back to the Ling/Light_Kit_Editor api](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor.md)



The LightKitEditorService class
================
2021-03-01 --> 2021-03-08






Introduction
============

The LightKitEditorService class.



Class synopsis
==============


class <span class="pl-k">LightKitEditorService</span>  {

- Properties
    - protected [Ling\Light_Kit_Editor\Api\Custom\CustomLightKitEditorApiFactory](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/CustomLightKitEditorApiFactory.md) [$factory](#property-factory) ;
    - protected [Ling\Light\ServiceContainer\LightServiceContainerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerInterface.md)|null [$container](#property-container) ;

- Methods
    - public [__construct](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Service/LightKitEditorService/__construct.md)() : void
    - public [setContainer](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Service/LightKitEditorService/setContainer.md)([Ling\Light\ServiceContainer\LightServiceContainerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerInterface.md) $container) : void
    - private [error](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Service/LightKitEditorService/error.md)(string $msg, ?int $code = null) : void
    - public [getFactory](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Service/LightKitEditorService/getFactory.md)() : [CustomLightKitEditorApiFactory](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/CustomLightKitEditorApiFactory.md)

}




Properties
=============

- <span id="property-factory"><b>factory</b></span>

    This property holds the factory for this instance.
    
    

- <span id="property-container"><b>container</b></span>

    This property holds the container for this instance.
    
    



Methods
==============

- [LightKitEditorService::__construct](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Service/LightKitEditorService/__construct.md) &ndash; Builds the LightKitEditorService instance.
- [LightKitEditorService::setContainer](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Service/LightKitEditorService/setContainer.md) &ndash; Sets the container.
- [LightKitEditorService::error](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Service/LightKitEditorService/error.md) &ndash; Throws an exception.
- [LightKitEditorService::getFactory](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Service/LightKitEditorService/getFactory.md) &ndash; Returns the factory for this plugin's api.





Location
=============
Ling\Light_Kit_Editor\Service\LightKitEditorService<br>
See the source code of [Ling\Light_Kit_Editor\Service\LightKitEditorService](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/Service/LightKitEditorService.php)



SeeAlso
==============
Previous class: [LightKitEditorException](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Exception/LightKitEditorException.md)<br>Next class: [LightKitEditorAbstractStorage](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Storage/LightKitEditorAbstractStorage.md)<br>
