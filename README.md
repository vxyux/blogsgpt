## 🤖 About BlogsGPT
BlogsGPT is a blogging website that 'incorperates the power of AI' (not really as no OpenAI API has been used). This project serves more as a practice ground for myself to learn more about Laravel's magic. <br>
The following has been worked on:
-   Laravel Components
-   Factories
-   Seeders
-   Model Relationships
-   Tailwind CSS

## 💥 Get it running :
> Setup
-   [clone the project]
-   cd blogsgpt
-   composer install
-   [copy the .env.example file and rename it to .env]
-   php artisan key:generate
-   php artisan cache:clear 
-   php artisan config:clear 

> Activating factories for dummy data
-   php artisan migrate:fresh --seed

> Running the site
-   php artisan serve
-   npm run dev
