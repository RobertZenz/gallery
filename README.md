# HACKED Gallery

This is a hacked together version of Gallery to make it work on NextCloud 29 (and above?).

 > **IMPORTANT:** Because of [bug #52265 in NextCloud itself](https://github.com/nextcloud/server/issues/52265) one must patch a NextCloud file as outlined in the bug report.

No new features are planned to be implemented but if you notice that something is broken you can open an issue for it.

To install the app, download [this repository as zip](https://github.com/RobertZenz/gallery/archive/refs/heads/master.zip), unpack it and copy the "gallery-master" directory into the NextCloud apps directory. Rename it from "gallery-master" to "gallery" while you're at it. Then you should be able to activate it just like any other app.

---

# 💀Gallery was replaced by :camera_flash: Photos


💀The gallery app has been replaced by the beautiful new app:
[:camera_flash: Nextcloud Photos - Your memories under your control](https://github.com/nextcloud/photos/)

Before reporting an issue or opening a pull request, please checkout the new app and see if your request still needs to be handled there. In case it is, open your PR against the photos app.

---

Media gallery for Nextcloud which includes previews for all media types supported by your installation.

Provides a dedicated view of all images in a grid, adds image viewing capabilities to the files app and adds a gallery view to public links.

**This version is for Nextcloud 14.**

![Screenshot](https://raw.githubusercontent.com/nextcloud/gallery/master/build/screenshots/Gallery.jpg)
## Featuring
* Support for large selection of media types (depending on server setup)
* Upload and organise images and albums straight from the app
* Large, zoomable previews which can be shown in fullscreen mode
* Sort images by name or date added
* Per album design, description and copyright statement
* A la carte features (external shares, browser svg rendering, etc.)
* Image download and sharing straight from the slideshow or the gallery
* Switch to Gallery from any folder in files and vice-versa
* Ignore folders containing a ".nomedia" or ".noimage" file
* Browser rendering of SVG images (disabled by default)
* Mobile support

Checkout the [full changelog](CHANGELOG.md) for more.

## Maintainers

### Current
* [Olivier Paroz](https://github.com/oparoz)
* [Jan-Christoph Borchardt](https://github.com/jancborchardt) (Design)

### Alumni
* [Robin Appelman](https://github.com/icewind1991)

## Contributors

All the people who have provided patches to:
* [Gallery(+)](https://github.com/nextcloud/gallery/pulls?q=is%3Apr+is%3Aclosed)
* [Gallery(+) at ownCloud](https://github.com/owncloud/gallery/pulls?q=is%3Apr+is%3Aclosed)
* [Pictures at ownCloud](https://github.com/owncloud/gallery-old/pulls?q=is%3Apr+is%3Aclosed) over the years

## Requirements

See this [wiki article](https://github.com/nextcloud/gallery/wiki/Requirements) about the requirements for Gallery.

## Supporting the development

There are many ways in which you can help make Gallery a better product

* Report bugs (see below)
* Provide patches for [`nextcloud/server`](https://github.com/nextcloud/server) or the app itself
* Help test new features by checking out new branches on Github
* Design interface components for new features
* Develop new features. Please consult with the maintainers before starting your journey
* Fund a feature, either via [BountySource](https://www.bountysource.com/teams/nextcloud/issues?tracker_ids=9328526,41629711) or by directly hiring a community member who is capable of developing and maintaining it

## Bug reporting and contributing

Everything you need to know about bug reporting and contributing [is located here](https://github.com/nextcloud/gallery/blob/master/CONTRIBUTING.md).

## Preparation
Here is a list of steps you might want to take before using the app

### Supporting more media types
First, make sure you have installed ImageMagick and its imagick PECL extension.
Next add a few new entries to your **config/config.php** configuration file.

```
  'enabledPreviewProviders' =>
  array (
    0 => 'OC\\Preview\\PNG',
    1 => 'OC\\Preview\\JPEG',
    2 => 'OC\\Preview\\GIF',
    11 => 'OC\\Preview\\Illustrator',
    12 => 'OC\\Preview\\Postscript',
    13 => 'OC\\Preview\\Photoshop',
    14 => 'OC\\Preview\\TIFF'
  ),
```

Look at the sample configuration (config.sample.php) in your config folder if you need more information about how the config file works.
That's it. You should be able to see more media types in your slideshows and galleries as soon as you've installed the app.

### Improving performance

#### Redis for files locking

Using Redis for files locking improves performance **by a factor of 10** when loading an album.

Read about it in the [Nextcloud](https://docs.nextcloud.org/server/13/admin_manual/configuration_files/files_locking_transactional.html) Administration Manual

## Installation

### Installing from the app store

* As an admin, select "Apps" in the menu
* Go to the "disabled apps" section
* Enable Gallery

### Installing from archive

* Go to the [the releases page](https://github.com/nextcloud/gallery/releases)
* Download the latest release/archive to your server's **apps/** directory
* Unpack the app
* **IMPORTANT**: Make sure the folder name is gallery

### Installing from Git

In your terminal go into the **apps/** directory and then run the following command:
```
$ git clone https://github.com/nextcloud/gallery.git
```

Now you can activate it in the apps menu. It's called Gallery

To update the app go inside you *apps/gallery/** directory and type:
```
$ git pull --rebase
```

## List of patches

None so far
