# 🚀 BadAdmin Systems

BadAdmin Systems is a powerful and efficient shop management system designed to streamline sales, inventory tracking, and financial management. It automatically calculates total item prices, tracks income and expenses, and helps manage inventory levels. The system also includes a notes section for quick record-keeping. Future updates will introduce an admin panel for enhanced control and management.

## ✨ Key Features

- 💰 **Sales Management**: Calculates total item prices and change with ease.
- 📦 **Inventory Tracking**: Keeps track of stock levels and item availability.
- 🏦 **Vault Management**: Monitors income and expenses for better financial oversight.
- 📝 **Notes Section**: Provides a space to jot down important reminders and notes.
- 🔄 **Sell & Buy System**: Enables quick transactions through an intuitive interface.
- 🧾 **Receipt Generation**: Automatically generates receipts for transaction records.
- 🔐 **Secure Login & Logout System**: Ensures user access control and security.
- ⚙️ **Admin Panel (Upcoming)**: A comprehensive panel for advanced management features.

## 🔧 Installation Guide

Follow these steps to set up BadAdmin Systems:

1. Clone the repository:
   ```bash
   git clone https://github.com/TheDesiignerr/MyShopSys.git
   cd badadmin-systems
   ```
2. Set up a PHP server and an SQL database.
3. Update the SQL connection inside `includes/model/dbh.php` with your database credentials.
4. Manually create a user in the `users` table using the following SQL command:
   ```sql
   INSERT INTO users(username, passwrd, isAdmin) VALUES('myUsername','password123','true');
   ```
5. ✅ The system is now ready for use.
6. 

## 📜 License
This project is licensed under the MIT License.
