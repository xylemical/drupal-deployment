# Drupal Deployment

There are many ways in which one can technically solve a problem -- all of which provide different satisfaction of requirements for a business.

The purpose of this repository is to provide a set of tools that can be chained together to satisfy each of the differing steps for maintaining a Drupal project.

These steps can be defined as follows:

* [Setup](setup/README.md) - Creating a new environment for a drupal code project
* [Initialisation](init/README.md) - Creating a new drupal code project
* [Development](devel/README.md) - Extending the environment to allow development to take place and extending drupal to provide common tools.
* [Testing](test/README.md) - Extending the environment to allow automated testing to take place.
* [Packaging](package/README.md) - Taking a developed codebase and/or configuration setup and making it available for deployment.
* [Deployment](deploy/README.md) - Providing a consistant, testable deployment process.

## Requirements

The base requirement is to run most of these scripts to configure an environment or environments from a host computer that is not involved with the execution of the project.

As the host, the software requirements are as follows:
* Ansible 2
* A linux shell capable of running bash commands.

While it is possible to directly develop on the host machine, this is not advised as it makes the clean resets required for proper testing overly complex, and difficult to get right.
