# 🎭 InsideOutApp  
This project is an API that collects data from a diary about emotions based on the eponymous film. The data is displayed in table form, integrating a CRUD.
The main objective is to practice with the [Laravel](https://laravel.com) framework.

## 🌄 Project views  
![Captura de pantalla 2024-11-21 142625](https://github.com/user-attachments/assets/ce3e2eaf-3d0a-4584-9e36-30c3e1d07c24)
*Main view*

## 💻 Languages ​​and tools  
![](https://skillicons.dev/icons?i=php,html,css,js)
![](https://skillicons.dev/icons?i=laravel,git,github,vscode,)

<p>
<img src="https://static.vecteezy.com/system/resources/previews/032/329/175/non_2x/canva-icon-logo-symbol-free-png.png" alt="Incono azul de Canvas" width="50" style="margin-right: 3px"/>
</p>

## ⚙️ Installation prerequisites
🟢Install [Node.js](https://nodejs.org/en/download/source-code)

🟢Install [Composer](https://getcomposer.org/download/)

## 🛠️ Installation Guide 
0️⃣ Before starting to install the project, you will need to create a database (we have used mysql via xampp) and name it: `insideOutApp`

1️⃣ Open a terminal in the folder where you want the repository to be cloned and enter this command:

`git clone https://github.com/Manusitox360/inside-Out-Project.git`

2️⃣ As you clone the repository, it will appear all the elements on it; you need to rename the file ".env.example" to ".env" and fill it with theese values:

![image](https://github.com/user-attachments/assets/e31e611a-04c8-4a1e-abf0-7f22c13c1007)


2️⃣ In your preferred environment, open the project you cloned; you will need three consoles for the next step.

▷Console 1:
    `npm install` `npm run dev`
    
▷Console 2:
    `composer install` `php artisan serve`
    
▷Console 3: 
    `php artisan migrat:fresh`
    `php artisan migrat:fresh --seed`
    
3️⃣ In the second console that you have opened, press the ctrl key and click on the link to localhost that it offers you. It should take you to the main view of the project where the journal is located.

⚠️ If you have done the previous steps and the view has not opened correctly, go back to the third command console and enter this:

`php artisan key:generate` `php artisan config:cache` 

## 🌐 Endpoints 
We have generated five endpoints, four for each CRUD function and one extra for the show button.

### ✏️ Create (POST)
`http://127.0.0.1:8000/api/journals`

### 📖 Read (GET)
`http://127.0.0.1:8000/api/journals`

### ✏️✏️ Update (PUT)
`http://127.0.0.1:8000/api/journals/id`

### ❌ Destroy (DELETE)
`http://127.0.0.1:8000/api/journals/id`

### 👁️ Show (GET)
`http://127.0.0.1:8000/api/journals/id`

## 🧪 Tests 
All tests passed. Introduce this line on your console to check it:

`./vendor/bin/phpunit tests`

<p align="center">
  <img src="https://github.com/user-attachments/assets/51783ff0-aed0-4fed-b0b7-c54dfc45f5b5" alt="Descripción de la imagen" width="500"/>
</p>

If you want to launch the tests and view them you can put these commands in console 3:

`php artisan test --coverage` `php artisan test --coverage-html=coverage-report`

<p align="center">
  <img src="https://github.com/user-attachments/assets/2845684f-2785-4eb0-a6ca-e0807c2a5764" alt="Descripción de la imagen" width="500"/>
</p>

<p align="center">
  <img src="https://github.com/user-attachments/assets/1e477319-215f-4d8c-8a05-4832504d66a7" alt="Descripción de la imagen" width="500"/>
</p>

## 🗂️ Diagram made (DDBB) 
For the correct structuring of the database, we have carried out this test in [drawSQL](https://drawsql.app) that will serve as a basis for the creation of the future table.

<p align="center">
  <img src="https://github.com/user-attachments/assets/90e8ae8d-d0a6-491f-8284-7002a0bda772" alt="Descripción de la imagen" width="200"/>
</p>

## 👩‍💻 About us  
We are a group of developers enhancing our skills through a bootcamp focused on frontend, backend, and AWS.
- [Rodrigo Lastra Pescador](https://github.com/rodrigoo1604)
- [José Ignacio Gavilán Sánchez](https://github.com/sr-calcetines)
- [Alvaro Cervera Vigara](https://github.com/Kalixto73a)
- [Manuel Espinosa Guillen](https://github.com/Manusitox360)
