amena 📦



amena is a revolutionary parcel transport platform designed to optimize the shipping process by facilitating direct interaction between customers and carriers. Built with Symfony, it aims to improve the efficiency of parcel delivery and tracking.


📖 Table of Contents
About
Features
Installation
Usage
Contributing
License
Contact
About 🌟
amena leverages technology to streamline the delivery process, making it more transparent and user-friendly. Our platform not only allows customers to choose their preferred carriers but also provides real-time tracking of their parcels.

Features ✨
Carrier Selection: Clients can choose their preferred carrier for their parcel delivery.
Real-time Tracking: Monitor the status and location of your parcel in real time.
Flexible Management: Refuse a carrier and reassign the parcel to another with ease.
User-friendly Interface: Designed for simplicity and ease of use for both customers and carriers.
Installation 🔧
Prerequisites
PHP 7.4 or higher
Composer
Symfony CLI
MySQL or any compatible database
Steps
Clone the repository

bash
Copy code
git clone https://github.com/aymenzouaoui/pidevweb.git
Navigate to the project directory

bash
Copy code
cd mon-projet
Install dependencies

bash
Copy code
composer install
Configure the database in .env

Create the database

bash
Copy code
php bin/console doctrine:database:create
Run migrations

bash
Copy code
php bin/console doctrine:migrations:migrate
Start the Symfony server

bash
Copy code
symfony serve
Access the application at the URL provided by Symfony.

Usage 💻
Once the server is running, navigate to the provided local URL to start managing your shipments and deliveries. Utilize the dashboard for comprehensive parcel management.

Contributing 🤝
Contributions make the open source community an amazing place to learn, inspire, and create. Any contributions you make are greatly appreciated.

Please refer to CONTRIBUTING.md for more information.

License 📄
Distributed under the MIT License. See LICENSE for more information.

Contact 📞
Aymen Zouaoui - AYMEN.ZOUAOUI@ESPRIT.TN