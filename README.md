## Docker containers for Nette Framework
### Package:
- Nginx   [ 1.11.5 ]
- PHP     [ 7.0.12 ]
- MySQL   [ 5.7.16 ]
- Redis   [ 3.2.5 ]

### Installation:
1. Download Docker from https://docker.com.
2. Install Docker.
3. Setup your Docker to your needs. https://docs.docker.com
4. Copy this repository to your project.
5. Open CMD and run "docker-compose up --build".
6. Wait until it's builded.

### Commands:
#### Machine
```
docker-machine ls
docker-machine create --driver virtualbox [name]
docker-machine rm [name]
docker-machine start [name]
docker-machine stop [name]
docker-machine regenerate-certs [name]
docker-machine env [name]
```
#### Compose
```
docker-compose up
docker-compose up --build
docker-compose stop [container name]
docker-compose start [container name]
```
