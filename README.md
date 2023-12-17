# Busify - Public Transport Service Tracking and Tickets Booking Application

Welcome to the Busify project repository! This is a group project developed as part of the "Fundamentals of Software Engineering" module in Semester 02 at the University of Moratuwa.

## Overview

Busify is a Public Transport Service Tracking and Tickets Booking Application designed to streamline public transportation services in Sri Lanka. It offers passengers the ability to book bus tickets, track bus locations in real-time, rate services, and receive assistance for journey planning.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

- Download and install [WampServer](https://www.wampserver.com/en/) for Windows or [MAMP](https://www.mamp.info/en/downloads/) for macOS.
- Download and install [Node.js](https://nodejs.org/en/download/) and [npm](https://www.npmjs.com/get-npm).
- Download and install [Visual Studio Code](https://code.visualstudio.com/download) or any other code editor of your choice.

### Installing

1. Clone the repository to your local machine using the following command:

```bash
git clone https://github.com/Ahzem/Busify.git
```

2. Open the application in your browser at `http://localhost:3000` or `localhost/Busify/frontend/index.html`.


### Running the Application

- Open the application you installed wampserver and start the server.
- Go to your browser and type `localhost` in the address bar.
- Select phpMyAdmin and Create a new database named `Busify`.
- Create the table name Passenger_signup and add the following columns:
    - `fname` - varchar(50)
    - `lname` - varchar(50)
    - `phone` - varchar(50)
    - `email` - varchar(50)
    - `password` - varchar(50)

- Create the table name Driver_signup and the following columns:
    - `fname` - varchar(50)
    - `lname` - varchar(50)
    - `phone` - varchar(50)
    - `nic` - varchar(50)
    - `email` - varchar(50)
    - `dstfrom` - varchar(50)
    - `dstto` - varchar(50)
    - `routeno` - varchar(50)
    - `busmodel` - varchar(50)
    - `busno` - varchar(50)
    - `buscolor` - varchar(50)
    - `buscapacity` - varchar(50)
    - `servicetype` - varchar(50)
    - `password` - varchar(50)

## Project Structure

The project is structured as follows:

- `/Frontend`: Contains the frontend code for the Busify application.
- `/Backend`: Contains the backend code and server-side logic.
- `Frontend/supportive Files`: Additional project documentation and resources.

## Built With

- HTML5
- CSS3
- JavaScript
- PHP
- MySQL

## Contributing

We welcome contributions from the open-source community. If you'd like to contribute to Busify, please follow our [Contribution Guidelines](CONTRIBUTING.md).

## Authors

- [Mohammedh Ahzem](https://www.linkedin.com/in/ahzem/)
- [Naami Ahmed](https://www.linkedin.com/in/naamiahmed/)
- Rifthan Fathir
- Amjath Ali
- Rukmal Maduranga

## License

This project is licensed under the [License Name] - see the [LICENSE.md](LICENSE.md) file for details.

## Acknowledgments

- [README Template](https://gist.github.com/PurpleBooth/109311bb0361f32d87a2)
- [Contribution Guidelines Template](https://gist.github.com/PurpleBooth/b24679402957c63ec426)
- [License Template](https://gist.github.com/PurpleBooth/109311bb0361f32d87a2)
- [GitHub Pages](https://pages.github.com/)
- [Stack Overflow](https://stackoverflow.com/)
- [Images](https://bing.com/images)
- [Google Fonts](https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap)

## Contact

If you have questions or need assistance, please contact Me at [ahzemkingster1422@gmail.com].

Happy coding!

