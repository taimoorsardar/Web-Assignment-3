
# NUST-SEECS Open House Management Platform

This platform was developed to efficiently manage the annual Open House event at NUST-SEECS, allowing Final Year Project (FYP) groups to showcase their projects to industry and academia guests.

## Overview

The Open House Management Platform is designed to streamline the assignment of FYP projects to evaluators based on their preferences and specialty areas. It also facilitates the evaluation process while providing limited access to project feedback for students.

## Key Features

### User Accounts

- **Guests**: Evaluators can create accounts to set preferences for project categories and specialty areas.
- **FYP Groups**: Final Year Project groups manage project details, including assigning keywords.
- **Admin Account**: Authority to allocate physical locations for projects on the demonstration floor.

### Project Assignment

- Projects are randomly assigned to evaluators based on matching keywords and preferences.
- Each evaluator assesses between 3-5 projects, promoting fair distribution.

### Evaluation Process

- Evaluators are shown project locations and can rate projects on a 1-10 scale.
- Evaluation results are visible only to the admin for fairness and confidentiality.

### Student Access

- Students can view the number of evaluators who assessed their project but not individual scores.

## Tools Used

- **Laravel Framework**: Backend development and routing.
- **MySQL**: Database management.
- **HTML, CSS, JavaScript**: Frontend development and interactivity.
- **GitHub**: Version control and collaborative development.

## Installation

1. Clone this repository.
2. Install dependencies using `composer install`.
3. Set up the database configurations in `.env`.
4. Run migrations with `php artisan migrate` to create the necessary tables.
5. Serve the application using `php artisan serve`.

## Usage

- Access the application through the browser at `http://localhost:8000`.
- Sign up as a guest or FYP group to access functionalities based on account type.
- Admin functionalities are restricted for security reasons.

