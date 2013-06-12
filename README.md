# wp-yaml

WP YAML is a lightweight, responsive, almost-blank Wordpress starter theme. It is meant to provide a clean starting base with a modular structure for rapid Wordpress website development, especially for developers who are familiar with SASS.

As the name implies, WP YAML is based on the awesome [YAML CSS framework](http://www.yaml.de) and fully incorporates all of its wizardry.

Further thanks go to:

- [yaml4-sass](https://github.com/djesse/yaml4-sass)
- [bones](https://github.com/djesse/yaml4-sass)
- [required+ foundation](https://github.com/wearerequired/required-foundation)

## Features

- Clean HTML5 code structure, minimal extra classes and div's
- Optimized for fast performance, compressed style.css is only 23kB
- Folder structure from YAML remains intact and unchanged to allow for easy updates
- Modular PHP and WP YAML SASS structure
- Support for two Wordpress navigation menus (top and footer)
- YAML styling for these Wordpress features: Search, Comments, Pagination, Image alignment
- Only very minimal Wordpress base styling, can easily be changed/removed
- All WP YAML *.scss files are well commented
- Clean and fully commented functions.php with modular PHP includes
- Support for custom post types
- Support for active sidebar(s) and widgets
- Support for all post formats
- Support for thumbnails
- Clean WP header
- No JS/jQuery dependencies

## Initial version

The initial version was created using YAML 4.0 and [yaml4-sass](https://github.com/djesse/yaml4-sass). I'll update it to YAML 4.1. as soon as possible (which now incorporates SASS).

WP YAML currently uses the YAML full-page layout with responsive equal-heights grids. I'll add more layout versions over time.

## Installation and Quick Start

Install like any other Wordpress theme - upload /wp-yaml/ folder to /wp-content/themes/ and activate it in the back-end.

SASS developers can simply start adding their custom styling in /sass/_custom.scss, and/or edit the *.scss files in /sass/wpyaml/. The config.rb file is pre-configured for easy use of [Prepros](http://alphapixels.com/prepros/) - just drop the wp-yaml directory in there if you don't like Compass and the command line :)

Plain CSS developers can rename css/style-plaincss.css to css/style.css and go from there. The plain CSS version contains no Wordpress-specific styling yet, it is the "naked" YAML CSS.

## Todo

- [ ] Create demo on wpyaml.com
- [ ] Update to YAML 4.1
- [ ] Fix some details in mobile view 
- [ ] Extend documentation
- [ ] German Readme
- [ ] Add more base layouts
- [ ] Add admin options
- [ ] Add TinyMCE YAML styles (e.g. buttons)
- [ ] Add support for translations
- [ ] Customize admin

## License
### Creative Commons License (CC-BY 3.0)

The YAML framework is published under the [Creative Commons Attribution 3.0 License (CC-BY 3.0)](http://creativecommons.org/licenses/by/3.0/), which permits
both private and commercial use.

*Condition: For the free use of WP YAML framework, a backlink to the WP-YAML homepage (<http://www.wpyaml.com>) in a suitable place (e.g. website footer or in the imprint) is required.*

When using WP YAML, the [license requirements of YAML](https://github.com/yamlcss/yaml#licenses) must be fulfilled, too.