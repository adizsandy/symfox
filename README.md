# Symfox 

## Agile, Extensible, Fast and Modular PHP Framework 

## Features
- Seperation of common development layer from the abstractions/source code
- Easiest Public API for implementing all available services
- Flexible project architecture, i.e., Can be used as modular or normal
- Built on the top of a powerful service dependency injection layer

## Tech
Symfox uses several best components of different open source libraries:

- [Symfony](https://symfony.com/) - Core of Symfox: HTTP Foundation, Routing, Event Dispatcher, DotEnv and Security Components
- [Eloquent ORM](https://laravel.com/docs/5.0/eloquent) - Awesome ORM implementation
- [Flysystem](https://github.com/thephpleague/flysystem) - Best file handler library 
- [Swiftmailer](https://github.com/swiftmailer/swiftmailer) - Highly extensible mailer library

## License
MIT

## Basic Documentation
All custom development sources must reside within `~/app` folder.

It is divided in three parts: 
- `~/app/helpers` folder consists of custom helper functions.
- `~/app/modules` folder consists of all main development sources

    To define a module, `<Title>/<ModuleName>` folder structure must be followed.

    For any new module, register module information within `~/app/modules/register.php` as :
        ``
        'App_Title_ModuleName' => [ // Standard Module Name : `App_` prefix is required
            'id' => 'tsitle.module_name',
            'active' => true,
            'parent' => false // If given module is a submodule or dependant on other modules, if there is any
            // put 'Standard Module Name' for the same
        ] 
        
        ``

    Each module consist of a module definition file `module.php`, which has module declarations and module specific route definitions.

    Folder structure within module consists of `Controller`, `Design` [ `layouts`, `templates` ], `Model` folders with respective functionalities.

    By default, `App_Main_Module` is default module, provided for quick setup of simple and uni-modular web applications along with some basic information for creation of other modules.

- `~/app/services` folder consists of custom services/libraries.

For setting configurations of project, use `~/.env.example` file and register respective details after  renaming it as : `~/.env`

All public assets can be saved within `~/public/assets` folder.