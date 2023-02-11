# ABC Tutoring Company Website

A website for the ABC Tutoring Company. Built with PHP, WordPress, Bootstrap, and CSS. The weForms plugin was used for the form on the Contact Us page.


## Project Screen Shot(s)

Home Page Jumbotron, Navbar, and Search Field

![Home Page Jumbotron, Navbar, and Search Field](images/readme/ABC-home-page.jpeg "The home page features a navbar, jumbotron, and search field.")

The home page features a navbar, jumbotron, and search field.


Home Page Blog Post Photo and Title Grid

![Home Page Blog Post Photo and Title Grid](images/readme/ABC-home-page-blog-grid.jpeg "The home page features a blog post photo and title grid.")

The home page features a blog post photo and title grid.


Services Overview Pages

![Services Overview Pages](images/readme/ABC-services-cards.jpeg "The Test Prep Services and Tutoring Services pages include bootstrap cards, which draw data from the two custom post types created for the website.")

The Test Prep Services and Tutoring Services pages include bootstrap cards, which draw data from the two custom post types created for the website.


Blog Page

![Blog Page](images/readme/ABC-blog.jpeg "The blog page utilizes the built-in post type. It includes the author name and publication date for each post. The author name can be clicked on to access an archive of all blog posts from that author.")

The blog page utilizes the built-in post type. It includes the author name and publication date for each post. The author name can be clicked on to access an archive of all blog posts from that author.


Search Results Page

![Search Results Page](images/readme/ABC-search-results.jpeg "After entering a search term in the input box in the jumbotron and clicking search, results will display from a custom WordPress query. The results include all post types.")

After entering a search term in the input box in the jumbotron and clicking search, results will display from a custom WordPress query. The results include all post types.


Contact Us Page Form

![Contact Us Page Form](images/readme/ABC-weForms.png "The form in the Contact Us page was created with the weForms plugin. Form entries can be found in the wp-admin panel for weForms.")

The form in the Contact Us page was created with the weForms plugin. Form entries can be found in the wp-admin panel for weForms.

## See Live

Visit: abctutoringco.000webhostapp.com

## Launch Instructions

Clone this repository to your local machine. 

Download and install Local by Flywheel to access WordPress on your computer. (https://localwp.com/)

Create a new WordPress website in Local by Flywheel. 

In Local, click on "Go to site folder". Navigate to app -> public -> wp-content -> themes. Now create a folder for the abc-tutoring-company project.

Unzip the repository file and add all the folders/files from the GitHub repository into the new folder you just created inside the newly created website project in Local.

Next, please open functions.php in VS Code. You will need to uncomment the code starting with "function tutoring_post_types()" and ending with "add_action('init', 'tutoring_post_types');".

Next, please ensure you have npm installed.

In VS Code, open the terminal to the folder you created for this theme, abc-tutoring-company. To install the node modules, please run the following command:

`npm install`  

After starting the website in Local, please open the wp-admin panel to add content for the different post types. The blog post types will require a featured image to be uploaded as well for the home page photo grid to work correctly.

**Please note that this application requires an internet connection.


## Reflection

I built this project while studying WordPress to familiarize myself with how to build WordPress websites. Creating two custom post types and a custom WordPress search query helped me explore some of the features WordPress has to offer.


## References

- Udemy - Brad Schiff - Become a WordPress Developer: Unlocking Power With Code - https://www.udemy.com/course/become-a-wordpress-developer-php-javascript/ (For guidance on how to set up WordPress websites. Also, some of the functions found in functions.php were adapted from this course.)

Stock Photos:
- https://www.pexels.com/photo/person-holding-a-chalk-in-front-of-the-chalk-board-714699/
- https://www.pexels.com/photo/text-on-shelf-256417/
- https://www.pexels.com/photo/white-tablet-and-computer-set-of-a-desk-5185159/
- https://www.pexels.com/photo/alphabet-close-up-communication-conceptual-278887/
- https://www.pexels.com/photo/person-writing-on-white-board-3781338/
- https://www.pexels.com/photo/close-up-photography-of-colored-pencils-743986/
- https://www.pexels.com/photo/colored-pencils-on-a-white-surface-4519868/
- https://www.pexels.com/photo/a-person-writing-on-white-paper-using-pencil-6684265/
- https://www.pexels.com/photo/a-person-taking-an-exam-6684209/
- https://www.pexels.com/photo/colored-pencils-3977580/
- https://www.pexels.com/photo/grey-concrete-3-baluster-near-mountains-and-sea-during-daytime-164268/
- https://pixabay.com/photos/boy-man-people-person-male-adult-3653385/
- https://www.pexels.com/photo/pile-of-books-159866/
- https://pixabay.com/photos/test-testing-exam-sat-act-mcat-986769/
