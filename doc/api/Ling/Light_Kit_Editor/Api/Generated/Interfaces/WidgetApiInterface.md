[Back to the Ling/Light_Kit_Editor api](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor.md)



The WidgetApiInterface class
================
2021-03-01 --> 2021-03-09






Introduction
============

The WidgetApiInterface interface.
It implements the [ling standard object methods](https://github.com/lingtalfi/Light_BreezeGenerator/blob/master/doc/pages/ling-standard-object-methods.md) concept.



Class synopsis
==============


abstract class <span class="pl-k">WidgetApiInterface</span>  {

- Methods
    - abstract public [insertWidget](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/insertWidget.md)(array $widget, ?bool $ignoreDuplicate = true, ?bool $returnRic = false) : mixed
    - abstract public [insertWidgets](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/insertWidgets.md)(array $widgets, ?bool $ignoreDuplicate = true, ?bool $returnRic = false) : mixed
    - abstract public [fetchAll](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/fetchAll.md)(?array $components = []) : array
    - abstract public [fetch](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/fetch.md)(?array $components = []) : array
    - abstract public [getWidgetById](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/getWidgetById.md)(int $id, ?$default = null, ?bool $throwNotFoundEx = false) : mixed
    - abstract public [getWidget](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/getWidget.md)($where, ?array $markers = [], ?$default = null, ?bool $throwNotFoundEx = false) : mixed
    - abstract public [getWidgets](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/getWidgets.md)($where, ?array $markers = []) : array
    - abstract public [getWidgetsColumn](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/getWidgetsColumn.md)(string $column, $where, ?array $markers = []) : array
    - abstract public [getWidgetsColumns](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/getWidgetsColumns.md)($columns, $where, ?array $markers = []) : array
    - abstract public [getWidgetsKey2Value](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/getWidgetsKey2Value.md)(string $key, string $value, $where, ?array $markers = []) : array
    - abstract public [getAllIds](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/getAllIds.md)() : array
    - abstract public [updateWidgetById](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/updateWidgetById.md)(int $id, array $widget, ?array $extraWhere = [], ?array $markers = []) : void
    - abstract public [updateWidget](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/updateWidget.md)(array $widget, ?$where = null, ?array $markers = []) : void
    - abstract public [delete](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/delete.md)(?$where = null, ?array $markers = []) : false | int
    - abstract public [deleteWidgetById](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/deleteWidgetById.md)(int $id) : void
    - abstract public [deleteWidgetByIds](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/deleteWidgetByIds.md)(array $ids) : void

}






Methods
==============

- [WidgetApiInterface::insertWidget](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/insertWidget.md) &ndash; Inserts the given widget in the database.
- [WidgetApiInterface::insertWidgets](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/insertWidgets.md) &ndash; Inserts the given widget rows in the database.
- [WidgetApiInterface::fetchAll](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/fetchAll.md) &ndash; Returns the rows corresponding to given components.
- [WidgetApiInterface::fetch](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/fetch.md) &ndash; Returns the first row corresponding to given components, or false if there is no match.
- [WidgetApiInterface::getWidgetById](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/getWidgetById.md) &ndash; Returns the widget row identified by the given id.
- [WidgetApiInterface::getWidget](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/getWidget.md) &ndash; Returns the widget row identified by the given [where conditions](https://github.com/lingtalfi/SimplePdoWrapper#the-where-conditions).
- [WidgetApiInterface::getWidgets](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/getWidgets.md) &ndash; Returns the widget rows identified by the given [where conditions](https://github.com/lingtalfi/SimplePdoWrapper#the-where-conditions).
- [WidgetApiInterface::getWidgetsColumn](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/getWidgetsColumn.md) &ndash; identified by the given [where conditions](https://github.com/lingtalfi/SimplePdoWrapper#the-where-conditions).
- [WidgetApiInterface::getWidgetsColumns](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/getWidgetsColumns.md) &ndash; Returns a subset of the widget rows identified by the given [where conditions](https://github.com/lingtalfi/SimplePdoWrapper#the-where-conditions).
- [WidgetApiInterface::getWidgetsKey2Value](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/getWidgetsKey2Value.md) &ndash; Returns an array of $key => $value from the widget rows identified by the given [where conditions](https://github.com/lingtalfi/SimplePdoWrapper#the-where-conditions).
- [WidgetApiInterface::getAllIds](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/getAllIds.md) &ndash; Returns an array of all widget ids.
- [WidgetApiInterface::updateWidgetById](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/updateWidgetById.md) &ndash; Updates the widget row identified by the given id.
- [WidgetApiInterface::updateWidget](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/updateWidget.md) &ndash; Updates the widget row.
- [WidgetApiInterface::delete](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/delete.md) &ndash; Deletes the widget rows matching the given where conditions, and returns the number of deleted rows.
- [WidgetApiInterface::deleteWidgetById](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/deleteWidgetById.md) &ndash; Deletes the widget identified by the given id.
- [WidgetApiInterface::deleteWidgetByIds](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/WidgetApiInterface/deleteWidgetByIds.md) &ndash; Deletes the widget rows identified by the given ids.





Location
=============
Ling\Light_Kit_Editor\Api\Generated\Interfaces\WidgetApiInterface<br>
See the source code of [Ling\Light_Kit_Editor\Api\Generated\Interfaces\WidgetApiInterface](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/Api/Generated/Interfaces/WidgetApiInterface.php)



SeeAlso
==============
Previous class: [PageHasZoneApiInterface](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/PageHasZoneApiInterface.md)<br>Next class: [ZoneApiInterface](https://github.com/lingtalfi/Light_Kit_Editor/blob/master/doc/api/Ling/Light_Kit_Editor/Api/Generated/Interfaces/ZoneApiInterface.md)<br>
