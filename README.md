# php-project-template

A template to build a PHP project on. It provides a standardized folder structure
and some template files which can be used to start with. It is built using the following technologies:

- HTML
- CSS
- PHP

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development purposes.

### Prerequisites

To set up this project, you will need:

- A web server, such as [Apache](https://httpd.apache.org/download.cgi) or [Nginx](http://nginx.org/en/download.html)
- [PHP](https://www.php.net/downloads.php)
- Optionally, a database server, such as [MySQL](https://www.mysql.com/downloads/) or [MariaDB](https://mariadb.org/download/?t=mariadb)

You have two options for installing these prerequisites:

1. Install them manually on your system
2. Use a pre-packaged solution such as [XAMPP](https://www.apachefriends.org/de/download.html), which includes Apache, PHP, and MySQL or MariaDB in a single bundle

Please note that the `.htaccess` files included in this project is intended for use with Apache web servers.
If you are using a different web server, such as Nginx, you will need to configure the server settings manually.
This may include setting up rules for URL rewriting, file access, and other server behaviors.
Consult the documentation for your specific web server for more information on how to do this.

### Installing

**Option 1: Install software manually**

To install the prerequisites manually, you will need to follow the specific instructions for your operating system.
You can find installation instructions for the prerequisites on the websites where you can download the software.

**Option 2: Use XAMPP**

XAMPP is a pre-packaged solution that includes Apache, PHP, and MySQL in a single bundle. It is available for Windows, macOS, and Linux.

To install XAMPP:

1. Download the latest version of XAMPP from the [official website](https://www.apachefriends.org/index.html)
2. Follow the installation instructions for your operating system
3. Start the Apache and MySQL / MariaDB servers from the XAMPP control panel

Once you have the prerequisites installed, you can proceed to the next steps to install the project.

1. Clone the repository into your websites root folder: `git clone https://github.com/deso85/php-project-template.git`
2. If necessary create a database and user for the application. If you have choosen to use XAMPP you can use [phpMyAdmin](http://localhost/phpmyadmin/) `http://localhost/phpmyadmin/`.
3. Optional: Update the `config/database.php` file with the appropriate database credentials.
4. Change your webservers configuration so that you can access your project

Example configuration for Apache webserver:

```
Alias /php-project-template "/path/to/php-project-template"
<Directory "/path/to/php-project-template">
    AllowOverride AuthConfig FileInfo Limit Options
</Directory>
```

The project should now be running at `http://localhost/php-project-template/`.

## Contributing

If you would like to contribute to the project, please follow these guidelines:

1. Fork the repository
2. Create a new branch for your feature
3. Commit your changes with clear, concise commit messages
4. Push the branch to your fork and submit a pull request

I will review the pull request and, if everything looks good, merge it into the master branch.

## License

This project is licensed under the EUPL-1.2 License - see the [LICENSE](LICENSE) file for details.

## Authors
- [deso85](https://github.com/deso85) - Initial Work

## Libraries and frameworks used

- [php-markdown](https://github.com/michelf/php-markdown) - Parser for Markdown and Markdown Extra derived from the original Markdown.pl by John Gruber.
