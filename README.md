### About

This is fork of EmbedVideo extension of MediaWiki 
    http://www.github.com/Whiteknight/mediawiki-embedvideo

The EmbedVideo extension is used to embed flash videos from video hosting
sites such as YouTube.com into a MediaWiki wiki website. It adds parser
functions {{#ev:}} and {{#evp:}} which can be added to pages to embed videos
in the wiki page.

    

### History

The original version of EmbedVideo was created by Jim R. Wilson. That version
was later forked by Mohammed Derakhshani as the EmbedVideoPlus extension. In
early 2010 Andrew Whitworth took over active maintenance of both extensions
and merged them together as "EmbedVideo".

The newer versions of EmbedVideo are intended to be fully backwards-compatible
with both older EmbedVideo and EmbedVideoPlus extensions.

## License

EmbedVideo is released under the MIT license

    http://www.opensource.org/licenses/mit-license.php

See LICENSE for more details

## Installation

### Download

There are three places to download the EmbedVideo extension. The first is
directly from its GitHub project page, where active development takes place.
If you have git, you can use this incantation to check out a read-only copy
of the extension source:

    git clone git://github.com/borovinskiy/mediawiki-EmbedVideo.git

Downloadable archive packages for numbered releases will also be available
from the github project page.

### Installation Instructions

 Download the contents of the extension, as outlined above.

 Create an EmbedVideo folder in the extensions/ folder of your MediaWiki
installation.

 Copy the contents of this distribution into that folder

 Add the following line to your LocalSettings.php:

    require_once( "$IP/extensions/EmbedVideo/EmbedVideo.php" );

## Supported Sites

EmbedVideo supports several video hosting sites. Some of the more popular ones
include:

    youtube (regular and HD videos)
    interia
    revver
    sevenload
    funnyordie
    dailymotion
    divshare
    teachertube
    google video

For a complete list of of supported sites, see the EmbedVideo wiki at

    http://wiki.github.com/Whiteknight/mediawiki-embedvideo/supported-sites

# Credits

The original version of EmbedVideo was written by Jim R. Wilson. Additional
changes and modifications made by Andrew Whitworth, Arsen Borovinskiy and other contributors.

See CREDITS for details
