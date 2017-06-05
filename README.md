# Drupal Deployment

There are many ways in which one can technically solve a problem -- all of which provide different satisfaction of requirements for a business.

The purpose of this repository is to provide a set of tools that can be chained together to satisfy each of the differing steps for maintaining a Drupal project.

These steps can be defined as follows:

* [Setup](docs/environ.md) - Creating a new environment for a drupal code project
* [Initialisation](docs/project.md) - Creating a new drupal code project
* [Development](docs/devel.md) - Extending the environment to allow development to take place and extending drupal to provide common tools.
* [Testing](docs/test.md) - Extending the environment to allow automated testing to take place.
* [Packaging](docs/package.md) - Taking a developed codebase and/or configuration setup and making it available for deployment.
* [Deployment](docs/deploy.md) - Providing a consistant, testable deployment process.

# Requirements

The base requirement is to run most of these scripts to configure an environment or environments from a host computer that is not involved with the execution of the project.

As the host, the software requirements are as follows:
* Ansible 2
* A linux shell capable of running bash commands.

While it is possible to directly develop on the host machine, this is not advised as it makes the clean resets required for proper testing overly complex, and difficult to get right.


# Installation

The expected installation of this repository is as follows:
```sh
# Clone a copy of the repository.
git clone https://github.com/xylemical/drupal-deployment.git
cd drupal-deployment

# Install the ansible dependencies.
ansible-galaxy install -r requirements.yml

# Create the customizable config.yml
cp config.dist.yml config.yml

# Create the customizable hosts file
cp hosts.dist hosts
```


## Setting up a new machine


When not using the Vagrantfile ansible config, ensure that `config.ssh.insert_key = false`. 
Then make sure the IP for the vagrant machine has the following entry in the hosts file. 
                                                           
```
[setup]
10.0.0.15 ansible_ssh_port=22 ansible_ssh_user=vagrant ansible_ssh_private_key_file=~/.vagrant.d/insecure_private_key
```

