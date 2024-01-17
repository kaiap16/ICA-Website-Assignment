 <!--functions

header

footer

customizer - how its built

stylesheets (wp and mine) and enque assets

sidebars - coded and use--> 


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

# Stylsheets
- With regards to styling, the theme makes use of three separate stylesheets:
  
	- bootstrap.css -> contains all CSS used by bootstrap
	- custom.css -> contains all CSS created by the theme creator and are specific to this theme
	- wpcore.css -> contains all CSS code that are applied automatically when building a WordPress theme

In custom.css, fonts for the theme, spacing, colours and button, navbar and sidebar styling are all applied 

# Sidebars
sidebars.php is used to register the functions for sidebars. Registering a sidebar involves creating a designated area on your theme where users can add widgets. Widgets are small blocks that perform specific functions, such as displaying recent posts, categories, or custom content. At the bottom of the file functions are hooked to the function using _add_action('widgets_init', 'function id');_

![image](https://github.com/kaiap16/ICA-Website-Assignment/assets/106373404/3083f26a-4347-41f6-b9e5-69429ed6d8cd)

# Plugins

