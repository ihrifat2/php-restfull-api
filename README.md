# php restfull api

Restfull api using php slim Framework

## Requirement

1. Install [XAMPP](https://www.apachefriends.org/index.html)

## Install 

1. Clone repository `git clone https://github.com/ihrifat2/php-restfull-api.git`
2. Start mysql and apache server from XAMPP

## Usage

HTTP Method | Endpoint | Details
--------|----------|----------
GET | api/users | Get all users information
GET | api/user/{user-id} | Get single user information
POST | api/user/add | Add user
PUT | api/user/edit/{user-id} | Edit user
DELETE | api/user/delete/{user-id} | Delete user