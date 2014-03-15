Blog example
==============================

Simple example of a restful blog API built using Apigility.
The API users Password Credential grant of the OAuth2 spec 
Sample database is located in `apigility-blog-example/data/sample_schema.sql`
To find out how to set up Apigility go the the main repo: https://github.com/zfcampus/zf-apigility-skeleton
To find out what Apigility has to offer I suggest watching the Getting started with Apigility by Matthew Weier O'Phinney: http://apigility.org/get-started-video.html
------------

### Post CRUD
Allowed fields for posts are:

`postId` - ID of a post
`postTitle` - title of a post
`postBody` - body of a post
`postDate` - the date a post was created
`userId` - ID of the user who created the post

```html
#### Create a post
POST
/post

#### Get all posts
GET
/post

#### Get a specific post
GET
/post/:postId

#### Update a post
PUT
/post/:postId

#### Delete a post
DELETE
/post/:postId
```

### Registration and Authentication

```html
#### Register a user
POST
/auth/registration

#### Login a user
POST
/auth/login
```
