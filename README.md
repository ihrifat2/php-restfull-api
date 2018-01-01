# Php restfull api

Restfull api using php slim Framework

## Requirement

1. Install [XAMPP](https://www.apachefriends.org/index.html)

## Install 

1. Clone repository `git clone https://github.com/ihrifat2/php-restfull-api.git`
2. Start mysql and apache server from XAMPP
3. Go to http://localhost/phpmyadmin and Import slimapp.sql in phpmyadmin

## Usage

Index | HTTP Method | Endpoint
--------|--------|----------
1 | GET | /api/users
2 | GET | /api/user/{user-id}
3 | POST | /api/user/add
4 | PUT | /api/user/edit/{user-id}
5 | DELETE | /api/user/delete/{user-id}

### /api/users

Get all users information

Example: site.com/api/users

```json
[{"id":"1","first_name":"Imran","last_name":"Hadid","phone":"23456764321","email":"imran@hadid.com","address":"27 Dhanmondi","city":"Dhaka","state":"BD"},{"id":"2","first_name":"Peter","last_name":"Jhonson","phone":"56546454","email":"Peter@mail.com","address":"55 st","city":"Berlin","state":"GR"}]
```

### /api/user/{user-id}

Get single user information

Example: site.com/api/user/1

```json
[{"id":"1","first_name":"Imran","last_name":"Hadid","phone":"23456764321","email":"imran@hadid.com","address":"27 Dhanmondi","city":"Dhaka","state":"BD"}]
```

### /api/user/add

Add user

Example: site.com/api/user/add

```json
[{'notice': {'text': 'User Added'}}]
```

### /api/user/edit/{user-id}

Edit user

Example: site.com/api/user/edit/1

```json
[{'notice': {'text': 'User Updated'}}]
```


### /api/user/delete/{user-id}

Delete user

Example: site.com/api/user/delete/1

```json
[{'notice': {'text': 'User Deleted'}}]
```