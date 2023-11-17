# Heeru
Ini Repository Backend Heeru
untuk Clone aplikasi 
```
git clone https://github.com/SE-GRUB/Heeru.git
```
pindah ke directory clone lalu composer update
```
cd Heeru & composer update
```


#Pembuatan template models dan database (1 tabel 1 modes dan 1 migration)
(referensi)[https://laravel.com/docs/10.x/migrations#tables]
```
php artisan make:model ModelName -m
```
Contoh pembuatan Models dan Database Users
```
php artisan make:model Users -m
```
lalu edit file di folder
`database\migrations`
dan
`app\Models`


