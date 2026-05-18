# Detailed Grading Rubric

Total Marks: **100**

## Phase 1: File Handling (25 Marks)

| Criterion | Marks |
| --- | ---: |
| `writeRecord()` creates or overwrites a CSV file correctly | 8 |
| `readAllRecords()` returns associative arrays from CSV content | 8 |
| `appendRecord()` appends without destroying existing content | 7 |
| File handling style, correctness, and graceful missing-file behavior | 2 |

## Phase 2: Algorithms & Sorting (25 Marks)

| Criterion | Marks |
| --- | ---: |
| `linearSearch()` returns correct indexes or `-1` | 4 |
| `binarySearch()` works on pre-sorted arrays | 4 |
| `bubbleSort()` sorts correctly and returns iteration count | 6 |
| `selectionSort()` sorts correctly and returns iteration count | 5 |
| `insertionSort()` sorts correctly and returns iteration count | 5 |
| Algorithm clarity and correctness | 1 |

## Phase 3: Web Form and Validation (25 Marks)

| Criterion | Marks |
| --- | ---: |
| `validateName()` enforces length and character rules | 6 |
| `validateEmail()` rejects malformed email addresses | 5 |
| `validateAge()` enforces the 18 to 100 range | 5 |
| `validateAll()` returns a clean associative error list | 4 |
| `register.php` and `process.php` integrate validation safely | 5 |

## Phase 4: Error Handling and Debugging (25 Marks)

| Criterion | Marks |
| --- | ---: |
| `safeReadFile()` throws on missing or unreadable files | 8 |
| `safeWriteFile()` writes correctly and throws on invalid destinations | 8 |
| `safeDivide()` returns correct results and blocks zero divisors | 7 |
| Exception messages and defensive programming quality | 2 |

## How Marks Are Awarded

### Autograded

The automated tests check:

- Method signatures and class availability
- Expected return values
- Correct sorting outputs
- Correct error and exception behavior
- Validation rule outcomes

### Manually Reviewed

The lecturer or teaching assistant may additionally review:

- Code readability
- Use of comments and naming
- Correct use of PHP functions taught in class
- Overall project structure

## Submission Penalties

| Issue | Penalty |
| --- | --- |
| Late submission | As defined by course policy |
| Copied or shared code | Subject to academic disciplinary action |
| Editing test files | May result in zero for affected phase |
| Wrong repository workflow | May delay or invalidate grading |

## Notes to Students

- Passing tests improves confidence but does not replace good coding practice
- Follow the PHPDoc comments exactly
- Commit regularly and keep your work traceable in Git history
