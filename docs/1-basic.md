# Basic Knowledge

## Before you start

All further operations will be performed on macOS because the author uses macOS.  

Users in mainland China may encounter many problems, please make sure that your network can smoothly access certain international websites.

### Find an AI assistant

Do not do everything by yourself. Here are some great AI assistants:

- <https://sider.ai/download>
- <https://monica.im>

If you encounter any programming problems, try asking your AI assistant first.

### Say Hello to the Terminal App

Every macOS user has a Terminal app. It is the most powerful tool in our arsenal.

- Print the current directory:

    ```bash
    pwd
    ```

- List all files in the current directory:

    ```bash
    ls
    ```

- Change the current directory:

    ```bash
    cd ~/Desktop
    ```

- Create a new directory:

    ```bash
    mkdir new_directory
    ```

- Create a new file:

    ```bash
    touch new_file.txt
    ```

    You can also use the following command to create a new file:

    ```bash
    echo "Hello, World!" > new_file.txt
    ```

    The above command will create a new file named `new_file.txt` and write the text "Hello, World!" in it.
- Delete a file:

    ```bash
    rm new_file.txt
    ```

### Install Homebrew

What is Homebrew?

> Homebrew is a package manager for macOS (or Linux), which simplifies the installation of software like Git, Node.js, Python, and Ruby.

Simply put, it helps us install and manage software.

Please refer to <https://brew.sh> for more information.

### Install GIT

What is GIT?

> Git is a distributed version control system for tracking changes in source code during software development.

Simply put, it helps us manage code.

You can use the following command to install GIT:

```bash
brew install git
```

After installation is complete, enter this code in the terminal app and hit enter to run.

```bash
git --version
```

If you see the following output, congratulations! You have successfully installed GIT.

```bash
git version 2.34.0
```

### Install GitHub Desktop

What is GitHub Desktop?

> GitHub Desktop is a free and open-source graphical user interface for Git. It provides a visual representation of the workflow that occurs when using Git, including a timeline of commits, branches, and files

Simply put, it helps us manage code.

Please refer to <https://desktop.github.com> for more information.

After installation is complete, try to open this project with GitHub Desktop with the following steps:

![GitHub Desktop](./images/github_desktop.jpg)

### Install Visual Studio Code

What is Visual Studio Code?

Simply put, it helps us write code.

Please refer to <https://code.visualstudio.com> for more information.

After installation is complete, try to open this project with Visual Studio Code with the following steps:

![Visual Studio Code](./images/vscode.png)

Now, you can see all the code of this project.

### Install Node.js

A very useful software that many projects require, just install it!

You can use the following command to install Node.js:

```bash
brew install node
```

After installation is complete, enter this code in the terminal app and hit enter to run.

```bash
node -v
```

If you see the following output, congratulations! You have successfully installed Node.js.

```bash
v17.3.0
```

### Install PHP

We use PHP as the main programming language for developing websites.

You can use the following command to install PHP:

```bash
brew install php
```

After installation is complete, enter this code in the terminal app and hit enter to run.

```bash
php -v
```

If you see the following output, congratulations! You have successfully installed PHP.

```bash
PHP 8.1.0 (cli) (built: Sep 25 2021 16:37:49) (NTS)
Copyright (c) The PHP Group
......
```

## Submit a pull request

### What is a pull request?

A pull request is a way to suggest changes to someone else's project.

This project is not yours, but if you want to submit some code, please initiate a pull request.

### How to submit a pull request?

1. Fork this project to your own GitHub account.
2. Clone this project to your local computer.
3. Create a new branch called "playground{random number}".
4. Create a new file called "playground.md".
5. Commit your code to the new branch.
6. Push the new branch to your GitHub account.
7. Click the "New pull request" button on your GitHub account and select the new branch you just pushed to create a pull request.

## Say Hello to PHP

### Print the time

Open this project with Visual Studio Code and open the terminal app by pressing `Ctrl + ~`.

Follow the steps below to print the time.

1. Create a new file called `time.php` in the `docs/php` directory of this project.
2. Write the following code in the file:

    ```php
    <?php
    echo date("Y-m-d H:i:s");
    ```

3. Enter this code within the terminal app and hit enter to run:

    ```bash
    php time.php
    ```

4. If you see the following output, congratulations! You have successfully printed the time.

    ```bash
    2021-12-31 16:45:09
    ```

Now, you have learned how to write a PHP file and run it.

### Function

Create a new file called `function.php` in the `docs/php` directory of this project.

Write a function to print the Fibonacci sequence. Fill in the missing code.

```php
<?php

echo fibonacci(100);

function fibonacci($n) {
    // your code here
}
```

### Array Sorting

Create a new file called `array_sorting.php` in the `docs/php` directory of this project.

Here is a function that takes two arrays and merges them into one and sort in ascending order. Fill in the missing code.

```php
<?php
$a = [1, 2, 5];
$b = [3, 4];

$c = array_merge_and_sort($a, $b);
print_r($c);

function array_merge_and_sort($a, $b) {
    // your code here
}
```

The array `c` should be: `[1,2,3,4,5]`.

### HTTP Server

Create a new file called `http_server.php` in the `docs/php` directory of this project.
Create a HTTP server that listens on port 8000 with this shell command:

```bash
php -S localhost:8000 http_server.php
```

When the user accesses the homepage, print "Hello World!".

```php
<?php
// your code here
```

This is the basic principle of developing web pages.

## Magical algorithm

How to merge two arrays?
How to sort the elements of an array?

The ideas that come to your mind are called algorithms, and they are the soul of a program. If you have more interest in algorithms, please continue to learn more about them.

### Reference

If you want to learn more, the following are some references.

- 《算法图解》
- 《大话数据结构》
- <https://leetcode.cn>

## Say Hello to Laravel

What is Laravel?

Laravel is a PHP framework. It provides many useful tools to help you build web applications quickly and easily.

### Install Composer

Composer is a package manager for PHP. It helps you install and update the dependencies of your project.

Open this page <https://getcomposer.org/download/> and follow the steps to install Composer.

### Install Laravel

Follow the steps below to install Laravel and run it.

1. Make sure current directory is the root of this project, run the following code in the terminal app:

    ```bash
    pwd
    ```

    The output should be:

    ```bash
    .../APIStore
    ```

2. Install Laravel by running the following code in the terminal app:

    ```bash
    composer create-project laravel/laravel store-app
    ```

3. Now you have a directory named `store-app` in the current directory.

    ```bash
    APIStore
    ├── docs
    ├── store-app
    └── ...
    ```

4. Enter the following code in the terminal app to run Laravel:

    ```bash
    cd store-app
    php artisan serve
    ```

5. Open your browser and enter the following URL: <http://127.0.0.1:8000> to see the Laravel homepage.

### References

- <https://laravel.com>
- <https://learnku.com/docs/laravel/10.x>

## Build a web application with Laravel

### TailwindCSS

TailwindCSS is a utility-first CSS framework.  

Follow this link to make tailwindcss work with Laravel: <https://tailwindcss.com/docs/guides/laravel>

After that, you need to learn how to build beautiful web pages with tailwindcss and Laravel. Just practice within the store-app project.

#### References

- <https://tailwindcss.com>

## Say Hello to Linux

Linux is a free and open-source operating system which is widely used on servers.

![Linux](./images/linux.png)

### Install Ubuntu

Ubuntu is a free and open-source operating system. It is based on Debian Linux.

`OrbStack` is a software that can help you install Ubuntu on your macOS. Install the software and then install Ubuntu on your computer.

- download and install OrbStack: <https://orbstack.dev>
- install Ubuntu within the OrbStack App

![OrbStack](./images/orbstack.png)

### Install applications within Ubuntu

- install PHP
- install Composer

#### References

- 《鸟哥的 Linux 私房菜》
