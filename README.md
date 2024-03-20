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



git clone https://github.com/aymenzouaoui/pidevweb.git
Navigate to the project directory



cd mon-projet
Install dependencies



composer install
Configure the database in .env

Create the database



php bin/console doctrine:database:create
Run migrations


php bin/console doctrine:migrations:migrate
Start the Symfony server



symfony serve
Access the application at the URL provided by Symfony.

💻 Usage
Once the application is launched, navigate to amena's web interface to manage your shipments and deliveries. Use the dashboard to efficiently track and manage parcels.

🌟 Features
Carrier Choice: Customers can choose from available carriers for their parcel delivery.
Real-time Tracking: Provides the ability to track the status and location of parcels in real-time.
Shipment Management: Allows customers to refuse a carrier and reassign the parcel to another if necessary.
Intuitive User Interface: Offers a smooth and easy-to-navigate user experience for both customers and carriers.
🙌 Contributing
Your contribution is what makes the open-source community an incredible place to learn, inspire, and create. All contributions are greatly appreciated.

To contribute to amena, please follow these steps:

Fork the project.
Create your feature branch (git checkout -b feature/AmazingFeature).
Commit your changes (git commit -m 'Add some AmazingFeature').
Push to the branch (git push origin feature/AmazingFeature).
Open a Pull Request.
📜 License
Distributed under the MIT License. See LICENSE for more information.

📞 Contact
For any questions or suggestions, do not hesitate to contact Aymen Zouaoui.