# Prerequisites
  1) **XAMPP installed**

# Steps to setup notes-management-app-backend-php  
  **Step 1:** Navigate to the **'C:/xampp/htdocs'** directory or where your XAMPP htdocs folder is there.  
  **Step 2:** open the terminal in this directory run the below command  
    <pre>`git clone https://github.com/Abqari63/notes-management-app-backend-php`</pre>
  **Step 3:** Open XAMPP `Apache` and `MySQL` server, and now open the `localhost/phpmyadmin` from the browser or from XAMPP itself by clicking on `Admin`.  
  
  **Step 4:** On **phpMyAdmin** Make a database named `user`, and make a table named `notes` in this database with columns as `S.No (INT autoincrement primary key)`, `Title (varchar(55))` and `Description (TEXT)`.  
  
Now come back to where your **`notes-management-app-frontend-react`** is running i.e. **`localhost:3000`** and refresh that page and play with notes-management-app.
