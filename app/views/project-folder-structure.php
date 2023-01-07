<section id="">
	<h2>Project Folder Structure</h2>
	
	<p>This project uses a simple folder structure to organize its code:</p>
	
	<p><strong>/</strong><br>
	The project root folder includes the README.md and the index.php.</p>
	
	<p><strong>/app</strong><br>
	Contains the core code for the application, including controllers, libs,
	models, views, and any other code that is specific to the application.
	The .htaccess file prevents direct access to this folder.</p>
	
	<p><strong>/config</strong><br>
	Contains configuration files for the
	application, such as the database configuration.
	The .htaccess file prevents direct access to this folder.</p>
	
	<p><strong>/public</strong><br>
    Contains the entry point for the application and any publicly
	accessible files, such as CSS, JavaScript, and images.</p>
	
	<p><strong>/storage</strong><br>
    Contains files that are used by the application, such as logs and
    uploaded files. The .htaccess file prevents direct access to this folder.</p>
</section>