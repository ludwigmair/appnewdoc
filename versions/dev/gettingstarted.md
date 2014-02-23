# Getting Started

To make use of the Application Server you need to understand that all sites we deliver are Web App based.

A Web App is, simply speaking, a website specifically structured website.

If you want to better understand how and why Web Apps are special in their structure you can have a look at `Getting Started Developing`
where we explain the concept a bit more.

For using these Web Apps we only need to know how to deploy and manage them.
This can be done using the ``Admin Web App`` which we deliver with every installation (you might have opted out on it during the installation!).

You can access this Admin backend at [http://127.0.0.1:8586/admin](http://127.0.0.1:8586/admin) which will open a password prompt.

- [Default Settings](#Defaultsettings)
- [Manage your Web Apps](#ManageYourWebApps)
 


<a name="Defaultsettings"></a>
##Default Settings 

<a name="ManageYourWebApps"></a>
##Manage your Web Apps 

    <servlet>
        <description><![CDATA[A demo servlet]]></description>
        <display-name>DemoServlet</display-name>
        <servlet-name>DemoServlet</servlet-name>
        <servlet-class>\TechDivision\Example\Servlets\DemoServlet</servlet-class>
    </servlet>
