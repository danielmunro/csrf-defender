VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

    config.vm.box = "trusty64"
    config.vm.box_url = "http://cloud-images.ubuntu.com/vagrant/trusty/current/trusty-server-cloudimg-amd64-vagrant-disk1.box"
    config.vm.provision :shell, :path => "bootstrap-root.sh"
    config.vm.provision :shell, :path => "bootstrap-vagrant.sh", privileged: false
    config.vm.network :forwarded_port, host: 4567, guest: 80

end
