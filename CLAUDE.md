# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Ikurso is a web-based Esperanto learning platform (https://ikurso.esperanto-france.org) built with PHP, MySQL/MariaDB, HTML/CSS/JavaScript. The application provides structured language courses, exercises, student-teacher management, and administrative tools.

## Development Environment Setup

### Docker Development (Recommended)
```bash
# Start development environment
docker compose up --build

# Reset environment with fresh data
docker compose down -v
docker compose up --build

# Stop environment
docker compose stop
```

Access points:
- Main application: http://localhost:8080/
- phpMyAdmin: http://localhost:8081/

### Manual Setup
Requires Apache + PHP + MySQL/MariaDB stack. See README.md sections "Procédure d'installation" for detailed manual setup instructions.

### Required Configuration Files

**config.php** (root directory):
```php
<?php
$base = "ikurso";
$login = "ikurso_user";
$motDePasse = "ikurso_pass";
$urlracine = "http://localhost:8080/";
$cheminAbsolu = "/";
// ... other config variables
?>
```

**js/config.js**:
```javascript
$urlracine = "http://localhost:8080/";
$cheminAbsolu = "/";
```

### Test Accounts
- `administranto/test` - Administrator account
- `korektanto1/test` - Corrector account  
- `lernanto1/test` - Student account

## Architecture

### Directory Structure

**Core Application:**
- `/` - Main PHP files (index.php, login, course pages)
- `/ajax/` - AJAX endpoint scripts
- `/db/` - Data access layer (DAO files)
- `/js/` - JavaScript files and libraries
- `/style/` - CSS stylesheets

**Course Content:**
- `/fr/cge/` - "Cours de grammaire élémentaire" (Elementary grammar course)
- `/fr/gerda/` - "Gerda malaperis" course content
- `/eo/ppp/` - "Pasoj al plena posedo" course content

**Supporting Directories:**
- `/bildoj/` - Images and media assets
- `/audio/` - Audio files for pronunciation
- `/mails/` - Email templates with ##VARIABLE## placeholders
- `/cron/` - Scheduled scripts for automated reminders
- `/sql/` - Database schema and seed data
- `/python/` - Analytics and data processing scripts

**Mobile/External:**
- `/ikurso/` - Cordova-based Android app files
- `/soundmanager2/` - External library for MP3 playback

### Database Schema

**Key Tables:**
- `personoj` - Users (students/correctors/administrators)
- `kursoj` - Available courses
- `lecionoj` - Lessons within courses
- `lecioneroj` - Lesson sections
- `ekzercoj` - Exercises 
- `ekzerceroj` - Individual exercise questions
- `respondoj` - Student responses to exercises
- `nuna_kurso` - Current course enrollment and progress
- `korektebla_kurso` - Corrector availability per course
- `vortoj` - Vocabulary words for review system
- `personoj_vortoj` - Student vocabulary progress tracking

### Application Flow
1. Students register and are assigned to correctors
2. Lessons contain multiple sections (lecioneroj) with exercises
3. Students complete exercises and submit responses
4. Correctors review and provide feedback
5. Automated email system handles notifications and reminders
6. Progress tracking and statistics are maintained

## Common Development Commands

### Database Operations
```bash
# Import database schema and data (Docker automatically handles this)
mariadb -u ikurso_user -p ikurso < sql/01-create-database.sql
mariadb -u ikurso_user -p ikurso < sql/02-create-data.sql
mariadb -u ikurso_user -p ikurso < sql/03-create-data-test.sql
```

### Dependencies
```bash
# Install PHP dependencies
composer install

# For Cordova mobile app (in /ikurso directory)
cordova build android
```

### Python Analytics
Scripts in `/python/` directory require Python configuration similar to `config.php`. Used for statistical analysis and data processing.

## Development Guidelines

### File Naming and Structure
- Course files follow pattern: `/fr/{course_code}/{lesson_files}`
- Database access files in `/db/` use `.inc.php` extension
- AJAX endpoints in `/ajax/` directory handle dynamic requests
- Email templates in `/mails/` use ##VARIABLE## placeholder format

### Key Configuration
- Version tracking via `$milestone` variable in config.php
- Multi-language support structure exists but primarily French-focused
- Audio files stored in `/audio/` and `/fr/*/son/` directories

### Testing and Deployment
- Test user accounts available for all user roles
- Deployment checklist available in README.md
- Database changelog maintained in `sql/changelog.txt`

## Notes

This is a mature educational platform with historical development dating back several years. The codebase includes both active and legacy features, with some multi-language infrastructure that is not fully utilized.