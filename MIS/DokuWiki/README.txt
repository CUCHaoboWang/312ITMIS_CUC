                    Bitnami DokuWiki Stack 20200729-2
                  ==============================


1. OVERVIEW

The Bitnami Project was created to help spread the adoption of freely
available, high quality, open source web applications. Bitnami aims to make
it easier than ever to discover, download and install open source software
such as document and content management systems, wikis and blogging
software.

You can learn more about Bitnami at https://bitnami.com

DokuWiki is a standards compliant, simple to use wiki mainly aimed at 
creating documentation of any kind. It is targeted at developer teams, 
workgroups, and small companies. It has a simple but powerful syntax which 
makes sure the datafiles remain readable outside the wiki and eases the 
creation of structured texts. All data is stored in plain text files; 
no database is required.

You can learn more about DokuWiki at http://wiki.splitbrain.org/wiki:dokuwiki

The Bitnami DokuWiki Stack is an installer that greatly simplifies the
installation of DokuWiki and runtime dependencies. It includes ready-to-run
versions of Apache and PHP. DokuWiki Stack is distributed for free
under the Apache 2.0 license. Please see the appendix for the specific
licenses of all open source components included.

You can learn more about Bitnami Stacks at https://bitnami.com/stacks/

2. FEATURES

- Easy to Install

Bitnami Stacks are built with one goal in mind: to make it as easy as
possible to install open source software. Our installers completely automate
the process of installing and configuring all of the software included in
each Stack, so you can have everything up and running in just a few clicks.

- Independent

Bitnami Stacks are completely self-contained, and therefore do not interfere
with any software already installed on your system. For example, you can
upgrade your system's PHP without fear of 'breaking' your Bitnami Stack.

- Integrated

By the time you click the 'finish' button on the installer, the whole stack
will be integrated, configured and ready to go. 

- Relocatable

Bitnami Stacks can be installed in any directory. This allows you to have
multiple instances of the same stack, without them interfering with each other. 

3. COMPONENTS

Bitnami DokuWiki Stack ships with the following software:

  - DokuWiki 20200729
  - Apache 2.4.46
  - PHP 7.3.23

4. REQUIREMENTS

To install Bitnami DokuWiki Stack you will need:

    - Intel x86 or compatible processor
    - Minimum of 256 MB RAM 
    - Minimum of 50 MB hard drive space
    - TCP/IP protocol support
    - Compatible operantig systems:
      - An x86 Linux operating system.
      - A 32-bit Windows operating system such as Windows Vista, Windows 7, Windows 8, Windows 10, Windows Server 2008 or Windows Server 2012.
			- An OS X operating system x86.


5. INSTALLATION

The Bitnami DokuWiki Stack is distributed as a binary executable installer.
It can be downloaded from:

https://bitnami.com/stacks/

The downloaded file will be named something similar to:

bitnami-dokuwiki-20200729-2-linux-installer.run on Linux,
bitnami-dokuwiki-20200729-2-linux-x64installer.run on Linux 64 bit,
bitnami-dokuwiki-20200729-2-windows-installer.exe on Windows or
bitnami-dokuwiki-20200729-2-osx-x86-installer.dmg on OS X x86.

On Linux, you will need to give it executable permissions:

chmod 755 bitnami-dokuwiki-20200729-2-linux.run


To begin the installation process, double-click on that file, and you will
be greeted by the 'Welcome' screen. Pressing 'Next' will take you to the
Installation Folder screen, where you can select where the stack will be
installed. If the destination directory does not exist, it will be created
as part of the installation. 

The next screen will prompt you for data necessary to create the initial
admin user: 

Username and password: You will use this information to log-in into the
administrative interface. The password you provide here will also be used to
protect other parts of the installation. Please see the section named
"Usernames and Passwords" later in this document.

Real name: The name that will be displayed in the application.

Email address: Your email address.

The next screen will vary, depending on whether the ports needed by the
bundled Apache are already taken. The default listening port for Apache 
is 80. If those ports are already in use by other applications, you will 
be prompted for alternate port to use.

The next screen will allow you to configure the final details of your
DokuWiki installation:

Wiki name: Title of your wiki, which will be displayed to visitors

Once the information has been entered, the installation will proceed to copy
the files to the target installation directory and configure the different
components. One this process has  been completed, you will see the
'Installation Finished' page. You can choose to launch Bitnami DokuWiki
Stack at this point. If you do so, your default web browser will open and
display the Welcome page for the Bitnami DokuWiki Stack. 

If you received an error message during installation, please refer to
the Troubleshooting section.

The rest of this guide assumes that you installed Bitnami DokuWiki
Stack in /home/user/dokuwiki-20200729-2 on Linux or C:\Program Files\Bitnami DokuWiki Stack
on Windows or /Applications/dokuwiki-20200729-2 on OS X and that you use port 
8080 for Apache on Linux and port 80 on Windows. 

6. STARTING AND STOPPING BITNAMI DOKUWIKI STACK

To start/stop/restart application on Linux you can use the included ctlscript.sh
utility, as shown below:

       ./ctlscript.sh (start|stop|restart)
       ./ctlscript.sh (start|stop|restart) apache

  start      - start the service(s)
  stop       - stop  the service(s)
  restart    - restart or start the service(s)

The Bitnami Control Panel is a simple graphical interface included in the OS X stacks that 
can start and stop the Bitnami servers. It is are located in the same installation directory. 
To start the utility, double click the file named ‘control’ from your file browser.

On Windows, you can start and stop Bitnami DokuWiki Stack using the shortcuts created
in the Start Menu, under Programs -> Bitnami -> Bitnami Service 

That will start Apache service. Once started, you can open your
browser and access the following URL on Linux or OS X: 

http://127.0.0.1:8080/dokuwiki/

And you can access the following URL on Windows:

http://127.0.0.1/dokuwiki/

If you selected an alternate port during installation, for example 18080, the
URL will look like: 

http://127.0.0.1:18080/dokuwiki/

If you are accessing the machine remotely, you will need to replace
127.0.0.1 with the appropriate IP address or hostname.

7. DIRECTORY STRUCTURE

The installation process will create several subfolders under the main
installation directory:

	apache2/: Apache Web server.
	php/: PHP Scripting Language.
	apps/
	  dokuwiki/: DokuWiki application folder
	    conf/: DokuWiki Apache configuration files
	    htdocs/: DokuWiki PHP application files

8. DEFAULT USERNAMES AND PASSWORDS

The DokuWiki administrative user and password are the ones you set at
installation time. 

9. TROUBLESHOOTING

This version of the Bitnami DokuWiki stack is a preview version, and as
such, may contain a number of bugs and be a little bit rough around the
edges. We are working on the next release, which will contain several
improvements along with expanded documentation. In addition to the resources
provided below, we encourage you to post your questions and suggestions at:

https://community.bitnami.com/

We also encourage you to sign up for our newsletter, which we'll use to
announce new releases and new stacks. To do so, just register at:
https://bitnami.com/newsletter.  

9.1 Installer

# Installer Payload Error 

If you get the following error while trying to run the installer from the
command line:

"Installer payload initialization failed. This is likely due to an
incomplete or corrupt downloaded file" 

The installer binary is not complete, likely because the file was
not downloaded correctly. You will need to download the file and
repeat the installation process. 

# Installer execution error on Linux

If you get the following error while trying to run the installer:

"Cannot open bitnami-dokuwiki-20200729-2-linux.run: No application suitable for
automatic installation is available for handling this kind of file."

In some operatings systems you can change permissions with right click
properties -> permissions -> execution enable.

Or from the command line:

$ chmod 755 bitnami-dokuwiki-20200729-2-linux.run

9.2 Apache

If you find any problem starting Apache, the first place you should check is
the Apache error log file:

/home/user/dokuwiki-20200729-2/apache2/logs/error.log on Linux or
C:\Program Files\Bitnami DokuWiki Stack\apache2\logs\error.log or
/Applications/dokuwiki-20200729-2/apache2/logs/error.log on OS X.

Most errors are related to not being able to listen to the default port.
Make sure there are no other server programs listening at the same port
before trying to start Apache. Some programs, such as Skype, may also use
port 80. For issues not covered in this Quick Start guide, please refer to
the Apache documentation, which is located at http://httpd.apache.org/docs/  

9.3 DokuWiki

For any problem related to DokuWiki, please visit 
http://wiki.splitbrain.org/wiki%3AFAQ


10. LICENSES

Apache Web Server is distributed under the Apache License v2.0, which
is located at http://www.apache.org/licenses/LICENSE-2.0

PHP and related libraries are distributed under the PHP License v3.01,
which is located at http://www.php.net/license/3_01.txt

DokuWiki is distributed under the GNU General Public License v2,
which is located at
http://www.gnu.org/licenses/old-licenses/gpl-2.0.html

curl is distributed under the Curl License, which is located at
http://curl.haxx.se/docs/copyright.html

expat is distributed under the MIT License, which is located at
http://www.jclark.com/xml/copying.txt

gd is distributed under the gd License, which is located at
http://www.boutell.com/gd/manual2.0.33.html

IMAP is distributed under the University of Washington Free-Fork
License, located at http://www.washington.edu/imap/legal.html

jpegsrc is distributed under The Independent JPEG Group's JPEG
software license, which is located at
http://dev.w3.org/cvsweb/Amaya/libjpeg/README?rev=1.2

libiconv is distributed under the Lesser General Public License
(LGPL), located at http://www.gnu.org/copyleft/lesser.html

Freetype is released under The Freetype Project License, that is located at
http://freetype.sourceforge.net/FTL.TXT
