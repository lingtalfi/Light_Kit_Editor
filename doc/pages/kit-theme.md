Kit theme, conception notes
===========
2021-03-11




What's a theme, abstract definition
-------------
2021-03-11


Different frameworks might have different ideas for what a theme is, so let's start by setting up a definition.


What I expect from a theme is to be able to swap the skin of the web app in a finger snap.

By skin, I mean the look (i.e. not the functionality).


So for instance a web app could have 4 themes, depending on which season we're on:

- autumn
- spring
- summer
- winter


Each of which would give a different look to the web app.



So how does it work?
---------
2021-03-11



Let's review how a page is rendered, and let's see how changing a theme affects the process.

So a controller calls a page, which uses a layout, and some widgets are attached (via blocks) to the positions of this layout.


Now when we change the theme, the only two things that change are:

- the page calls a different layout
- the widgets can potentially be overridden


This means that the controller calls the same page.
The widgets defined in the page are the same, although they can be overridden.

95% of the theme is done by just changing the layout file.

That's the main idea.






The t variable
------------
2021-03-11

So how do you change the layouts called from the pages?

We will use a variable named **$t**. 

The tools we will be using will basically replace the **$t** variable by the actual name of the theme.

So for instance, here is how a page calls a layout:


```yaml

label: Light Kit Admin Dashboard
layout: config/open/Ling.Light_Kit_Admin/lke/layouts/$t/main_layout.php
...

```

Note that we put the layout files in the **open** config, so that it's easier for third-party authors to create their own theme:
they could just copy the theme directory (i.e. $t) and replace it with whatever they want.

Note2: if you override the theme, notice that your layout file still needs to be named **main_layout.php**.


So now we have the ability to change the layout, which means we should be able to cover about 95%
of the theme, just by adding our own css files and using css selectors to target the elements we want to change.

However, sometimes that might not be enough, that's when we need to dive even more, at the widget level.



The theme in widget's context
----------
2021-03-11


Now let's talk about widgets.

A typical kit widget will look like this:

```yaml
name: lka_chloroform
type: picasso
className: Ling\Light_Kit_Admin\Widget\Picasso\LightKitAdminChloroformWidget
widgetDir: templates/Ling.Light_Kit_Admin/widgets/picasso/LightKitAdminChloroformWidget
template: default.php
js: null
skin: null              # you can interpret the word "skin" as "css" here, it's just kit picasso terminology
vars: []
    title: User Profile
    form: ${form}
    show_rights: true
    is_root: ${is_root}
    rights: ${rights}
```


The basically idea of the theme swapping as far as widgets as concerned is to add the **.$theme_name** suffix to either of those elements:

- template
- skin (aka css)
- js


Those 3 elements basically represent file names, and so by appending a suffix to them, we have a new filename.

For instance, if our template is:

- **default.php**
  

The themed version would be:

- **default.$theme_name.php**


Note that the suffix is actually between the [baseName](https://github.com/lingtalfi/NotationFan/blob/master/filename-basename.md) and the file extension.


So for instance if our theme is named **winter**, the themed version would be:

- **default.winter.php**


The basic idea is that file exists, it will be used, if not, the **default.php** file will be used.

Again, that's what I meant by the all powerful author idea earlier: if you are not the author of the widget,
you can't create a themed version of the widget (unless you hack yourself, but that's another story).
The "right" way to extend this widget if you are not the author is to copy/override, same as for the template (we discussed
this technique already in a previous section).



So there you have it, the full theme idea.
























