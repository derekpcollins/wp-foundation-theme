# WordPress Foundation Theme

An extremely minimalist WordPress theme intended as a foundation for theme developers.

## Overview

I hesitate to even call this a "theme" as it is really just a set of files to serve as the basis for creating new themes from scratch.

It is intentionally minimalist and I tried to make very few assumptions about what a developer/designer might want. There are no included styles and there's very little in the way of HTML structure. I wanted to leave as much as I could to the discretion of the theme developer/designer.

## File Structure

### header.php and footer.php

These 2 files contain the code that will show up at the top and bottom (respectively) of each of your pages. They must be included by any of the pages on your site.

#### header.php

The header file contains the `DOCTYPE`, opening `<html>` tag, the `<head>` section, the opening `<body>` tag and the header of your page, which includes the first heading and the navigation for your site.

#### footer.php

The footer file contains the footer of your page, the closing `</body>` tag and the close `</html>` tag.

### sidebar.php

This file allows you to include an (optional) sidebar on any of your pages. By defualt it is included within index.php, single.php, archive.php and page.php. The sidebar is also set up to include widgets that can be added to the sidebar and maintained vai the WordPress Admin.

## License

This work is licensed under a [Creative Commons Attribution-ShareAlike 3.0 Unported License](http://creativecommons.org/licenses/by-sa/3.0/).