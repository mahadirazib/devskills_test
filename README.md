# Please run the below command to start

  ```sh
  composer install
  php artisan migrate --seed
  php artisan storage:link
  ```
Also rename the file .env.example to .env and generate a key with:

```sh
php artisan key:generate
```

user these credentials for default login.
username: admin
password: admin
