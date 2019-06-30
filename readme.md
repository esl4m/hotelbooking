# HotelBooking Application

HotelBooking is a Hotel Booking Application. Application let's you book room in hotel.

## Installation Steps
```
- clone the project to your machine
- Update your Homestead.yaml
- Provision your vagrant
- Rename .env.example to .env 
- Update .env according to your db settings
```
#### For migrations Run:
``` $ php artisan migrate ```

#### Import seeds
``` $ php artisan db:seed ```

#### Install JS Dependencies
``` $ npm install ```

#### Watch Files
``` $ npm run watch ```


## To-do
- Login & Logout API
- Viewing bookings in calendar mode
- Allow non-registered users to add a reservation (it's related to Wordpress task)

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
