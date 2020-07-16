<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


In this project 100% pure use Restful API, Testing using POSTMAN, and database using MongoDB (NoSQL), many features such as user authentication, CRUD and view relations based on ID


## How To Install
```
git clone https://github.com/zamisyh/kotakjualan-toko
cd kotakjualan-toko
composer update
cp env.example .env (DB Name : toko)
php artisan key:generate

```

## How To Running
```
php artisan db:seed
php artisan serve


```

## URL Endpoint
```
http://localhost:8000/api/v1/users
http://localhost:8000/api/v1/users/idAnggota/{id}
http://localhost:8000/api/v1/users/idToko/{id}
http://localhost:8000/api/v1/users/allToko
http://localhost:8000/api/v1/users/auth/login
http://localhost:8000/api/v1/users/create-toko 
http://localhost:8000/api/v1/users/toko/update/{id}
http://localhost:8000/api/v1/users/toko/delete/{id}

```

## Tutorial

1. retrieve data from the member database, which is shot using the POSTMAN shared API
- http://localhost:8000/api/v1/users
<img src="http://www.outlanders.it/uploads/1594959719.png">

2. Retrieve member data based on member id
- http://localhost:8000/api/v1/users/idAnggota/{id}
http://www.outlanders.it/uploads/1594932634.png

3. Retrieve store data based on member ID
- http://localhost:8000/api/v1/users/idToko/{id}
<img src="http://www.outlanders.it/uploads/1594901349.png">


4. Retrieves all store data
- http://localhost:8000/api/v1/users/allToko
<img src="http://www.outlanders.it/uploads/1594879865.png">

5. Login using Data based on the User Database, you must add the 'key' and 'value',
key = Accept, value = application / json
- http://localhost:8000/api/v1/users/auth/login 
<img src="http://www.outlanders.it/uploads/1594892066.png">

6. Make a store, before creating a store you must first get api_token from the database so you can login and create a store
- http://localhost:8000/api/v1/users/create-toko 
<img src="http://www.outlanders.it/uploads/1594886984.png">

- if you already have api_token, you can add 'key' and 'value' as follows
key = Authorization, value = Bearer (api_token)
<img src="http://www.outlanders.it/uploads/1594921914.png">

- Successfuly
<img src="http://www.outlanders.it/uploads/1594902839.png">

7. Just like creating a store, you must first get a token api so you can update the data
- http://localhost:8000/api/v1/users/toko/update/{id}
<img src="http://www.outlanders.it/uploads/1594877022.png">

8. . Just like update data, you must first get a token api so you can delete the data
- http://localhost:8000/api/v1/users/toko/delete/{id}
<img src="" alt="img">












