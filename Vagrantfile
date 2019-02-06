# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  config.vm.box = "ubuntu/trusty64"

  # config.vm.box_check_update = false
  
  #config.vm.network "forwarded_port", guest: 80, host: 8080
  #config.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"
  #config.vm.network "forwarded_port", guest: 3306, host: 3306
  config.vm.network "private_network", ip: "192.168.33.10"
  # config.vm.network "public_network"

  config.vm.synced_folder "./src/backend", "/var/www/html"

  # config.vm.provider "virtualbox" do |vb|
  #   # Display the VirtualBox GUI when booting the machine
  #   vb.gui = true
  #
  #   # Customize the amount of memory on the VM:
  #   vb.memory = "1024"
  # end

   config.vm.provision "shell", inline: <<-SHELL
      apt-get update
      apt-get install -y apache2
      apt-add-repository ppa:ondrej/php
      apt-get update
      apt-get install php libapache2-mod-php
      #debconf-set-selections <<< "mysql-server mysql-server/root_password password root"
      #debconf-set-selections <<< "mysql-server mysql-server/root_password_again password root"
      apt-get install mysql-server
      apt-get install -y mysql-server php-mysql
      #sed -i "s/error_reporting = .*/error_reporting = E_ALL/" /etc/php/7.0/apache2/php.ini
      #sed -i "s/display_errors = .*/display_errors = On/" /etc/php/7.0/apache2/php.ini
      #service apache2 restart
    SHELL
end
