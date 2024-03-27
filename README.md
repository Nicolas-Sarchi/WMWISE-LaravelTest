# Project README

## WMWISE Laravel Test

This project is a simple CRUD application for managing clients. It was developed as part of the WMWISE Laravel test, following the provided instructions.

### Instructions:

- Create a clients CRUD with the following fields: name, address, phone, country.
- Country must be a selectable field, and the information of the countries must be fetched from the database.
- Client information must be saved in a database.

### Acceptance Criteria:

- Developed using Laravel 11.
- Database (tables and columns) must be written in English.
- Tables and columns must be created with migrations.
- All code must be written in English.
- Front-end can be developed with Blade files, Alpine, Vue.js, or Inertia.



### Usage:

1. Clone the repository.
2. Run `composer install` to install dependencies.
3. Run `npm install` to install frontend dependencies.
4. Run `php artisan migrate` to apply migrations.
5. Run `php artisan db:seed --class=CountrySeeder` to fill the country table.
6. Set up your database credentials in the `.env` file.
7. Run `php artisan serve` to start the development server.

### Database:

- MySQL was used for the database.

### Frontend:

- Inertia.js and Vue.js were used for the frontend.



Feel free to reach out if you have any questions or need further assistance!
