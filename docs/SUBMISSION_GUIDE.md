# Submission Guide

This guide shows the expected workflow for completing and submitting the ICS/ECE 2312 PHP mini-project.

## 1. Fork the Template Repository

Open the template repository:

`https://github.com/Kiotolabs/ics2312-miniproject`

Click **Fork** and create a copy in your own GitHub account.

## 2. Clone Your Fork

```bash
git clone https://github.com/YOUR-USERNAME/ics2312-miniproject.git
cd ics2312-miniproject
```

## 3. Create a Branch

Use a branch name based on your registration number:

```bash
git checkout -b phase/your-reg-no
```

Example:

```bash
git checkout -b phase/EN271-0001-2022
```

## 4. Install Dependencies

```bash
composer install
```

## 5. Implement the Required Files

Complete the stub logic in:

- `src/FileHandler.php`
- `src/SearchSorter.php`
- `src/FormValidator.php`
- `src/ErrorHandler.php`
- `web/register.php`
- `web/process.php`

## 6. Run Tests Locally

```bash
composer test
```

If tests fail, read the failure message carefully and fix the relevant method before trying again.

## 7. Commit Your Work

```bash
git add .
git commit -m "Complete ICS2312 mini-project"
```

## 8. Push Your Branch

```bash
git push origin phase/your-reg-no
```

## 9. Open a Pull Request

On GitHub:

1. Open your forked repository
2. Click **Compare & pull request**
3. Target the `main` branch
4. Add a short summary of what you implemented
5. Include your academic integrity declaration if required

## 10. Wait for the Autograder

GitHub Actions will automatically:

1. Install dependencies
2. Run PHPUnit tests
3. Upload a test log artifact
4. Post a summary comment on your Pull Request

If the tests do not pass, update your branch and push again. The autograder will rerun automatically.

## Local Testing Tips

- Run `composer test` after every major change
- Read the PHPDoc comments inside each stub file
- Use the sample CSV data in `data/sample_students.csv`
- Keep your method names and signatures unchanged

## Important Rules

- Do not edit the files in `tests/`
- Do not rename source files or classes
- Do not hardcode test-only values
- Do not depend on internet access or external APIs

## Before Submission Checklist

- [ ] I forked the correct repository
- [ ] I worked in my own branch
- [ ] I implemented the required methods
- [ ] I ran `composer test` locally
- [ ] I pushed my latest branch
- [ ] I opened a Pull Request to `main`
