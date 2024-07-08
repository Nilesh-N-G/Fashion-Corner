
# Fashion Corner

Fashion Corner is a web-based application for managing an online fashion store. The application allows users to browse, add to cart, and purchase fashion items.

## Features

- User authentication (login and logout)
- Product listing for men and women
- Shopping cart functionality
- Order generation and billing

## Technologies Used

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL

## Getting Started

### Prerequisites

- XAMPP or any other local server environment with PHP and MySQL
- Web browser

### Installation

1. **Clone the repository:**
    ```bash
    git clone https://github.com/Nilesh-N-G/Fashion-Corner.git
    ```

2. **Move the project folder to your local server directory (e.g., `htdocs` for XAMPP).**

3. **Import the database:**
    - Open phpMyAdmin.
    - Create a new database named `fashion_corner`.
    - Import the SQL file located in the `sql` directory into the newly created database.

4. **Configure the database connection:**
    - Open `connect.php`.
    - Update the database credentials (`servername`, `username`, `password`, `dbname`) to match your local setup.

5. **Start your local server and open the application in your web browser:**
    ```
    http://localhost/Fashion-Corner/
    ```

## Usage

- **Browse products by category** (Men and Women).
- **Add products to the shopping cart.**
- **View the cart and proceed to checkout.**
- **Generate bill and complete the order.**

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request.

---

Feel free to update this `README.md` file with additional information as needed.
