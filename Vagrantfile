# -*- mode: ruby -*-
# vi: set ft=ruby :


Vagrant.configure("2") do |config|
  
    config.vm.box = "ubuntu/xenial64"
    config.vm.define "project" do |app|
      app.vm.hostname = "project"
      app.vm.network "private_network", ip: "192.168.33.10"
      app.vm.provision "shell", path: "provision/provision-for-nginx.sh"
      app.vm.provision "shell", path: "provision/provision-for-mysql.sh"
    end
  
  end
  
