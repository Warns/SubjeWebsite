# SubjeBilisim Website

## Dockerized version of the website.

Steps done in the Dockerfile

-   Replaced apache's default 000-default.conf in the image with a local 000-default.conf file.
-   Installed necessary dependencies and packages to use with PHP.
-   Declared the root document for the app
-   Installed necessary Laravel dependencies and packages.
-   Installed composer package manager
-   Created a sudo user to use in the container
