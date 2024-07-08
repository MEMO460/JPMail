# JPMail - Roundcube Webmail Customization

## Introduction
Roundcube Webmail is a browser-based multilingual IMAP client with an application-like user interface. It provides full functionality you expect from an email client, including MIME support, address book, folder manipulation, message searching, and spell checking. Roundcube is written in PHP and requires a MySQL or PostgreSQL database.

This project aims to customize Roundcube Webmail both in the front end and back end, adding new functions and plugins to enhance its usability and appearance.

## Installation

### Prerequisites
To set up the JPMail project, ensure you have the following:
- A local web server (e.g., Apache)
- MySQL or PostgreSQL database
- PHP 8.2 or newer

### Steps
1. **Create the Database**:
    - Go to `http://localhost/phpmyadmin`.
    - Create a new database named `roundcubemail`.

2. **Prepare the Web Server**:
    - Move the `jpmail` folder to your web server directory (e.g., `htdocs` for XAMPP).

3. **Configure the Database**:
    - Open `jpmail/config/config.inc.php`.
    - Update the database credentials:
      ```php
      $config['db_dsnw'] = 'mysql://<DB_Username>:<DB_Password>@localhost/roundcubemail';
      ```
    - Adjust other settings as needed.

4. **Access Roundcube Webmail**:
    - Go to `http://localhost/jpmail` in your web browser to access the Roundcube Webmail interface.

### Additional Configuration
- Ensure PHP extensions like `mbstring`, `intl`, `pdo_mysql`, and `openssl` are enabled.
- Adjust `php.ini` settings as needed (e.g., `upload_max_filesize`, `post_max_size`).

## Problems That Need to Be Solved

### 1. `Login Failed` Message
- **Issue**: On the Roundcube login page, if the username/password is incorrect, a "login failed" message should appear. This works locally but shows a 401 error page on the datacenter webserver.
- **Solution Needed**: Modify the code to display the "Login Failed" message instead of redirecting to a 401 error page.

### 2. `Your session is invalid or expired` Message
- **Issue**: Users are logged out after 10 minutes of inactivity, receiving a "Your session is invalid or expired" message.
- **Solution Needed**: Either disable the session timeout or extend the session duration.

### 3. `Signature` Issue
- **Issue**: Email signatures are not displayed correctly compared to Gmail; they appear completely messed up.
- **Solution Needed**: Enhance the signature functionality to improve how signatures are received and ensure compatibility with the JUMPPEAK company signature format.

### 4. UI of Roundcube Mail
- **Issue**: The current interface is outdated and not user-friendly.
- **Solution Needed**: Modernize the UI to make it more visually appealing and user-friendly. Add new functions and plugins to assist users with daily tasks.

### 5. `Shared Contacts`
- **Issue**: Shared Contacts adds global SQL-based address books to Roundcube. It can be global per IMAP host but currently only works on Roundcube webmail. We need to make it work with other applications (e.g., BlueMail). Note that Collected Recipients on Roundcube mail work on other mail applications.
- **Solution Needed**: Modify Shared Contacts to function like Collected Recipients, ensuring compatibility with other mail applications.

## Additional Information

### About Roundcube Webmail
Roundcube Webmail is a widely used open-source webmail client with a robust set of features. For comprehensive details about Roundcube, visit the [Roundcube Webmail on GitHub](https://github.com/roundcube/roundcubemail).

### Skin Customization
Roundcube's look and feel can be customized by creating or modifying skins. Skins are located in the `skins` directory, and each skin has its own folder. To create a new skin, you can copy an existing one and modify the HTML and CSS files. For detailed information on skinning Roundcube, check out the [Roundcube Skinning Guide](https://github.com/roundcube/roundcubemail/wiki/Skins).

### Plugin Development
Roundcube supports a wide range of plugins to extend its functionality. Plugins are stored in the `plugins` directory. You can create your own plugin by following the structure of existing plugins. For more details on creating plugins, refer to the [Roundcube Plugin Repository](https://plugins.roundcube.net/) and the [Plugin API Documentation](https://github.com/roundcube/roundcubemail/wiki/Plugin-API).

### Folder Structure
Familiarize yourself with the folder structure of Roundcube to understand how it organizes its files:
- `config`: Configuration files
- `plugins`: Plugins to extend functionality
- `program`: Core program files
- `skins`: Skins for customizing the UI
- `logs`: Log files for debugging

For more detailed information about the folder structure and other components, visit the [Roundcube GitHub Wiki](https://github.com/roundcube/roundcubemail/wiki).

By following the guidelines and resources provided, developers can gain a deeper understanding of Roundcube Webmail and effectively contribute to the JPMail project.

---

For further assistance or inquiries, please contact the project maintainer.
