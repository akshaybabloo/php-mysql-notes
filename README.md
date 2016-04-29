# PHP with MySQL Tutorial
PHP 5, PHP 5.5 and MySQL

**Table of Contents**

<!-- MDTOC maxdepth:6 firsth1:2 numbering:0 flatten:0 bullets:1 updateOnSave:1 -->

- [1 Instillation of PHP, Apache Server, and MySQL server.](#1-instillation-of-php-apache-server-and-mysql-server)   
   - [1.1 Using the stacks](#11-using-the-stacks)   
   - [1.2 Mac OS X (Manual Instillation)](#12-mac-os-x-manual-instillation)   
      - [1.2.1 Terminal](#121-terminal)   
      - [1.2.2 Installing `HomeBrew`](#122-installing-homebrew)   
      - [1.2.2 Instilling Apache server](#122-instilling-apache-server)   
      - [1.2.3 Install or Enable PHP](#123-install-or-enable-php)   
   - [1.2.3 Installing MySQL](#123-installing-mysql)   
- [2 Basics of PHP](#2-basics-of-php)   
   - [2.1 Syntax of PHP](#21-syntax-of-php)   
- [2.3 Outputting dynamic text](#23-outputting-dynamic-text)   
- [3 Data types](#3-data-types)   
   - [3.1 Variables](#31-variables)   
   - [3.2 Strings and String functions](#32-strings-and-string-functions)   
   - [3.3 Integers](#33-integers)   
   - [3.4 Floats](#34-floats)   
   - [3.5 Arrays](#35-arrays)   
   - [3.6 Associative Arrays](#36-associative-arrays)   
   - [3.7 Array Functions](#37-array-functions)   
   - [3.8 Booleans](#38-booleans)   
   - [3.9 NULL vs empty](#39-null-vs-empty)   
   - [3.10 Type Juggling and Casting](#310-type-juggling-and-casting)   
   - [3.11 Constants](#311-constants)   

<!-- /MDTOC -->

**License**

The code is provided under [MIT License](https://github.com/akshaybabloo/JavaScript-Tutorial/blob/master/LICENSE) and the tutorial is provided under [Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License](http://creativecommons.org/licenses/by-nc-sa/4.0/)

![CC](https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png)

## 1 Instillation of PHP, Apache Server, and MySQL server.

In this step, I will be showing you how to install the three essential components to run a PHP script.

There are two ways of doing this:
1. Using the stacks
2. Installing the software's manually

### 1.1 Using the stacks

Stacks are the pre-packaged group of software which contains all the packages we need. To install this, I would recommend using [XAMPP](https://www.apachefriends.org/index.html).

Or let's install it manually.

### 1.2 Mac OS X (Manual Instillation)

#### 1.2.1 Terminal

To open terminal, go to `Applications > Utilities > Terminal`.

#### 1.2.2 Installing `HomeBrew`

Do the following:

1. Go to [brew.sh](http://brew.sh)
2. Open `Terminal`.
3. Type `/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"`

That's it!

#### 1.2.2 Instilling Apache server

Mac comes pre-installed with Apache server. When OS X 10.8 was launched the open to enable this web server was removed from the `System Preference > Sharing`, but is still installed in the Unix core of it.

There are four commands I want us to look into:

1. `httpd` - which means `Hyper Text Markup Daemon` - Its the actual server.
2. `sudo apachectl start` - To start the Apache server
3. `sudo apachectl stop` - To stop the Apache server
4. `sudo apachectl restart` - To restart the Apache server

To know the version of the Apache server, type in `httpd -v` this should print out the version of yours computers Apache version. Mine printed out like this:

```sh
Server version: Apache/2.4.16 (Unix)
Server built:   Jul 31 2015 15:53:26
```
Your version could be more than mine, but that doesn't matter.

There are two ways to see if your Apache server is running or not (Make sure the Terminal is open):


1. Open your web browser and type `http://localhost`, this should return an error.
2. Type in `ps aux | grep httpd` - This will list all running application on your system, `grep httpd` minimize the list only where `httpd` is running. Mine showed something like This

  ```sh
  akshayrajgollahalli  1534   0.0  0.0  2454296    836 s000  S+    7:22pm   0:00.00 grep httpd
  ```

To enable the server, do the following:

1. Open `Terminal`.
2. Type in `sudo apachectl start`. There won't be any response; that was also removed by Apple in OS X.

Now to check if its working open your web browser and type in `http://localhost` and hit return. It should say **`It works!`** or try `ps aux | grep httpd` in the terminal, this should return something like this:

```sh
akshayrajgollahalli  1692   0.0  0.0  2453272    804 s000  U+    7:56pm   0:00.00 grep httpd
_www              1689   0.0  0.0  2474884    896   ??  S     7:55pm   0:00.00 /usr/sbin/httpd -D FOREGROUND
_www              1683   0.0  0.0  2482052    968   ??  S     7:54pm   0:00.00 /usr/sbin/httpd -D FOREGROUND
_www              1682   0.0  0.0  2482052    972   ??  S     7:54pm   0:00.00 /usr/sbin/httpd -D FOREGROUND
_www              1681   0.0  0.0  2473860    956   ??  S     7:54pm   0:00.00 /usr/sbin/httpd -D FOREGROUND
_www              1672   0.0  0.0  2483076   1552   ??  S     7:54pm   0:00.01 /usr/sbin/httpd -D FOREGROUND
root              1663   0.0  0.0  2475908   3904   ??  Ss    7:54pm   0:00.16 /usr/sbin/httpd -D FOREGROUND
```

**Changing the root folder**

The default root folder is located in `Library/WebServer/Documents`. By default, before OS X 10.8 was released, there use to be a folder called `Sites` in the user directory. If you have installed a fresh version of OS X 10.8, you will not be having this. So let's create this folder. To do that, do the following (there are two ways to do this):

1. Open your `Terminal`.
2. Type in `cd ~` - go to user directory - hit return.
3. Then type in `mkdir Sites` - make a directory named `Sites` - hit the return key.

**OR**

You could open `Finder` window, from the menu bar `Go > Go to Folder` or use the shortcut key <kbd>Shift</kbd>+<kbd>Command</kbd>+<kbd>G</kbd> and type in `User/<your user name>`, this will open your user directory. In that, right-click on an empty space and create a new folder. Name the folder as `Sites`.

Now, we should tell the Apache to serve the files from the `Sites` folder rather than the default one. To do that, do the following:

1. Open the `Terminal`.
2. Type in `cd /etc/apache2/users/`. Then type `ls`, this will list out files that are present. If you in case do find some files, do look into it to check whether it matches the text below. But if you find `Guest.conf` just ignore it, this file is for guest users.
3. Type in `sudo nano YourUserName.conf` - create a YourUserName.conf file using nano editor - make sure you write in your username. For me, it is `sudo nano akshayrajgollahalli.conf`.
4. This command will open an editor, type in the following

  ```
  <Directory "/Users/YourUserName/Sites/">
      Options Indexes MultiViews
      AllowOverride None
      Order allow,deny
      Allow from all
  </Directory>
  ```

  For me it is

  ```
  <Directory "/Users/akshayrajgollahalli/Sites/">
      Options Indexes MultiViews
      AllowOverride None
      Order allow,deny
      Allow from all
  </Directory>
  ```

5. Save the file by doing <kbd>Control</kbd>+<kbd>X</kbd>, then <kbd>Y</kbd> and then <kbd>Return</kbd>.
6. To confirm if its saved or not, type `cat YourUserName.conf`, this should print out what you have saved it that file.
7. Now let's change the file permission so that the Apache can read it. Type in `sudo chmod 644 YourUserName.conf`
8. restart the Apache server by typing `sudo apachectl restart`

Let's create a simple html file to test it

1. Type in `nano /Users/YourUserName/Sites/` and type in `hello`.
2. Save the file by doing <kbd>Control</kbd>+<kbd>X</kbd>, then <kbd>Y</kbd> and then <kbd>Return</kbd>.

Now open the browser and type in `http://localhost/~akshayrajgollahalli`

**For Mac OSX 10.10 Yosemite and above**

There seems to be a problem with OSX 10.10 and above as they have changed the configuration file. Do the following:

1. Open `Terminal`
2. Type in `sudo nano /etc/apache2/httpd.conf`
3. Hit <kbd>control</kbd>+<kbd>W</kbd> to search for `userdir`. This should take you here -> `LoadModule userdir_module libexec/apache2/mod_userdir.so`. Remove the `#` sign from the starting of the line to uncomment it.
4. Hit <kbd>control</kbd>+<kbd>W</kbd> to search for `httpd-userdir`. This should take you here -> `Include /private/etc/apache2/extra/httpd-userdir.conf`. Remove the `#` sign from the starting of the line to uncomment it.
5. Save the file by doing <kbd>Control</kbd>+<kbd>X</kbd>, then <kbd>Y</kbd> and then <kbd>Return</kbd>.
6. Next, enter `sudo nano /etc/apache2/extra/httpd-userdir.conf` and uncomment `Include /private/etc/apache2/users/*.conf` line.
7. Save the file by doing <kbd>Control</kbd>+<kbd>X</kbd>, then <kbd>Y</kbd> and then <kbd>Return</kbd>.
8. Test the configuration made `sudo apachectl configtest`, this should reply `Syntak ok`. Then restart Apache, `sudo apache2 restart`.
9. Then type in `sudo nano /etc/apache2/httpd.conf` and search for `authz_core` and uncomment `LoadModule authz_core_module libexec/apache2/mod_authz_core.so`. Then search for `authz_host` and uncomment `LoadModule authz_host_module libexec/apache2/mod_authz_host.so`.
10. Save the file by doing <kbd>Control</kbd>+<kbd>X</kbd>, then <kbd>Y</kbd> and then <kbd>Return</kbd>.
11. Go back to your user config, `sudo nano /etc/apache2/users/akshayrajgollahalli.conf`, convert

  ```
  <Directory "/Users/akshayrajgollahalli/Sites/">
      Options Indexes MultiViews
      AllowOverride None
      Order allow,deny
      Allow from all
  </Directory>
  ```

  To

  ```
  <Directory "/Users/akshayrajgollahalli/Sites/">
      Options Indexes MultiViews
      AllowOverride None
      Require all granted
  </Directory>
  ```
12. Lastly, Test the configuration made `sudo apachectl configtest`, this should reply `Syntax ok`. Then restart Apache, `sudo apache2 restart`.
13. Open the web browser and type in `http://localhost/~akshayrajgollahalli/` this should say `hello`.

**OR**

**Using Virtual Hosting**

I will be following a different approach called virtual hosting; this will work for all types of Mac OS X. It is like creating a `*.com` but for your local Apache server.

Do the following:

1. Open terminal
2. Type in `sudo nano /etc/apache2/httpd.conf` and search for this line -> `#Include /private/etc/apache2/extra/httpd-vhosts.conf`.
3. Below that type in the following `Include /private/etc/apache2/vhosts/*.conf` - Which means, include all the file in that path that starts with `.conf`.
4. Save the file by doing <kbd>Control</kbd>+<kbd>X</kbd>, then <kbd>Y</kbd> and then <kbd>Return</kbd>.

Next,

1. Type in `sudo mkdir /etc/apache2/vhosts` - This will create `vhosts` folder in `/etc/apache2/`.
2. Then go to that directory by typing `cd /etc/apache2/vhosts`.
3. Create a file by typing `nano _default.conf`. In that type in

  ```
  <VirtualHost *:80>
    DocumentRoot "/Library/WebServer/Documents"
  </VirtualHost>
  ```

  Save the file by doing <kbd>Control</kbd>+<kbd>X</kbd>, then <kbd>Y</kbd> and then <kbd>Return</kbd>.
4. Now lets create the virtual, `nano subdomain.domain.com.conf` for me it is `nano akshay.gollahalli.com.conf`.
5. Then type in

  ```
  <VirtualHost *:80>
        DocumentRoot "path/to/Site"
        ServerName subdomain.domain.local
        ErrorLog "/private/var/log/apache2/jason.pureconcepts.local-error_log"
        CustomLog "/private/var/log/apache2/jason.pureconcepts.local-access_log" common

        <Directory "path/to/Site">
            AllowOverride All
            Require all granted
        </Directory>
  </VirtualHost>
  ```

  for me it is

  ```
  <VirtualHost *:80>
        DocumentRoot "/Users/akshayrajgollahalli/Sites"
        ServerName akshay.gollahalli.local
        ErrorLog "/private/var/log/apache2/jason.pureconcepts.local-error_log"
        CustomLog "/private/var/log/apache2/jason.pureconcepts.local-access_log" common

        <Directory "/Users/akshayrajgollahalli/Sites">
            AllowOverride All
            Require all granted
        </Directory>
  </VirtualHost>
  ```

  Save the file by doing <kbd>Control</kbd>+<kbd>X</kbd>, then <kbd>Y</kbd> and then <kbd>Return</kbd>.
6. Restart the Apache server by typing `sudo apachectl restart`.

Finally, We have to connect `.local` to the `127.0.0.1` IP address. Do the following:

1. Type in `sudo nano /etc/hosts`.
2. Type in

  ```
  127.0.0.1       subdomain.domain.local
  ```

  for me it is

  ```
  127.0.0.1       akshay.gollahalli.local
  ```
3. Save the file by doing <kbd>Control</kbd>+<kbd>X</kbd>, then <kbd>Y</kbd> and then <kbd>Return</kbd>.

To check if it's working or not, open your web browser and type in the local URL just created, his should display `hello`.

#### 1.2.3 Install or Enable PHP

There are two ways to install PHP or enable PHP. By default pre-installed with Mac OS X 10.8 and above. We can enable it and then upgrade it or we could fresh install using [HomeBrew](http://brew.sh/). I will show you both ways.

**Enabling and Upgrading PHP**

1. Open `Terminal`.
2. To find out what you version is, type in `php -v` this should reply something like this (I have already upgraded my php version):

  ```
  PHP 5.6.17 (cli) (built: Jan 21 2016 15:48:02)
  Copyright (c) 1997-2015 The PHP Group
  Zend Engine v2.6.0, Copyright (c) 1998-2015 Zend Technologies
  ```

3. We have to tell Apache to start serving PHP files, to do that type in `sudo nano /etc/apache2/httpd.conf`.
4. Search for `php` by pressing <kbd>control</kbd>+<kbd>W</kbd>, and uncomment `LoadModule php5_module libexec/apache2/libphp5.so`
5. Save the file by doing <kbd>Control</kbd>+<kbd>X</kbd>, then <kbd>Y</kbd> and then <kbd>Return</kbd>.

You can test PHP by creating a new file called `PHPInfo.php` inside your `Sites` directory. Do the following:

1. Open `Terminal`.
2. Type in `nano PHPInfo.php`, and type in

  ```php
  <?php phpinfo() ?>
  ```

3. Save the file by doing <kbd>Control</kbd>+<kbd>X</kbd>, then <kbd>Y</kbd> and then <kbd>Return</kbd>.
4. test it by opening you web browser and typing in `http://localhost/~akshayrajgollahalli/PHPInfo.php`, this will show you the full configuration and information of the PHP installed on your computer.

**Upgrading PHP**

1. Go to [http://nz2.php.net/manual/en/install.macosx.packages.php](http://nz2.php.net/manual/en/install.macosx.packages.php) and click on [http://php-osx.liip.ch/](http://php-osx.liip.ch/).
2. At the time of writing this tutorial, `curl -s http://php-osx.liip.ch/install.sh | bash -s 5.6` was available. Copy that and open your `Terminal` and paste it. Hit <kbd>return</kbd>.

This will automatically install PHP 5.6 for you. You can test this by refreshing your web browser.

**Configuring PHP**

There are three things to configure in PHP:

* Error reporting
* Timezone
* Output buffering

All these configurations are in either `php.ini` or `php.d`, You can find the path of these files in `PHPInfo.php`. For me, it shows as

![Path for PHP.ini and PHP.d](https://raw.githubusercontent.com/akshaybabloo/php-mysql-notes/master/Screenshots/path_php.jpg)

1. Open `Terminal`.
2. Type in `nano /usr/local/etc/php/5.6/php.ini`
3. Using the search function make sure the following are enabled and uncommented:

  ```
  display_errors = On
  error_reporting = E_ALL
  html_errors = On
  output_buffering = 4096
  date.timezone = "Pacific/Auckland"
  ```

  > Note 1: Make sure you know your timezone, you can check this at [http://php.net/manual/en/timezones.php](http://php.net/manual/en/timezones.php). If you don't find your City name, chose the closest one for you.

### 1.2.3 Installing MySQL

There are two ways to install MySQL. You can either download the installer from [http://dev.mysql.com/downloads/mysql/](http://dev.mysql.com/downloads/mysql/) or install it through `HomeBrew`.

**Installing via HomeBrew**

1. Open you `Terminal`.
2. Type `brew install mysql`. This will download all the configuration files and install MySQL server on your system.

MySQL is installed at `/usr/local/bin/mysql`.

There are few more options setup you would have to do which will be displayed by the installer.

**Installing via MySQL Installer**

1. Go to [http://dev.mysql.com/downloads/mysql/](http://dev.mysql.com/downloads/mysql/), and download 64-bit DMG package.
2. Double-click on it to open the package.
3. You will have to install two packages.

MySQL is installed at `/usr/local/bin/mysql`.

Now, we have to put MySQL in your path. To do that, do the following:

1. Open `Terminal`.
2. Type `cd ~` - `~` means home directory.
3. Then, type `ls -la` - this will list all hidden and visible folders and files. In this list see if `.bash_profile` is available or not. If available go to step 5.
4. If you don'f find `.bash_profile`, type `touch .bash_profile`.
5. Then, type `nano .bash_profile` - This is a UNIX editor to edit `.bash_profile`.
6. In that, type in `export PATH="/usr/local/mysql/bin:$PATH"`.
7. To save press <kbd>Control</kbd>+<kbd>x</kbd>, then press <kbd>y</kbd> and <kbd>return</kbd>.
8. Refresh the changes made by typing `source .bash_profile`

To start you MySQL server type `mysql.server start` (if installed with HomeBrew), if you have installed it through the package installer then type `mysql start` in the `Terminal`.

**Setting up admin password**

Do the following:

1. Open the `Terminal`.
2. Type `mysqladmin -u root password`. Hit <kbd>return</kbd>.
3. Enter your new password, then hit <kbd>return</kbd>.
4. Re-enter your new password to conform, then hit <kbd>return</kbd>.

To change your password, type `mysqladmin -u root -p password`, this will ask you for your old password, then enter your new password.

## 2 Basics of PHP

### 2.1 Syntax of PHP

There are few rules you would have to follow to get PHP running without any error. They are as follows:

* A PHP page must end with `FileName.php`.
* A PHP code should be written in `<?php ----- ?>` tag. There are other shortcuts such as `<? ----- ?>` and `<?= ----- ?>` (to output a result), but these are considered as bad practice. Or the other style is to do an ASP version type of tags i.e. `<% ----- %>` and `<%= ----- %>`.
* PHP doesn't care about whitespace. i.e.

  ```php
  <?php phpinfo(); ?>
  ```

  is same as

  ```php
  <?php

 phpinfo();         ?>
  ```
  The important thing you should keep in mind is that a statement should end with `;`.

### 2.2 Comments in PHP

There are different ways to comment in PHP; they are as follows:

```php
// single line commenting

/*
block commenting
*/

# Another way to comment single lines

/**
* This can be used to generate PHP Documents.
*/
```

## 2.3 Outputting dynamic text

See [2_1_DynamicText](https://github.com/akshaybabloo/php-mysql-notes/blob/master/2_Basics/2_1_DynamicText.php)

PHP can output dynamic text by using the keyword `echo`.

```php
<?php echo "Hello World"; ?>
```

## 3 Data types

### 3.1 Variables

see [3_1_Variables.php](https://github.com/akshaybabloo/php-mysql-notes/blob/master/3_DataTypes/3_1_Variables.php)

A variable in general programming is a symbolic representation of value. A variable can change its value over the time.

There are few rules to be followed in PHP; they are as follows:

* A variable should always start with `$`.
* Variable can start with either `_` or a letter.
* Variable cannot contain a space.
* A variable is case sensitive.
* A variable can contain numbers and `-`.

For example:

```php
$variable
$Variable
$myVariable //<-- This is what I will be using.
$my_variable
$my-variable //<-- I don't recommend using this.
$variable1
$_variable //<-- I don't recommend using this.
$__variable //<-- I don't recommend using this.
```

Also, I would highly recommend you to go through [http://php.net/manual/en/reserved.php](http://php.net/manual/en/reserved.php) which lists out some reserved `Keywords` that you cannot use.

### 3.2 Strings and String functions

See [3_2_String_StringFunction.php](https://github.com/akshaybabloo/php-mysql-notes/blob/master/3_DataTypes/3_2_String_StringFunction.php)

The string is a set of characters written in `""`.

```php
<?php $myString = "Hello World"; // is a string ?>
```

A string function is used to manipulate a string.

### 3.3 Integers

See [3_3_Integers.php](https://github.com/akshaybabloo/php-mysql-notes/blob/master/3_DataTypes/3_3_Integers.php)

You should know that `1` and `"1"` are different from each other. PHP will try it's best to convert `"1"` into an integer. For example:

```php
<?php
  echo 1 + "1";
  echo 1 + "1 number"; // removes anything after 1 and converts it into integer
 ?>
```

### 3.4 Floats

See [3_4_Floats.php](https://github.com/akshaybabloo/php-mysql-notes/blob/master/3_DataTypes/3_4_Floats.php)

There are three function where you might want to consider:

```php
<?php
  $int = 10;
  $float = 10.67

  echo is_int($int); // will return 1 if true else nothing
  echo is_float($float);
  echo is_numeric($int); // checks if its a number
?>
```

### 3.5 Arrays

See [3_5_Arrays.php](https://github.com/akshaybabloo/php-mysql-notes/blob/master/3_DataTypes/3_5_Arrays.php)

An array's index alway starts with `0`. You can print the structure of an array by using `print_r();` function. For example

```php
<?php
$newArray = array(1, 2, 3);
echo "<pre>";
print_r($newArray);
echo "</pre>";

// which will print:
//Array
//(
//    [0] => 1
//    [1] => 2
//    [2] => 3
//)
?>
```

From version 5.4 you can use `[]` to assign an array instead of using `array();` function.

### 3.6 Associative Arrays

See [3_6_Associative_Arrays.php](https://github.com/akshaybabloo/php-mysql-notes/blob/master/3_DataTypes/3_6_Associative_Arrays.php)

Also know as key-value pair, `array("key" => "value")`, the key and value could be integer or string. If you want your array to be in form of unordered list then you should use Associative arrays.

### 3.7 Array Functions

See [3_7_Array_Functions.php](https://github.com/akshaybabloo/php-mysql-notes/blob/master/3_DataTypes/3_7_Array_Functions.php)

For more functions on array see -> [http://php.net/manual/en/ref.array.php](http://php.net/manual/en/ref.array.php)

### 3.8 Booleans

See [3_8_Booleans.php](https://github.com/akshaybabloo/php-mysql-notes/blob/master/3_DataTypes/3_8_Booleans.php)

Booleans are either True or False, in the case of PHP a True vale is represented as `1` False is represented as empty.

### 3.9 NULL vs empty

See [3_9_NULL_empty.php](https://github.com/akshaybabloo/php-mysql-notes/blob/master/3_DataTypes/3_9_NULL_empty.php)

An `empty();` function considers - `""`, `null`, `0`, `0.0`, `"0"`, `false` and `array();` as empty and will return true.

### 3.10 Type Juggling and Casting

See [3_10_Juggling_Casting.php](https://github.com/akshaybabloo/php-mysql-notes/blob/master/3_DataTypes/3_10_Juggling_Casting.php)

When PHP tries to convert one data type to another it's called Juggling. If the user tries to convert a data type to another then its called Casting.

Type casting can be done in two way:

1. Using the function - `settype($var, "integer")` - Changes in place
2. Direct casting - `(integer) $var` - Must be assigned to a variable.

Types of data types we have seen so far:

1. string
2. int, integer
3. float
4. array
5. boolean, bool

### 3.11 Constants

See [3_11_Constants.php](https://github.com/akshaybabloo/php-mysql-notes/blob/master/3_DataTypes/3_11_Constants.php)

A constant cannot change its value. In PHP the only way you can set a constant it by using function `define();`.
