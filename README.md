# Week 3 – Company Profile Website (MP02)
**Course:** ITST 302 – Client-Server Technologies
**Module:** Module 1 – Laravel MVC Architecture
**Project Type:** Individual

---

## 1. Introduction

A **Company Profile Website** is a small, multi-page site — usually a Home, About, Services,
and Contact page — that a business uses to introduce itself online: what it does, who runs
it, what it offers, and how to reach it. Almost every business needs one, even a simple one,
because it is often the first place a potential client or employer looks to verify that a
company is real, professional, and active.

The purpose of this project is to build that kind of site — for a fictional startup,
**NovaTech Solutions** — using Laravel's MVC architecture instead of static HTML files. Doing
it in Laravel forces good habits early: separating routes from logic, logic from markup, and
reusing layout code instead of copy-pasting a navbar and footer onto every page.

## 2. Objectives

By completing this project, the following objectives were accomplished:

- Built four working pages (Home, About, Services, Contact) using Laravel's MVC pattern.
- Defined named GET routes in `routes/web.php` that map URLs to controller methods.
- Created a single `CompanyController` with one method per page, each returning a Blade view.
- Built a reusable `layouts/app.blade.php` layout with shared `navbar` and `footer` components,
  so no page repeats navigation or footer markup.
- Displayed six services, each with an icon, title, and description.
- Built a contact page with a UI-only form, address, email, phone, an embedded map, and social
  links.
- Organized the project using Laravel's standard folder structure.

## 3. MVC Architecture

**What is MVC?**
MVC stands for Model–View–Controller. It's a way of splitting an application into three
responsibilities instead of mixing everything into one file:

- **Model** — represents the data (e.g., a `Service` or `TeamMember`). This project doesn't
  use a database yet, so the "data" for each page is prepared directly inside the controller.
- **View** — the Blade templates in `resources/views/`. Views only display data; they don't
  decide what that data is.
- **Controller** — `CompanyController`. It receives the request, prepares whatever data the
  page needs, and hands it to a view.

**Why does Laravel use MVC?**
Laravel is built around MVC because it keeps a request's three concerns — routing, logic, and
presentation — in three separate, predictable places. A developer opening this project for the
first time knows exactly where to look: `routes/web.php` for what URLs exist, the controller
for what happens, and `resources/views/` for what gets shown.

**Advantages of MVC:**
- **Separation of concerns** — changing how the About page *looks* doesn't require touching
  any logic, and changing the *data* doesn't require touching any HTML.
- **Reusability** — the `navbar` and `footer` components are written once and included
  everywhere.
- **Easier testing and debugging** — a bug is easier to isolate when it can only live in one
  of three places.
- **Team-friendly** — a designer can work on Blade views while a backend developer works on
  the controller, without stepping on each other's code.

**Request Flow Diagram** (see `documentation/architecture-diagram.svg` for the drawn version):

```
Browser
  │
  ▼
Route (web.php)
  │
  ▼
Controller (CompanyController)
  │
  ▼
Blade View (layout + page)
  │
  ▼
Response back to Browser
```

## 4. Laravel Routing

**What is routing?**
Routing is how Laravel decides what code runs for a given URL. Every route lives in
`routes/web.php` and maps a URL pattern to a controller method.

**Named routes** — each route is given a `->name('...')`. Instead of hard-coding `/about` in
every link, Blade views call `route('about')`. If the URL ever changes, only the route
definition needs to change — every link that used `route('about')` keeps working.

**GET requests** — all four routes use `Route::get(...)` because these pages only *display*
information; nothing is being submitted or changed on the server.

**Route definitions used in this project** (`routes/web.php`):

```php
Route::get('/', [CompanyController::class, 'home'])->name('home');
Route::get('/about', [CompanyController::class, 'about'])->name('about');
Route::get('/services', [CompanyController::class, 'services'])->name('services');
Route::get('/contact', [CompanyController::class, 'contact'])->name('contact');
```

![Route definitions in web.php](screenshots/webphp.png)

## 5. Controllers

**Purpose of controllers** — a controller groups the logic for a related set of pages. Instead
of scattering "what does the About page need?" across the codebase, it's all inside
`CompanyController::about()`.

**Benefits** — controllers keep views "dumb" (display-only), make it obvious where to add new
pages, and make it possible to reuse the same data-preparation logic (like `companyInfo()`)
across multiple methods.

**Controller methods used:**

| Method | Route | Returns |
|---|---|---|
| `home()` | `/` | `pages.home` |
| `about()` | `/about` | `pages.about` |
| `services()` | `/services` | `pages.services` |
| `contact()` | `/contact` | `pages.contact` |

![CompanyController.php - part 1](screenshots/companycontroller1.png)
![CompanyController.php - part 2](screenshots/companycontroller2.png)

## 6. Blade Templating Engine

**Blade layouts** — `layouts/app.blade.php` holds everything every page has in common: the
`<head>`, the navbar, the footer, and the Tailwind CDN script. Each page only supplies what's
different about it.

**Blade components** — `components/navbar.blade.php` and `components/footer.blade.php` are
pulled into the layout with `@include`, so they're written once.

**Directives used:**
- `@extends('layouts.app')` — tells a page view which layout wraps it.
- `@section('content') ... @endsection` — defines the block of content the layout will insert.
- `@yield('content')` — inside the layout, marks *where* that section gets inserted.
- `@include('components.navbar')` — inserts a reusable component's markup inline.

**Example (from `pages/about.blade.php`):**

```blade
@extends('layouts.app')

@section('content')
    <h1>About {{ $company['name'] }}</h1>
@endsection
```

## 7. Laravel Folder Structure

| Folder | Purpose |
|---|---|
| `app/` | Application code — controllers, models, and core logic live here. |
| `routes/` | Defines what URLs exist and what they do (`web.php` for browser routes). |
| `resources/` | Front-end source: Blade views, and (in a full project) raw CSS/JS. |
| `public/` | The web-accessible entry point — the only folder a browser can reach directly. |
| `bootstrap/` | Framework bootstrapping and cached files that start the application. |
| `config/` | Configuration files (database, mail, services, etc.). |

![Laravel folder structure](screenshots/laravel_folderstructure.png)

## 8. Screenshots

### Home Page
![Home Page](screenshots/homepage.png)

### About Page
![About Page](screenshots/about_page.png)

### Services Page
![Services Page](screenshots/services_page.png)

### Contact Page
![Contact Page](screenshots/contact_page.png)

### Navigation Bar
![Navigation Bar](screenshots/navbar.png)

### Footer
![Footer](screenshots/footer.png)

### Browser Output
![Browser Output](screenshots/browser_output.png)

### VS Code Project
![VS Code Project](screenshots/vscode_project.png)

### Laravel Folder Structure
![Laravel Folder Structure](screenshots/laravel_folderstructure.png)

### GitHub Repository
![GitHub Repository](screenshots/github_repo.png)

## 9. Problems Encountered & Solutions
 
| # | Problem | Solution |
|---|---|---|
| 1 | **Composer install failed on PHP version mismatch.** Running `composer create-project laravel/laravel .` threw a "your requirements could not be resolved" error listing `php: >=8.1` as unsatisfied, even though PHP was installed. | Ran `php -v` and found the installed version was PHP 7.4 from an old XAMPP setup still on PATH. Installed PHP 8.2 separately and updated the system PATH variable so `php` pointed to the new version instead of the old one. |
| 2 | **Blank white screen with no error message.** After adding the new routes, visiting the site just showed a blank page instead of an error, making it hard to tell what was wrong. | `APP_DEBUG` was set to `false` in `.env`, which suppresses error details. Temporarily set it to `true` to see the actual stack trace, found and fixed the real issue, then set it back to `false` before submitting. |
| 3 | **`php artisan serve` failed with "Address already in use."** | A previous `php artisan serve` process from an earlier terminal session was still running in the background on port 8000. Closed the old terminal window (and double-checked with Task Manager) before starting the server again. |

## 10. Reflection

Working on this project made the idea of "separation of concerns" concrete instead of
theoretical. Before this, MVC was something read about in a textbook — a diagram with three
boxes and arrows between them. Building this Company Profile Website was the first time I
actually felt *why* the separation matters. When the footer needed a copyright year update, I
changed one file — `components/footer.blade.php` — and it updated on all four pages at once.
In a version built with plain HTML, that would have meant editing four separate files and
hoping none of them were missed.

MVC, in practice, turned out to be less about the boxes and more about discipline: keeping
data preparation out of the views, and keeping HTML out of the controller. The controller's
job is to answer "what does this page need?" and hand that off — it doesn't care how the data
gets displayed. The view's job is to answer "how does this get displayed?" — it doesn't care
where the data came from. That boundary is what let me change the entire visual style of the
navbar in one component file without touching a single route or controller method.

Routes, controllers, and views work together as a short, predictable chain: a browser requests
a URL, the route matches that URL to a controller method, the controller gathers whatever data
that page needs and passes it to a view, and the view turns that data into HTML that gets sent
back. Once that chain clicked, debugging became much faster — a blank page meant checking the
view, a 404 meant checking the route, and wrong data meant checking the controller. Each
symptom pointed to exactly one place to look, instead of a tangled file where routing, logic,
and markup were all mixed together.

This structure scales in a way that flat HTML never could. A real enterprise system might have
dozens of controllers and hundreds of views, but the same three-part chain still applies at
every level. Larger Laravel applications add more pieces on top of this foundation — Models
tied to a database, Form Requests for validation, Middleware for authentication — but they all
plug into the same Route → Controller → View flow this project used. Learning MVC on a small,
four-page site made it much easier to imagine how the same architecture holds together a much
larger application, because the underlying pattern doesn't actually change — only its scale
does.

## 11. References

Laravel. (2024). *Laravel 10.x documentation*. Laravel. https://laravel.com/docs

Mozilla Developer Network. (2024). *MDN Web Docs*. Mozilla. https://developer.mozilla.org

PHP Group. (2024). *PHP manual*. The PHP Group. https://www.php.net/manual/en/

Tailwind Labs. (2024). *Tailwind CSS documentation*. Tailwind Labs. https://tailwindcss.com/docs

---

