# PHP Rest API

This template puts three PHP libraries together for producing simple yet powerful/useful APIs

## Installation

Download as zip and extract (Rename the folder as you required)

cd into folder:

```
cd yourfolder
```

update dependencies

```
composer update
```

Once installation is finished, Go to ``` localhost/yourfolder/ ``` you will see:

```
{
  "msg": "Hello World!"
}
```

## Basic Usage
For creating routes as your requirement, You need to create file for every route group in ``` routes/ ``` folder
(DON'T Forget to add ```__``` prefix to file names).
For example, if you are creating API for Managing books table into your database, your route file name should be like ```__books.php```. In this file you'll have all the routes for managing books table into your database.
Instead of creating seprate files for every group of routes, You can put all routes into a single file (It's bad).
Read more about routing in [Slim Docs](https://www.slimframework.com/docs/)

## Interacting with Database

You need to change ```using_db``` option to ```true ``` in ```config/app.php``` and also add your database credentials there.
You can then access Medoo database object in your route's callback function like this ``` $this->db ... ```.
Read more about [Medoo](https://medoo.in/doc) (It's Super Simple)
