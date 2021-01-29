# wordpress-elearning-platform-rtl
A simple e-learning platform (RTL version)
![enter image description here](https://i.imgur.com/erfnktc.jpg)

# Important

1. This theme uses the Template (**Genius Course - School Classes Institute HTML Template**)  that I already bought, so if you want to have a license for this theme, buy it from [this link](https://themeforest.net/item/genius-course-learning-course-html-template/21984716)   
2. There is a mix between French and English in some names, so you can change what you want.
3. This project is not complete (95%), some pages are missing (page.php & archive.php,...). As a simple solution, you can use the file **single-course.php** to make the missing pages, of course you need some modifications.
4. [LTR version](https://github.com/NyasterDZ/wordpress-elearning-platform)

# Installation steps

 1. Install wordpress (in your local machine or in your server)
 2. Download the files of this project
 3. Put the **galaxyprogs** folder (the theme folder) in **wp-content/themes**
 4. Put the **mu-plugins** folder in **wp-content**
 5. Put the **contents** of the **plugins** folder **(that you have downloaded)** in the **plugins** folder
 6. There are two plugins that you can install manually from your **Control Board**:<br>
**Advanced Custom Fields**: We use the Advanced Custom Fields plugin to take full control of our WordPress edit screens & custom field data.<br>
 **Members**: to create roles and manage permissions <br>
7. Now, go to your **Control Board** and **activate** your theme in **Appearance/themes**
 8. In your **Control Board** go to **plugins/Installed Plugins** and activate all the plugins you have added
 9. Go to **Members/Roles** and edit the **administrator** role:
 allow him to manage **Skills-Courses-Chapters-Mvideos-faqcats-faqanss** .<br>
 you will see that new options in your control board are added
 10. Add two new empty pages : home/blog.
 11. Go to **Settings/Reading** then choose **a static page**:
 for **homepage** choose **home**, and **Posts page** choose **blog**
 12. Go to **Custom Fields/Tools** then in **Import Field Groups** choose the json file **acf-export-2021-01-28.json**, click **import file**.
 13. Go to **Settings/Permalinks** and choose **Post name** then save changes.
 14. Finally don't forget to activate the registrations in **Settings/General**
 # Explanation of usage

## Skills part
![enter image description here](https://i.imgur.com/WfXcJyM.png)<br>
To add a **Skill** , go to **Skills** in your **Control Panel** and add a new one

## Motivational video
![enter image description here](https://i.imgur.com/0RKU9I5.png)<br>
To add a **motivational video** , go to **Mvideo** in your **Control Panel** and add a new one

## Frequently asked questions
![enter image description here](https://i.imgur.com/DKWhOF2.png)<br>
**HTML-CSS-JS** are categories, you can add a new category in the **faqcats** section. When you create a new **category** you will find below a field to associate the **questions/answers** to this category. You can add **questions/answers** in the **faqanss** section.

## Courses
![enter image description here](https://i.imgur.com/VbN8rNY.png)<br>
First of all you start by creating **tutos**. When you create a tuto you will find below a field to insert the **video link**.
Next you will create the **chapters**, and each chapter contains a set of **tutos**. When you create a chapter you will find below a field to associate the **tutos** to this chapter. Finally you will create the **course**, and when you create a course you will find below a field to associate the chapters to this course.

# mu-plugins folder
In this folder you will find **1 file**:<br>
**gp-cpt.php**: to create the Custom Posts. <br>

# Pages
1. Login page : your-domain/wp-login.php
2. Blog : your-domain/blog
3. Registration : your-domain/wp-login.php?action=register
4. Home page : your-domain/home

# Quick modifications
1. If you want to modify the information of the theme, in the **style.css** file which is located in **wp-content/themes/galaxyprogs**, you will find the information in the first css comment. The image of the theme is **screenshot.jpg**.
2. If you want to change something in the **navbar**, the responsible file is **header.php** in **wp-content/themes/galaxyprogs**.
3. If you want to change something in the **footer**, the responsible file is **footer.php** (for the home page), and **footer-fpage.php** (for other pages) in **wp-content/themes/galaxyprogs**.
4. If you want to change something in the **home page**, the responsible file is **front-page.php** in **wp-content/themes/galaxyprogs**.
5. If you want to change the name of the options (Skills-Courses-Chapters-Mvideos-faqcats-faqanss), the responsible file is **gp-cpt.php** in **wp-content/mu-plugins** **(Be careful when you modify something in this file, I suggest you to read a little about Custom post in wordpress)**.
6. If you want to change the style,logo, images, and js files you will find them in **wp-content/themes/galaxyprogs/assets**.
7. The additional fields that appear below each creation form (in Module, Chapter, Course, Video), you will find them in **Custom Fields/Field Groups**. 
8. The logo which is in **wp-login.php**, you can change it from the **functions.php** file in **wp-content/themes/galaxyprogs/** **(function my_login_page_logo())**.
# Copyrights
You have the right to use everything for free, and you can change what you want.



 
 

