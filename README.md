# PHP in Docker Demo

A simple PHP web app project that uses Docker to provide Apache and PHP.

# Getting Started

1. Download and install Docker
2. In a terminal window:

```
docker-compose up -d
```

Then visit http://localhost:8080/

# Things to try

Understanding docker-compose...

1. Run `docker-compose ps` to see the state of your current containers
2. Run `docker-compose logs` to see logs from all containers, or e.g. `docker-compose logs web` to see just logs from the web container.

Understanding volumes...

1. Go to http://localhost:8080/ and add some messages
2. Run `docker-compose down` to stop and remove your containers, then `docker-compose up -d` to bring them back up
3. Go back to http://localhost:8080/ and reload
4. Repeat steps 2 and 3, but this time use `docker-compose down -v` to also remove volumes when you remove your containers.
