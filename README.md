![Laravel-shield][Laravel-shield]
![Voyager-shield][Voyager-shield]
![Stage][Stage]
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]

<link rel="shortcut icon" href="http://www.iconj.com/ico/0/j/0jfxz36x0g.ico" type="image/x-icon" />

<!-- PROJECT LOGO -->
<br />
<p align="center">
  <a href="https://github.com/cristianmarint/MotionGym">
    <img src="docs/imgs/logo.png" alt="Logo" width="120" height="120">
  </a>

  <h3 align="center">Motion Gym</h3>

  <p align="center">
A open source gym management system build.
    <br />
    <a href="https://cristianmarint.github.io/MotionGym/"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    ·
    <a href="https://github.com/cristianmarint/MotionGym/issues">Report Bug</a>
    ·
    <a href="https://github.com/cristianmarint/MotionGym/issues">Request Feature</a>
  </p>
</p>



<!-- TABLE OF CONTENTS -->
## Table of Contents

* [About the Project](#about-the-project)
  * [Built With](#built-with)
* [Getting Started](#getting-started)
  * [Prerequisites](#prerequisites)
  * [Installation](#installation)
* [Usage](#usage)
* [Roadmap](#roadmap)
* [Contributing](#contributing)
* [License](#license)
* [Contact](#contact)
* [Acknowledgements](#acknowledgements)



<!-- ABOUT THE PROJECT -->
## About The Project

<img src="docs/imgs/Landing_page.gif" alt="drawing" width="1920"/>

There are many of gym management systems instead of using one of those I decided to build one with Laravel 5.8 using the package Voyager 1.2 to make the proccess quicker and easier for basic operations (BREAD).  
<br>
Of course, this project may not be current suilble for a big business but it will improve with time. keep in mind that it's in early development stateges. Therefore, if you want to get involve feel free to do so.

[![Login & admin][login-admin]](https://github.com/cristianmarint/MotionGym)

### Built With
* [Laravel](https://laravel.com)
* [Voyager](https://laravelvoyager.com/)
* [Bootstrap](https://getbootstrap.com)
* [JQuery](https://jquery.com)
* [VueJs](https://vuejs.org/)



## Getting Started

This is an example of how you can set up your project locally.
To get a local copy up and running follow these simple example steps.

### Prerequisites

You must have [Composer](https://getcomposer.org/download/) and a DB server.
Its recommend to use [Xampp](https://www.apachefriends.org/es/index.html) or [Mamp](https://www.mamp.info/en/downloads/) for starters.
PHP >= 7.4

### Installation

1. Clone the repo
`git clone https://github.com/cristianmarint/MotionGym.git`

2. Configure .env file
`mv .env.example .env`

3. Install composer
`composer install`

4.  Migrate database
`php artisan migrate`

5.  App key
`php artisan key:generate`

6. Seed database
`php artisan db:seed`

7. Create your own admin user
`php artisan voyager:admin your_email@provider.com --create `
or use 
> cristianmarint@motion.gym 12345678

8. Once your login, click on "Fix Missing storage symlink" an then
`php artisan storage:link`
`mv public\storage_old\* public\storage`

8.1 Delete storage_old
`rmdir .\public\storage_old\`



<!-- USAGE EXAMPLES -->
## Usage

Currently there are no useful example due to early stages.



<!-- ROADMAP -->
## Roadmap
See the [open issues](https://github.com/cristianmarint/MotionGym/issues) for a list of proposed features (and known issues).



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE` for more information.



<!-- CONTACT -->
## Contact

Cristian Marin - [@cristianmarint](https://twitter.com/cristianmarint) - cristianmarint@cotecnova.edu.co

Project: [https://github.com/cristianmarint/MotionGym](https://github.com/cristianmarint/MotionGym)



## Acknowledgements
* [GitHub Emoji Cheat Sheet](https://www.webpagefx.com/tools/emoji-cheat-sheet)
* [Img Shields](https://shields.io)
* [Choose an Open Source License](https://choosealicense.com)
* [GitHub Pages](https://pages.github.com)
* [Animate.css](https://daneden.github.io/animate.css)
* [Loaders.css](https://connoratherton.com/loaders)
* [Slick Carousel](https://kenwheeler.github.io/slick)
* [Smooth Scroll](https://github.com/cferdinandi/smooth-scroll)
* [Sticky Kit](http://leafo.net/sticky-kit)
* [JVectorMap](http://jvectormap.com)
* [Font Awesome](https://fontawesome.com)





<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/cristianmarint/MotionGym.svg?style=flat-square
[contributors-url]: https://github.com/cristianmarint/MotionGym/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/cristianmarint/MotionGym.svg?style=flat-square
[forks-url]: https://github.com/cristianmarint/MotionGym/network/members
[stars-shield]: https://img.shields.io/github/stars/cristianmarint/MotionGym.svg?style=flat-square
[stars-url]: https://github.com/cristianmarint/MotionGym/stargazers
[issues-shield]: https://img.shields.io/github/issues/cristianmarint/MotionGym.svg?style=flat-square
[issues-url]: https://github.com/cristianmarint/MotionGym/issues
[license-shield]: https://img.shields.io/github/license/cristianmarint/MotionGym.svg?style=flat-square
[Laravel-shield]: https://img.shields.io/badge/Laravel-5.8-f55247
[Voyager-shield]: https://img.shields.io/badge/Voyager-1.2-22A7F0
[Stage]: https://img.shields.io/badge/Stage-Pre%20Alpha-FFE525
[license-url]: https://github.com/cristianmarint/MotionGym/blob/master/LICENSE.txt
[login-admin]: docs/imgs/Login_admin.gif
<!--stackedit_data:
eyJoaXN0b3J5IjpbLTIwMzE0MTI2NDMsMjA0OTEwMjA4MSw0Nj
k0NTM1MCwtNjAyNTEwMzA1LDIwMjY3MDQzMDYsMzE0NDEwMjk5
LDE0MjkxNDA0OTQsLTE0NDA1NTU1MzYsLTEwODQ3ODkwNDBdfQ
==
-->
