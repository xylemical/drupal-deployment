# Project Setup

To be fully flexible with deploying new codebases or configuration updates, a minimal structure is required.

The reasoning for the structure is so symlinking can be performed to simplify the deployment process, and allow for quick rollbacks should something untoward occur.

## Structure

The structure separates the files that may be uploaded on the site, from the default location within a generated Drupal 8 codebase.

It also separates out the configuration for the site, and any site specific codebase. This allows reuse of a common core Drupal installation, without forcing the site to directly upgrade as would occur on a multi-site setup.

The basic structure on the server where the deployments take place:

```
core/
  codebase.CORE_VERSION/     # Core codebase generated from CI process.
    sites/
      SITE_PATH/             # Symlink to the SITE_PATH/codebase.VERSION
sites/
  SITE_PATH/
     codebase.SITE_VERSION/  # Site codebase generated from CI process.
       files/                # Symlink to sites/SITE_PATH/files.
       private/              # Symlink to sites/SITE_PATH/private.
     config.SITE_VERSION/    # Site configuration generated from CI process.
     config/                 # Symlink to the config.SITE_VERSION currently active.
     files/                  # The public:// directory contents, persists through updates.
     private/                # The private:// directory contents, persists through updates.
www/
  SITE_PATH/                 # Symlink to codebase.CORE_VERSION for the site.
```

## Usage

