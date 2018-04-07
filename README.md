# Slim PHP API starter template

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

Once installation is finished, You are ready to create your own API using PHP and Slim framework

## Basic Usage

Once installation is finished, Hit: ``` localhost/yourfolder/ ``` you will see:

```
{
  "data": "Public Route"
}
```

Hit: ``` localhost/yourfolder/private ``` and you will see:

```
{
  "message": "Token not found"
}
```

This route is protected using token. You need to put a token to access private data.

Now hit: ``` localhost/yourfolder/private?authorization=1234 ``` and you will get that private data.

For more info about Token Authentication Library, read their docs.

## Used Libraries

* [Slim](https://www.slimframework.com/docs/)
* [Token Authentication Library](https://github.com/dyorg/slim-token-authentication)
* [PDO Interaction Library](https://github.com/FaaPz/Slim-PDO)
