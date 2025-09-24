# Copilot Instructions for event-infinite-virtual

## Project Overview
This is a Laravel-based web application. The codebase follows standard Laravel conventions but includes some project-specific patterns and integrations. Key directories include:
- `app/`: Application logic, including Controllers, Models, Requests, and View Components.
- `routes/`: Route definitions (`web.php`, `auth.php`, `console.php`).
- `resources/views/`: Blade templates for UI.
- `database/`: Migrations, seeders, and factories.
- `config/`: Configuration files for services, database, cache, etc.
- `public/`: Web root and static assets.

## Architecture & Data Flow
- Follows MVC: Controllers in `app/Http/Controllers`, Models in `app/Models`, Views in `resources/views`.
- Uses Blade for templating and Eloquent ORM for database access.
- Route definitions are split by purpose (web, auth, console).
- Session, cache, and queue drivers are set to use the database (see `.env.example`).

## Developer Workflows
- **Local Development:**
  - Use Laragon or similar LAMP/WAMP stack.
  - Environment variables are managed via `.env` (see `.env.example` for defaults).
- **Build:**
  - Frontend assets use Vite and Tailwind CSS. Build with `npm run build`.
  - Development server: `npm run dev`.
- **Testing:**
  - Uses Pest and PHPUnit. Run tests with `vendor\bin\pest` or `vendor\bin\phpunit`.
  - Feature and unit tests are in `tests/Feature` and `tests/Unit`.
- **Database:**
  - Migrations: `php artisan migrate`
  - Seeders: `php artisan db:seed`

## Conventions & Patterns
- Controllers are grouped by domain in `app/Http/Controllers`.
- Requests for validation are in `app/Http/Requests`.
- Blade components are in `app/View/Components` and `resources/views/components`.
- Use environment variables for all sensitive config (see `.env.example`).
- Session, cache, and queue use the database for persistence.
- Asset paths and images are in `public/image/`.

## Integration Points
- Uses MariaDB for database (`DB_CONNECTION=mariadb`).
- Mail is set to log driver by default (`MAIL_MAILER=log`).
- Redis and Memcached are configured but not required for local dev.
- AWS S3 integration is available but not required by default.

## Examples
- To add a new route: Edit `routes/web.php`.
- To create a new model: Use `php artisan make:model ModelName`.
- To add a migration: Use `php artisan make:migration ...`.
- To run all tests: `vendor\bin\pest` or `vendor\bin\phpunit`.

## References
- See `README.md` for general Laravel info.
- See `.env.example` for environment variable conventions.
- See `config/` for service and integration settings.

---
If any section is unclear or missing important project-specific details, please provide feedback to improve these instructions.