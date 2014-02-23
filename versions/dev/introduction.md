# Introduction
The objective of the project is to develop a multi-threaded application server for PHP, written in PHP. Yes, pure PHP!

You think we aren't serious? Maybe! But we think, in order to enable as many developers in our great community, this will be the one and only way to enable you helping us. 

Through the broadest possible support of the PHP community we
hopefully establish this solution as the standard for enterprise applications in PHP environment.

- [Highlights](#Highlights)
- [Technical Features](#TechnicalFeatures)

<a name="Highlights"></a>
##Highlights
* Servlet engine, with full HTTP 1.1 support
* Web Socket engine, based on Ratchet <http://socketo.me/>
* Session beans (stateful, stateless + singleton)
* Message beans
* Doctrine as standard Persistence provider
* Timer service
* Integrate message queue
* Web services
* Cluster functionality
* Hot deployment of Web Apps (Mac OS X and Debian only)

<a name="TechnicalFeatures"></a>
##Technical Features
* Joe Watkins (https://github.com/krakjoe/pthreads) phtreads Library is used
* DI & AO  usage within the respective container
* Use of annotations to configure beans
* Configuration by Exception (optional Usage of Deployment Descriptor possible)

The implementation of a Web application and its operation in the PHP Application Server must be as simple as possible.

For this purpose, whenever possible, the utilization of standard solution based on existing components as a, such as Doctrine, are used. On the other hand, with the paradigm Configuration by exception, the operation of an application with a minimum of configuration is needed. 

So a lot of the use cases is already covered by the default behavior of the
respective integrated components so that the developer often does not need declarative configuration information. To appeal to the widest possible community the architecture of the Application Server must be constructed so that as large a number of existing applications can easily be migrated via adapter. 

Furthermore, the future development of Web applications based on all relevant PHP frameworks by providing libraries is supported. 
