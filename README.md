# ICS/ECE 2312 Structured Programming in PHP Mini-Project

**Repository:** `ics2312-miniproject`  
**Course Code:** ICS/ECE 2312  
**Semester:** Year 3, Semester 2  
**Lecturer:** *[Insert Lecturer Name]*

## Overview

This GitHub template repository supports a four-phase mini-project for undergraduate ECE students taking Structured Programming in PHP. Students fork the repository, implement the required PHP logic, and submit their work through a Pull Request that is automatically graded using GitHub Actions.

### Phase Summary

| Phase | Week | Topic | Student Focus |
| --- | --- | --- | --- |
| Phase 1 | Week 10 | File Handling | Read, write, append, and validate CSV data using file functions |
| Phase 2 | Week 11 | Algorithms & Sorting | Implement search and sorting algorithms with iteration counts |
| Phase 3 | Week 12 | PHP Web Integration | Build form processing and server-side validation workflows |
| Phase 4 | Week 13 | Error Handling & Debugging | Use exceptions, safe file handling, and guarded division |

## Folder Structure

```text
ics2312-miniproject/
├── .github/
│   └── workflows/
│       └── autograde.yml
├── data/
│   ├── .gitkeep
│   └── sample_students.csv
├── docs/
│   ├── GRADING_RUBRIC.md
│   ├── PROJECT_BRIEFING.html
│   └── SUBMISSION_GUIDE.md
├── src/
│   ├── ErrorHandler.php
│   ├── FileHandler.php
│   ├── FormValidator.php
│   └── SearchSorter.php
├── tests/
│   ├── Phase1Test.php
│   ├── Phase2Test.php
│   ├── Phase3Test.php
│   └── Phase4Test.php
├── web/
│   ├── .htaccess
│   ├── process.php
│   └── register.php
├── .gitignore
├── composer.json
├── phpunit.xml
└── README.md
```

## Student Workflow

### 1. Fork the Template Repository

Fork this repository to your own GitHub account:

`https://github.com/YOUR-ORG/ics2312-miniproject`

### 2. Clone Your Fork

```bash
git clone https://github.com/YOUR-USERNAME/ics2312-miniproject.git
cd ics2312-miniproject
```

### 3. Create a Working Branch

```bash
git checkout -b phase/your-reg-no
```

Example:

```bash
git checkout -b phase/EN271-0001-2022
```

### 4. Install Dependencies

```bash
composer install
```

### 5. Complete the Project Files

Students are expected to implement logic in:

- `src/FileHandler.php`
- `src/SearchSorter.php`
- `src/FormValidator.php`
- `src/ErrorHandler.php`
- `web/register.php`
- `web/process.php`

### 6. Run Tests Locally

```bash
composer test
```

### 7. Commit and Push

```bash
git add .
git commit -m "Implement ICS2312 mini-project solution"
git push origin phase/your-reg-no
```

### 8. Open a Pull Request

Open a Pull Request targeting `main`. The GitHub Actions autograder will run automatically and post a summary on the Pull Request.

## Grading Rubric Summary

| Phase | Max Marks | Autograded Criteria |
| --- | ---: | --- |
| Phase 1: File Handling | 25 | Correct file creation, CSV write/read behavior, append behavior, graceful handling of missing files |
| Phase 2: Algorithms & Sorting | 25 | Correct search results, ascending sort order, and iteration count expectations |
| Phase 3: Web Form | 25 | Correct validation logic and complete integration-ready form workflow |
| Phase 4: Error Handling | 25 | Correct exception handling for file operations and division |
| Total | 100 | PHPUnit autograding plus manual rubric checks where applicable |

Full grading details are provided in [docs/GRADING_RUBRIC.md](docs/GRADING_RUBRIC.md).

## Autograding

Each Pull Request to `main` triggers an automated workflow that:

1. Checks out the repository
2. Sets up PHP 8.1 with required extensions
3. Installs Composer dependencies if `composer.json` exists
4. Runs the PHPUnit suite using `vendor/bin/phpunit --testdox`
5. Uploads the test log as an artifact
6. Posts a pass/fail summary comment on the Pull Request

If the test suite fails, the workflow fails and the Pull Request is blocked from being merged when branch protection is enabled.

## Academic Integrity

This mini-project is intended to assess each student's understanding of the course content. By submitting a Pull Request, you confirm that:

- The submitted work is your own
- You understand the code in your repository
- You have not copied another student's solution
- You accept that copied or shared solutions may attract academic penalties

If instructed by the lecturer, include an academic integrity statement in the Pull Request description.

## Support

- Review the PHPDoc comments in the stub files carefully
- Use `data/sample_students.csv` to understand the CSV format
- Run `composer test` regularly as you work
- Follow the detailed guide in [docs/SUBMISSION_GUIDE.md](docs/SUBMISSION_GUIDE.md)

## License

This repository is for educational use in ICS/ECE 2312 Structured Programming in PHP.
