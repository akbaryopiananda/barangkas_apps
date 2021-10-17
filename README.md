# Project Website Yuwaraja XIII

## Usage
- Prerequisites
    - Code Editor / IDE
    - PHP [Composer](https://getcomposer.org/download/)
    - Node JS [Node JS](https://nodejs.org/en/)
    - Terminal
    
[API Documentation](https://documenter.getpostman.com/view/14542872/Tzeak6V1#4478e1d2-0516-415f-878c-4f48f945b14a)

### Database Design
![Image of Database](/public/images/erd.png)

## Installation

1. Clone the repository
    ```bash
    git clone https://github.com/akbaryopiananda/barangkas_apps.git
    ```

2. Use the package manager [composer](https://getcomposer.org/download/) to install vendor.

    ```bash
    composer install
    ```

3. Configure .env files, => copy .env.example and rename it to .env

4. Set your database configuration in .env files

5. Generate APP_KEY

    ```bash
    php artisan key:generate
    ```
6. Node
    ```bash
    npm install
    npm run dev
    ```
7. Run Migration

    ```bash
    php artisan migrate
    ```

8. Run Seeder

    ```bash
    php artisan db:seed
    ```

9. To make uploaded files accessible from the web, you should create a symbolic link from public/storage to storage/app/public.

    ```bash
    php artisan storage:link
    ```

9. Run Laravel server

    ```bash
    php artisan serve
    ```


### Configuring for production deployment

1. Change .env debug mode

    ```bash
    APP_DEBUG=false
    ```
2. Run artisan command for optimizing app

    ```bash
    php artisan optimize
    ```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.


## License
[MIT](https://choosealicense.com/licenses/mit/)