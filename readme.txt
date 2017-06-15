How the project works

copy this folder to your www folder inside your wamp or wamp64 folder

navigate to this folder from command prompt

enter composer update to set up your project 

save all your assests inside the public folder 

when referencing them (css and js file) in the blade.php, instead of src = "css/style.css" write {{asset('css/style.css')}}

enter php artisan serve to load the view

database will come later... ignore for now 

cheers Bundayy!