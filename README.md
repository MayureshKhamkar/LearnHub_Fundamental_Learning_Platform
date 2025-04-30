# 📚 LearnHub – Fundamental Learning Platform

LearnHub is an educational web application designed to provide children with interactive access to foundational learning content. The platform includes basic user authentication, categorized course content (Math, Finance, Digital Skills), and test evaluation functionality.

---

## 📁 Project Structure

- `index.php` – Landing/homepage of the platform.
- `login.php`, `logout.php`, `signup.php`, `register_user.php`, `login_process.php` – User authentication and session management.
- `profile.php` – Displays user information and progress.
- `courses/`, `MathL`, `FinanceL`, `DigitalL` – Course content and pages.
- `mathtest1`, `financetest`, `digitaltest` – Subject-specific test interfaces.
- `test_results_db`, `digitaltest_res_db`, etc. – Test result storage and fetching logic.
- `view_results.php` – Displays test results for logged-in users.
- `image/`, `videos/` – Multimedia resources for enhanced learning.
- `README.md` – Project description and usage guide.

---

## 🛠 Tech Stack

- **Frontend**: HTML, CSS  
- **Backend**: PHP  
- **Database**: phpMyAdmin / MySQL  
- **Media**: Images and educational videos  

---

## ✨ Key Features

- User registration and login/logout system
- Separate course modules for Math, Finance, and Digital literacy
- Interactive tests with result tracking
- Test result storage using PHP and database integration
- Visual and multimedia learning support

---

## 🎯 Purpose

To create a child-friendly, accessible web platform for teaching essential skills and tracking learning progress through simple quizzes and lessons.

---

## 🚀 Setup Instructions

1. **Clone or Download the Repository**  
2. **Configure XAMPP/WAMP**  
   - Place the folder inside `htdocs` (XAMPP) or equivalent.
   - Start Apache and MySQL.
3. **Import Database**  
   - Use `phpMyAdmin` to create the necessary database.
   - Import tables from the `*_db.sql` files (e.g., `test_results_db`).
4. **Access the App**  
   - Go to `http://localhost/LearnHub/index.php` in your browser.

---

## 📚 Learning Outcomes

- Learned how to connect frontend interfaces with backend PHP logic
- Gained experience in session handling and authentication
- Understood PHP-MySQL interactions through form data and test evaluations
- Practiced file organization and dynamic content serving

---

## 📌 Project Info

- **Project Title**: LearnHub – Fundamental Learning Platform
- **Developed By**: Mayuresh Khamkar  
- **Semester**: 5  
- **Academic Year**: 2022–2025  
- **University**: Savitribai Phule Pune University  
- **Program**: BBA(CA)

---

## 🙌 Credits

Built as part of academic coursework. All media used are for educational purposes only.
