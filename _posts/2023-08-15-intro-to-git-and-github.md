---
title: "An Intro to Git and GitHub"
date: 2023-08-15
permalink: /git/
excerpt: "Learn the fundamentals of Git and GitHub, essential tools for version control and collaborative software development."
tags:
  - Git
  - GitHub
  - Version Control
  - Tutorials
header:
  teaser: "https://user-images.githubusercontent.com/87325345/199505243-848a53d1-b9dc-40e0-9dd9-a369b0d4ad59.jpg"
---

Git and GitHub have become popular standards in the software development process. Here's an introduction to how you can utilize both to write code and build applications.

![Git and GitHub overview](https://miro.medium.com/v2/resize:fit:1100/format:webp/1*yoJvXNQOTVBKx3mWMGsuyg.png)

---

### What Is Git?
Git is a free and open source distributed version control system. What is version control? Essentially, it's a system that allows you to record changes to files over time, thus, you can view specific versions of those files later on.

---

### Why Use Git?
Over time, Git has become an industry standard for development. Being able to snapshot your code at a specific time is incredibly helpful as your codebase grows and you have to reference previous versions of it.

---

### How It Works
With Git, you record local changes to your code using a command-line tool, called the "Git Shell" (you can use Git in other command-line tools — I'll refer to Git Shell through the following sections). Command-line lets you enter commands to view, change, and manage files and folders in a simple terminal, instead of using a graphical user interface (GUI). If you have not used command-line before, don't worry, once you get started, it is incredibly straightforward.

![Git workflow diagram](https://miro.medium.com/v2/resize:fit:1100/format:webp/1*Zy9ODtdlufYcFlb5BKHd0w.png)
<div style="text-align: center; color: #666; font-size: 0.9em; margin-bottom: 2em;">Basic Git Workflow</div>

Essentially, when using Git, you make changes to your code files as you normally would during the development process. When you have completed a coding milestone, or want to snapshot certain changes, you add the files you changed to a staging area and then commit them to the version history of your project (repository) using Git. Below, you'll learn about the Git commands you use for those steps.

![Git staging area visualization](https://miro.medium.com/v2/resize:fit:1100/format:webp/1*1WAfbk9B8I1Oru2zkn7v8A.png)
<div style="text-align: center; color: #666; font-size: 0.9em; margin-bottom: 2em;">Git Staging Area</div>

---

### Terminal Commands
While using Git on the command line, chances are you will also use some basic terminal commands while going through your project and system files / folders, including:

* `pwd` — Check where you are in the current file system.
* `ls` — List files in the current directory (folder).
* `cd [directory-name]` — Moves to the given directory name or path.
* `mkdir [directory-name]` — Makes a new directory with the given name.

---

### Creating Repositories
When you wish to utilize Git for a project, the first command you must do is `git init`, with the name of your project:

```bash
git init [project-name]
```

You run this command on the Git Shell command-line in the main directory (folder) of your project, which you can navigate to in the Shell using the commands listed above. Once you run this command, Git creates a hidden `.git` file inside the main directory of your project. This file tracks the version history of your project and is what turns the project into a Git repository, enabling you to run Git commands on it.

---

### Making Changes
* **Staging changes:** Add files to the staging area:
  ```bash
  git add [file] # Add a single file
  git add *      # Add all files in the current folder
  ```
  Once you make changes to your files and choose to snapshot them to your project's version history, you have to add them to the staging area with `git add`, by file name, or by including all of the files in your current folder using `git add *`.

* **Committing changes:** Commit your changes to the version history:
  ```bash
  git commit -m "[message]"
  ```
  To finally commit the changes you made to your files from the staging area to your repository's version history, you need to run `git commit` with a descriptive message of what changes you made.

* **Checking status:** View the state of your files:
  ```bash
  git status
  ```
  If at any point, you wish to view a summary of the files you have changed and not yet committed, simply run `git status` in your project's repository on the Git Shell command-line.

![Git workflow detailed diagram](https://miro.medium.com/v2/resize:fit:1100/format:webp/1*9htEwsYdqPHIboA5Vaf-6w.png)
<div style="text-align: center; color: #666; font-size: 0.9em; margin-bottom: 2em;">Detailed Git Workflow</div>

---

### Working with GitHub

![GitHub collaboration](https://miro.medium.com/v2/resize:fit:1100/format:webp/1*iE43cfR7x2wuH79YwJ3KDw.png)
<div style="text-align: center; color: #666; font-size: 0.9em; margin-bottom: 2em;">GitHub Collaboration Flow</div>

#### Overview

![GitHub features overview](https://miro.medium.com/v2/resize:fit:1100/format:webp/1*TV84y3tN-bFj13alcd0gSg.png)

In essence, GitHub is a service that allows you to host your Git repositories online and collaborate with others on them. You can use GitHub through their web portal as well as the GitHub desktop GUI and the Git Shell.

As a service, GitHub is now used by 12 million developers and organizations, and has become a fairly popular standard for collaborating on projects and open-sourcing code.

#### How GitHub Works

![GitHub workflow](https://miro.medium.com/v2/resize:fit:1100/format:webp/1*F6xnO9PnASvjVOApQOh9PQ.png)

With GitHub, you have the same local process of adding and committing files to an initialized Git repository on your computer. However, you can utilize GitHub to push your changes to GitHub's hosting service. This allows other people to similarly work on the same project, pull your changes to their computers, and push their own changes to GitHub.

#### Creating & Copying Repositories

![GitHub fork process](https://miro.medium.com/v2/resize:fit:1100/format:webp/1*R6fwDmu_hGs70JS0tkOXCw.png)

With Git on your local computer, if you want to create a new repository, you must run `git init`. However, many times you may work on projects that are hosted on GitHub and have already been initialized.

One of the ways to copy a repository to your GitHub account is using **fork**, which is available on GitHub's website.

To download a copy of a repository from GitHub to your computer:
```bash
git clone [url]
```

#### Pushing & Pulling Changes
* **Pushing Changes:** Upload your local commits to your online repository:
  ```bash
  git push [repo] [branch]
  ```
* **Pulling Changes:** Update your local repository with the latest changes from online:
  ```bash
  git pull
  ```

> [!WARNING]
> **Important Note about Merge Conflicts**
> It is important to remember, that while you may have a repository hosted on GitHub, the version history of your local copy can be different than the version history of your repository online.
> If you try to pull or push changes to files that have already been changed by someone else, you can run into a merge conflict. You will need to resolve these conflicts manually.
> For more information, see [GitHub's guide on resolving merge conflicts](https://help.github.com/articles/resolving-a-merge-conflict-from-the-command-line/).

---

### Working with Branches

![Git branching visualization](https://miro.medium.com/v2/resize:fit:1100/format:webp/1*exCFWgo1cXpgCBmrwFRUUg.png)

When using Git, you have the ability to view the version history of your project's development. However, sometimes you may choose to develop features, fix bugs, or experiment in ways where you want to separate your main project's code from another variant.

You can do this with **branches**, which are essentially parallel versions of your repository's main code— that code is developed on the "master" (or "main") branch. You can create multiple branches for collaboration and other unique development to your code:

```bash
git checkout -b [new-branch-name]
```

> [!NOTE]
> **Learning More About Branches**
> To learn more about branches and merging changes, check out [Git's official documentation on branching](https://git-scm.com/book/en/v2/Git-Branching-Branches-in-a-Nutshell).

---

### Getting Started

![Getting started with Git and GitHub](https://miro.medium.com/v2/resize:fit:1100/format:webp/1*ZiV_FIKzVMxgvPbGOs_pnA.png)

To get started with Git and GitHub:
1. Sign up for a GitHub account at [github.com](https://github.com).
2. Download GitHub's desktop GUI at [desktop.github.com](https://desktop.github.com).
3. Set up your credentials using the GitHub desktop application or Git Shell.

> [!TIP]
> **GitHub Student Developer Pack**
> As a student, you can get access to the GitHub Student Developer Pack, which includes benefits from GitHub as well as other partners. Learn more at [education.github.com/pack](https://education.github.com/pack).

> [!TIP]
> **Microsoft Imagine**
> Microsoft Imagine provides students with professional developer and designer tools at no cost. [Create an account](https://imagine.microsoft.com/en-us/dashboard) to get started!

![Additional Git features](https://miro.medium.com/v2/resize:fit:1100/format:webp/1*lw5abb-pLlLqfIsjs_Vtgw.png)
![Git and GitHub ecosystem](https://miro.medium.com/v2/resize:fit:1100/format:webp/1*32-41W_WgIfUVymgW1I0Aw.png)

---

### Additional Resources
* [**git-scm.com**](https://git-scm.com) - The main website and documentation for Git.
* [**help.github.com**](https://help.github.com) - GitHub's help documentation.
