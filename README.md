# php restfull api

Restfull api using php slim Framework

## Requirement

1. Install [XAMPP](https://www.apachefriends.org/index.html)

## Install 

1. Clone repository `git clone https://github.com/ihrifat2/php-restfull-api.git`
2. Start mysql and apache server from XAMPP

## Usage

Index | HTTP Method | Endpoint | Details
--------|--------|----------|----------
1 | GET | /api/users | Get all users information
2 | GET | /api/user/{user-id} | Get single user information
3 | POST | /api/user/add | Add user
4 | PUT | /api/user/edit/{user-id} | Edit user
5 | DELETE | /api/user/delete/{user-id} | Delete user