[Back to the Ling/Light_Kit_Editor api](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor.md)



The CustomWidgetApi class
================
2021-03-01 --> 2021-03-09






Introduction
============

The CustomWidgetApi class.



Class synopsis
==============


class <span class="pl-k">CustomWidgetApi</span> extends [WidgetApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi.md) implements [WidgetApiInterface](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface.md), [CustomWidgetApiInterface](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/Interfaces/CustomWidgetApiInterface.md) {

- Inherited properties
    - protected [Ling\Light_Database\Service\LightDatabaseService](https://github.com/lingtalfi/Light_Database/blob/master/doc/api/Ling/Light_Database/Service/LightDatabaseService.md) [LightKitEditorBaseApi::$pdoWrapper](#property-pdoWrapper) ;
    - protected [Ling\Light\ServiceContainer\LightServiceContainerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerInterface.md) [LightKitEditorBaseApi::$container](#property-container) ;
    - protected string [LightKitEditorBaseApi::$table](#property-table) ;

- Methods
    - public [__construct](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/Classes/CustomWidgetApi/__construct.md)() : void

- Inherited methods
    - public [WidgetApi::insertWidget](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/insertWidget.md)(array $widget, ?bool $ignoreDuplicate = true, ?bool $returnRic = false) : mixed
    - public [WidgetApi::insertWidgets](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/insertWidgets.md)(array $widgets, ?bool $ignoreDuplicate = true, ?bool $returnRic = false) : mixed
    - public [WidgetApi::fetchAll](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/fetchAll.md)(?array $components = []) : array
    - public [WidgetApi::fetch](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/fetch.md)(?array $components = []) : array
    - public [WidgetApi::getWidgetById](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/getWidgetById.md)(int $id, ?$default = null, ?bool $throwNotFoundEx = false) : mixed
    - public [WidgetApi::getWidget](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/getWidget.md)($where, ?array $markers = [], ?$default = null, ?bool $throwNotFoundEx = false) : mixed
    - public [WidgetApi::getWidgets](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/getWidgets.md)($where, ?array $markers = []) : array
    - public [WidgetApi::getWidgetsColumn](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/getWidgetsColumn.md)(string $column, $where, ?array $markers = []) : array
    - public [WidgetApi::getWidgetsColumns](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/getWidgetsColumns.md)($columns, $where, ?array $markers = []) : array
    - public [WidgetApi::getWidgetsKey2Value](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/getWidgetsKey2Value.md)(string $key, string $value, $where, ?array $markers = []) : array
    - public [WidgetApi::getAllIds](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/getAllIds.md)() : array
    - public [WidgetApi::updateWidgetById](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/updateWidgetById.md)(int $id, array $widget, ?array $extraWhere = [], ?array $markers = []) : void
    - public [WidgetApi::updateWidget](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/updateWidget.md)(array $widget, ?$where = null, ?array $markers = []) : void
    - public [WidgetApi::delete](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/delete.md)(?$where = null, ?array $markers = []) : false | int
    - public [WidgetApi::deleteWidgetById](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/deleteWidgetById.md)(int $id) : void
    - public [WidgetApi::deleteWidgetByIds](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/deleteWidgetByIds.md)(array $ids) : void
    - public [LightKitEditorBaseApi::setPdoWrapper](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/LightKitEditorBaseApi/setPdoWrapper.md)([Ling\SimplePdoWrapper\SimplePdoWrapperInterface](https://github.com/lingtalfi/SimplePdoWrapper/blob/master/doc/api/Ling/SimplePdoWrapper/SimplePdoWrapperInterface.md) $pdoWrapper) : void
    - public [LightKitEditorBaseApi::setContainer](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/LightKitEditorBaseApi/setContainer.md)([Ling\Light\ServiceContainer\LightServiceContainerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerInterface.md) $container) : void

}






Methods
==============

- [CustomWidgetApi::__construct](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/Classes/CustomWidgetApi/__construct.md) &ndash; Builds the CustomWidgetApi instance.
- [WidgetApi::insertWidget](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/insertWidget.md) &ndash; Inserts the given widget in the database.
- [WidgetApi::insertWidgets](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/insertWidgets.md) &ndash; Inserts the given widget rows in the database.
- [WidgetApi::fetchAll](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/fetchAll.md) &ndash; Returns the rows corresponding to given components.
- [WidgetApi::fetch](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/fetch.md) &ndash; Returns the first row corresponding to given components, or false if there is no match.
- [WidgetApi::getWidgetById](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/getWidgetById.md) &ndash; Returns the widget row identified by the given id.
- [WidgetApi::getWidget](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/getWidget.md) &ndash; Returns the widget row identified by the given [where conditions](https://github.com/lingtalfi/SimplePdoWrapper#the-where-conditions).
- [WidgetApi::getWidgets](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/getWidgets.md) &ndash; Returns the widget rows identified by the given [where conditions](https://github.com/lingtalfi/SimplePdoWrapper#the-where-conditions).
- [WidgetApi::getWidgetsColumn](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/getWidgetsColumn.md) &ndash; identified by the given [where conditions](https://github.com/lingtalfi/SimplePdoWrapper#the-where-conditions).
- [WidgetApi::getWidgetsColumns](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/getWidgetsColumns.md) &ndash; Returns a subset of the widget rows identified by the given [where conditions](https://github.com/lingtalfi/SimplePdoWrapper#the-where-conditions).
- [WidgetApi::getWidgetsKey2Value](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/getWidgetsKey2Value.md) &ndash; Returns an array of $key => $value from the widget rows identified by the given [where conditions](https://github.com/lingtalfi/SimplePdoWrapper#the-where-conditions).
- [WidgetApi::getAllIds](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/getAllIds.md) &ndash; Returns an array of all widget ids.
- [WidgetApi::updateWidgetById](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/updateWidgetById.md) &ndash; Updates the widget row identified by the given id.
- [WidgetApi::updateWidget](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/updateWidget.md) &ndash; Updates the widget row.
- [WidgetApi::delete](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/delete.md) &ndash; Deletes the widget rows matching the given where conditions, and returns the number of deleted rows.
- [WidgetApi::deleteWidgetById](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/deleteWidgetById.md) &ndash; Deletes the widget identified by the given id.
- [WidgetApi::deleteWidgetByIds](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/WidgetApi/deleteWidgetByIds.md) &ndash; Deletes the widget rows identified by the given ids.
- [LightKitEditorBaseApi::setPdoWrapper](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/LightKitEditorBaseApi/setPdoWrapper.md) &ndash; Sets the pdoWrapper.
- [LightKitEditorBaseApi::setContainer](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Classes/LightKitEditorBaseApi/setContainer.md) &ndash; Sets the container.





Location
=============
Ling\Light_Kit_Editor\Api\Custom\Classes\CustomWidgetApi<br>
See the source code of [Ling\Light_Kit_Editor\Api\Custom\Classes\CustomWidgetApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/Api/Custom/Classes/CustomWidgetApi.php)



SeeAlso
==============
Previous class: [CustomPageHasZoneApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/Classes/CustomPageHasZoneApi.md)<br>Next class: [CustomZoneApi](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Custom/Classes/CustomZoneApi.md)<br>
