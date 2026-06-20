# Nahin Student Management

Nahin Student Management is a Laravel-based student management application.

## Features

- Student record management workflow
- Admin-ready screens for education data
- Database-backed student information
- Screenshot-supported documentation

## Modules

- Student module: student profiles, records, and actions
- Admin module: management screens and protected routes
- Data module: models, migrations, and database persistence
- Reporting module: filters, summaries, and exports when implemented
- Presentation module: Blade/Vite views and UI assets

## System Architecture

The system follows Laravel MVC architecture. Routes map requests to controllers, controllers validate and process student workflows, models persist records, and views render management screens. Optional reporting and notification services can be added through Laravel service classes.

## Screenshot

![Screenshot 2022-03-10 204355](https://user-images.githubusercontent.com/72101670/157686293-13116eef-d6a1-4f91-aa46-5d9a01523f5e.png)

## Getting Started

```bash
git clone https://github.com/NahinAhmed28/nahin-student-management.git
cd nahin-student-management
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run dev
php artisan serve
```
