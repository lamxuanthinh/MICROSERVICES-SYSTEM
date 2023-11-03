# How to run the microservices through API Gateway

## products microservice with MySQL

```
cd /products
docker-compose up
```

## orders microservice with MongoDB

```
cd /orders
docker-compose up
```

## API Gateway Pattern Architecture

```
cd /api-gateway
npm start
```

[Kubernetes](httpsSundefined//kubernetes.io) - Kubernetes is an open-source platform designed to automate deploying, scaling, and operating application containers. It groups containers that make up an application into logical units for easy management and discovery.

[RabbitMQ](https://www.rabbitmq.com) - RabbitMQ is an open-source message-broker software that originally implemented the Advanced Message Queuing Protocol (AMQP) and has since been extended with a plug-in architecture to support Streaming Text Oriented Messaging Protocol (STOMP), Message Queuing Telemetry Transport (MQTT), and other protocols.

## Using API Gateway on browser

```
http://localhost:3007/orders
http://localhost:3007/products
```

SYSTEM MICROSERVICES
