# Concrete5 Frontend Build

Version ```1.0.0```

Frontend build build framework with customisations for LGT Concrete5 CMS integrations.

Issues, improvements and features requests should be directed to Github [Issues](https://github.com/limegreentangerine/c5-frontend/issues)

---

## System Requirements

- ``PHP 7+``
- ``Node``
- ``NPM``
- ``Gulp``
- 
---

## Windows Installations

Please follow [this guide](https://docs.google.com/document/d/1xHTJ0yu5r8GDy9PapHvjtg4K8tHagiRsro08_l-H2I0) before continuing.

---

## Installation and Use

This will be available as a template in the Limegreentangerine Github repository. Create a new repo using theis template, the clone to your system, then run:

```
npm install
```

All `scss` and `js` files can be found here:

```
./src/
```

Custom scss files must be imported inside the `.ccm-page` class to allow seperation form the CMS interface.

```
.ccm-page {
    // import scss here
}
```

`./elements/` is to be used for UI components such as the header and footer.

`./blocks/` is to be used for components that will be used in reusable blocks. These will be outlined in the projects DSM.

To begin a development environment just run:

```
npm start
```

This will run a build and start a local browsersync server with automatic reload.

---

## Build

To create a build run:

```
npm run build
```
---

## Assets & Images

Place all assets in the assets folder.

```
./assets/*
```
---

## Structure Includes

This framework uses `PHP` to make including sections easier. To include an element simply use the following as an example:

```
<?php require_once('./elements/header.php'); ?>
```

---

## Future Developments

I will be creating a task that will compile all files into a nice package we can drop in the theme folder in our concrete builds.

---

## Credits

**Author:** [Lee Jones](lee@limegreentangerine.co.uk)

&copy; 2021 [Limegreentangerine](https://www.limegreentangerine.co.uk)

Last Updated: March 2021
