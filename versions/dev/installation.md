# Installation
Actually we support Mac OS X Mountain Lion and Debian Wheezy. 

We also plan to release a Windows installer and a RPM package as soon as possible but as we're only Mac users we'll be happy if someone is out there to support us with that stuff. Finally it's possible to build the runtime by yourself. 

This can be done by cloning our
Runtime Environment <https://github.com/techdivision/TechDivision_Runtime>. 
We've added two ANT targets `create-pkg` and `create-deb`
that should do the stuff for you.

- [Requirements](#Requirements)
- [Installation on Mountain Lion](#MountainLion)
- [Installation on Debian Wheezy](#DebianWheezy)
- [Installation on Windows (7+)](#Windows7+)
- [Installation on Fedora](#Fedora)

<a name="Requirements"></a>
##Requirements
* PHP 5.4+ on x64 or x86
* ZTS Enabled (Thread Safety)
* Posix Threads Implementation

The lastest version is only tested with Mac OS 10.8+ and Debian Wheezy. PHP Application Server should run on any PHP version from 5.3+. However segmentation faults occurred in various tests with PHP 5.3.x repeatedly. 
Meanwhile this can lead to the early development stage of the pthreads library. 

We actually use PHP 5.5.+ for development.


<a name="MountainLion"></a>
##Installation on Mountain Lion
To install on your Mac OS X Mountain Lion please download the actual .pkg Package from [http://www.appserver.io](http://www.appserver.io). 

After downlaod the .pkg you can start installation process with a double click on the package. To install the software you need to have administration privileges (sudo). After the installation process, that is really simple,
you'll find the Application Server software in the folder `/opt/appserver`.

When the installation has been finished the Application Server will be started automatically. 

If you need to restart the Application Server, after you've deployed a new app for example, you can use the init scripts `sbin/appserverctl` and `sbin/memcachectl` therefore.  Both accept `start`, `stop` and `restart` as parameter.

Start your favorite browser and open the URL [http://127.0.0.1:8586/demo](http://127.0.0.1:8586/demo) to load the demo application.

<a name="Debian Wheezy"></a>
##Installation on Debian Wheezy
If you're on a Debian system you don't need to download the .deb package. Follow these instructions:

	root@debian:~# echo “deb http://deb.appserver.io/ wheezy main” >> /etc/apt/sources.list
    root@debian:~# wget http://deb.appserver.io/appserver.gpg
    root@debian:~# cat appserver.gpg | apt-key add -
    root@debian:~# aptitude update
    root@debian:~# aptitude install appserver

This will install the Application Server in directory `/opt/appserver`. Also it'll be started automatically, but you
can start, stop or restart it with the init-script `/etc/init.d/appserver` and the parameter `start`, `stop` and `restart`.
Additionally it is necessary that the memcached daemon has been started before the Application Server will
be started itself.

After installation you can open a really simply example app with your favorite browser open the URL
[http://127.0.0.1:8586/demo](http://127.0.0.1:8586/demo).

<a name="Windows7+"></a>
##Installation on Windows (7+)
To install the Application Server on Windows you first have to download the latest .jar archive from http://appserver.io/downloads.

After doing so you have to check your system for an installed Java Runtime Environment (or JDK that is).
This is a vital requirement for you to use the .jar file.
If the JRE is not installed you have to get it from [http://www.oracle.com/technetwork/java/javase/downloads/jre7-downloads-1880261.html](http://www.oracle.com/technetwork/java/javase/downloads/jre7-downloads-1880261.html) first.

If this requirement is met you can start the installation by simply double-clicking the .jar archive.
After authorizing the access to your computer, a guided installation wizard will appear and perform the installation.

After the installation you can start the Application Server with the `server.bat` file located within the root directory of your installation.

Best thing to do would be starting a command prompt as an administrator and run the following commands (assuming default installation path):

    C:\Windows\system32>cd "C:\Program Files\appserver"
    C:\Program Files\appserver>server.bat

As a final step you can start your favorite browser and open the URL [http://127.0.0.1:8586/demo](http://127.0.0.1:8586/demo) to load the demo application.



<a name="Fedora"></a>
##Installation on Fedora
