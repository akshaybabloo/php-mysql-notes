# php-mysql-notes
PHP 5, PHP 5.5 and MySQL

## 1 Instillation of PHP, Apache server and MySQL server.

In this step I will be showing you how to install the three main components to run a PHP script.

There are basically two ways of doing this:
1. Using the stacks
2. Instilling the softwares manually

### 1.1 Using the stacks

Stacks are the pre-packged group of software which contains all the packages we need. To install this I would recommend using [XAMPP](https://www.apachefriends.org/index.html).

Or lets install it manually.

### 1.2 Mac OS X (Manual Instillation)

#### 1.2.1 Terminal

To open terminal, go to `Applications > Utilities > Terminal`.

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


1. Open your web browser and type `http://localhost`, this should return error.
2. Type in `ps aux | grep httpd` - This will list all running application on your system, `grep httpd` minimize the list only where `httpd` is running. Mine showed something like This

  ```sh
  akshayrajgollahalli  1534   0.0  0.0  2454296    836 s000  S+    7:22pm   0:00.00 grep httpd
  ```

To enable the server, do the following:

1. Open `Terminal`.
2. Type in `sudo apachectl start`. There wont be any response, that was also removed by Apple in OS X.

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

The default root folder is located in `Library/WebServer/Documents`. By default, before OS X 10.8 was released, there use to be a folder called `Sites` in the user directory. If you have installed a fresh version of OS X 10.8 you will not be having this. So lets create this folder. To do that, do the following (there are two ways to do this):

1. Open your `Terminal`.
2. Type in `cd ~` - go to user directory - hit return.
3. Then type in `mkdir Sites` - make directory named `Sites` - hit return key.

**OR**

You could open `Finder` window, from the menu bar `Go > Go to Folder` or use the shortcut ket <kbd>Shift</kbd>+<kbd>Command</kbd>+<kbd>G</kbd> and type in `User/<your user name>`. This will open your user directory. In that, right click on an empty space and create a new folder. Name the folder as `Sites`.

Now, we should tell the Apache to server the files from the `Sites` folder rather than the default one. To do that, do the following:

1. Open the `Terminal`.
2. Type in `cd /etc/apache2/users/`. Then type `ls`, this will list out files that are present. If in some case you do find any file do look into it if it matches the following text. But if you fin `Guest.conf` just ignore it, this file is for guest users.
3. Type in `sudo nano YourUserName.conf` - create a YourUserName.conf file using nano editor - make sure you write in your user name. For me it is `sudo nano akshayrajgollahalli.conf`.
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
5. Then key in <kbd>Control</kbd>+<kbd>X</kbd>, then <kbd>Y</kbd> and then <kbd>Return</kbd>.
6. To confirm if its saved or not, type `cat YourUserName.conf`, this should print out what you have saved it that file.
7. Now lets change the file permission so than the Apache can read it. Type in `sudo chmod 644 YourUserName.conf`
8. restart the Apache server by typing `sudo apachectl restart`

Now open the browser and type in `http://localhost/~akshayrajgollahalli`

**For Mac OSX 10.10 Yosemite and above**
#### 1.2.3 Instilling PHP
