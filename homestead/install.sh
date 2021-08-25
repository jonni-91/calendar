# Быстрый набросок
# 1. Windows - VirtualBox - Vagrant - Git - PhpStorm
# Устанавливаем любой провайдер, например: VirtualBox, AWS, VMware, Docker, Hyper-V, и т.д.
# https://www.virtualbox.org/wiki/Downloads
# Устанавливаем последнюю версию Vagrant
# https://releases.hashicorp.com/vagrant/
# Устанавливаем git
# https://git-scm.com/downloads
# Изменяем в PhpStorm терминал по умолчанию
# File | Settings | Tools | Terminal | Application Settings | Shell path
# C:\Program Files\Git\bin\bash.exe

# 2. Устанавливаем Homestead

cd "$HOME"
git clone https://github.com/laravel/homestead.git ~/Homestead
cd Homestead/
sh init.sh

# Настраиваем Homestead.yaml, напримере homestead/Homestead.yaml
# Если не установлены ssh ключи, выполняем

ssh-keygen

# 3. Устанавливаем laravel

cd "$HOME"
cd Homestead/
vagrant init laravel/homestead
vagrant up
vagrant ssh

cd code/project/
composer create-project --prefer-dist laravel/laravel


# Переносим созданные файлы из каталога laravel в корень проекта
# cd E:/virtual/sites/project/
# mv laravel/* .

# Подключаем git

#cd "$HOME"
#cd Homestead/
#vagrant up
#vagrant ssh
#cd code/project/
#git init
#git remote add origin [url от репы]


# Дописываем правило в host
# 192.168.10.10 calendar.test




