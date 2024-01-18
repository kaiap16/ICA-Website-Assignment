 <!--functions

header

footer

customizer - how its built

stylesheets (wp and mine) and enque assets

sidebars - coded and used--> 

# Template Parts
- In the codebase, the "template-parts" directory contains a vital PHP file called loop.php. This file, responsible for displaying posts, is crucial for loading website content. To avoid redundancy, the loop is coded once in template parts and linked to other files using the get_template_part function. This ensures a streamlined and efficient structure across various PHP files related to a page.

## content.php
- This file is often used as a template part to define the structure and layout of a single post or page's content. The purpose of this file is to encapsulate the HTML markup and PHP code responsible for displaying the main content of a post or page.

![image](https://github.com/kaiap16/ICA-Website-Assignment/assets/106373404/2180b298-5796-4f8f-8118-1ac071632538)

## loop.php
 - The loop.php file is works like a set of instructions that tells the website how to show each blog post in a consistent way.
   
![image](https://github.com/kaiap16/ICA-Website-Assignment/assets/106373404/d7f27f15-44f1-4b29-b803-eaff85dd3149)


# Header
- header.php contains the necessary structure to create the layout of the navigation bar and search field at the top of the screen. It is mainly written in HTML and PHP (for functionality of search field). The !DOCTYPE declaration is used to specify the document is written in HTML. 
- Within the _head_ tags, is the wp_head() function, this prints scripts or data in the head tag on the front end.
- Using bootstrap's column system, the site uses container-fluid to make sure the content adapts to fit the screen in use as needed. wp_nav_menu() is used within the _nav_ tags to display custom menus on the website. The last column in the navbar contains a PHP function that calls/uses a search bar; get_search_form(true). 

![image](https://github.com/kaiap16/ICA-Website-Assignment/assets/106373404/ff0a9dee-62f0-4c39-8b6c-ad0f168f76b1)


# Functions
- The code in this file is used to display the admin bar, including files for navigation, asset enqueuing, sidebars, and customization, and a custom dashboard widget.
  
![image](https://github.com/kaiap16/ICA-Website-Assignment/assets/106373404/4828aff7-62b1-4983-a88c-b41911109171)


# Customizer
- The customize.php file in a WordPress theme is  used to define and implement customization options for the theme through the WordPress Customizer. This provides a user-friendly interface for site administrators to make real-time changes to the appearance and behavior of their site.
- Through the customizable features added to this theme site administrators can edit the colour and widgets added to the footer, the colour of text in the footer. These same functions apply for the header as well. The user can also change the logo displayed in the header.
  
 ![image](https://github.com/kaiap16/ICA-Website-Assignment/assets/106373404/14f852a9-c75a-4265-877c-88bdc625a349)
 ![image](https://github.com/kaiap16/ICA-Website-Assignment/assets/106373404/f9436fbe-ec91-46c7-8e31-92c097299cce)

# Stylesheets
- With regards to styling, the theme makes use of three separate stylesheets:
  
	- bootstrap.css -> contains all CSS used by bootstrap
	- custom.css -> contains all CSS created by the theme creator and are specific to this theme
	- wpcore.css -> contains all CSS code that are applied automatically when building a WordPress theme

- In custom.css, fonts for the theme, spacing, colours and button, navbar and sidebar styling are all applied 

# Sidebars
sidebars.php is used to register the functions for sidebars. Registering a sidebar involves creating a designated area on your theme where users can add widgets. Widgets are small blocks that perform specific functions, such as displaying recent posts, categories, or custom content. At the bottom of the file functions are hooked to the function using _add_action('widgets_init', 'function id');_

![image](https://github.com/kaiap16/ICA-Website-Assignment/assets/106373404/3083f26a-4347-41f6-b9e5-69429ed6d8cd)

# Plugins
It is important that the plugins are not deactivated or deleted as this will disrupt the structure of the theme.

## Elementor
- This is the main plugin that structures the layout of this theme. This plugin uses a drag and drop interface that gives the administrator more creative freedom over the layout of the pages in their site. It provides the administrator of the site.
  
![image](https://github.com/kaiap16/ICA-Website-Assignment/assets/106373404/af8d9952-ed27-42d4-ac66-ce3f4f3ea082)

## PowerPack Addons for Elementor (Free Widgets, Extensions and Templates)
- This plugin is used as an add-on of the widgets available in the free version of Elementor. Without it, some of the layouts of the site would not look well-structured. If one were to buy the paid version of this plugin, the site could have more interactive and moving elements. 

![image](https://github.com/kaiap16/ICA-Website-Assignment/assets/106373404/f5f93ebe-0d52-4ac9-b9ae-39f667f36e25)
![image](https://github.com/kaiap16/ICA-Website-Assignment/assets/106373404/d89e65c1-6c50-4086-ad68-df2756eff43d)


## Formidable Forms – Contact Form, Survey, Quiz, Payment, Calculator Form & Custom Form Builder
- Formidable Forms is used to create the layout of the form used in the Contact Us page. These forms can be customized with different fields for different purposes, and also provides different templates to use as needed. 

![image](https://github.com/kaiap16/ICA-Website-Assignment/assets/106373404/f8782c4c-6268-4c55-b032-53b466956788)

(The form as implemented in the site)

![image](https://github.com/kaiap16/ICA-Website-Assignment/assets/106373404/16ba3a8c-a38b-46bd-8949-b73e9d007e43)

(The customizable elements and templates provided by Formidable Forms)

![image](https://github.com/kaiap16/ICA-Website-Assignment/assets/106373404/4bf4c64a-998f-4a56-a390-a7f3a82197bb)


## Custom Post Type UI
- CPTUI simplifies the creation of custom content types, but presenting that content can pose a unique set of challenges. Enter Custom Post Type UI Extended, designed to assist in showcasing your carefully crafted content.
- In the existing site layout, this plugin is not in use but it is there for future use just in case the aadministrator would like to create a custom post type.

![image](https://github.com/kaiap16/ICA-Website-Assignment/assets/106373404/609a586c-c342-43e4-9b3c-902bf6425968)

## All-in-One WP Migration

This plugin is used to export the contents of the site, all plugins included, 
![image](https://github.com/kaiap16/ICA-Website-Assignment/assets/106373404/df9ae163-3255-4b2f-82ad-76f2289660e7)

