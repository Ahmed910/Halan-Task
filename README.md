# Halan Task

This repository contains an implementation of various PHP functions and data structures. The project is designed to demonstrate fundamental programming concepts in PHP.

## Requirements

- PHP 8.0 or higher.

## Instructions to Run the Task

1. **Create a New Directory**:
   - Open your terminal or command line.
   - Create a new directory named `Halan-Task` in `/var/www/html`:
     ```bash
     sudo mkdir /var/www/html/Halan-Task
     ```

2. **Clone the Repository**:
   - Clone this repository into the newly created directory:
     ```bash
     sudo git clone https://github.com/Ahmed910/Halan-Task.git /var/www/html/Halan-Task
     ```

3. **Set Permissions** (if necessary):
   - Ensure that the web server has permission to access the directory:
     ```bash
     sudo chown -R www-data:www-data /var/www/html/Halan-Task
     ```

4. **Open Your Browser**:
   - Open your preferred web browser and type the following URL in the address bar:
     ```
     http://localhost/Halan-Task/
     ```

# PHP Utility Functions

This repository contains several utility functions written in PHP for performing common tasks, including checking for palindromes, encoding and decoding strings using run-length encoding, composing functions, finding unique elements in an array, transposing matrices, measuring duplicates in an array, and summing values in a tree structure.

## Functions Overview

### 1. Palindrome Checker

**Function**: `palindrome($string)`

This function checks if a given string is a palindrome (reads the same forwards and backwards, ignoring spaces and case).

### 2. Run-Length Encoding and Decoding

This repository contains two functions written in PHP for run-length encoding and decoding of strings. Run-length encoding is a simple form of data compression where consecutive occurrences of a character are represented as the character followed by the count of its occurrences.

#### Functions Overview

- **Run-Length Encoding**

**Function**: `runLengthEncode($s)`

This function takes a string as input and returns its run-length encoded representation. If the input string is empty, it returns an empty string.

### 3. Function Composition in PHP

This repository contains a simple implementation of function composition in PHP. Function composition is a mathematical operation that combines two or more functions to produce a new function.

#### Functions Overview

- **Compose Function**

**Function**: `compose($f, $g)`

This function takes two functions as input and returns a new function that applies the second function (`g`) to its argument, and then applies the first function (`f`) to the result of `g`.

### 4. Unique Element Finder in PHP

This repository contains a simple implementation of a function that identifies unique elements in an array. The function counts the occurrences of each element and returns only those that appear exactly once.

#### Function Overview

- **Unique Function**

**Function**: `unique($arr)`

This function takes an array of strings as input, counts the occurrences of each string, and returns an array of strings that appear only once.

### 5. Matrix Transposer in PHP

This repository contains a simple implementation of a function that transposes a matrix. The function takes a 2D array (matrix) as input and returns its transpose.

#### Function Overview

- **Transpose Function**

**Function**: `transpose($matrix)`

This function takes a 2D array (matrix) as input and returns a new 2D array that is the transpose of the input matrix.

### 6. Find Index of First Duplicate in PHP

This repository contains an implementation of a function that finds the index of the first duplicate element in an integer array. The function returns the index of the first duplicate or -1 if there are no duplicates.

#### Function Overview

- **Index of First Duplicate Function**

**Function**: `index_of_first_duplicate($arr)`

This function takes an array of integers as input and returns the index of the first element that appears more than once.

### 7. Tree Node Sum in PHP

This repository contains an implementation of a simple tree structure using PHP. It includes a class for tree nodes and a function that computes the sum of all node values in the tree.

#### Class Overview

- **Node Class**

**Class**: `Node`

The `Node` class represents a node in a tree. Each node can have multiple children.
