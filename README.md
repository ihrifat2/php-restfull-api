# php restfull api

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

### 1

/api/users
Get all users information

```json
[{"id":"1","first_name":"imran","last_name":"hadid","phone":"23456764321","email":"imran@hadid.com","address":"dhanmondi","city":"dhaka","state":"bd"}}
```

### 2

/api/user/{user-id}
Get single user information

### 3

/api/user/add
Add user

### 4

/api/user/edit/{user-id}
Edit user

### 5

/api/user/delete/{user-id}
Delete user