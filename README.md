<div align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" alt="Laravel Logo" width="300">
  <br/>
  <h1>🍽️ Kasir-Resto (Restaurant Management System)</h1>
  <p><strong>A Modern, Fast, and Intuitive Point of Sale (POS) System built with Laravel 8</strong></p>
  
  <p>
    <a href="https://laravel.com"><img src="https://img.shields.io/badge/Laravel-8.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel"></a>
    <a href="https://php.net"><img src="https://img.shields.io/badge/PHP-%5E7.3%20%7C%20%5E8.0-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP"></a>
    <a href="https://getbootstrap.com"><img src="https://img.shields.io/badge/Bootstrap-5-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap"></a>
    <a href="https://mysql.com"><img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL"></a>
  </p>
</div>

<hr/>

## 📖 About The Project

**Kasir-Resto** is a comprehensive web-based Point of Sale (POS) and management system designed specifically for restaurants and cafes. Built as an internship collaboration project, this application aims to streamline the daily operations of a restaurant, from taking customer orders to managing products and generating operational reports.

This project emphasizes a clean UI/UX, robust backend architecture using **Laravel 8**, and an easy-to-understand codebase, making it highly suitable for production environments as well as a learning resource for developers.

### ✨ Key Features

- 👥 **Role-Based Access Control (RBAC):**
  - **Manager:** Full access to dashboard, employee (cashier) data, product management, client data, and reporting.
  - **Cashier (Kasir):** Dedicated interface for handling customer orders, processing transactions, and cart management.
  - **User/Client:** Can view menus, place orders, and provide ratings/feedback.
- 📦 **Product Management:** Complete CRUD functionality for food/beverage items, including categorization and pricing.
- 🛒 **Order & Transaction System:** Intuitive point-of-sale interface for cashiers to process orders quickly.
- ⭐ **Rating & Feedback System:** Allows customers to rate their experience and the products.
- 📊 **Reporting & Export:** Generate and export sales and operational reports easily.
- 🔔 **Interactive UI:** Integrated with SweetAlert for beautiful notifications and Bootstrap 5 for a responsive layout.

---

## 🛠️ Technology Stack

- **Backend:** [Laravel 8.x](https://laravel.com/) (PHP Framework)
- **Frontend:** HTML5, CSS3, JavaScript, [Bootstrap 5](https://getbootstrap.com/)
- **Database:** MySQL
- **Alerts & Modals:** [SweetAlert](https://sweetalert2.github.io/)
- **Authentication:** Laravel UI & Sanctum

---

## 🚀 Getting Started

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

Ensure you have the following installed on your local machine:
- [PHP](https://www.php.net/) >= 7.3 or 8.0
- [Composer](https://getcomposer.org/)
- [Node.js & NPM](https://nodejs.org/)
- [MySQL](https://www.mysql.com/) (or via XAMPP / Laragon / Valet)

### Installation Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/bustom1/restaurant.git
   cd Kasir-Resto
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install NPM dependencies and compile assets**
   ```bash
   npm install
   npm run dev
   ```

4. **Environment Setup**
   Copy the example environment file and generate the application key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database Configuration**
   Open the `.env` file and update your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```

6. **Run Migrations and Seeders**
   Create the database tables and populate them with default data (if available):
   ```bash
   php artisan migrate --seed
   ```

7. **Serve the Application**
   ```bash
   php artisan serve
   ```
   *The application will now be accessible at `http://localhost:8000`*

---

## 📸 Screenshots

*(To make this README even more professional, you can add screenshots of your application here. For example: Dashboard, POS Screen, Product List. Save your images in a `public/assets/img/` folder and link them below)*

<details>
<summary>Click to view screenshots placeholders</summary>

| Dashboard Manager | Point of Sale (Cashier) |
| :---: | :---: |
| <img src="https://via.placeholder.com/600x350.png?text=Dashboard+Manager" alt="Dashboard" width="100%"> | <img src="https://via.placeholder.com/600x350.png?text=POS+System" alt="POS" width="100%"> |

</details>

---

## 🤝 Collaboration & Internship

This project was developed collaboratively during an internship program to solve real-world restaurant management problems using modern web technologies. 

**Developers:**
- **[Ajeng]** - *Fullstack Developer / UI/UX*
- **[Yazid Bustomi]** - *Fullstack Developer* - [bustom1](https://github.com/bustom1)

---

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---
<p align="center">
  <i>Developed with ❤️ for better restaurant management.</i>
</p>
