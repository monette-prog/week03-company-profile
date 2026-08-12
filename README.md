# Company Profile Website using Laravel MVC

## Introduction
I developed a Company Profile Website using Laravel. It is a multi-page website that displays important information about a company. I created this project to better understand how Laravel's MVC architecture works in a real-world application.

The website consists of four main pages: Home, About, Services, and Contact. I used Laravel's routing, controllers, and Blade templating to organize the code efficiently and maintain a clean structure.

## Objectives
Throughout this project, I was able to:
- Understand Laravel's Request Lifecycle
- Create and manage application routes
- Build dynamic views using Blade templates
- Organize code using the MVC pattern
- Deploy a project to GitHub

## MVC Architecture
MVC stands for Model-View-Controller. It is a software design pattern that separates an application into three interconnected components:

- **Model** – Manages the data and business logic
- **View** – Handles the user interface and presentation
- **Controller** – Processes user requests and coordinates between the Model and View

Laravel uses MVC to promote clean, organized, and maintainable code. It also allows developers to work on different parts of the application simultaneously without conflicts.

### Architecture Flow

Browser (User)
↓
Route (web.php)
↓
CompanyController
↓
Blade View
↓
HTML Response
↓
Browser
