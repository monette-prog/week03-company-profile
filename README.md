# Company Profile Website using Laravel MVC

## Introduction
Gumawa ako ng Company Profile Website gamit ang Laravel. Ito ay isang multi-page website na nagpapakita ng impormasyon tungkol sa isang kumpanya. Ginawa ko ito para matutunan ko kung paano gumagana ang MVC architecture sa Laravel.

Ang website na ito ay may apat na pages: Home, About, Services, at Contact. Ginamit ko ang Laravel para ma-organize ang code ko gamit ang routes, controllers, at Blade templates.

## Objectives
Sa project na ito, natutunan ko ang mga sumusunod:
- Paano gumagana ang Laravel Request Lifecycle
- Paano gumawa ng routes at controllers
- Paano gumamit ng Blade templates para sa views
- Paano i-organize ang code gamit ang MVC
- Paano mag-push ng project sa GitHub

## MVC Architecture
Ang MVC ay Model-View-Controller. Ito ay isang design pattern na naghihiwalay ng code sa tatlong parts:

- **Model** - Dito nakalagay ang data at business logic
- **View** - Ito ang UI o design ng website
- **Controller** - Ito ang nagpro-process ng requests at nagco-connect ng Model at View

Ginagamit ng Laravel ang MVC para maging malinis at organized ang code. Mas madali din itong i-maintain at i-debug.

### Architecture Flow

Browser (User)
↓
Route (web.php)
↓
CompanyController
↓
Blade View
↓
HTML Response
↓
Browser
