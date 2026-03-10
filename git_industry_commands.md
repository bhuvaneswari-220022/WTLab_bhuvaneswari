GIT CONFIGURATION COMMANDS:
    ~git config --global user.name
    Purpose:
        It gives current repository user name.
    ~git config --global user.email
    Purpose:
        It gives current repository user email.
    ~git config --list
    Purpose:
        displays all git configuration settings currently applied to your environment.
    ~git config --unset
    Purpose:
        It removes a configuration entry from the config file.
    Example:
        git config --unset user.email
GIT REPOSITORY COMMANDS:
    ~git init 
    Purpose:
        Initializes a new repository.
    ~git clone <repo -URL>
    Purpose:
        Copies an existing repository from github to the local machine
    Example:
        git clone https://github.com/bhuvaneswari-220022/WTLab_bhuvaeswari.git
    ~git clone --branch
    Purpose:
        It clones a specific branch from github repository
    Example:
        git clone -branch develop  https://github.com/bhuvaneswari-220022/WTLab_bhuvaeswari.git
    ~git clone --depth
    Purpose:
        Performs a shallow clone (only recent commits).
    Example:
        git clone --depth 1 https://github.com/bhuvaneswari-220022/WTLab_bhuvaneswari.git
REPOSITORY STATUS AND INSPECTION:
    ~git status
    Purpose:
        Shows the current status of working directory.
    Example:
        git status
    ~git log 
    Purpose:
        Displays the full commit history .
    Example:
        git log
    ~git log --oneline
    Purpose:
        Shows commit history in a short format.
    Example:
        git log --oneline
    ~git log --graph
    Purpose:
        Git commit history with branch graphs.
    Example:
        git log --graph
    ~git show
    Purpose:
        Show detailed information about a commit.
    Example:
        git show CommitID
    ~git diff
    Purpose:
        Shows changes between current working directory and last commit.
    Example:
        git diff
    ~git diff staged
    Purpose:
        Shows changes that are staged for commit.
    Example:
        git diff --staged
    ~git blame
    Purpose:
        Shows who last modified each line of file.
    Example:
        git blame index.html
    ~git reflog
    Purpose:
        Shows history of all head changes.
    Example:
        git reflog
    ~git shortlog
    Purpose:
        Summarizes commits by author.
    Example:
        git shortlog
FILE TRACKING COMMANDS:
    ~git add
    Purpose: 
        It adds a specific file to the staging area.
    Example:
        git add file.txt
    ~git add .
    Purpose: 
        It adds all modified and new files to the staging area.
    Example:
        git add .
    ~git add -p
    Purpose: 
        It allows interactive staging of specific parts of files.
    Example:
        git add -p
    ~git restore
    Purpose: 
        It restores a file in the working directory to the last committed version.
    Example:
        git restore file.txt
    ~git restore --staged
    Purpose: 
        It removes a file from the staging area without deleting it.
    Example:
        git restore --staged file.txt
    ~git rm
    Purpose: 
        It removes a file from the working directory and Git tracking.
    Example:
        git rm file.txt
    ~git mv
    Purpose: 
        It renames or moves a file in the repository.
    Example:
        git mv oldfile.txt newfile.txt
COMMIT COMMANDS:
    ~git commit
    Purpose: 
        It records changes from the staging area into the repository history.
    Example:
        git commit
    ~git commit -m
    Purpose: 
        It creates a commit with a message describing the changes.  
    Example:
        git commit -m "Added new feature"
    ~git commit --amend
    Purpose: 
        It modifies the most recent commit.
    Example:
        git commit --amend
    ~git commit --no-edit
    Purpose: 
        It amends the last commit without changing the commit message.
    Example:
        git commit --amend --no-edit
BRANCH MANAGEMENT COMMANDS:
    ~git branch
    Purpose: 
        It lists all local branches in the repository.
    Example:
        git branch
    ~git branch -a
    Purpose: 
        It lists all local and remote branches.
    Example:
        git branch -a
    ~git branch -d
    Purpose: 
        It deletes a branch safely if it has been merged.
    Example:
        git branch -d feature-branch
    ~git branch -D
    Purpose: 
        It force deletes a branch even if it is not merged.
    Example:
        git branch -D feature-branch
    ~git checkout
    Purpose: 
        It switches to another branch.
    Example:
       git checkout main
    ~git checkout -b
    Purpose: 
        It creates a new branch and switches to it.
    Example:
        git checkout -b feature-login
    ~git switch
    Purpose: 
        It switches between branches using the modern Git command.
    Example:
        git switch main
    ~git switch -c
    Purpose: 
        It creates a new branch and switches to it.
    Example:
        git switch -c new-feature
MERGE & INTEGRATION COMMANDS:
    ~git merge
    Purpose: 
        It combines changes from one branch into the current branch.
    Example:
        git merge feature-branch
    ~git merge --no-ff
    Purpose: 
        It forces Git to create a merge commit even if a fast-forward merge is possible.
    Example:
        git merge --no-ff feature-branch
REMOTE REPOSITORY COMMANDS:
        ~git remote
    Purpose:
        It displays the list of remote repositories connected to the local repository.
    Example:
        git remote
    ~git remote -v
    Purpose:
        It shows the remote repository URLs for fetch and push operations.
    Example:
        git remote -v
    ~git remote add
    Purpose:
        It adds a new remote repository to the local Git repository.
    Example:
        git remote add origin https://github.com/user/repository.git
    ~git remote remove
    Purpose:
        It removes a remote repository connection from the local repository.
    Example:
        git remote remove origin
    ~git fetch
    Purpose:
        It downloads commits, branches, and tags from a remote repository without merging them.
    Example:
        git fetch
    ~git fetch --all
    Purpose:
        It fetches updates from all remote repositories.
    Example:
        git fetch --all
    ~git pull
    Purpose:
        It fetches and merges changes from the remote repository into the current branch.
    Example:
        git pull origin main
    ~git pull --rebase
    Purpose:
        It pulls changes from the remote repository and rebases local commits on top of them.
    Example:
        git pull --rebase origin main
    ~git push
    Purpose:
        It uploads local commits to the remote repository.
    Example:
        git push
    ~git push -u origin branch-name
    Purpose:
        It pushes a branch to the remote repository and sets the upstream tracking branch.
    Example:
        git push -u origin feature-login
    ~git push --force
    Purpose:
        It forcefully pushes commits to the remote repository overwriting history.
    Example:
        git push --force
STASH COMMANDS:
        ~git stash
    Purpose:
        It temporarily saves uncommitted changes in the working directory.
    Example:
        git stash
    ~git stash list
    Purpose:
        It displays all saved stashes.
    Example:
        git stash list
    ~git stash pop
    Purpose:
        It applies the most recent stash and removes it from the stash list.
    Example:
        git stash pop
    ~git stash apply
    Purpose:
        It applies a saved stash without removing it from the stash list.
    Example:
        git stash apply
    ~git stash drop
    Purpose:
        It deletes a specific stash from the stash list.
    Example:
        git stash drop
    ~git stash clear
    Purpose:
        It removes all stashes from the stash list.
    Example:
        git stash clear
RESET AND UNDO COMMANDS:
        ~git reset
    Purpose:
        It resets the current HEAD to a specified state.
    Example:
        git reset HEAD file.txt
    ~git reset --soft
    Purpose:
        It moves the HEAD to a previous commit but keeps changes staged.
    Example:
        git reset --soft HEAD~1
    ~git reset --mixed
    Purpose:
        It moves the HEAD to a previous commit and unstages changes but keeps them in the working directory.
    Example:
        git reset --mixed HEAD~1
    ~git reset --hard
    Purpose:
        It moves the HEAD to a previous commit and deletes all changes in the working directory.
    Example:
        git reset --hard HEAD~1
    ~git revert
    Purpose:
        It creates a new commit that undoes the changes from a previous commit.
    Example:
        git revert commitID
    ~git clean -f
    Purpose:
        It removes untracked files from the working directory.
    Example:
        git clean -f
    ~git clean -fd
    Purpose:
        It removes untracked files and directories from the working directory.
    Example:
        git clean -fd
REBASING COMMANDS:
        ~git rebase
    Purpose:
        It moves or reapplies commits on top of another base commit.
    Example:
        git rebase main
    ~git rebase -i
    Purpose:
        It allows interactive editing of commits during rebase.
    Example:
        git rebase -i HEAD~3
    ~git rebase --continue
    Purpose:
        It continues the rebase process after resolving conflicts.
    Example:
        git rebase --continue
    ~git rebase --abort
    Purpose:
        It cancels the rebase process and restores the repository to its previous state.
    Example:
        git rebase --abort
CHERRY PICK & PATCH COMMANDS:
        ~git cherry-pick
    Purpose:
        It applies a specific commit from another branch to the current branch.
    Example:
        git cherry-pick commitID
    ~git format-patch
    Purpose:
        It creates patch files from commits.
    Example:
        git format-patch HEAD~1
    ~git apply
    Purpose:
        It applies a patch file to the working directory.
    Example:
        git apply patchfile.patch
    ~git am
    Purpose:
        It applies patches generated by format-patch to the repository.
    Example:
        git am patchfile.patch
TAGGING COMMANDS:
        ~git tag
    Purpose:
        It creates a lightweight tag for marking important commits.
    Example:
        git tag v1.0
    ~git tag -a
    Purpose:
        It creates an annotated tag with additional information.
    Example:
        git tag -a v1.0 -m "Version 1.0 release"
    ~git tag -d
    Purpose:
        It deletes an existing tag.
    Example:
        git tag -d v1.0
    ~git push origin --tags
    Purpose:
        It pushes all tags to the remote repository.
    Example:
        git push origin --tags
SUBMODULE COMMANDS:
        ~git submodule add
    Purpose:
        It adds another Git repository as a submodule inside the current repository.
    Example:
        git submodule add https://github.com/user/library.git
    ~git submodule init
    Purpose:
        It initializes submodules in the repository.
    Example:
        git submodule init
    ~git submodule update
    Purpose:
        It updates and fetches the content of submodules.
    Example:
        git submodule update
DEBUGGING COMMANDS:
        ~git bisect
    Purpose:
        It helps identify the commit that introduced a bug using binary search.
    Example:
        git bisect
    ~git bisect start
    Purpose:
        It starts the bisect process to locate a faulty commit.
    Example:
        git bisect start
    ~git bisect good
    Purpose:
        It marks a commit as good during the bisect process.
    Example:
        git bisect good
    ~git bisect bad
    Purpose:
        It marks a commit as bad during the bisect process.
    Example:
        git bisect bad