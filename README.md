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

The footer file contains the footer of your page, the closing `</body>` tag and the closing `</html>` tag.

### sidebar.php

This file allows you to include an (optional) sidebar on any of your pages. By defualt it is included within index, single, archive and page. The sidebar is also set up to include widgets that can be added to the sidebar and maintained via the WordPress Admin.

### index.php

The index file controls the look of your home page. By default it contains the loop that will return the most recent posts. The look of the posts are then contained within the post template, which we'll cover in more detail below.

### single.php

This file controls the look of individual posts.

### page.php

This file controls what individual WordPress pages look like. Keep in mind that this is the [WordPress construct of pages](http://codex.wordpress.org/Pages).

### archive.php

This file controls the look of archive pages, including date, category, tag and author archives. You can, however, create separate templates for these if you want.

### comments.php

This file controls the look of the comments section on the single post page. It contains HTML for both the comment form and the list of comments that are displayed on the page.

### functions.php

This file allows you write custom functions to modify or override aspects of your theme. I'm only including the `register_sidebar()` function here in order to allow widgets in the sidebar.

### style.css

This is where you'll place all of your CSS code that defines the look and feel of your site. I haven't defined any styles for you.

## Considerations

### Search

I didn't include a search page or searchform template. I may change this in the future, but I was trying to keep things as simple as possible. If a search page template doesn't exist, then WordPress will default to use the index template for the search results.

### Archives

I didn't include separate templates for category, tag and author archives. Again, I wanted to keep things simple and I think that in most cases the archvie template will serve nicely as the template for any of these other acrhive types.

One thing that you might want to consider (and something that I may add to the archive template in the future) is to include a conditional in the archive template that will allow you to show a different title for each acrhive type. For example, you could have a title such as "Archive for Test Category" instead of a generic title like "Archive" when someone clicks on a category link.

*More details on this coming soon.*

## Resources

Here are a couple of resources that will be helpful as you developer your own custom theme:

- [WordPress Theme Development Documentation](http://codex.wordpress.org/Theme_Development)
- [Yoast's Anatomay of a WordPress Theme Infographic](http://yoast.com/wordpress-theme-anatomy/)
- [WordPress Template Hierarchy Documentation](http://codex.wordpress.org/Template_Hierarchy)

## License

This work is licensed under a [Creative Commons Attribution-ShareAlike 3.0 Unported License](http://creativecommons.org/licenses/by-sa/3.0/).