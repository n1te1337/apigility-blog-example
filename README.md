Blog example
==============================

Simple example of a restful blog API built using Apigility.

The API users User Credentials grant of the OAuth2 spec. 

Sample database is located in `data/sample_schema.sql`

##### To find out how to set up Apigility go the the main repo: https://github.com/zfcampus/zf-apigility-skeleton

##### To find out how to use Apigility and see what it has to offer watch the Getting started with Apigility video by Matthew Weier O'Phinney: http://apigility.org/get-started-video.html
------------

### Post CRUD
Allowed fields for posts are:

`postId` - ID of a post

`postTitle` - title of a post

`postBody` - body of a post

`postDate` - the date a post was created

`userId` - ID of the user who created the post

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


### Registration and Authentication
Allowed fieds for registration are:

`username` - username/email of the user

`password` - password for the user

`firstname` - first name of the user

`lastname` - last name of the user

```bash
# Register a user
POST
/auth/registration

{
  "username": "someone@example.com",
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
  "username": "someone@example.com",
  "password": "testpass",
  "grant_type": "password",
  "client_id": "webapp"
}
```
