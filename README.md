Blog example
==============================

Simple example of a restful blog API built with Apigility.

The API uses User Credentials grant type of the OAuth2 spec for authentication. 

Sample database schema is located in `data/sample_schema.sql`

##### To find out how to set up Apigility see the README of the [main Apigility repo.](https://github.com/zfcampus/zf-apigility-skeleton)

##### To find out how to use Apigility and what it has to offer watch [Getting started with Apigility by Matthew Weier O'Phinney.](https://apigility.org/video)
------------

### Registration and Login
Allowed fieds for registration are:

`username` - email address of the user (required, valid email)

`password` - password for the user (required, min length 6)

`firstname` - first name of the user (required, chars only)

`lastname` - last name of the user (required, chars only)

```bash
# Register a user
POST
/auth/registration

{
  "username": "n1teleet@gmail.com",
  "password": "testpass",
  "firstname": "Pav",
  "lastname": "Zwierzynski"
}
```

```bash
# Login a user
POST
/auth/login

{
  "username": "n1teleet@gmail.com",
  "password": "testpass",
  "grant_type": "password",
  "client_id": "webapp"
}
```


### Post CRUD
Allowed fields for posts are:

`postId` - ID of a post

`postTitle` - title of a post (required)

`postBody` - body of a post

`postDate` - the date when a post was created

```bash
# Create a post
POST
/post

# Get all posts
GET
/post

# Get a specific post
GET
/post/:postId

# Update a post
PUT
/post/:postId

# Delete a post
DELETE
/post/:postId
```
Sample request to create a post
```bash
Authorization: Bearer f585ddc332207db088e13cee0f6e35ce93552f67
POST
/post

{
  "postTitle": "Sample post",
  "postBody": "This is just a sample post to see if the API works"
}
```
