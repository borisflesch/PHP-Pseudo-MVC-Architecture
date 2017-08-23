# PHP Pseudo MVC Architecture
A not totally MVC (Model View Controller) architecture that I often use for middle-size PHP websites.

## Why "Pseudo" MVC ?
"Pseudo" beause it is not a real MVC architecture, even if it looks close to it. You will notice later (if you are used to MVC architecture) that there are no explicit "Models" folder...

## Why using this Architecture instead of a "Real MVC" one
As MVC is an architecture which can be quite difficult to understand and use in every projects, I often choose to work with this architecture that allows me more flexibility in small web projects.
I think that this architecture can be really useful thanks to its simplicity to setup and understand and the flexibility that it offers. I can be a good base for about any project. But as it is new and was at this time only improved by me every time I use it, there are still a lot of possible improvements to make it event more useful in the time.

## Why is this project on GitHub ?
As I said, I think that this architecture can be really powerful even if it still need improvements. There is 2 reasons why I chose to put it on GitHub:
- It can help people that are searching for a project architecture by simply cloning it or to take the main idea of it
- It would be great to see this architecture evolve and become even more powerful and useful through time thanks to GitHub contributors

## Files structure
- **/app/** Contains all server-side files
	- **/app/class/** Contains all PHP Classes.
	I distinguish mainly 2 types of classes: "Tables" classes which allows to create hydrated Objects from a database (files named Tablename.php) *and* "Manager" classes in which I make all my requests to the database concerning a specific table (files named TablenameManager.php).
	In this architecture, Manager classes plays a bit the role of a Model in a real MVC architecture: the manager fetches the needed data into the database and returns a corresponding Table contained fetched data.
	- **/app/controllers/** Contains all PHP controllers scripts: the controller should be the bridge between the Model and the View. In this architecture, the controller asks for data through Manager classes (then it eventually pass it into some algorithms) and it finally calls the corresponding view to show data to the client.
	- **/app/php/** Can contain misc PHP scripts
		- **/app/php/handlers/** Especially contains Asynchronous called scripts. I always use them with jQuery Ajax to treat the request and return JSON formated data.
	- **/app/views/** Contains all views PLUS the page default layout.
	Views mainly contains HTML elements, PHP echoes and loops but very rarely conditions or other PHP script (which should be done in the Controller file before calling the view).
	The layout contains default HTML file structure, CSS / JS requests, and so on. The meta title variable can be set from the controller (one controller = one meta title) - the same applies to other metas (description, keywords, ...).
	- **/app/init.php** Contains basic initialisation and configuration of the website: session_start, automatic classes importation function, database connection and Manager classes initialisation (because they need the db to work).

- **/public/** Contains all public client-side files
	- **/public/css/** Contains all CSS files
	- **/public/fonts/** Contains all fonts
	- **/public/img/** Contains all images (it can even contain images uploaded through PHP)
	- **/public/js/** Contains all JS scripts

- **/index.php** Is the entry point of the website. It manages requests made to the website and call the corresponding controller.

## English mistakes ?
I am sorry if texts contains english mistakes. As I am not a native speaker, I tried to make my best to introduce the project in a language that a lot of people know. Feel free to fork the ReadMe file :p